<?php 

// Register acf blocks
function rijekaprojekt_register_acf_blocks() {
    register_block_type( get_template_directory() . '/blocks/hero' );
    register_block_type( get_template_directory() . '/blocks/flow-slider/' );
    register_block_type( get_template_directory() . '/blocks/counter-number/' );
    register_block_type( get_template_directory() . '/blocks/two-columns/' );
    register_block_type( get_template_directory() . '/blocks/contact-form/' );
    register_block_type( get_template_directory() . '/blocks/expand-slider/' );
    register_block_type( get_template_directory() . '/blocks/testimonial-slider/' );
    register_block_type( get_template_directory() . '/blocks/projects-list/' );
    register_block_type( get_template_directory() . '/blocks/team/' );
    register_block_type( get_template_directory() . '/blocks/history-slider/' );
}
add_action('init', 'rijekaprojekt_register_acf_blocks');


function my_acf_json_load_point( $paths ) {
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );



?>