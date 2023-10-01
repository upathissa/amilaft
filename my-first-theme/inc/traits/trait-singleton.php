<?php
namespace AMILAFT\Inc\Traits;
/**
 * Singleton Trait
 * 
 * @package AMILAFT
 */

 trait Singleton {
    /**
     * Protected class constructor to prevent direct object creation
     */
    protected function __construct() {
    }

    /**
     * Prevent object cloning
     */
    final protected function __clone() {
    }

    final public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

        if (!isset( $instance[ $called_class ])) {
            $instance[ $called_class ] = new $called_class();

            do_action( 'amilaft_theme_singleton_init%s', $called_class );
        }

        return $instance[ $called_class ];

    }
 }

