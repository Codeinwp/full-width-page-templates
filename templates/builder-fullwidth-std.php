<?php
/**
 * Template Name: Elementor Full Width Standard
 * Template Post Type: page
 *
 * A full width template inherited from the active theme
 *
 * @since   1.0.0
 * @version 1.0.0
 */

get_header();

do_action( 'elementor_before_content_wrapper' );

while ( have_posts() ) : the_post();
	do_action( 'elementor_page_elements' ); // Give your elements priorities so that they hook in the right place.
endwhile;

do_action( 'elementor_after_content_wrapper' );

get_footer();
