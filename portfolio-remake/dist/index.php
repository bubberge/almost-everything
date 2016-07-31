<?php
$pageTitle = '';
include 'incl/_header.php'; ?>
        <!-- page content goes in this container -->
        <div class="off-canvas-content body-content home" data-off-canvas-content>
          <div class="row">
            <div class="large-8 large-push-2 heading">
              <h1 class="small-title show-for-small-only">David Duffy</h1>
              <div class="subheading">
                <h2>Howdy!</h2>
                <p>I'm <span class="show-for-medium">David Duffy,</span> a web designer and developer.</p>
                <p>I love creative problem solving and challenging myself. I like to be a difference-maker.</p>
              </div>
              <ul class="subheading show-for-small-only vertical menu">
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <div class="circle-gen show-for-large">
                <?php include './incl/_circlediv.php';?>
              </div>
            </div>
          </div>
        </div>

      <!-- /page content  -->
<?php include 'incl/_footer.php';  ?>
