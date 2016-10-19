<?php
$pageTitle = 'Seniors Portfolio Gallery';
$pageDescription = 'Amy Galbraith Photography is a Seattle wedding photographer and Jackson Hole wedding photographer that captures stunning, beautiful mountain wedding venue photos in the Pacific Northwest, Washington State and Jackson Hole.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'seniors';
$pageClasses = 'gallery seniors';
include 'incl/_header.php'; ?>
    <div class="page-wrapper">
        <div class="title-bar">
            <div class="title-bar-left">
                <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
                <ul class="horizontal menu">
                  <?php include 'incl/_menu.php'; ?>
                </ul>
            </div>
            <div class="title-bar-right show-for-small-only">
                <span class="l-hint">try landscape!</span>
                <img src="img/rotate.png" alt="an icon of a phone rotating from portrait to landscale orientation" />
            </div>
        </div>
        <div class="s-wrapper">
            <div class="s-container">
                <div class="s-slide"><div class="s-overlay"></div>
                    <img src="img/seniors/seattle-senior-photographer-001.jpg" alt="" />
                </div>
                <div class="s-slide"><div class="s-overlay"></div>
                    <img src="img/seniors/seattle-senior-photographer-002.jpg" alt="" />
                </div>
                <div class="s-slide"><div class="s-overlay"></div>
                    <img src="img/seniors/seattle-senior-photographer-003.jpg" alt="" />
                </div>
                <div class="s-slide"><div class="s-overlay"></div>
                    <img src="img/seniors/seattle-senior-photographer-035.jpg" alt="" />
                </div>                
            </div>
            <!-- <div class="j-overlay">
                <div class="j-overlay-background"></div>
                <div class="j-arrow">
                    <a id="page-scroll" href="#scrollDestination" title="Take me to the pictures!">
                        <span>I am a photographer. Learn more down here!</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
    <?php include 'incl/_footer.php';  ?>