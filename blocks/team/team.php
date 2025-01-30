<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}

$section_title = get_sub_field('section_title', 'option');
?>


<?php if ( have_rows('add_team_member', 'option') ) : ?>

    <section class="container">
        <h2>Nas tim</h2>
            <div class="team grid-container">

                <?php while( have_rows('add_team_member', 'option') ) : the_row(); ?>

                    <?php 
                    // Fetch ACF fields 
                    $team_name = get_sub_field('name_and_surname', 'option');
                    $team_proffesion_title = get_sub_field('proffesion_title', 'option');
                    $team_image = get_sub_field('image', 'option'); 
                    ?>
                    
                    <div class="team__column background-cover col-12 col-md-6 col-lg-3">

                        <?php if ( $team_image ) : ?>
                            <img src="<?php echo $team_image; ?>" alt="<?php the_field(''); ?>">
                        <?php endif; ?>
                        
                        <div class="team__info">
                            <?php if ( $team_name ): ?>
                                <h3 class="team__name"><?php echo esc_html( $team_name ); ?></h3>
                            <?php endif;?>
                            <?php if ( $team_proffesion_title ): ?>
                                <h4 class="team__position"><?php echo esc_html( $team_proffesion_title ); ?></h4>
                            <?php endif;?>
                           
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
    </section>
<?php endif; ?>

      
