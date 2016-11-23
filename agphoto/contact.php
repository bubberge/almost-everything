<?php
$pageTitle = 'Contact';
$pageDescription = 'Amy Galbraith is a documentary Seattle wedding photographer and Jackson Hole wedding photographer. As a mountain wedding photographer and seattle senior portrait photographer, she strives to capture candid, natural, and emotion-driven images.';
$pageKeywords = 'jackson hole wedding photography, seattle wedding photography, jackson hole wedding photographer, seattle wedding photographer, seattle engagement photographer';
$pageExt = 'contact';
$pageClasses = 'contact';
include 'incl/_header.php'; ?>
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-medium" type="button" data-open="offCanvas"></button>
            <?php include 'incl/_horizontal-menu.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="column small-12 medium-5 medium-offset-1 show-for-medium">
            <img src="img/other/amy-galbraith-wedding-engagement-senior-photography-portland-piwowarski.jpg" alt="A bride and groom sharing a private moment in an enchantent hidden alley, as captured by Amy Galbraith" />
        </div>
        <div class="column small-12 medium-5 medium-order">
            <div id="wufoo-z1qlr1zr1rr5n5w">
            Fill out my <a href="https://amygalbraith.wufoo.com/forms/z1qlr1zr1rr5n5w">online form</a>.
            </div>
            <div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">HTML Forms powered by <a href="http://www.wufoo.com">Wufoo</a>.</div>
            <script type="text/javascript">var z1qlr1zr1rr5n5w;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'amygalbraith',
            'formHash':'z1qlr1zr1rr5n5w',
            'autoResize':true,
            'height':'797',
            'async':true,
            'host':'wufoo.com',
            'header':'show',
            'ssl':true};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { z1qlr1zr1rr5n5w = new WufooForm();z1qlr1zr1rr5n5w.initialize(options);z1qlr1zr1rr5n5w.display(); } catch (e) {}};
            var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');</script>
        </div>
    </div>
<?php include 'incl/_footer.php';  ?>