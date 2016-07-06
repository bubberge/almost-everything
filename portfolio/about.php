<?php 
$pageTitle = 'About';

include 'incl/_header.php'; ?>
<body class="about">
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>

        <!-- Close button -->
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>

        <!-- Menu -->
        <?php include 'incl/_menu.php'; ?>
      </div>
        <!-- Nav and Content -->
      <?php include 'incl/_mobile-nav.php'; ?>
      <div class="row">
        <div class="small-10 small-offset-1">
      <?php include 'incl/_about.php'; ?>
        </div>
      </div>
    </div>
  </div>

  <?php include 'incl/_footer.php'; ?>