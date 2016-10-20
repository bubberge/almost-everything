<?php
$pageTitle = 'Investment';
$pageDescription = 'Amy Galbraith is a documentary Seattle wedding photographer and Jackson Hole wedding photographer. As a mountain wedding photographer and seattle senior portrait photographer, she strives to capture candid, natural, and emotion-driven images.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'investment';
$pageClasses = 'investment';
include 'incl/_header.php'; ?>
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
            <ul class="horizontal menu">
              <?php include 'incl/_menu.php'; ?>
            </ul>
        </div>
    </div>
    <div class="jumbotron">
        <div class="j-background"></div>
        <div class="j-overlay row">
            <div class="j-overlay-content small-10 small-offset-1 medium-6 medium-offset-6 large-4 large-offset-7 columns">
                <img src="img/amy-galbraith-photography-logo.png" alt="amy galbraith photography logo, a circle with four small hand-drawn trees" />
                <div class="j-overlay-text">
                    <?php include 'incl/_investmentBlurb.php'; ?>
                </div>
            </div>
            <div class="j-arrow">
                <a id="page-scroll" href="#storyLoc" title="Read my story!">
                    <span>Check out pricing</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="module-heading text-center" id="faq"><?php echo $pageTitle; ?></h2>
        <div class="investment-text column small-10 small-offset-1">
            <?php include 'incl/_investmentTxt.php'; ?>
        </div>
    </div>
<?php include 'incl/_footer.php'; ?>