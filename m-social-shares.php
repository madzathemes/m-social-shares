<?php
/*
Plugin Name: M Social Share
Description: Social Share Plugin
Author: Madars Bitenieks
Version: 1.0
*/

include_once ('inc/functions.php');

function m_social_shares_scripts() {
    wp_register_style( 'm-social-shares',  plugin_dir_url( __FILE__ ) . 'inc/style.css' );
    wp_enqueue_style( 'm-social-shares' );
}
add_action( 'wp_enqueue_scripts', 'm_social_shares_scripts' );
?>
