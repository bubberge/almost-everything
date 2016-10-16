<?php
$pageTitle = 'Home';
$pageDescription = 'Amy Galbraith is a documentary Seattle wedding photographer and Jackson Hole wedding photographer. As a mountain wedding photographer and seattle senior portrait photographer, she strives to capture candid, natural, and emotion-driven images.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = '';
$pageClasses = 'home';
include 'incl/_header.php'; ?>
    <div class="jumbotron">
        <div class="j-background"></div>
        <div class="j-overlay">
            <div class="j-overlay-background"></div>
            <div class="j-arrow">
                <a id="page-scroll" href="#scrollDestination" title="Take me to the pictures!">
                    <span>I am a photographer. Learn more down here!</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
            <ul class="horizontal menu">
              <?php include 'incl/_menu.php'; ?>
            </ul>
        </div>
    </div>
    <div class="row galleries">
        <div class="column small-12">
            <h2 class="module-heading" id="scrollDestination">Galleries</h2>
            <div class="row">
                <div class="g-card weddings column small-12 large-4 eat-left">
                    <div class="g-title">
                        <span>Weddings</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href="../agphoto/weddings"></a>
                </div>
                <div class="g-card engagements column small-12 medium-6 large-4 eat-left">
                    <div class="g-title">
                        <span>Engagements</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href=""></a>
                </div>
                <div class="g-card seniors column small-12 medium-6 large-4 eat-left">
                    <div class="g-title">
                        <span>Seniors</span>
                    </div>
                    <div class="g-underline"><span>&nbsp;</span></div>
                    <div class="g-background"></div>
                    <a href=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row blog">
        <div class="column small-12">
            <h2 class="module-heading">Blog</h2>
        </div>
    </div>
    <div class="blog-feed">
        <!-- RSS content loads here -->
    </div>
                <?php include 'incl/_footer.php';  ?>