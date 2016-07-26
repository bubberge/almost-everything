<?php
$pageTitle = 'Contact';
include 'incl/_header.php'; ?>
          <div class="row contact content">
          <form id="myForm" method="post" class="medium-6 medium-centered columns" data-abide>
            <div>
              <label>Name<span>*</span></label>
              <small class="error hide">Your name is required.</small>
              <input type="text" placeholder="Full Name" required />
            </div>
            <div>
              <label>Email<span>*</span></label>
              <small class="error hide">Please enter an email address.</small>
              <input type="email" placeholder="email@address.com" required>
            </div>
            <div>
              <label>Website Address</label>          
              <input type="url" placeholder="http://www.yoursite.com">
            </div>
            <div>
              <label>Your Message<span>*</span></label>
              <small class="error hide">A message is required.</small>
              <textarea placeholder="Enter your message here" rows="6" required></textarea>
            </div>
          <input type="submit" class="button secondary small" value="Send Message"></button></a>
        </form>
        </div>

      <!-- /page content  -->
<?php include 'incl/_footer.php';  ?>