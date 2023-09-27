<?php 
/**
 * Helpers 
 */

function CGA_container_class($string = '') {
  return get_field('cga_class_container', 'options') . ' ' . $string;
}