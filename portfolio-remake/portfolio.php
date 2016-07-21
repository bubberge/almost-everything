<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
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
          <div class="row">
            <div class="large-12">
              <div class="portfolio-card">
                <div class="card image">
                    <img src="//i.imgur.com/vEZypaN.png">
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
