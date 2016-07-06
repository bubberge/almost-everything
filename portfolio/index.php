<?php
$pageTitle = '';

include 'incl/_header.php'; ?>
<body class="index">
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>

        <!-- Close button -->
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>

        <!-- Menu -->
        <?php include 'incl/menu.php' ?>
      </div>

      <div class="off-canvas-content" data-off-canvas-content>
        <div class="row">
          <div class="small-11 small-push-1 medium-9 medium-order-2 columns">
            <header id="splash" class="splash fade-in fade-in-down-delay">
              <div class="heading">
                <h1 class="name">
                  <span class="lo-fi">David</span><br>
                  <span class="lo-fi-2">David</span><br>
                  <span class="lo-fi-3">David</span>
                </h1>
                <h1 class="name">
                  <span class="lo-fi-2">Duffy</span><br>
                  <span class="lo-fi">Duffy</span><br>
                  <span class="lo-fi-3">Duffy</span>
                </h1>
                <p class="subheading"><span>Leader, web designer,</span><span>analyst &amp; adventurer </span></p>
              </div>
              <div class="nav-mobile hide-for-medium">
                <ul class="menu vertical">
                  <li><a href="./about.php">About</a></li>
                  <li><a href="./experience.php">Experience</a></li>
                  <li><a href="./portfolio.php">Portfolio</a></li>
                  <li><a href="./contact.php">Contact</a></li>
                </ul>
              </div>
            </header>

            <?php 
              include 'incl/_about.php';
              include 'incl/_experience.php';
              include 'incl/_portfolio.php';
              include 'incl/_contact.php';
            ?>
          </div>

          <div class="medium-3 show-for-medium medium-order-1 columns sticky-container" data-sticky-container>
            <nav class="columns sticky" data-sticky data-options="marginTop:0;" data-sticky-on="large">
              <?php include 'incl/_menu.php' ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php include 'incl/_footer.php' ?>