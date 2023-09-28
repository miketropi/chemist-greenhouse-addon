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
add_filter('acf/settings/load_json', 'CGA_acf_json_load_point' ,1);