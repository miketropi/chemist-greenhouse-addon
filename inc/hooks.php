<?php 
/**
 * Hooks 
 */

function CGA_acf_json_load_point($paths) {
  // Remove the original path (optional).
  // unset($paths[0]);

  // Append the new path and return it.
  $paths[] = untrailingslashit(CGA_DIR) . '/acf-json';
  return $paths;    
}
add_filter('acf/settings/load_json', 'CGA_acf_json_load_point', 1);

function CGA_acf_google_map_api( $api ){
  if(!empty(CGA_Gmap_key())) {
    $api['key'] = CGA_Gmap_key();
  }
  
  return $api;
}
add_filter('acf/fields/google_map/api', 'CGA_acf_google_map_api');