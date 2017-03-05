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

$pageTitle = '';
$pageDescription = 'A portfolio site created by David Duffy (aka daviduffy), a web designer and developer from Seattle, Washington.';
$pageExt = '';
include 'incl/_header.php'; ?>

        <div class="off-canvas-content body-content home" data-off-canvas-content>

            <div class="row">

                <main>

                    <section id="splash" class="splash">
                        
                        <?php include 'incl/_splash.php' ; ?>                          

                    </section>

                    <section id="about" class="about">

                      <?php include 'incl/_about.php' ; ?>

                    </section>

                    <section id="portfolio">
        
                        <?php include 'incl/_portfolio.php' ; ?>
                        
                    </section>

                    <section id="contact">

                        <?php include 'incl/_contact.php' ; ?>

                    </section>

                </main>
            
          </div>
          
<?php include 'incl/_footer.php';  ?>
