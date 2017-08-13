<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Amy Galbraith Photography is a Seattle wedding photographer and Jackson Hole wedding photographer that captures stunning, beautiful mountain wedding photos in the Pacific Northwest, Washington State and Jackson Hole.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = 'wedding-photography';
$pageClasses = 'gallery weddings';
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

                <?php include 'incl/_data_weddings.php';
                create_gallery_slideshow($data_weddings); ?>
                
            </div>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>