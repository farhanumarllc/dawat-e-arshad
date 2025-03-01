<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 *
 */

$pID = get_the_ID();
$author_id = $post->post_author;

// Post ACf fields
// Author profile image
if (function_exists('get_field') ) {
	$dtearsd_author_avatar = get_field('dtearsd_author_avatar', 'user_'.$author_id);
}

if(!$dtearsd_author_avatar){
	$dtearsd_author_avatar =  get_avatar_url($author_id);
}

// Get author name with fallback to display name
 if ( get_the_author_meta( 'first_name', $author_id ) || get_the_author_meta( 'last_name', $author_id ) ) {
	$dtearsd_author_name = get_the_author_meta( 'first_name', $author_id ) . ' ' . get_the_author_meta( 'last_name', $author_id );
} else if ( get_the_author_meta( 'display_name', $author_id ) ) {
	$dtearsd_author_name = get_the_author_meta( 'display_name', $author_id );
}

// Post Tags & Categories
$dtearsd_post_tags = get_the_tags($pID);
$dtearsd_post_categories = get_categories($pID);

?>

	
