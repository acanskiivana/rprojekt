<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>

<?php // Load values and assign defaults. ?>

    <div class="container grid-container number-counter">
        <div class="col-12 col-md-4">
            <span class="number-counter__number" data-target="150">0</span>
            <p>Lorem, ipsum dolor.</p>
        </div>
        <div class="col-12 col-md-4">
            <span class="number-counter__number" data-target="300">0</span>
            <p>Lorem, ipsum dolor.</p>
        </div>
        <div class="col-12 col-md-4">
            <span class="number-counter__number" data-target="500">0</span>
            <p>Lorem, ipsum dolor.</p>
        </div>
    </div>
