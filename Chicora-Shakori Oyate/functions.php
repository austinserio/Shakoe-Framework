<?php 

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */

add_filter('the_content', 'remove_empty_p', 20, 1);
function remove_empty_p($content){
    $content = force_balance_tags($content);
    return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}

//add thumbnail support
add_theme_support( 'post-thumbnails' ); 

add_filter( 'the_content', function( $excerpt ) {
  return str_replace( [ '<p>&nbsp; ', '<p>&nbsp;', "<p>" ], '<p>', $excerpt );
}, 999, 1 );

add_filter( 'wp_insert_post_data', 'rm_wp_insert_post_data', '99', 2 );
function rm_wp_insert_post_data ( $data , $postarr ) {
   return str_replace("\xc2\xa0", " ", $data); 
}

?>