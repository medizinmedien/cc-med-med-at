<?php
/*
Plugin Name: Custom Code: medizin-medien.at
Description: Site-specific functionality for medizin-medien.at like making grid columns responsive.
Author: Frank St&uuml;rzebecher
Version: 0.1
GitHub Plugin URI: https://github.com/medizinmedien/cc-med-med-at
*/

/**
 * Make the Column Grid on the front page responsive.
 */
function medmed_exchange_css() {
	print '<style>@media screen and (max-width: 800px){div.column-grid .column{float:none;margin-left:0;margin-right:0;width:auto;text-align:center;margin-bottom: 2em;}}</style>';
}
add_filter( 'wp_head', 'medmed_exchange_css' );
