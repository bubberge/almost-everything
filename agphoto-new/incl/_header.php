<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all, index, follow, noodp, noydir">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta itemprop="description" content="<?php echo $pageDescription; ?>" />
    <meta itemprop="name" content="Amy Galbraith"/>
    <meta itemprop="url" content="http://amygalbraith.com<?php if ($pageExt) echo '/' . $pageExt; ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="http://amygalbraith.com"/>
    <meta name="twitter:title" content="Amy Galbraith"/>
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>"/>
    <meta name="twitter:image" content="https://amygalbraith.com/img/twitter-photo.jpg"/>
    <meta name="twitter:site" content="@amygphoto"/>
    <meta name="twitter:creator" content="@amygphoto"/>
    <meta property="og:title" content="Amy Galbraith" />
    <meta property="og:site_name" content="Amy Galbraith Photography" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://amygalbraith.com<?php if ($pageExt) echo '/' . $pageExt; ?>" />
    <meta property="og:image" content="http://amygalbraith.com/img/twitter-photo.jpg" />
    <meta property="og:description" content="<?php echo $pageDescription; ?>" />
    <link rel="canonical" href="http://amygalbraith.com<?php if ($pageExt) echo '/' . $pageExt; ?>">
    <!-- <link rel="stylesheet" href="css/output.min.css"> -->
    <link rel="stylesheet" href="css/app.css">
    <meta name="google-site-verification" content="5NH_Jss4iPicBqHJJsMZPOgAiCQxrFowW7qv5J1kprk" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php include '_stringVars.php'; ?>
    <?php include_once('_analyticstracking.php'); ?>
    <?php
      if (isset($pageType) && $pageType == 'gallery') {
        echo "<style>
            .gallery .s-slide:first-child {
              display: -webkit-box !important;
              display: -ms-flexbox !important;
              display: -webkit-flex !important;
              display: flex !important;
              -webkit-justify-content: center;
              -webkit-box-pack: center;
              -ms-flex-pack: center;
              justify-content: center;
              -webkit-align-items: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
            }
            .gallery .s-slide:nth-child(n+2) { 
              display: none!important;
            }
          </style>";
      }
    ?>
  </head>
  <body>
    <div class="off-canvas">
      <div class="off-canvas__menu">
        <?php include '_vertical-menu.php' ?>
      </div>
    </div>
    <div class="content content--<?php echo $pageClass; ?>">
      <header class="header">
        <button class="header__trigger" title="open">
          <svg class="header__bars" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.1 63.86"><defs><style>.header__bars{fill:none;stroke:var( --color-text-inverted );stroke-miterlimit:10;stroke-width:10px;}</style></defs><title>Bars</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="header__bars" d="M0 5h72.1M0 31.74h72.1M72.1 58.86H0"/></g></g></svg>
        </button>
      </header>
      
      <!-- begin page content -->