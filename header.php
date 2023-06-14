<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> <!-- This function is necessary for WordPress to load scripts and styles -->
</head>

<body <?php body_class(); ?>>

<header>
    <div class="site-branding">
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>
        </h1>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </div>

    <!-- Primary Menu -->
    <nav class="primary-navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'menu_id'        => 'primary-menu',
        ) );
        ?>
    </nav>

    <!-- Secondary Menu -->
    <nav class="secondary-navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'secondary-menu',
            'menu_id'        => 'secondary-menu',
        ) );
        ?>
    </nav>

</header>
