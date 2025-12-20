        <script
            src="https://code.jquery.com/jquery-3.7.1.js" integrity=
            "sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
        </script>
        <?php wp_footer() ?>
        <footer class="footer_section">
            <p class="footer_copyright">
                © 2025 voroshilov.olexandro07@mail.ru. Все права защищены
            </p>
            <nav>
                <a href="<?php echo home_url(); ?>" class="home_link">Главная</a>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'footer_nav',
                )); ?>
            </nav>
        </footer>
    </body>
</html>