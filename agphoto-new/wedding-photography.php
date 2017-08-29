<?php
$pageType = 'gallery';
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Amy Galbraith Photography is a Seattle wedding photographer and Jackson Hole wedding photographer that captures stunning, beautiful mountain wedding photos in the Pacific Northwest, Washington State and Jackson Hole.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = 'wedding-photography';
$pageClasses = 'gallery weddings';
include 'incl/_header.php'; ?>
    <div class="section splash splash--gallery">
        <div class="slideshow slideshow--gallery">
            <?php include 'incl/_data_weddings.php';
            create_gallery_slideshow($data_weddings); ?>
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>