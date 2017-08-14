<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle High School Senior Photographer';
$pageDescription = 'Candid, beautiful high school senior photography that hits both ends of the spectrum -- from trendy to timeless.';
$pageKeywords = 'seattle highschool photography, seattle highschool photographer, seattle senior photography, seattle senior photographer, timeless senior photography, classic senior photography, candid senior photography, northwest senior photography';
$pageExt = 'high-school-senior-photography';
$pageClasses = 'gallery seniors';
include 'incl/_header.php'; ?>
    <div class="page-wrapper">
    
        <?php include 'incl/_gallery_title_bar.php'; ?>

        <div class="s-wrapper">
            <div class="s-container">
                
                <?php include 'incl/_data_seniors.php';
                create_gallery_slideshow($data_seniors); ?>

            </div>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>