<?php
/**
 * Bootstraps the Theme
 * 
 * @package AmilaFT
 */

 namespace AMILAFT\INC;

 use AMILAFT\Inc\Traits\Singleton;

 class AMILAFT_THEME {
    use Singleton;
    protected function __construct() {

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // action and filters
        add_action( 'after_setup_theme', [$this, 'setup_theme'], );
    }

    /**
     * Setup theme
     * 
     * @return void
     */
    public function setup_theme() {
        /**
         * Let wordpress manage the document title
         * 
         * We didn't hard-code <title> tab in document head, and
         * expect wordpress to provide it for us.
         */
        add_theme_support( 'title-tag' );

        /**
         * Custom Logo
         * 
         * allow user to upload the logo of the site.
         * This is shown in theme customize 
         * 
         * @link https://developer.wordpress.org/themes/functionality/custom-logo/
         */
        add_theme_support( 'custom-logo', [
            'header-text' => ['site-title', 'site-description' ],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ] );
    }
 }