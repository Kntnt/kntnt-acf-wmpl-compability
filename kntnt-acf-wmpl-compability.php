<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt compatibility plugin for ACF and WPML
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Prevents WPML to mess with ACF input fields.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


/* An extremely ugly hack to solve that ACF has elements that match
 * the CSS selector `.select2-search input` used by WPML to add
 * a magnify  glass. This removes that magnify glass from ACF fields.
 */
add_action( 'admin_head', function () {
	?>
    <style>
        .acf-input .select2-search input {
            background-image: none !important;
        }
    </style>
	<?php
} );
