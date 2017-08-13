<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle Engagement Photographer';
$pageDescription = 'Adventure-driven engagement photography based in Seattle, Washington and Jackson, Wyoming.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'engagement-photography';
$pageClasses = 'gallery engagements';
include 'incl/_header.php'; ?>
    <div class="page-wrapper">
        <div class="title-bar">
            <div class="title-bar-left">
                <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
                <?php include 'incl/_horizontal-menu.php'; ?>
            </div>
            <div class="title-bar-right show-for-small-only">
                <span class="l-hint">try landscape!</span>
                <img src="img/rotate.png" alt="an icon of a phone rotating from portrait to landscale orientation" />
            </div>
        </div>
        <div class="s-wrapper">
            <div class="s-container">
                
                <?php include 'incl/_data_engagements.php';
                create_gallery_slideshow($data_engagements); ?>
              
            </div>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>