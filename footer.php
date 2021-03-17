</div>
<!--contenido  -->
<div class="clear"></div>

<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

    <div class="container">
        <nav id="footer-navigation" class="footer-navigation">
        <?php wp_nav_menu(array('container_class' => 'main-nav','theme_location' => 'menu_principal')) ?>
        </nav>

        <div class="clear"></div>
        <div id="inner-footer" class="center">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')) ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="logo giving agency" width="100%">
                </a>
            </div>
            <p class="copyright">Todos los derechos reservados. &copy; | <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
    </div>
    <div class="clear"></div>
</footer>

</div> <!-- page -->
</body>

</html>