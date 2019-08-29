<?php

/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area single-product-page">
	<main id="main" class="site-main" role="main">

		<section class="single-product-container-section" ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="single-product-container" <?php post_class(); ?>>

				<div class="single-product-image">
					<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>
				</div>

				<div class="single-product-info">

					<?php the_title('<h1 class="single-product-title">', '</h1>'); ?>

					<div class="single-product-price">
						Price: $<?php echo CFS()->get('product_price'); ?>
					</div>


					<div class="single-product-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages(array(
								'before' => '<div class="page-links">' . esc_html('Pages:'),
								'after'  => '</div>',
							));
							?>
					</div>
					<div class="social-buttons">
						<button type="button" class="white-btn"><i class="fab fa-facebook"></i> Like</button>
						<button type="button" class="white-btn"><i class="fab fa-twitter"></i> Tweet</button>
						<button type="button" class="white-btn"><i class="fab fa-pinterest"></i> Pin</button>
					</div>
				</div>

			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. 
			?>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>