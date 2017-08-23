<?php
  function create_splash_slideshow_nav($data) {
    $index = 1;
    $html = '';
    foreach ($data as $current) {
      $current_radio = ($index == 1 ? 'checked' : '');
      $html .= '<input class="slideshow__radio slideshow__radio--' . $index . '" id="splash_' . $index . '" type="radio" ' . $current_radio . ' name="slide" value="' . $index . '" data-radio-index="' . $index . '"><label class="slideshow__label" for="splash_' . $index . '"></label>';
      $index++;
    };
    echo $html;
  };