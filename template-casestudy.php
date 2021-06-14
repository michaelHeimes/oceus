<?php
/*
/ Template Name: Case Study
*/
?>
<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section class="wysi">
		<div class="contain">
			<?php the_content(); ?>
			
			<?php if( have_rows('images') ): ?>
				<div class="gallery">
					<?php 
						while( have_rows('images') ): the_row(); 
						$image = get_sub_field('image');
					?>
						<div class="slide">
							<?php echo wp_get_attachment_image( $image, 'gallery' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
		</div>
	</section>
	
	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	

	<?php endwhile; ?>
<?php get_footer(); ?>
