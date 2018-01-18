# Full-Width Templates
-------------
A composer library which injects, in WordPress Dashboard, a Full-Width option in the Page Template selector.

#### Supported Builders:
* A plain simple WordPress page
* Elementor

### Compatible themes?
At this moment this library ensures compatibility with the follwing WordPress themes(and more to come):
* [Hestia](https://wordpress.org/themes/hestia/) - by ThemeIsle
* [Hestia Pro](https://themeisle.com/themes/hestia-pro/) - by Themeisle
* [Edge](https://wordpress.org/themes/edge/) - By themefreesia  
* [Experon](https://wordpress.org/themes/experon/) - ThinkUpThemes  
* [Genesis](http://my.studiopress.com/themes/genesis/) - By StudioPress  
* [GeneratePress](https://wordpress.org/themes/generatepress/) - By Tom Usborne   
* [Storefront](https://wordpress.org/themes/storefront/) - by WooThemes/Automattic  
* [TwentyFourteen](https://wordpress.org/themes/twentyfourteen/) - by WordPress.org  
* [TwentyFifteen](https://wordpress.org/themes/twentyfifteen/) - by WordPress.org  
* [TwentySixteen](https://wordpress.org/themes/twentysixteen/) - by WordPress.org  
* [TwentyThirteen](https://wordpress.org/themes/twentythirteen/) - by WordPress.org  
* [TwentySeventeen](https://wordpress.org/themes/twentyseventeen/) - by WordPress.org   
* [Vantage](https://wordpress.org/themes/vantage/) - by Greg Priday  
* [Virtue](https://wordpress.org/themes/virtue/) - by Kadence Themes   
* [Enlightenment](https://wordpress.org/themes/enlightenment/) - by Daniel Tara
* [Actions](https://wordpress.org/themes/actions/) - by WPDevHQ
* [ActionsPro](https://wpdevhq.com/themes/actions-pro/) - by WPDevHQ

### How to use it?
Well, this is a Composer library so you will need to add this it as a dependency on your project( either plugin or a theme ) like this:
```
"require": {
    "codeinwp/full-width-page-templates": "master"
}
```
And run a via the terminal a `composer install` and hope that you have Composer installed globally.

The last step is the initialization. Call this wherever you like:
```
if ( class_exists( '\ThemeIsle\FullWidthTemplates' ) ) {
    \ThemeIsle\FullWidthTemplates::instance();
}
```

### Work with this repository?
To work directly with this repository, I use and recommend the following way.

Clone this repository inside the [mu-plugins](https://codex.wordpress.org/Must_Use_Plugins) WordPress directory. This way, we can be sure that the cloned version of this 
library will have priority before the one loaded from Composer.
After cloning you need to create a php file, like `load-fwt-lib.php`(I'm so bad at naming) and inside you will need to require the loader like this:
```
<?php
require_once( dirname( __FILE__ ) . '/full-width-page-templates/load.php' );
```

### How to make a theme compatible with the full-width template?

To add a new theme to the compatibility list, clone this repository(as we talked above) create a new directory with the
theme's name in the `themes` directory.
This theme directory supports two files:

* `inline-style.php` - A file loaded at the right moment to add an inline style
* `functions.php` - An optional file to add actions and filters.

Our goal here is to add a CSS snippet which will make sure that the page container width full.
So make use of the `inline-style.php` and add a snipet like this:
```
<?php
/* Support for the {Theme Name} theme */
$style = '.site-content {
    width: 100%;
    padding: 0;
    margin:0;
}';
wp_add_inline_style( '{theme-style}', $style );
```

Where `{theme-style}` must be an enqueued style.(For example, Twenty Seventeen has 'twentyseventeen-style')

Don't forget to add the new theme to this README.md ;)