<?php 
class GT_Nav_Walker extends Walker_Nav_Menu {
  // SUBMENU
  function start_lvl(&$output, $depth = 0, $args = null) {
    $output .= '<ul class="sub-menu">';
  }
}