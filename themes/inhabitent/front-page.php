<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- Section: Shop Stuff -->
        <section class="product-info container">
            <h2>Shop Stuff</h2>

            <?php
            $args = [
                'taxonomy' => 'product-type',
                'hide_empty' => false,
            ];

            $terms = get_terms($args);


            // var_dump(get_template_directory());
            // var_dump(get_template_directory_uri());

            foreach ($terms as $term) {
                $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';

                echo '<img src="' . $icon . '" />';
                echo $term->name;
                echo $term->description;
                echo get_term_link($term);
            }
            ?>

        </section>
        <!-- Section: Inhabitent Journal -->
        <?php
        $args = array(
            'post_type'         => 'post',
            'order'             => 'DESC',
            'numberposts'       => '3',
        );

        $querys = get_posts($args);
        ?>

        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php foreach ($querys as $post) :
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'single');
                endforeach; ?>

                <?php wp_reset_postdata() ?>
                <?php get_template_part('template-parts/content'); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>
            <?php foreach ($querys as $post) :
                setup_postdata($post);
                get_template_part('template-parts/content', 'none');

            endforeach; ?>
            <?php wp_reset_postdata() ?>
        <?php endif; ?>
        <!-- Section: Latest Adventures -->


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>