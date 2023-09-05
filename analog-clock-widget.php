<?php
/*
Plugin Name: Analog Clock Widget
Description: A simple analog clock widget.
Version: 1.0
Author: Your Name
*/

// Enqueue the JavaScript file
function enqueue_analog_clock_widget_script() {
    wp_enqueue_script('analog-clock-widget', plugin_dir_url(__FILE__) . 'analog-clock-widget.js', [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_analog_clock_widget_script');

// Create a shortcode to display the analog clock
function analog_clock_shortcode() {
    ob_start();
    include "style1.php";
    ?>
    
    <?php
    return ob_get_clean();
}

add_shortcode('analog_clock', 'analog_clock_shortcode');
