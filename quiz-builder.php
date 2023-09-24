<?php
/*
Plugin Name: Quiz Builder
Description: Create interactive quizzes on your WordPress site.
Version: 1.0
Author: Joseph Jordan
*/

// Enqueue the JavaScript file
function quiz_builder_enqueue_scripts() {
    wp_enqueue_script('quiz-builder', plugins_url('/quiz-builder.js', __FILE__), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'quiz_builder_enqueue_scripts');

// Shortcode for displaying the quiz builder
function quiz_builder_shortcode() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'quiz-builder-template.php');
    return ob_get_clean();
}

add_shortcode('quiz_builder', 'quiz_builder_shortcode');
