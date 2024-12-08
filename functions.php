<?php
// Enqueue styles for the child theme
function iloveai_enqueue_styles() {
    $parent_style = 'twentytwentyfour-style'; // This is the parent theme's style handle.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('iloveai-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );

    // Enqueue Google Fonts (Raleway)
    wp_enqueue_style('iloveai-custom-font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap', false);
}
add_action('wp_head', 'iloveai_enqueue_styles');

// Add a I LOVE AI link to the top center of blog posts
function iloveai_add_home_link_top_center() {
    if (is_single()) { // Only add I LOVE AI link on single blog post pages
        echo '<div class="home-link" style="text-align: center; margin-top: 20px;">
                <a href="' . esc_url(home_url('/')) . '" style="text-decoration: none; color: inherit; font-weight: inherit; font-size: 2em;">I LOVE AI</a>
              </div>';
    }
}
add_action('wp_body_open', 'iloveai_add_home_link_top_center');
?>
