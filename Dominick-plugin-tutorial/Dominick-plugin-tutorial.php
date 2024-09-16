<?php
/*
Plugin Name:  Dominick Plugin Tutorial
Plugin URI:   https://www.dominick-grodkowski.de/
Description:  A short little description of my first plugin developing tutorial. It will be displayed on the Plugins page in WordPress admin area.
Version:      1.0
Author:       Dominick Grodkowski
Author URI:   https://www.dominick-grodkowski.de/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Dominick-Plugin-Tutorial
Domain Path:  /languages
*/


function follow_me( $content ) {

// Only do this when a single post is displayed
	if ( is_single() ) {

// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles

		$content .= '<p class="follow-us">If you liked this article, then please checkout out my other works <a href="https://www.dominick-grodkowski.de/" title="Portfolio" target="_blank" rel="nofollow">in my Portfolio</a> and <a href="https://www.linkedin.com/in/dominick-grodkowski/" title="Linkedin" target="_blank" rel="nofollow">my Linkedin</a>.</p>';

	}

// Return the content
	return $content;

}

// Hook our function to WordPress the_content filter
add_filter( 'the_content', 'follow_me' );
