<?php if($pageExt) : ?>
<li><a href="/">Home</a></li>
<?php endif; ?>
<li><a href="/about">About</a></li>
<li class="nested-menu">
    <a id="port-link" href="<?php if ($pageExt) : ?>/<?php endif; ?>#portLoc">Portfolio</a>
    <ul class="menu vertical nested">
        <li><a href="/wedding-photography">Weddings</a></li>
        <li><a href="/engagement-photography">Engagements</a></li>
        <li><a href="/high-school-senior-photography">Seniors</a></li>
    </ul>
</li>
<li><a id="blog-link" href="<?php if ($pageExt) { echo 'http://blog.amygalbraith.com" target="_blank"'; } else { echo '#blogLoc'; } ?>">Blog</a></li>
<li><a href="/investment">Investment</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="https://amygalbraithphotography.shootproof.com" target="_blank">Proofs</a></li>