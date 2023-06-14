<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary', 'theme-textdomain' ),
            'secondary-menu' => __( 'Secondary', 'theme-textdomain' ),
            'footer-menu' => __( 'Footer', 'theme-textdomain' )
        )
    );
}
add_action( 'init', 'register_my_menus' );