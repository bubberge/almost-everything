<!-- contact content -->
<div class="header-spacer"></div>
<div class="row normal">
    <div class="medium-6 medium-centered columns">
        <?php echo $result; ?>
    </div>
</div>
<div class="row normal contact content">
    <form class="medium-6 medium-centered columns" method="post" action="index.php#contact" data-abide>
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
        <input type="submit" id="submit" name="submit" class="button secondary" value="Send Message">
    </form>
</div>