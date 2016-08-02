<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Duffy | Web | Designer | Developer<?php if ($pageTitle) echo ' | ' . $pageTitle; ?></title>
    <link rel="stylesheet" href="css/app.css">
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
          <?php if ($pageTitle) : ?>
          <div class="title-bar-left">
            <span><a href="./index.php">DD</a></span>
            <h1 class="comment"><?php echo $pageTitle ?></h1>
          </div>
          
          <div class="title-bar-right">
            <button class="menu-icon" type="button" data-toggle="offCanvasRight"></button>
          </div>
          <?php endif; ?>
        </div>

        <!-- off-canvas right menu -->
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <ul class="vertical dropdown menu" data-dropdown-menu>
            <?php if ( $pageTitle ) : ?><li class="show-for-small-only"><a href="index.php">Home</a></li><?php endif; ?>
            <li><a href="about.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <!-- "wider" top-bar menu for 'medium' and up -->
        <div id="widemenu" class="top-bar show-for-medium">
          <div class="row">
            <div class="top-bar-left">
              <ul class="menu">
                <li><a href="index.php"><span>David </span>Duffy</a></li>
              </ul>
            </div>
            <div class="top-bar-right">
              <ul class="dropdown menu" data-dropdown-menu>
                <li><a class="nav-underline <?php if ($pageTitle == 'About') echo 'active'; ?>" href="about.php">About</a></li>
                <li><a class="nav-underline <?php if ($pageTitle == 'Portfolio') echo 'active'; ?>" href="portfolio.php">Portfolio</a></li>
                <li><a class="nav-underline <?php if ($pageTitle == 'Contact') echo 'active'; ?>" href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- page content goes in this container -->
        <?php if ($pageTitle): ?>
        <div class="off-canvas-content body-content <?php echo $pageTitle?> clearfix" data-off-canvas-content>
          <div class="row heading">
            <h1 class="large-2 columns comment show-for-large"><?php echo $pageTitle ?></h1>
            <p class="small-12 large-9 blurb columns">
              <span><?php echo $pageBlurb ?></span>
            </p>
          </div>
          <?php endif ?>