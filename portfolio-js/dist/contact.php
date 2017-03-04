<?php

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $message = $_POST['message'];
        $message = wordwrap($message, 70, "\r\n");
        $from = 'Demo Contact Form';
        $to = 'daviduffy1@gmail.com';
        $subject = 'Portfolio Site Contact Form Submission';
        $body ="From: $name\n E-Mail: $email\n Website: $website\n Message:\n $message";


        if ( $name && $email && $message ) {
            mail ($to, $subject, $body, $from);
            $result ='<div class="success callout">Thank You! I will be in touch</div>';
        } else {
            $result ='<div class="alert callout">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }

$pageTitle = 'Contact';
$pageBlurb = "Want to see what happens when an idea comes to life?<br class='show-for-large'><span class='show-for-small'>&nbsp;</span>Let's chat!";
include 'incl/_header.php'
?>
<div class="row">
    <div class="medium-6 medium-centered columns">
        <?php echo $result; ?>
    </div>
</div>
<div class="row contact content">
    <form class="medium-6 medium-centered columns" method="post" action="contact.php" data-abide>
        <div data-abide-error class="alert callout" style="display: none;">
            <p><i class="fi-alert"></i> There are some errors in your form.</p>
        </div>
        <div>
            <label for="name">Name
                <input type="text" id="name" name="name" placeholder="Herb Derson" aria-describedby="name for use in contact form" required>
                <span class="form-error">
                    Yo, you gotta fill this out, it's required.
                </span>
            </label>
        </div>
        <div>
            <label for="email">Email
                <input type="email" id="email" name="email" placeholder="herb@derson.com" aria-describedby="email for use in the contact form" required>
                <span class="form-error">
                      I need your email if you want me to get back in touch with you!
                </span>
            </label>
        </div>
        <div>
            <label for="website">Website Address
                <input type="text" id="website" name="website" placeholder="www.herbertderson.com" aria-describedby="website url for use in the contact form" data-abide-ignore>
            </label>
        </div>
        <div>
            <label for="message">Message
                <textarea id="message" name="message" rows="5" placeholder="My hedgehog needs a website." aria-describedby="message for use in the contact form"></textarea>
                <span class="form-error">
                      Well, if there's no message, what's the point?
                </span>
            </label>
        </div>
        <input type="submit" id="submit" name="submit" class="button secondary" value="Send Message"></a>
    </form>
</div>

<?php include 'incl/_footer.php';  ?>