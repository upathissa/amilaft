<?php
/**
 * Theme Functions
 * 
 * @package AmilaFT
 */

 if (!defined( 'AMILAFT_DIR_PATH')) {
    define ( 'AMILAFT_DIR_PATH', untrailingslashit( get_template_directory() ) );
 }

 if (!defined( 'AMILAFT_DIR_URI')) {
    define ( 'AMILAFT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
 }
// echo '<pre>';
// print_r(AMILAFT_DIR_PATH);
// echo '</br>';
// print_r(AMILAFT_DIR_URI);

// wp_die();

// get autoloader 
require_once AMILAFT_DIR_PATH.'/inc/helpers/autoloader.php';

// Bootsrap Theme
function amilaft_get_theme_instance() {
    \AMILAFT\Inc\AMILAFT_THEME::get_instance();

}
amilaft_get_theme_instance();