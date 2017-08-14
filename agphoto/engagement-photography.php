<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle Engagement Photographer';
$pageDescription = 'Adventure-driven engagement photography based in Seattle, Washington and Jackson, Wyoming.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'engagement-photography';
$pageClasses = 'gallery engagements';
include 'incl/_header.php'; ?>
    <div class="page-wrapper">
    
        <?php include 'incl/_gallery_title_bar.php'; ?>

        <div class="s-wrapper">
            <div class="s-container">
                
                <?php include 'incl/_data_engagements.php';
                create_gallery_slideshow($data_engagements); ?>
              
            </div>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>