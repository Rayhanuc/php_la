<?php

function phlox_child_assets() {
  wp_enqueue_style("parent-style", get_parent_theme_file_uri( "/style.css" ));
  }
add_action('wp_enqueue_scripts','phlox_child_assets');

function astra_child_assets() {
  wp_enqueue_style("parent-style", get_parent_theme_file_uri( "/style.css" ));
  }
add_action('wp_enqueue_scripts','astra_child_assets');