<?php
    function create_gallery_slideshow($data){
      $index = 0;
      foreach ($data as $current) {
        $html = '<div class="s-slide">';
        $html .= '<img ' . ($index < 2 ? 'src="' : 'data-lazy="') . $current[0] . '"';
        $html .= ' alt="' . $current[1] . '" /></div>';
        echo $html;
        $index++;
      };
    };