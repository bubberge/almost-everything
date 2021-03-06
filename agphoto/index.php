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
            <div class="j-background j-1">

                <picture>
                    <?php
                    // for testing
                    // <source srcset="img/homepage/h1334.png" media="(orientation: portrait) and (min-width: 500px)" >
                    // <source srcset="img/homepage/h667.png" media="(orientation: portrait)"  >


                    // <source srcset="img/homepage/2000.png" media="(min-width: 1440px)" />
                    // <source srcset="img/homepage/1440.png" media="(min-width: 1024px)" />
                    // <source srcset="img/homepage/1024.png" media="(min-width: 768px)" />
                    // <source srcset="img/homepage/768.png"/>
                    // <img src="img/homepage/1024.png" alt="testing"/>
                    ?>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width: 500px)" srcset="img/homepage/h1334/001-leavenworth_wedding_photographer-betz-001-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/001-leavenworth_wedding_photographer-betz-001-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/001-leavenworth_wedding_photographer-betz-001-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/001-leavenworth_wedding_photographer-betz-001-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/001-leavenworth_wedding_photographer-betz-001-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/001-leavenworth_wedding_photographer-betz-001-768.jpg"/>
                    <img src="img/homepage/w1024/001-leavenworth_wedding_photographer-betz-001-1024.jpg" alt="<?php altText('Adventure wedding'); ?>'s photograph of a bride and groom kissing in front of a moody mountain sky on the shore of scenic Lake Wenatchee"/>

                </picture>

            </div>
            <div class="j-background j-2">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width: 500px)" srcset="img/homepage/h1334/002-jackson_hole_wedding_photographer-todd-002-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/002-jackson_hole_wedding_photographer-todd-002-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/002-jackson_hole_wedding_photographer-todd-002-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/002-jackson_hole_wedding_photographer-todd-002-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/002-jackson_hole_wedding_photographer-todd-002-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/002-jackson_hole_wedding_photographer-todd-002-768.jpg"/>
                    <img src="img/homepage/w1024/002-jackson_hole_wedding_photographer-todd-002-1024.jpg" alt="<?php altText('Mountain wedding'); ?> captures a bride and groom sitting on a chair lift at Jackson Hole Mountain Resort in Jackson Hole, Wyoming"/>

                </picture>

            </div>
            <div class="j-background j-3">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width: 500px)" srcset="img/homepage/h1334/002-wisconsin-wedding-photographer-001-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/002-wisconsin-wedding-photographer-001-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/002-wisconsin-wedding-photographer-001-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/002-wisconsin-wedding-photographer-001-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/002-wisconsin-wedding-photographer-001-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/002-wisconsin-wedding-photographer-001-768.jpg"/>
                    <img src="img/homepage/w1024/002-wisconsin-wedding-photographer-001-1024.jpg" alt="<?php altText('Seattle wedding'); ?> preserves the memory of the first moments after the ceremony at MV Skansonia on North Lake Union in Seattle, WA"/>

                </picture>

            </div>
            <div class="j-background j-4">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width:500px)" srcset="img/homepage/h1334/003-turpin-meadows-wedding-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/003-turpin-meadows-wedding-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/003-turpin-meadows-wedding-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/003-turpin-meadows-wedding-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/003-turpin-meadows-wedding-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/003-turpin-meadows-wedding-768.jpg"/>
                    <img src="img/homepage/w1024/003-turpin-meadows-wedding-1024.jpg" alt="<?php altText('Outdoor wedding'); ?> gets a sweeping landscape wedding photograph of a couple in Plain, WA near Leavenworth, WA"/>

                </picture>

            </div>
            <div class="j-background j-5">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width:500px)" srcset="img/homepage/h1334/004-within-sodo-wedding-aebischer-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/004-within-sodo-wedding-aebischer-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/004-within-sodo-wedding-aebischer-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/004-within-sodo-wedding-aebischer-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/004-within-sodo-wedding-aebischer-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/004-within-sodo-wedding-aebischer-768.jpg"/>
                    <img src="img/homepage/w1024/004-within-sodo-wedding-aebischer-1024.jpg" alt="<?php altText('Seattle wedding'); ?> captures an urban nighttime wedding shot in Seattle SODO, WA"/>

                </picture>

            </div>
            <div class="j-background j-6">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width:500px)" srcset="img/homepage/h1334/006-mt-baker-engagement-session-001-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/006-mt-baker-engagement-session-001-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/006-mt-baker-engagement-session-001-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/006-mt-baker-engagement-session-001-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/006-mt-baker-engagement-session-001-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/006-mt-baker-engagement-session-001-768.jpg"/>
                    <img src="img/homepage/w1024/006-mt-baker-engagement-session-001-1024.jpg" alt="<?php altText('Mountain engagement'); ?> shoots an adventure engagement session with a couple at Mount Baker, WA"/>

                </picture>

            </div>
            <div class="j-background j-7">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width:500px)" srcset="img/homepage/h1334/007-bainbridge-island-engagement-001-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/007-bainbridge-island-engagement-001-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/007-bainbridge-island-engagement-001-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/007-bainbridge-island-engagement-001-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/007-bainbridge-island-engagement-001-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/007-bainbridge-island-engagement-001-768.jpg"/>
                    <img src="img/homepage/w1024/007-bainbridge-island-engagement-001-1024.jpg" alt="<?php altText('Seattle engagement'); ?> takes ferry ride engagement photographs on the ferry Bainbridge with an engaged couple"/>

                </picture>

            </div>
            <div class="j-background j-8">

                <picture>

                    <!-- portrait images -->
                    <source media="(orientation: portrait) and (min-width:500px)" srcset="img/homepage/h1334/008-stevens-pass-engagement-session-001-1334h.jpg" >
                    <source media="(orientation: portrait)" srcset="img/homepage/h667/008-stevens-pass-engagement-session-001-667h.jpg" >

                    <!-- landscape images -->
                    <source srcset="img/homepage/w2000/008-stevens-pass-engagement-session-001-2000.jpg" media="(min-width: 1440px)" />
                    <source srcset="img/homepage/w1440/008-stevens-pass-engagement-session-001-1440.jpg" media="(min-width: 1024px)" />
                    <source srcset="img/homepage/w1024/008-stevens-pass-engagement-session-001-1024.jpg" media="(min-width: 768px)" />
                    <source srcset="img/homepage/w768/008-stevens-pass-engagement-session-001-768.jpg"/>
                    <img src="img/homepage/w1024/008-stevens-pass-engagement-session-001-1024.jpg" alt="<?php altText('Adventure engagement'); ?> takes a hiking engagement photo in fancy clothing in a backcountry setting."/>

                </picture>

            </div>
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