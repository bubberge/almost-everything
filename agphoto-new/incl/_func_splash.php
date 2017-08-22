<?php
  function create_splash_slideshow($data) {
    $index = 1;
    foreach ($data as $current) {
      $html = '<div class="slideshow__slide slideshow__slide--' . $index . '"><picture>';
      # <!-- portrait images -->
      $html .= '<source media="(orientation: portrait) and (min-width:500px)" srcset="' . $current[0] . '" >';
      $html .= '<source media="(orientation: portrait)" srcset="' . $current[1] . '" >';
      # <!-- landscape images -->
      $html .= '<source srcset="' . $current[2] . '" media="(min-width: 1440px)" />';
      $html .= '<source srcset="' . $current[3] . '" media="(min-width: 1024px)" />';
      $html .= '<source srcset="' . $current[4] . '" media="(min-width: 768px)" />';
      $html .= '<source srcset="' . $current[5] . '"/>';
      $html .= '<img src="' . $current[4] . '" alt="' . $current[6] . '"/>';
      $html .= '</picture></div>';
      echo $html;
      $index++;
    };
  };