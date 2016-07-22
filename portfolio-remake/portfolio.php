<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Duffy | Web | Designer | Developer</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- off-canvas title bar for 'small' screen -->
        <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
          <div class="title-bar-right">
            <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
          </div>
        </div>

        <!-- off-canvas right menu -->
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <ul class="vertical dropdown menu" data-dropdown-menu>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <!-- "wider" top-bar menu for 'medium' and up -->
        <div id="widemenu" class="top-bar">
          <div class="row">
            <div class="top-bar-left">
              <ul class="menu">
                <li><a href="#"><span>David </span>Duffy</a></li>
              </ul>
            </div>
            <div class="top-bar-right">
              <ul class="dropdown menu" data-dropdown-menu>
                <li><a class="nav-underline" href="#about">About</a></li>
                <li><a class="nav-underline" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-underline" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- page content goes in this container -->
        <div class="off-canvas-content body-content portfolio" data-off-canvas-content>
          <div class="row heading">
            <div class="large-6 columns portfolio-card card-1">
              <div class="card image" title="The main image from the Give-r e-Commerce site, developed by David Duffy">
              </div>
              <div class="card underline">
                  <span>&nbsp;</span>
              </div>
              <div class="card card-button">
                  <span>Give'r</span>
                  <a href="#"></a>
              </div>
              <div class="card description">
                  <span>Give'r, an uncompromising brand that focuses on a few fantastic flagship products. A funnel that delivers conversions.<br><br><a href="#">See it ></a></span>
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
                  <span>Amy Galbraith Photo</span>
              </div>
              <div class="card description">
                  <span>A photographer that captures simple, natural photography. A fitting blog that doesn't get in the way.<br><br><a href="#">See it ></a></span>
              </div>
              <div class="card meta">
                <span class="tech">PHP<br>jQuery</span>
                <span class="platform">WordPress</span>
              </div>
            </div>
            <div class="large-6 columns portfolio-card card-3">
              <div class="card image">
              </div>
              <div class="card underline">
                  <span>&nbsp;</span>
              </div>
              <div class="card card-button">
                  <span>Button Link</span>
              </div>
              <div class="card description">
                  <span>Caramels cake gingerbread jujubes sweet donut jelly beans bonbon chocolate bar.<br><br><a href="#">See it ></a></span>
              </div>
            </div>
            <div class="large-6 columns portfolio-card card-4">
              <div class="card image" title="The main splash art from the T&amp;C Entertainment Production website, designed and developed by David Duffy">
              </div>
              <div class="card underline">
                  <span>&nbsp;</span>
              </div>
              <div class="card card-button">
                  <span>T&amp;C Entertainment</span>
              </div>
              <div class="card description">
                  <span>An up-and-coming production house with a unique selection of services. A site that oozes confidence.<br><br><a href="#">See it ></a></span>
              </div>
              <div class="card meta">
                <span class="tech">Bootstrap<br>Gulp</span>
              </div>
            </div>
          </div>
        </div>

      <!-- close wrapper, no more content after this -->
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
