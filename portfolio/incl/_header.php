<!doctype html> 
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Duffy | daviduffy | Web Designer &amp; Developer<?php if ($pageTitle) echo ' | ' . $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta itemprop="description" content="<?php echo $pageDescription; ?>" />
    <link rel="stylesheet" href="css/app.css">
    <link rel='shortcut icon' href='img/fav.ico' type='image/x-icon'/ >
    <meta itemprop="name" content="David Duffy"/>
    <meta itemprop="url" content="http://daviduffy.me<?php if ($pageExt) echo '/' . $pageExt; ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="http://daviduffy.me"/>
    <meta name="twitter:title" content="David Duffy"/>
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>"/>
    <meta name="twitter:image" content="https://daviduffy.me/splash/david-duffy-designer-developer-product-owner-1024.jpg"/>
    <meta name="twitter:site" content="@daviduffy_"/>
    <meta name="twitter:creator" content="@daviduffy_"/>
    <meta property="og:title" content="David Duffy" />
    <meta property="og:site_name" content="David Duffy Portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://daviduffy.me<?php if ($pageExt) echo '/' . $pageExt; ?>" />
    <meta property="og:image" content="http://daviduffy.me/img/twitter.jpg" />
    <meta property="og:description" content="<?php echo $pageDescription; ?>" />
    <link rel="canonical" href="http://daviduffy.me<?php if ($pageExt) echo '/' . $pageExt; ?>">
  </head>
  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- off-canvas title bar for 'small' screen -->
        <style>
          @media only screen and (max-width:39.98em){
            .title-bar {display:none;}
          }
        </style>
        <div class="title-bar" data-responsive-toggle="offCanvasRight" data-hide-for="medium">
          <div class="title-bar-left">
            <span><a href="#splash">
              <span class="lettermark">D</span>
              <span class="lettermark">D</span>
            </a></span>
            <h1 class="comment about">about</h1>
            <h1 class="comment portfolio">portfolio</h1>
            <h1 class="comment contact">contact</h1>
          </div>
          
          <div class="title-bar-right">
            <button class="menu-icon" type="button" data-toggle="offCanvasRight"></button>
          </div>
        </div>

        <!-- off-canvas right menu -->
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <ul class="vertical dropdown menu" data-dropdown-menu>
            <?php if ( $pageTitle ) : ?><li class="show-for-small-only"><a href="#splash">Home</a></li><?php endif; ?>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <!-- "wider" top-bar menu for 'medium' and up -->
        <div id="widemenu" class="top-bar show-for-medium">
          <div class="row">
            <div class="top-bar-left">
              <ul class="menu">
                <li><a href="#splash"><span>David </span>Duffy</a></li>
              </ul>
            </div>
            <div class="top-bar-right">
              <ul class="dropdown menu" data-dropdown-menu>
                <li><a class="nav-underline <?php if ($pageTitle == 'About') echo 'active'; ?>" href="#about">About</a></li>
                <li><a class="nav-underline <?php if ($pageTitle == 'Portfolio') echo 'active'; ?>" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-underline <?php if ($pageTitle == 'Contact') echo 'active'; ?>" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- page content goes in this container -->
        <?php if ($pageTitle): ?>
        <div class="off-canvas-content body-content <?php echo $pageTitle?> clearfix" data-off-canvas-content>
          <div class="row heading">
            <div class="column">
              <p class="small-12 blurb columns">
                <span><?php echo $pageBlurb ?></span>
              </p>
            </div>
          </div>
          <?php endif ?>