((w, $) => {
  'use strict';

  const getStores = async () => {
    return await $.ajax({
      method: 'POST',
      url: CGA_PHP_DATA.ajax_url,
      data: {
        action: 'CGA_ajax_get_stores'
      },
      error: (e) => {
        console.error(e);
      }
    })
  }

  const OurStores = async () => {
    const OurStoresBlocks = $('.our-stores-block');
    if(OurStoresBlocks.length == 0) return;
    
    const Stores = await getStores();
    if(!Stores) return;

    OurStoresBlocks.each(function() {
      const $self = $(this);

      const { lat, lng } = Stores[0].gmap_location;
      const initLatLng = { lat, lng };
      const map = new google.maps.Map($self.find('.__GMAP_HERE')[0], {
        zoom: 14,
        center: initLatLng,
      });

      [...Stores].forEach((item, _index) => {
        const { lat, lng } = item.gmap_location;
        const contentString = `
        <div class="cga-gmap-info-window">
          <h4>${ item.name }</h4>
          ${ item.opening_time }
          <a class="cga-button-link" href="${ item.botton_url }">${ item.button_text }</a>
        </div>`;

        const infowindow = new google.maps.InfoWindow({
          content: contentString,
          ariaLabel: item.name,
        });

        const icon = {
          url: CGA_PHP_DATA.marker_icon, // url
          scaledSize: new google.maps.Size(40, 40), // scaled size
          origin: new google.maps.Point(0,0), // origin
          anchor: new google.maps.Point(0, 0) // anchor
        }

        const marker = new google.maps.Marker({
          position: { lat, lng },
          map,
          title: `${ item.name } | ${ item.gmap_location.address }`,
          icon,
        });

        marker.addListener("click", () => {
          infowindow.open({
            anchor: marker,
            map,
          });
        });

        $self.find(`.store-nav-item:nth-child(${ _index + 1 })`).data('marker', marker);
      });

      $self.find('.store-nav-item').on('click', function(e) {
        e.preventDefault();
        const marker = $(this).data().marker;
        new google.maps.event.trigger(marker, 'click');
      })

      // Searching 
      $self.find('.store-seach-suggestion').on('change', function() {
        const val = this.value;
        const $found = $self.find(`.store-nav-item[title*="${ val }"]`);
        $found.first().trigger('click');
      })

      // toggle nav mobile 
      $self.find('.our-stores__toggle-nav').on('click', function(e) {
        e.preventDefault();
        $self.find('.our-stores-gmap__nav').toggleClass('__show');
      })
    })
  }

  const _getDistance = new Promise((resolve, reject) => {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition((position) => {
        const {latitude, longitude} = position?.coords;
        resolve({latitude, longitude})
      }, (err) => {
        reject(err);
      });
    } else {
      reject('Geolocation is not supported by this browser');
    }
  })

  /**
   * Not useful
   */
  const cachingDistance = (useLat, useLng, storeLat, storeLng) => {
    return {
      set: (useLat, useLng, storeLat, storeLng, value) => {
        const __key = [useLat, useLng, storeLat, storeLng].join('_');
        localStorage.setItem(__key, value);
      },
      get: (useLat, useLng, storeLat, storeLng) => {
        const __key = [useLat, useLng, storeLat, storeLng].join('_');
        return localStorage.getItem(__key, value);
      }
    }
  }

  const calcDistance = () => {
    const $storeNav = $('.store-nav-item');
    if($storeNav.length == 0) return;

    _getDistance.then((position) => {
      $storeNav.each(function() {
        const $item = $(this);
        const [lat, lng] = $item.data('latlng').split(',');

        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix(
          {
            origins: [new google.maps.LatLng(position.latitude, position.longitude)],
            destinations: [new google.maps.LatLng(lat, lng)],
            travelMode: 'DRIVING',
          }, (response, status) => {
            if(status != 'OK') return;
            if(response?.rows[0].elements[0].status != 'OK') return;
            
            let distanceText = response?.rows[0].elements[0]?.distance.text;
            $item.find('.distance').html(distanceText);
          }
        );
      })
    })
  }

  $(() => {
    OurStores();
    calcDistance();
  });
})(window, jQuery)