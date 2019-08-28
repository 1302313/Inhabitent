<?php

/**
 * The template for displaying about page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <div class="content-and-widget-flexbox">
            <article id="post-<?php the_ID(); ?>" class="find-us-page" <?php post_class(); ?>>

                <!-- Find Us Page Title-->
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <!-- Find Us Page Map -->
                <div class="map-icon"><a href="https://goo.gl/maps/jw9cBBuCB27cbApZ9"><i class="fas fa-map-marked-alt"></i></a></div>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.754406019309!2d-123.1381278!3d49.2633479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7edde857c28340ba!2sRED+Academy!5e0!3m2!1sen!2sca!4v1566257196371!5m2!1sen!2sca" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                <!-- .entry-content -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article><!-- #post-## -->


            <!-- Site Widget Area -->
            <?php get_sidebar(); ?>

        </div>
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->




<!-- Site Footer -->
<?php get_footer(); ?>