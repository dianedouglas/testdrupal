<?php 
/**
 * Implements hook_install().
 */
function staff_install() {

  // Ensure the staff node type is available.
  node_types_rebuild();
  $types = node_type_get_types();
  node_add_body_field( $types[ 'staff' ] );

}