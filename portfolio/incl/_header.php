<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Duffy | Web Designer<?php if ($pageTitle) echo ' | ' . $pageTitle; ?></title>
    <link rel="stylesheet" href="css/output.min.css">
  </head>
  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-left" id="offCanvas" data-off-canvas>

          <!-- Close button -->
          <button class="close-button" aria-label="Close menu" type="button" data-close data-position="right">
            <span aria-hidden="true">&times;</span>
          </button>

          <!-- Menu -->
          <?php include 'incl/menu.php' ?>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="top-bar">
              <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                  <li class="menu-text">David Duffy</li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
              </div>
              <div class="top-bar-right">
                <ul class="menu">
                  <li><input type="search" placeholder="Search"></li>
                  <li><button type="button" class="button">Search</button></li>
                </ul>
              </div>
            </div>