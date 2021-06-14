<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<section class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
		<div class="contain">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="post-content">
		<div class="contain">
			<main>
				<?php the_content(); ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</section>

	<?php endwhile; ?>
<?php get_footer(); ?>
