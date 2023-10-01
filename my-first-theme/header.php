<?php
/**
 * Theam Header
 * 
 * @package Amila-First Theme
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php language_attributes() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class()?> >
<?php 
    if (function_exists( 'wp_body_open') ) {
        wp_body_open();
    }
    ?>
