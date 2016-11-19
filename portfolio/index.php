<?php
$pageTitle = '';
$pageDescription = 'A portfolio site created by David Duffy (aka daviduffy), a web designer and developer from Seattle, Washington.';
$pageExt = '';
include 'incl/_header.php'; ?>
        <!-- page content goes in this container -->
        <div class="off-canvas-content body-content home" data-off-canvas-content>
          <div class="row">
            <div class="large-8 large-push-2 column heading">
              <h1 class="small-title show-for-small-only">David Duffy</h1>
              <div class="subheading">
                <h2>Howdy!</h2>
                <p>I'm <span class="show-for-medium">David Duffy, </span>a web designer and developer.</p>
                <p>I live at the intersection between design and code. It's an easy place to be a difference-maker.</p>
              </div>
              <ul class="subheading show-for-small-only menu">
                <li><a href="about">About</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <?php include './incl/_circlediv.php';?>

      <!-- /page content  -->
<?php include 'incl/_footer.php';  ?>
