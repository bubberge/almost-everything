<?php
$pageTitle = 'Amy Galbraith | Seattle Wedding Photographer';
$pageDescription = 'Adventure and mountain wedding photography in Seattle, Washington and Jackson, Wyoming. We capture candid, natural, and emotion-driven images.';
$pageKeywords = 'seattle wedding photographer, jackson hole wedding photographer, adventure wedding photographer, mountain wedding photographer, outdoor wedding photographer, backcountry wedding';
$pageExt = '';
$pageClasses = 'home';
include 'incl/_header.php'; ?>
  <section class="section splash">
    <div class="splash__bg slideshow slideshow--splash">

      <?php include 'incl/_data_splash.php';
      create_splash_slideshow_radios($data_splash);
      create_splash_slideshow_slides($data_splash);
      create_splash_slideshow_nav($data_splash); ?>

    </div>
    <div class="splash__logo">
      <img src="img/amy-galbraith-photography-logo-white.png" alt="Seattle wedding photographer Amy Galbraith's Logo" />
    </div>
  </section>
  <section class="section section--intro">
    <h2 class="h1 section__heading">Welcome</h2>
    <h3 class="h4 section__subheading">I am a Seattle wedding photographer</h3>
    <div class="section__content section__content--intro">
        <p>I specialize in photographing mountain weddings in both the Pacific Northwest and Jackson Hole. I believe that photos are more than just a way to remind you what you looked like or who you were with the day that they were taken. Photos are meant to tell a story, where each frame has the power to transport you back in time, to that exact moment.</p>
    </div>
  </section>
  <section class="section section--work work">
    <div class="work__heading">
      <h2 class="h1 t-cursive work__cursive">explore</h2>
      <p class="h1 t-poster work__poster">the galleries</p>
      <p class="work__blurb">Mountain weddings, adventure sessions<br />high school seniors, and life with littles</p>
    </div>

    <div class="work__slideshow-1 slideshow slideshow--mini">
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--1" style="background-image:url('http://placehold.it/600x900/e67e21/fff?text=S01E01');" alt="work slideshow 1 slide-1"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--2" style="background-image:url('http://placehold.it/600x900/f90/fff?text=S01E02');" alt="work slideshow 1 slide-2"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--3" style="background-image:url('http://placehold.it/600x900/9f0/fff?text=S01E03');" alt="work slideshow 1 slide-3"></div>
      <div class="slideshow__overlay">
        <a class="slideshow__link" href="javascript:void(0)">Gallery Link</a>
      </div>
    </div>
    <div class="work__slideshow-2 slideshow slideshow--mini">
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--1" style="background-image:url('http://placehold.it/800x533/1abc9c/fff?text=S02E01');" alt="work slideshow 2 slide-1"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--2" style="background-image:url('http://placehold.it/800x533/1abc9c/fff?text=S02E02');" alt="work slideshow 2 slide-2"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--3" style="background-image:url('http://placehold.it/800x533/1abc9c/fff?text=S02E03');" alt="work slideshow 2 slide-3"></div>
    </div>
    <div class="work__slideshow-3 slideshow slideshow--mini">
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--1" style="background-image:url('http://placehold.it/1024x682/e67e21/fff?text=S03E01');" alt="work slideshow 3 slide-1"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--2" style="background-image:url('http://placehold.it/1024x682/f90/fff?text=S03E02');" alt="work slideshow 3 slide-2"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--3" style="background-image:url('http://placehold.it/1024x682/9f0/fff?text=S03E03');" alt="work slideshow 3 slide-3"></div>
    </div>
    <div class="work__slideshow-4 slideshow slideshow--mini">
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--1" style="background-image:url('http://placehold.it/1167x1334/1abc9c/fff?text=S04E01');" alt="work slideshow 4 slide-1"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--2" style="background-image:url('http://placehold.it/1167x1334/1abc9c/fff?text=S04E02');" alt="work slideshow 4 slide-2"></div>
      <div class="slideshow__slide slideshow__slide--mini slideshow__slide--3" style="background-image:url('http://placehold.it/1167x1334/1abc9c/fff?text=S04E03');" alt="work slideshow 4 slide-3"></div>
    </div>
  </section>
  <section class="section section--narrow about">
    <div class="about__heading">
      <h2 class="h1 t-cursive about__cursive">hi there,</h2>
      <p class="h1 t-poster about__poster">I'm Amy</p>
    </div>
    <div class="about__image" style="background-image:url('http://placehold.it/1167x1334/1abc9c/fff?text=Picture%20of%20Amy');" title="picture of amy" /></div>
    <p class="about__text">I am a former fire-twirler and ski bum, current outdoor crazy-person and adventure mama! I live in Seattle with my web developer husband and sweet baby boy. I am happiest when I am capturing natural, emotion-driven images. There is a unique energy present in laughter, intimacy, and love. I look for those moments.</p>
    <a class="about__link" href="javascript:void(0)" title="Read the whole story about Seattle wedding photographer Amy Galbraith">More about Amy &raquo;</a>
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
    <script>
      // don't want to transcribe this so var it is
      var scroll = {
        last_known_position           : 0,
        is_ticking                    : false,
        header                        : document.querySelector('.header'),
        splash_height                 : document.querySelector('.slideshow--splash').clientHeight,
        init                          : function() {
                                          window.addEventListener('scroll', function(e) {
                                            scroll.last_known_position = window.scrollY;
                                            if (!scroll.is_ticking) {
                                              window.requestAnimationFrame(function() {
                                                scroll.handleScroll(scroll.last_known_position);
                                                scroll.is_ticking = false;
                                              });
                                            }
                                            scroll.is_ticking = true;
                                          });
                                        },
        handleScroll                  : function(scrollHeight) {
                                          if ( scrollHeight > scroll.splash_height ) {
                                            scroll.header.classList.add('header--inverted');
                                          } else {
                                            scroll.header.classList.remove('header--inverted');
                                          }
                                        }

      }
      scroll.init();
    </script>
    <?php include 'incl/_footer.php';  ?>