<?php
$pageTitle = 'Home';
$pageDescription = 'Amy Galbraith is a documentary Seattle wedding photographer and Jackson Hole wedding photographer. As a mountain wedding photographer and seattle senior portrait photographer, she strives to capture candid, natural, and emotion-driven images.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = '';
$pageClasses = 'home';
include 'incl/_header.php'; ?>
    <div class="jumbotron">
        <div class="j-loader">
            <div class='uil-ring-css' style='transform:scale(0.45);'><div></div></div>
        </div>
        <div class="j-track">
            <div class="j-background j-1 rm-rf">
                <img src="img/homepage/001-leavenworth_wedding_photographer-betz-001-small.jpg" srcset="img/homepage/001-leavenworth_wedding_photographer-betz-001.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-2">
                <img src="img/homepage/002-jackson_hole_wedding_photographer-todd-002-small.jpg" srcset="img/homepage/002-jackson_hole_wedding_photographer-todd-002.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-3">
                <img src="img/homepage/002-wisconsin-wedding-photographer-001-small.jpg" srcset="img/homepage/002-wisconsin-wedding-photographer-001.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-4 rm-rf">
                <img src="img/homepage/003-leavenworth_wedding_photographer-jasinski-004-small.jpg" srcset="img/homepage/003-leavenworth_wedding_photographer-jasinski-004.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-5">
                <img src="img/homepage/004-within-sodo-wedding-aebischer-small.jpg" srcset="img/homepage/004-within-sodo-wedding-aebischer.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-6">
                <img src="img/homepage/006-mt-baker-engagement-session-001-small.jpg" srcset="img/homepage/006-mt-baker-engagement-session-001.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-7 rm-rf">
                <img src="img/homepage/007-bainbridge-island-engagement-001-small.jpg" srcset="img/homepage/007-bainbridge-island-engagement-001.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
            <div class="j-background j-8 rm-rf">
                <img src="img/homepage/008-stevens-pass-engagement-session-001-small.jpg" srcset="img/homepage/008-stevens-pass-engagement-session-001.jpg 2000w" sizes="(orientation: landscape) 100vw, 145vh" alt="" />
            </div>
        </div>
        <div class="j-overlay">
            <div class="j-overlay-background"></div>
            <div class="j-arrow">
                <a id="page-scroll" href="#portLoc" title="Take me to the pictures!">
                    <span>I am a photographer. See more down here!</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
            <?php include 'incl/_horizontal-menu.php'; ?>
        </div>
    </div>
    <div class="row galleries">
        <div class="column small-12">
            <h2 class="module-heading" id="portLoc">Portfolio</h2>
            <div class="row">
                <div class="g-card weddings column small-12 large-4 eat-left">
                    <div class="g-title">
                        <span>Weddings</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href="/weddings"></a>
                </div>
                <div class="g-card engagements column small-12 medium-6 large-4 eat-left">
                    <div class="g-title">
                        <span>Engagements</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href="/engagements"></a>
                </div>
                <div class="g-card seniors column small-12 medium-6 large-4 eat-left">
                    <div class="g-title">
                        <span>Seniors</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href="/seniors"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row blog">
        <div class="column small-12">
            <h2 class="module-heading" id="blogLoc">Blog</h2>
        </div>
    </div>
<!--     <div class="blog-feed">
        RSS content loads here
    </div> -->
                <?php include 'incl/_footer.php';  ?>