<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Duffy | Web Designer</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
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
                <header id="splash" class="splash">
                  <div class="heading">
                    <h1 class="name effect fade-in-down">
                      <span class="effect lo-fi">David</span><br>
                      <span class="effect lo-fi-2">David</span><br>
                      <span class="effect lo-fi-3">David</span>
                    </h1>
                    <h1 class="name effect fade-in-down">
                      <span class="effect lo-fi-2">Duffy</span><br>
                      <span class="effect lo-fi">Duffy</span><br>
                      <span class="effect lo-fi-3">Duffy</span>
                    </h1>
                    <p class="subheading effect fade-in-down"><span>Leader, web designer,</span><span>analyst &amp; adventurer </span></p>
                  </div>
                  <div class="nav-mobile hide-for-medium">
                    <ul class="menu vertical">
                      <li><a type="button" class="button" data-toggle="offCanvas">Open</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#experience">Experience</a></li>
                      <li><a href="#portfolio">Portfolio</a></li>
                      <li><a href="#contact">Contact</a></li>
                    </ul>
                  </div>
                </header>
                <nav class="top-bar" data-topbar role="navigation" data-options="scrolltop:false">
                  <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-open="offCanvas"></button>
                    <span class="title-bar-title"><a href="#splash">David Duffy</a></span>
                  </div>
                </nav>
                <div id="about" class="about">
                  <h1>About</h1>
                  <p>David is an experienced, self-motivated problem solver and leader. He is laser-focused and analytical, able to navigate through challenges and ambiguity with poise. He communicates with clarity and empathy, and has a track record of building trusting, positive, and lasting relationships with team members, supervisors, and clientele. He is intelligent and determined, able to analyze obstacles, quickly learn and apply new skills, and rise to the occasion.</p>   
                </div>
                <div id="experience" class="experience">
                  <h1>Job Experience</h1>
                  <div class="job small-11 small-offset-1">
                    <h2 class="job-date">2014-Current</h2><span> | </span>
                    <h3 class="job-title">Design Manager</h3>
                    <p class="job-company">CrystalCommerce | Mountlake Terrace, WA</p>
                    <p class="job-responsibilities">Coordinator and supervisor of all web and graphic design projects. Developed productivity metrics and KPIs, doubling department utilization. Analyzed and reformed established web development processes, improving inter-departmental communication, project delivery speed, and site usability and performance.</p>
                  </div>
                  <div class="job small-11 small-offset-1">
                    <h2 class="job-date">2013-2014</h2><span> | </span>
                    <h3 class="job-title">Client Experience Representative</h3>
                    <p class="job-company">CrystalCommerce | Mountlake Terrace, WA</p>
                    <p class="job-responsibilities">Provided exemplary, personal support tailored to each specific client's needs. Introduced and supported clients through onboarding onto the inventory management and e-commerce platform.</p>
                  </div>
                  <div class="job small-11 small-offset-1 end">
                    <h2 class="job-date">2009-2013</h2><span> | </span>
                    <h3 class="job-title">Design and Service Coordinator</h3>
                    <p class="job-company">JH Surgery.com et al | Jackson, WY</p>
                    <p class="job-responsibilities">Designer, Inventory Manager, Customer Service Savant. Managed all sales, inventory control, and order processing on the e-commerce platform. Designed all web and print marketing assets. Built extensive knowledge of Adobe Creative Suite.</p>
                  </div>
                  <h1>Education</h1>
                  <p>
                    <span class="school">2009 University of Washington</span><br>
                    <span>European Studies, French Language Studies</span><br>
                  </p>
                  <p>
                    <span class="school">2004 Lake Washington High School</span><br>
                    <span>Marketing, Web Design</span><br>
                  </p>  
                </div>
                <div id="portfolio" class="portfolio">
                </div>
                <div id="contact" class="contact">
                </div>
              </div>


              <div class="small-12 medium-3 medium-order-1 columns sticky-container" data-sticky-container>
                <nav class="columns sticky" data-sticky data-options="marginTop:0;" data-sticky-on="large">
                  <?php include 'incl/menu.php' ?>
                </nav>
              </div>
            </div>
      </div>
    </div>
  </div>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/plugins/foundation.magellan.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
