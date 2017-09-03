<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Amy Galbraith Photography is a Seattle wedding photographer and Jackson Hole wedding photographer that captures stunning, beautiful mountain wedding photos in the Pacific Northwest, Washington State and Jackson Hole.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = 'wedding-photography';
$pageClasses = 'gallery weddings';
include 'incl/_header.php'; ?>
    <div class="g-slider">
        <ul class="g-slider__track" style="width:9999999px">
            <?php include 'incl/_data_weddings.php';
            create_gallery_slideshow($data_weddings); ?>
        </ul>
        <button class="g-slider__button g-slider__button--left" onclick="g_s.track.scroll(-1);">
          <svg class="g-slider__nav-icon" style="transform: rotate(180deg)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.86 76.76"><title>Left Arrow</title><path d="M.74 4.27l35.87 35.88v-3.54L.74 72.49C-1.54 74.76 2 78.3 4.27 76l35.88-35.85a2.54 2.54 0 0 0 0-3.54L4.27.74C2-1.54-1.54 2 .74 4.27z" /></svg>
        </button>
        <button class="g-slider__button g-slider__button--right" onclick="g_s.track.scroll(1);">
          <svg class="g-slider__nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.86 76.76"><title>Right Arrow</title><path d="M.74 4.27l35.87 35.88v-3.54L.74 72.49C-1.54 74.76 2 78.3 4.27 76l35.88-35.85a2.54 2.54 0 0 0 0-3.54L4.27.74C2-1.54-1.54 2 .74 4.27z" /></svg>
        </button>
        <div class="g-slider__curtain">
          <svg class="g-slider__spinner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.99 73.99">
            <defs>
              <style>._l{fill:none;stroke:#999;stroke-miterlimit:10;stroke-width:2px;}</style>
            </defs>
            <title>Loader</title>
            <g id="Layer_2" data-name="Layer 2"><path class="_l" d="M73 37.66A36 36 0 1 1 36.28 1" id="Layer_1-2" data-name="Layer 1"/></g>
          </svg>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>