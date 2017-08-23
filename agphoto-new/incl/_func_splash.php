<?php
  function create_splash_slideshow($data) {
    $index = 1;
    foreach ($data as $current) {
      $html = '<div class="slideshow__slide slideshow__slide--' . $index . '" data-slide-index="' . $index . '"><picture>';
      # <!-- portrait images -->
      $html .= '<source class="slideshow__img slideshow__img--hyper-res" media="(orientation: portrait) and (min-width:500px)" srcset="' . $current[0] . '" >';
      $html .= '<source class="slideshow__img slideshow__img--hyper-res" media="(orientation: portrait)" srcset="' . $current[1] . '" >';
      # <!-- landscape images -->
      $html .= '<source class="slideshow__img slideshow__img--hyper-res" srcset="' . $current[2] . '" media="(min-width: 1440px)" />';
      $html .= '<source class="slideshow__img slideshow__img--hyper-res" srcset="' . $current[3] . '" media="(min-width: 1024px)" />';
      $html .= '<source class="slideshow__img slideshow__img--hyper-res" srcset="' . $current[4] . '" media="(min-width: 768px)" />';
      $html .= '<source class="slideshow__img slideshow__img--hyper-res" srcset="' . $current[5] . '"/>';
      $html .= '<img class="slideshow__img slideshow__img--hyper-res" src="' . $current[4] . '" alt="' . $current[6] . '"/>';
      $html .= '</picture></div>';
      echo $html;
      $index++;
    };
    unset($index);
  };