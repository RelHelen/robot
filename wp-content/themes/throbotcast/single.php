<?php
defined("ABSPATH") or die;
$post = $wp_query->post;

if ( in_category( 'dron' ) ) { //ID категории
    include( TEMPLATEPATH.'/single-cast.php' );
} else {
    include( TEMPLATEPATH.'/single-default.php' );
     
}
?>

