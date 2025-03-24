<?php get_header(); ?>

<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    <?php if (is_front_page()) : ?>
        <!-- Expertise Section -->
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Expertise</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Technical Proficiency
                    </p>
                </div>

                <div class="mt-10">
                    <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                        <!-- Python -->
                        <div class="relative">
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <i class="fab fa-python text-2xl"></i>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Python Development</p>
                            <p class="mt-2 ml-16 text-base text-gray-500">
                                Expert in Python programming with focus on automation, data processing, and AI applications.
                            </p>
                        </div>

                        <!-- AI -->
                        <div class="relative">
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <i class="fas fa-brain text-2xl"></i>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Artificial Intelligence</p>
                            <p class="mt-2 ml-16 text-base text-gray-500">
                                Implementing AI solutions for real-world problems using machine learning and deep learning.
                            </p>
                        </div>

                        <!-- Web Automation -->
                        <div class="relative">
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <i class="fas fa-robot text-2xl"></i>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Web Automation</p>
                            <p class="mt-2 ml-16 text-base text-gray-500">
                                Specialized in creating efficient web automation solutions using Selenium and other tools.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <div id="projects" class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center mb-12">
                    <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Projects</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Featured Work
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Project Cards -->
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => 'projects'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden project-card">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail', array('class' => 'h-12 w-12 rounded-md')); ?>
                                        <?php else : ?>
                                            <i class="fas fa-code text-2xl text-blue-500"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900"><?php the_title(); ?></h3>
                                        <p class="mt-1 text-sm text-gray-500"><?php echo get_the_tag_list('', ', '); ?></p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="text-base text-gray-500"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>

    <?php else : ?>
        <!-- Blog Posts -->
        <div class="max-w-7xl mx-auto">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class('mb-12'); ?>>
                    <header class="mb-4">
                        <h2 class="text-2xl font-bold">
                            <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-blue-600">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="text-sm text-gray-500 mt-2">
                            Posted on <?php the_date(); ?> by <?php the_author(); ?>
                        </div>
                    </header>

                    <div class="prose max-w-none">
                        <?php the_content(); ?>
                    </div>

                    <footer class="mt-4">
                        <?php
                        $categories_list = get_the_category_list(', ');
                        $tags_list = get_the_tag_list('', ', ');
                        if ($categories_list || $tags_list) :
                        ?>
                            <div class="text-sm text-gray-500">
                                <?php if ($categories_list) : ?>
                                    Categories: <?php echo $categories_list; ?>
                                <?php endif; ?>
                                <?php if ($tags_list) : ?>
                                    <br>Tags: <?php echo $tags_list; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </footer>
                </article>
            <?php endwhile; endif; ?>

            <!-- Pagination -->
            <div class="mt-8">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Previous', 'rehmanul-pro'),
                    'next_text' => __('Next', 'rehmanul-pro'),
                    'class' => 'flex justify-center space-x-4'
                ));
                ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
