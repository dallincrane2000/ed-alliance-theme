<footer>
    <div class="site-info">
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>
    </div>

    <!-- Footer Menu -->
    <nav class="footer-navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_id'        => 'footer-menu',
        ) );
        ?>
    </nav>

</footer>

<?php wp_footer(); ?> <!-- This function is necessary for WordPress to load scripts and styles -->

</body>
</html>
