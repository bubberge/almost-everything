<?php
$pageTitle = 'Portfolio';
$pageBlurb = "Right now I like simple, clean design.<br class='show-for-large'><span class='show-for-small'>&nbsp;</span>These sites from the past year exemplify that approach on a variety of platforms.";
$pageDescription = "The actual portfolio page on David Duffy (aka daviduffy)'s web design porfolio website. David is a web designer and developer from Seattle, Washington.";
$pageExt = 'portfolio';
include 'incl/_header.php'; ?>
        <div class="row content portfolio">
            <div class="portfolio-heading">
                <h2 class="comment">Websites</h2>
            </div>
            <div class="large-6 columns portfolio-card card-1">
                <div class="card image" title="The main image from the Give-r e-Commerce site, developed by David Duffy">
                </div>
                <div class="card underline">
                  <span>&nbsp;</span>
                </div>
                <div class="card card-button">
                    <span>
                        <span>Give'r</span>
                        <a class="show-for-small-only" target="_blank" href="http://www.give-r.com/"></a>
                    </span>
                </div>
                <div class="card description">
                    <span>Give'r, an adventure equipment brand that focuses on a small group of flagship products.
                        <div class="sub-description"><a target="_blank" href="http://www.give-r.com/">See it <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                    </span>
                </div>
                <div class="card meta">
                    <span class="tech">Liquid<br>SCSS</span>
                    <span class="platform">Shopify</span>
                </div>
            </div>
            <div class="large-6 columns portfolio-card card-2">
              <div class="card image" title="A main image from the photographer Amy Galbraith's blog website, designed and developed by David Duffy">
              </div>
              <div class="card underline">
                  <span>&nbsp;</span>
              </div>
              <div class="card card-button">
                  <span>
                    <span>Amy Galbraith Photo</span>
                    <a href="http://blog.amygalbraith.com/" target="_blank"></a>
                  </span>
              </div>
              <div class="card description">
                  <span>A photographer that captures simple, natural images. A beautiful portfolio and blog.
                      <div class="sub-description">
                          <a href="http://amygalbraith.com/" target="_blank">The Portfolio <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                          <a href="http://blog.amygalbraith.com/" target="_blank">The Blog <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                      </div>
                  </span>
              </div>
              <div class="card meta">
                <span class="tech">PHP<br>jQuery<br>Gulp</span>
                <span class="platform">WordPress<br>Foundation</span>
              </div>
            </div>
            <div class="large-6 columns large-push-6 portfolio-card card-4">
              <div class="card image" title="The main splash art from the T&amp;C Entertainment Production website, designed and developed by David Duffy">
              </div>
              <div class="card underline">
                  <span>&nbsp;</span>
              </div>
              <div class="card card-button">
                <span>
                  <span>T&amp;C Entertainment</span>
                  <a href="http://tandcentertainment.com/" target="_blank"></a>
                </span>
              </div>
              <div class="card description">
                  <span>An up-and-coming visual production house with a unique selection of services.
                      <div class="sub-description"><a href="http://tandcentertainment.com/" target="_blank">See it <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                  </span>
              </div>
              <div class="card meta">
                <span class="tech">Bootstrap<br>Gulp</span>
                <span class="platform">PHP</span>
              </div>
            </div>
            <div class="large-6 large-pull-6 columns portfolio-card card-3">
              <div class="card image">
              </div>
              <div class="card underline">
                  <span>&nbsp;</span>
              </div>
              <div class="card card-button">
                <span>
                  <span>Your Site</span>
                  <a href="contact.php"></a>
                </span>
              </div>
              <div class="card description">
                  <span>Work with me to create a site that captures your audience and positions you for success.
                      <div class="sub-description"><a href="contact">Contact <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                  </span>
              </div>
            </div>
        </div>
        <div class="doodles">
            <div class="row content portfolio">
                <div class="portfolio-heading">
                    <h2 class="comment">Doodles</h2>
                </div>
                <div class="medium-6 large-4 columns doodle-card doodle-1">
                    <div class="doodle-inner">  
                        <div class="doodle-image" style="background-image:url('img/flower.png')">
                            <span>
                                <a href="/">button</a>
                            </span>
                        </div>
                        <?php include 'incl/_flower.ph' ;?>
                        <div class="doodle-heading">
                            <h3>Hover Flower</h3>
                            <p>Achieving 60 FPS with CSS3 animations.</p>
                        </div>
                    </div>
                </div>
                <div class="medium-6 large-4 columns doodle-card doodle-2">
                    <div class="doodle-inner">  
                        <div class="doodle-image" style="background-image:url('img/gradient.jpg')"></div>
                        <?php include 'incl/_rgbGen.ph' ;?>
                        <div class="doodle-heading">
                            <h3>RGB Gradient Value Gen</h3>
                            <p>Harnessing user input to manipulate the DOM</p>
                        </div>
                    </div>
                </div>
                <div class="medium-6 large-4 columns doodle-card doodle-2">
                    <div class="doodle-inner">  
                        <div class="doodle-image" style="background-image:url('img/lo-fi.png')"></div>
                        <?php include 'incl/_rgbGen.ph' ;?>
                        <div class="doodle-heading">
                            <h3>Lo-Fi Film Shake</h3>
                            <p>Experimenting with CSS blend modes and animation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- /page content  -->
<?php include 'incl/_footer.php';  ?>