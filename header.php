<?php
/**
 * The header for the theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');

    body, h1, h2, h3, h4, h5, h6, a {
        font-family: 'Raleway', sans-serif !important;
    }
</style>
</head>
<body <?php body_class(); ?>>

<div class="home-link" style="position: absolute; top: 10px; left: 10px;">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
</div>
