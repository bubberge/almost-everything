<?php if($pageExt) : ?>
<li><a href="/">Home</a></li>
<?php endif; ?>
<li><a href="/about">About</a></li>
<li>
    <a id="port-link" href="<?php if ($pageExt) : ?>/<?php endif; ?>#portLoc">Portfolio</a>
    <ul class="menu<?php if ( $vertical ) echo ' vertical nested is-active'?>">
        <li><a href="/weddings">Weddings</a></li>
        <li><a href="/engagements">Engagements</a></li>
        <li><a href="/seniors">Seniors</a></li>
    </ul>
</li>
<li><a id="blog-link" href="<?php if ($pageExt) { echo 'http://blog.amygalbraith.com" target="_blank"'; } else { echo '#blogLoc'; } ?>">Blog</a></li>
<li><a href="/investment">Investment</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="http://amygalbraith.smugmug.com/Event-Photos" target="_blank">Proofs</a></li>