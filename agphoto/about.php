<?php
$pageTitle = 'About';
$pageDescription = 'Amy Galbraith is a documentary Seattle wedding photographer and Jackson Hole wedding photographer. As a mountain wedding photographer and seattle senior portrait photographer, she strives to capture candid, natural, and emotion-driven images.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'about';
$pageClasses = 'about';
include 'incl/_header.php'; ?>
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
            <ul class="horizontal menu">
              <?php include 'incl/_menu.php'; ?>
            </ul>
        </div>
    </div>
    <div class="jumbotron">
        <div class="j-background"></div>
        <div class="j-overlay row">            
            <div class="j-overlay-content small-12 medium-6 medium-offset-6 columns">
                <img src="img/amy-galbraith-photography-logo.png" alt="amy galbraith photography logo, a circle with four small hand-drawn trees" />
                <div class="j-overlay-text show-for-medium">
                    <h1>Hi! My name is Amy.</h1>
                    <?php include 'incl/_aboutTxt.php'; ?>
                </div>
                <div class="j-arrow hide-for-medium">
                    <a id="page-scroll" href="#storyLoc" title="Read my story!">
                        <span>See my story down here!</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="a-slide">
        <img src="//placehold.it/300x200" />
        <img src="//placehold.it/200x300" />
        <img src="//placehold.it/300x300" />
        <img src="//placehold.it/200x300" />
        <img src="//placehold.it/300x200" />
        <img src="//placehold.it/400x200" />
        <img src="//placehold.it/200x300" />
        <img src="//placehold.it/300x200" />
    </div>
    <div class="row small-about-text hide-for-medium">
        <h2 class="module-heading text-center" id="storyLoc">Hi! My name is Amy.</h2>
        <div class="column small-10 small-offset-1">
            <?php include 'incl/_aboutTxt.php'; ?>
        </div>
    </div>
    <div class="row">
        <h2 class="module-heading text-center" id="faq">FAQ</h2>
        <div class="about-faq column small-10 small-offset-1">
            <p><span>How many weddings do you photograph per year?</span>I shoot 15-20 weddings per year. This number allows me to devote a lot of time to communicating with my couples and keeps the creativity flowing. I balance wedding work with portrait sessions and that keeps me quite busy during the summer months.</p>
            <p><span>How many edited files will we get from our wedding?</span>All wedding collections come with a flash drive of fully edited images with personal printing rights. Depending on the size of the wedding and hours of coverage, you can expect 500-800 images.</p>
            <p><span>Can you recommend other vendors you like working with?</span>Yes! Over the years we've worked with a myriad of wedding professionals and have plenty of recommendations for you from florists to makeup artists to videographers. Please visit our preferred vendor page HERE.</p>
            <p><span>How did you get into photography?</span>I have always been an artist, but I picked up my first DSLR when I was starting to get really into snowboarding. I spent my first couple of years photographing adventure sports (snowboarding, kayaking, mountain biking, etc). It wasn't until my neighbor at the time asked me to photograph her quaint mountain wedding in Jackson Hole that I knew I would end up photographing weddings. I fell in love with the spontaneity, creative potential, and high emotions that I captured. I'm lucky to say that I've found my passion and I love what I do!</p>
            <p><span>Do you travel for weddings?</span>Yes! We have photographed weddings all across Washington, Wyoming, Oregon and Idaho and absolutely love to travel. All weddings within 50 miles of Seattle or Jackson Hole do not incur a travel fee but please inquire about booking a wedding out-of-state or across the world. If you love our work, we are happy to work with you to make it happen!</p>
            <p><span>What's involved in booking you for our wedding?</span>First, let's meet! Whether it's over coffee or a cocktail or a chat on the phone, it's important for us to feel comfortable with each other. You will hear more about our process and ask us any questions you have. If you would like to move forward, we require a $1000 non-refundable retainer and a signed contract.</p>
            <p><span>How do we book you for an engagement or portrait session?</span>Again, it's best if we can chat first about what your needs and vision are for the session. After that, a non-refundable $325 session fee is due with a signed agreement. I'm happy to help with choosing a location and offer wardrobe advice.</p>
            <p><span>How would you describe you style?</span>Candid, natural, emotion-driven. We opt for less posing and more real moments. That being said, we know that it's always comfortable in front of the camera, so we can offer direction if needed.</p>
        </div>
    </div>
<?php include 'incl/_footer.php';  ?>