<?php
  function create_splash_slideshow_radios($data) {
    $index = 0;
    $html = '';
    foreach ($data as $current) {
      $current_radio = ($index == 0 ? 'checked' : '');
      $html .= '<input class="slideshow__radio slideshow__radio--' . $index . '" id="splash_' . $index . '" type="radio" ' . $current_radio . ' name="slide" value="' . $index . '" data-radio-index="' . $index . '">';
      $index++;
    };
    echo $html;
  };

  unset($html);
  unset($index);

  function create_splash_slideshow_slides($data) {
    $index = 0;
    foreach ($data as $current) {
      $html = '<div class="slideshow__slide slideshow__slide--splash slideshow__slide--' . $index . '" data-slide-index="' . $index . '"><picture>';
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
  };

  unset($html);
  unset($index);

  function create_splash_slideshow_nav($data) {
    $index = 0;
    $html = '<div class="slideshow__nav">';
    foreach ($data as $current) {
      $html .= '<label class="slideshow__label" for="splash_' . $index . '"><span class="ic ic--dot"></span></label>';
      $index++;
    };
    $html .= "</div>";
    echo $html;
  };