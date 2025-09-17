<?php
/**
 * Plugin Name: Hello Shortcode
 * Description: Outputs a customizable message via shortcode [hello_message].
 * Version: 1.0.0
 */

function hello_message_shortcode($atts) {
    $atts = shortcode_atts(["name" => "World"], $atts, "hello_message");
    return "Hello, " . esc_html($atts["name"]) . "!";
}
add_shortcode("hello_message", "hello_message_shortcode");
