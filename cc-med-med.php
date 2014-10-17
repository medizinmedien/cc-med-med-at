<?php
/*
Plugin Name: Custom Code: medizin-medien.at
Description: Site-specific functionality for medizin-medien.at like making grid columns responsive.
Author: Frank St&uuml;rzebecher
Version: 0.2
Plugin URI: https://github.com/medizinmedien/cc-med-med-at
GitHub Plugin URI: https://github.com/medizinmedien/cc-med-med-at
*/

/**
 * CSS adjustments since this site uses no child theme.
 */
function cc_medmed_adjust_css() {
	print '<style type="text/css">/*cc-med-med-at*/';

	// Responsive column grid on the front page.
	print '@media screen and (max-width: 800px){div.column-grid .column{float:none;margin-left:0;margin-right:0;width:auto;text-align:center;margin-bottom: 2em;}}';

	// After last upgrade Firefox outputs numbered list items when list-style-type
	// is undefined. Adjust for footer navigation.
	print '#footer #site-info .footer-nav ul li {list-style-type: none;}';

	print '</style>';
}
add_filter( 'wp_head', 'cc_medmed_adjust_css' );
