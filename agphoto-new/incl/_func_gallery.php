<?php
    function create_gallery_slideshow($data){
      $index = 0;
      foreach ($data as $current) {
        $html = '<li class="g-slider__slide">';
        $html .= '<img class="g-slider__img"' . ($current[2] ? 'src="' : 'data-src="') . $current[0] . '"';
        $html .= ' alt="' . $current[1] . '" /></li>';
        echo $html;
        $index++;
      };
    };