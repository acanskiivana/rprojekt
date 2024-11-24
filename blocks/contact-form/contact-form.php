<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}

?>

<section class="contact-form container">
    <h2>Posalji nam upit</h2>
    <?php echo do_shortcode('[contact-form-7 id="326908b" title="Contact form 1"]');?>
</section>