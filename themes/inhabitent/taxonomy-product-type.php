<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area taxonomy-archive">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>
		<!-- .page-header -->
		<header class="page-header">

			<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>
			<h1> <?php echo $term->name; ?></h1>
			<div class="taxonomy-description">
				<p> <?php echo $term->description ?> </p>
			</div>
		</header>
		<div class="page-product-grid">

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
			<!-- Main Content -->
			<article id="post-<?php the_ID(); ?>" class="archive-product-item" <?php post_class(); ?>>

				<?php if (has_post_thumbnail()) : ?>
				<!-- Product Image -->
				<div class="archive-product-container">
					<div class="archive-product-image">
						<a href="%s">
							<?php esc_url(get_permalink()) ?>
							<?php the_post_thumbnail('large'); ?>
						</a>
					</div>
					<?php endif; ?>
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

				<?php if ('post' === get_post_type()) : ?>
				<div class="entry-meta">
					<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>

			</article><!-- #post-## -->

			<?php endwhile; ?>

		</div>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>