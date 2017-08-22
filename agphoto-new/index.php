<?php
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Adventure and mountain wedding photography in Seattle, Washington and Jackson, Wyoming. We capture candid, natural, and emotion-driven images.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = '';
$pageClasses = 'home';
include 'incl/_header.php'; ?>
  <section class="section splash">
    <h2 class="splash__heading">Hi! I'm Amy Galbraith, a Seattle wedding photographer</h2>
    <div class="splash__bg slideshow">

      <?php include 'incl/_data_splash.php';
      create_splash_slideshow($data_splash); ?>

    </div>
    <div class="splash__logo">
      <img src="http://placehold.it/300X300/fefefe" alt="Amy Galbraith's Awesome Logo" />
    </div>
  </section>
  <section class="section section--super-narrow intro">
    <h2 class="section__heading">Welcome</h2>
    <div class="section__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas ligula, sed convallis tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer quis turpis iaculis, aliquam lorem mollis, vestibulum odio. Nulla facilisi.</p>
    </div>
  </section>
  <section class="section section--narrow work">
    <div class="work__heading">
      <h2 class="h2 t-cursive work__cursive">check out</h2>
      <p class="h1 t-poster work__poster">My featured works</p>
      <p class="work__blurb">Seattle wedding photographer and expert tent-pitcher</p>
    </div>
    <div class="work__slideshow-1 slideshow">
      <img src="http://placehold.it/1024x682/e67e21/fff" alt="work slideshow 1" />
    </div>
    <div class="work__slideshow-2 slideshow">
      <img src="http://placehold.it/1167x1334/1abc9c/fff" alt="work slideshow 2" />
    </div>
    <a class="work__link" href="javascript:void(0)" title="See all of Seattle wedding photographer Amy Galbraith photography">See more</a>
  </section>
  <section class="section section--narrow about">
    <div class="about__heading">
      <h2 class="h2 t-cursive about__cursive">hello, i'm</h2>
      <p class="h1 t-poster about__poster">Amy Galbraith</p>
      <p class="about__blurb">Seattle wedding photographer and expert tent-pitcher</p>
    </div>
    <img class="about__image" src="http://placehold.it/1167x1334/1abc9c/fff?text=Picture%20of%20Amy" alt="picture of amy" />
    <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu egestas ligula, sed convallis tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer quis turpis iaculis, aliquam lorem mollis, vestibulum odio. Nulla facilisi.</p>
    <a class="about__link" href="javascript:void(0)" title="Read the whole story about Seattle wedding photographer Amy Galbraith">Learn More</a>
  </section>
  <section class="section blog">
    <h2 class="blog__heading">Blog</h2>
    <div class="blog__post blog__post--1">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--2">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--3">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--4">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--5">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--6">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--7">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
    <div class="blog__post blog__post--8">
      <h3 class="blog__title">Title of post</h3>
      <p class="blog__subtitle">Subtitle for post</p>
    </div>
  </section>




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