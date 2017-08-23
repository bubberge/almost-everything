<?php
  function create_splash_slideshow_nav($data) {
    $index = 1;
    $html = '<div class="slideshow__nav">';
    foreach ($data as $current) {
      $html .= '<label class="slideshow__label" for="splash_' . $index . '"></label>';
      $index++;
    };
    $html .= "</div>"
    echo $html;
  };