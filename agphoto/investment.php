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
            <?php include 'incl/_horizontal-menu.php'; ?>
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
                <a id="page-scroll" href="#inv" title="Read my story!">
                    <span>Check out pricing</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="module-heading text-center" id="inv"><?php echo $pageTitle; ?></h2>
        <div class="investment-text column small-10 small-offset-1 hide-for-large">
        <?php include 'incl/_investmentTxt.php'; ?>
        </div>
        <div class="investment-img show-for-large column large-10 large-offset-1">
            <div class="g-card weddings column eat-left">
                <div class="i-title">
                    <div>
                        <span>Weddings</span>
                        <span>collections begin at</span>
                        <span>$3300</span>
                    </div>
                </div>
                <!-- <div class="g-underline"><span>&nbsp;</span></div> -->
                <div class="g-background"></div>
                <!-- <a href="/weddings"></a> -->
            </div>
            <div class="g-card engagements column">
                <div class="i-title">
                    <div>
                        <span>Engagements</span>
                        <span>sessions begin at</span>
                        <span>$650</span>
                    </div>
                </div>
                <!-- <div class="g-underline"><span>&nbsp;</span></div> -->
                <div class="g-background"></div>
                <!-- <a href="/engagements"></a> -->
            </div>
            <div class="g-card seniors column eat-right">
                <div class="i-title">
                    <div>
                        <span>Seniors</span>
                        <span>sessions begin at</span>
                        <span>$350</span>
                    </div>
                </div>
                <!-- <div class="g-underline"><span>&nbsp;</span></div> -->
                <div class="g-background"></div>
                <!-- <a href="/seniors"></a> -->
            </div>
        </div>
    </div>
<?php include 'incl/_footer.php'; ?>