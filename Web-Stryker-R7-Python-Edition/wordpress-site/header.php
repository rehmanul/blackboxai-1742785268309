<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Python & AI Automation Expert">
    <meta name="keywords" content="Python, AI, Web Automation, Data Expert">
    <link rel="canonical" href="http://rehmanul.pro">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-indigo-700 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-32">
                <!-- Navigation -->
                <header class="pt-6">
                    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                        <div class="flex items-center flex-1">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <?php
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold text-white">
                                        <?php bloginfo('name'); ?>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        
                        <!-- Desktop Navigation -->
                        <div class="hidden md:block">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'flex space-x-8',
                                'container' => false,
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'link_before' => '<span class="text-base font-medium text-white hover:text-blue-200 transition-colors duration-200">',
                                'link_after' => '</span>'
                            ));
                            ?>
                        </div>

                        <!-- Mobile Navigation Button -->
                        <div class="md:hidden">
                            <button type="button" class="mobile-menu-button bg-blue-600 rounded-md p-2 inline-flex items-center justify-center text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </nav>
                </header>

                <!-- Mobile Navigation Menu -->
                <div class="mobile-menu hidden md:hidden">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'px-2 pt-2 pb-3 space-y-1',
                        'container' => false,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'link_before' => '<span class="text-base font-medium text-white hover:text-blue-200 block px-3 py-2 rounded-md">',
                        'link_after' => '</span>'
                    ));
                    ?>
                </div>

                <!-- Hero Content -->
                <?php if (is_front_page()) : ?>
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="text-center">
                        <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="<?php bloginfo('name'); ?>" class="w-32 h-32 rounded-full mx-auto mb-8 border-4 border-white shadow-lg object-cover">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Md Rehmanul Alam</span>
                            <span class="block text-2xl mt-3 text-blue-200">Python • AI • Web Automation Expert</span>
                        </h1>
                        <p class="mt-3 text-base text-blue-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl">
                            Transforming ideas into intelligent solutions through code
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                            <div class="rounded-md shadow">
                                <a href="#contact" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 md:py-4 md:text-lg md:px-10 btn-transition">
                                    Get in Touch
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#projects" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 md:py-4 md:text-lg md:px-10 btn-transition">
                                    View Projects
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Add mobile menu toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenuButton.setAttribute('aria-expanded', !expanded);
            });
        });
    </script>
