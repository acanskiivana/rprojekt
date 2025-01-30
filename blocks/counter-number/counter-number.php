<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>

<?php if ( have_rows('counter_number_column') ) : ?>

    <section class="container grid-container counter-number counter-number--js">

        <?php while( have_rows('counter_number_column') ) : the_row(); ?>
            
            <?php 
            // Fetch ACF fields
            $counter_number = get_sub_field('counter_add_number');  
            $counter_text = get_sub_field('counter_add_text'); 
            ?>

            <?php if ( $counter_number ): ?>
                <div class="col-6 col-lg-3 counter-number__column">
                    <span class="counter-number__number" data-target="<?php echo esc_html( $counter_number ); ?>">0</span>
                    <?php if( $counter_text ): ?>
                        <p><?php echo esc_html( $counter_text ); ?></p>
                    <?php endif;?>
                </div>
            <?php endif;?>

        <?php endwhile; ?>

    </section>

<?php endif; ?>

 
