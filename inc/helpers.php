<?php 
/**
 * Helpers 
 */

function CGA_container_class($string = '') {
  return get_field('cga_class_container', 'options') . ' ' . $string;
}

function CGA_Gmap_key() {
  return get_field('cga_google_map_key', 'option');
}

function CGA_get_stores() {
  return get_field('cga_stores_location', 'option');
}