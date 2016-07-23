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
        <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
          <div class="title-bar-right">
            <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
          </div>
        </div>

        <!-- off-canvas right menu -->
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <ul class="vertical dropdown menu" data-dropdown-menu>
            <li><a href="about.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <!-- "wider" top-bar menu for 'medium' and up -->
        <div id="widemenu" class="top-bar">
          <div class="row">
            <div class="top-bar-left">
              <ul class="menu">
                <li><a href="index.php"><span>David </span>Duffy</a></li>
              </ul>
            </div>
            <div class="top-bar-right">
              <ul class="dropdown menu" data-dropdown-menu>
                <li><a class="nav-underline" href="about.php">About</a></li>
                <li><a class="nav-underline" href="portfolio.php">Portfolio</a></li>
                <li><a class="nav-underline" href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- page content goes in this container -->
        <?php if ($pageTitle): ?>
        <div class="off-canvas-content body-content portfolio" data-off-canvas-content>
          <div class="row heading">
            <h1 class="comment"><?php echo $pageTitle ?></h1>
          </div>
          <?php endif ?>