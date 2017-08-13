<?php
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Adventure and mountain wedding photography in Seattle, Washington and Jackson, Wyoming. We capture candid, natural, and emotion-driven images.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = '';
$pageClasses = 'home';
include 'incl/_header.php'; ?>
    <div class="jumbotron">
        <div class="j-loader">
            <div class='uil-ring-css' style='transform:scale(0.45);'><div></div></div>
        </div>
        <div class="j-track">
              <?php include 'incl/_data_splash.php';
              create_splash_slideshow($splash_data); ?>
        </div>
        <div class="j-overlay">
            <div class="j-overlay-background"></div>
            <div class="j-arrow">
                <a id="page-scroll" href="#portLoc" title="Take me to the pictures!">
                    <h1 class="page-scroll__trigger">I am a Seattle wedding photographer. <br />See more down here!</h1>
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
                    <a href="/wedding-photography"></a>
                </div>
                <div class="g-card engagements column small-12 medium-6 large-4 eat-left">
                    <div class="g-title">
                        <span>Engagements</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href="/engagement-photography"></a>
                </div>
                <div class="g-card seniors column small-12 medium-6 large-4 eat-left">
                    <div class="g-title">
                        <span>Seniors</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href="/high-school-senior-photography"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row blog">
        <div class="column small-12">
            <a href="http://blog.amygalbraith.com" title="Amy Galbraith Photography blog website" >
                <h2 class="module-heading link-style" id="blogLoc">Blog</h2>
            </a>
        </div>
    </div>
    <div class="blog-feed">
        <!-- RSS content loads here -->
        <div class="b-post">
            <div class="b-title">
                <span>We</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>are</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>waiting</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>for</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>the</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>feed</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>to</span>
                <span></span>
            </div>
        </div>
        <div class="b-post">
            <div class="b-title">
                <span>load</span>
                <span></span>
            </div>
        </div>
    </div>
                <?php include 'incl/_footer.php';  ?>