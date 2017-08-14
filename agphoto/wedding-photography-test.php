<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Amy Galbraith Photography is a Seattle wedding photographer and Jackson Hole wedding photographer that captures stunning, beautiful mountain wedding photos in the Pacific Northwest, Washington State and Jackson Hole.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = 'wedding-photography';
$pageClasses = 'gallery weddings';
include 'incl/_header.php'; ?>
    <div class="page-wrapper">

        <?php include 'incl/_gallery_title_bar.php'; ?>
        
        <div class="s-wrapper">
            <div class="gallery__heading-cont">
                <h1 class="gallery__heading">
                    <span>Wedding Photography</span>
                    <span>Gallery</span>
                </h1>
                <p class="gallery__subheading">I believe in candid, natural, emotion-driven images.</p>
            </div>
            <div class="s-container">

                <?php include 'incl/_data_weddings.php';
                create_gallery_slideshow($data_weddings); ?>
                
            </div>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>