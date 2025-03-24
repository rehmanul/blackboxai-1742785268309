<!-- Contact Section -->
    <div id="contact" class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Contact</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Get in Touch
                </p>
            </div>

            <div class="mt-10 flex justify-center space-x-8">
                <a href="https://www.fiverr.com/s/AyRmoza" target="_blank" class="social-icon" aria-label="Fiverr Profile">
                    <i class="fas fa-globe text-3xl"></i>
                </a>
                <a href="https://github.com" target="_blank" class="social-icon" aria-label="GitHub Profile">
                    <i class="fab fa-github text-3xl"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" class="social-icon" aria-label="LinkedIn Profile">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
            </div>

            <div class="mt-8 text-center">
                <p class="text-base text-gray-500">
                    Based in Dhaka, Bangladesh • Available for Remote Work
                </p>
            </div>

            <?php if (is_active_sidebar('footer-widget-area')) : ?>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:justify-start space-x-6">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'flex space-x-6',
                        'container' => false,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'link_before' => '<span class="text-gray-400 hover:text-gray-300 transition-colors duration-200">',
                        'link_after' => '</span>'
                    ));
                    ?>
                </div>
                <p class="mt-8 text-center text-base text-gray-400 md:mt-0">
                    &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
