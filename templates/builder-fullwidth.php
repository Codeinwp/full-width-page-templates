<?php
/**
 * Template Name: Elementor Full Width Blank
 * Template Post Type: page
 *
 * Blank template with minimal HTML required for a page to run
 *
 * @since   1.0.0
 * @version 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php
		do_action( 'elementor_content_body_before' );

		do_action( 'elementor_before_content_wrapper' );

		while ( have_posts() ) : the_post();
			do_action( 'elementor_page_elements' ); // Give your elements priorities so that they hook in the right place.
		endwhile;

		do_action( 'elementor_after_content_wrapper' );

		do_action( 'elementor_content_body_after' );
		wp_footer();
		?>
	</body>
</html>
<?php
