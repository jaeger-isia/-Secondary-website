<?php
/*
 * Template Name: Home
 * Template Post Type: post, page, product
 */
if (is_user_logged_in()) {
    get_header();
}else{
    header ('Location:'.bloginfo("url").'/Main-website/connexion/');
} 
?>

<p>HOME</p>

<?php get_footer(); ?>

