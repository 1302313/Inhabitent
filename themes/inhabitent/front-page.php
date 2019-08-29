<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <header class="front-page-banner">
            <img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg">
        </header>
        <!-- Section: Shop Stuff -->
        <section class="product-info container">
            <h2>Shop Stuff</h2>

            <?php
            // Get the Args
            $args = [
                'taxonomy' => 'product-type',
                'hide_empty' => false,
            ];
            // Set the Args
            $terms = get_terms($args);

            echo '<div class="front-page-shop-category-container">';
            foreach ($terms as $term) {
                echo '<div class="front-page-shop-category">';

                $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
                $name = $term->name;
                $description = $term->description;

                echo '<img src="' . $icon . '" />';
                echo '<p>' . $description . '</p>';
                echo '<a href="' . get_term_link($term) . '">' . $name . ' Stuff</a>';

                echo "</div>";
            }
            echo '</div>'
            ?>
        </section>

        <!-- Section: Inhabitent Posts -->
        <section class="journal-info-container">
            <h2>Inhabitent Journal</h2>
            <?php
            // Get the Args
            $args = array(
                'post_type'         => 'post',
                'order'             => 'DESC',
                'orderby'          => 'date',
                'numberposts'       => '3',
            );
            // Set the Args
            $querys = get_posts($args);
            ?>

            <!-- Loop -->
            <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
            <?php endif; ?>

            <div class='front-page-journal-container'>
                <?php foreach ($querys as $post) : ?>
                <?php setup_postdata($post); ?>

                <div class='front-page-post-container'>
                    <div class='front-page-post-thumbnail'>
                        <?php the_post_thumbnail('large'); ?>
                    </div>


                    <div class='front-page-post-wrapper'>
                        <div class='front-page-post-date'>
                            <?php the_date(); ?>
                        </div>
                        <div class='front-page-post-comment'>
                            / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                        </div>

                    </div>
                    <div class='front-page-post-title'>
                        <h3>
                            <a href="<?php echo get_the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h3>
                    </div>

                    <div class='front-page-post-permalink'>
                        <a href="<?php echo get_the_permalink(); ?>" rel="bookmark">Read Entry</a>
                    </div>



                </div>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata() ?>
            <?php endif; ?>

        </section>

        <!-- Section: Latest Adventures -->

        <section class="adventures-info-container">

            <h2>Latest Adventures</h2>
            <div class="adventures-info-list">

                <div class="story-container-canoe-girl">

                    <div class="story-info">
                        <h3><a href="#" rel="bookmark">Getting Back to Nature in a Canoe</a></h3>
                        <a class="white-btn" href="#">Read More</a>
                    </div>
                </div>



                <div class="story-container-beach-bonfire">

                    <div class="story-info">
                        <h3><a href="#" rel="bookmark">A Night with Friends at the Beach</a></h3>
                        <a class="white-btn" href="#">Read More</a>
                    </div>
                </div>



                <div class="story-container-mountain-hikers">

                    <div class="story-info">
                        <h3><a href="#" rel="bookmark">Taking in the View at Big Mountain</a></h3>
                        <a class="white-btn" href="#">Read More</a>
                    </div>
                </div>



                <div class="story-container-night-sky">

                    <div class="story-info">
                        <h3><a href="#" rel="bookmark">Star-Gazing at the Night Sky</a></h3>
                        <a class="white-btn" href="#">Read More</a>

                    </div>
                </div>

            </div>
            <p class="more-adventures">
                <a href="" class="btn">More Adventures</a>
            </p>

        </section>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>