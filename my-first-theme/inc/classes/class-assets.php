<?php
/**
 * Enque theme assets
 * 
 * @package AmilaFT
 */

 namespace AMILAFT\INC;

 use AMILAFT\Inc\Traits\Singleton;

 class Assets {
    use Singleton;
    protected function __construct() {

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // action and filters
        add_action( 'wp_enqueue_scripts', [$this, 'register_styles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'register_scripts'] );
    }

    public function register_styles() {
        $main_css_path = AMILAFT_DIR_URI. '/assets/css/main.css';
        wp_register_style( 'main-css', $main_css_path, [], filemtime(AMILAFT_DIR_PATH . '/assets/css/main.css'), 'all' );

        // Enqueue styles
        wp_enqueue_style( 'main-css' );
    }
    public function register_scripts() {
        $main_js = AMILAFT_DIR_URI. '/assets/js/main.js';
        wp_register_script( 'main-js', $main_js, [], filemtime(AMILAFT_DIR_PATH . '/assets/js/main.js'), true );

        // Enqueue Scripts.
		wp_enqueue_script( 'main-js' );
    }
 }