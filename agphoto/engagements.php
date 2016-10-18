<?php
$pageTitle = 'Engagements Portfolio Gallery';
$pageDescription = 'Amy Galbraith Photography is a Seattle wedding photographer and Jackson Hole wedding photographer that captures stunning, beautiful mountain wedding venue photos in the Pacific Northwest, Washington State and Jackson Hole.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'engagements';
$pageClasses = 'gallery engagements';
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
                    <img src="img/engagements/001-seattle_engagement_photos-bailey-004" alt="" />
                </div>
                <div class="s-slide"><div class="s-overlay"></div>
                    <img src="img/engagements/002-seattle_engagement_photos-mcclendon-003.jpg" alt="" />
                </div>
                <!-- -->
                <div class="s-slide"><div class="s-overlay"></div>
                    <img src="img/engagements/003-seattle_engagement_photographer-davis-001.jpg" alt="" />
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