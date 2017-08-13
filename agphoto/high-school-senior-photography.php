<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle High School Senior Photographer';
$pageDescription = 'Candid, beautiful high school senior photography that hits both ends of the spectrum -- from trendy to timeless.';
$pageKeywords = 'seattle highschool photography, seattle highschool photographer, seattle senior photography, seattle senior photographer, timeless senior photography, classic senior photography, candid senior photography, northwest senior photography';
$pageExt = 'high-school-senior-photography';
$pageClasses = 'gallery seniors';
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
                
                <?php include 'incl/_data_seniors.php';
                create_gallery_slideshow($data_seniors); ?>

            </div>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>