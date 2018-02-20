<?php
/* Support for the Online Shop theme */
$style = '
		.page-template-builder-fullwidth-std #page {
			display: none;
		}
		.page-template-builder-fullwidth-std .site-content .breadcrumbs {
			display: none;
		}
	';
wp_add_inline_style( 'online-shop-style', $style );
