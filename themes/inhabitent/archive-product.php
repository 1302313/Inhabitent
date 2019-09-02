<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area page-shop">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

		<header class="page-header">
			<h1>Shop Stuff</h1>

			<ul class="archive-product-taxonomies">
				<?php
					$list_taxonomy = array(
						'taxonomy' => 'product-type',
						'hide_empty' => true,
						'order' => 'ASC',
					);
					$terms = get_terms($list_taxonomy);
					?>
				<!-- Start loop for product type -->
				<?php foreach ($terms as $term) : ?>
				<li class="archive-product-taxonomies-list">
					<a href="<?= get_term_link($term); ?>">
						<?= strtoupper($term->name); ?>
					</a>
				</li>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</ul>

		</header><!-- .page-header -->
		<div class="page-product-grid">
			<?php /* Start the Loop */ ?>
			<?php
				// Get the Args
				$args = array(
					'post_type'         => 'product',
					'order'             => 'ASC',
					'orderby'          => 'title',
					'numberposts'       => '16',
				);
				// Set the Args
				$querys = get_posts($args);
				?>

			<!-- Main Content -->
			<?php foreach ($querys as $post) : ?>
			<?php setup_postdata($post) ?>

			<article id="post-<?php the_ID(); ?>" class="archive-product-item" <?php post_class(); ?>>

				<?php if (has_post_thumbnail()) : ?>

				<!-- Product Image -->
				<div class="archive-product-container">
					<div class="archive-product-image">
						<a href="<?php echo get_post_permalink()  ?>"><img class="product-img" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"></a>
					</div>



					<!-- Product Title and Price -->
					<div class="archive-product-meta">
						<!-- Product Title -->
						<span class="archive-product-title">
							<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
						</span>
						<!-- Product Price -->
						<span class="archive-product-price">
							$<?php echo CFS()->get('product_price'); ?>
						</span>
					</div>

				</div>
				<?php endif; ?>
			</article><!-- #post-## -->

			<?php endforeach; ?>

		</div>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>