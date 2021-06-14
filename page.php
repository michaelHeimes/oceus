<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section class="wysi">
		<div class="contain">
			<?php the_content(); ?>
			<?php if( have_rows('leaders') ): ?>
				<div class="leader-grid">
				<?php 
					while( have_rows('leaders') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
				?>
					<div class="leader-block">
						<?php echo wp_get_attachment_image( $image, 'leader', "", array( "class" => "leader-image" ) ); ?>
						<div class="leader-block-right">
							<h2 class="leader-name"><?php echo $name; ?></h2>
							<div class="leader-title"><?php echo $title; ?></div>
							<p class="leader-text"><?php echo $text; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	
	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	

	<?php endwhile; ?>
<?php get_footer(); ?>
