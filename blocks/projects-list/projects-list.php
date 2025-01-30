<?php
// Ensure ACF is available
if ( ! function_exists( 'get_field' ) ) {
    return;
}

$projects_add = get_field( 'add_projects', 'option' );
$section_title = get_field( 'section_title', 'option' );

    // Backend (Editor) View
    if ( $is_preview ) {
        echo '<div class="options-block-placeholder">';
        echo '<strong>' . __( 'Options Block', 'textdomain' ) . '</strong>';
        echo '<p>' . __( 'This block displays data from the Projects list page. Go to "Projects list" to update the content.', 'textdomain' ) . '</p>';
        echo '</div>';
        return;
    }
?>

<section class="container">
    <?php if ( $section_title ) : ?>
        <h2><?php echo esc_html( $section_title ); ?></h2>
    <?php endif; ?>

    <?php if ( have_rows('add_projects', 'option') ) : ?>
        <div class="projects-list grid-container">
            <?php while( have_rows('add_projects', 'option') ) : the_row(); ?>

                <?php 
                // Fetch ACF fields 
                $project_name = get_sub_field( 'project_name', 'option' );
                $project_year = get_sub_field( 'project_year', 'option' );
                $project_location = get_sub_field( 'project_location', 'option' );
                $project_link = get_sub_field( 'project_link', 'option' );
                ?>

                <?php echo $project_link ? '<a href="#" class="projects-list__column col-12 col-md-6">' : '<div class="projects-list__column col-12 col-md-6">'; ?>
            
                <?php if ( $project_name ) : ?>
                    <h3><?php echo esc_html( $project_name ); ?></h3>
                <?php endif; ?>
                <?php if ( $project_year ) : ?>
                    <p><span><?php echo esc_html( $project_year ); ?> - </span>
                <?php endif; ?>
                <?php if ( $project_location ) : ?>
                    <span><?php echo esc_html( $project_location ); ?></span></p>
                <?php endif; ?>

                <?php echo $project_link ? '</a>' : '</div>'; ?>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>