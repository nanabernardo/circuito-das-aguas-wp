<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('child-style', get_stylesheet_uri());
});