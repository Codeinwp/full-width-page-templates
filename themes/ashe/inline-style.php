<?php
	/* Support for the Ashe theme */
	$ashe = '
			@media (min-width: 979px) {
				.page-template-builder-fullwidth-std #main-nav {
					overflow: hidden;
				}
			}
		';
	wp_add_inline_style( 'ashe-style', $ashe);
