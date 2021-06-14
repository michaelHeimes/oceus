<?php
/*
/ Template Name: Specialized SubPage
*/
?>
<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section class="wysi">
		<div class="contain">
			<?php the_content(); ?>
		</div>
	</section>


	

	<?php if( have_rows('related_products') ): ?>
		<section class="related">
			<div class="contain">
				<h2 class="text-center"><?php the_field('related_title'); ?></h2>
				<div class="related-grid">
					
					<?php 

					$posts = get_field('related_products');
					
					if( $posts ): ?>
					    
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
								<div class="related-item">
								<div class="related-item-inner">
									<a class="related-item-image" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo wp_get_attachment_image_url( get_field('related_image'), "related" ); ?>);"></a>
									<div class="related-item-text">
										<h3><?php 
											if(get_field('related_title_alt')){
												the_field('related_title_alt');
											}else{
												the_title();
											} ?>
										</h3>
										<a href="<?php the_permalink(); ?>">Learn more <svg width="5" height="9"><use xlink:href="#angle"></use></svg></a>
									</div>
									</div>
								</div>	
									
							<?php endforeach; ?>
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>					
					
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if(get_field('cs_title')): ?>		
	<section class="bg-sand caseStudy">
		<div class="contain">
			<div class="cs-box">
				<div class="cs-left">
					<?php 
						$cs_link = get_field( 'cs_link' );
						$cs_link_target = $cs_link['target'] ? $cs_link['target'] : '_self';	
					?>
					<a class="block-link" href="<?php echo $cs_link['url']; ?>" target="<?php echo $cs_link_target; ?>" style="background-image: url(<?php echo wp_get_attachment_image_url( get_field('cs_image'), "case-study" ); ?>);">                   
                    <svg width="20" height="20"><use xlink:href="#plus"></use></svg>
                </a>
				</div>
				<div class="cs-right">
					<h2><?php the_field('cs_title'); ?></h2>
					<p><?php the_field('cs_text'); ?></p>
					<a class="btn" href="<?php echo $cs_link['url']; ?>" target="<?php echo $cs_link_target; ?>">Learn More</a>
				</div>
			</div>
		</div>
	</section>				
	<?php endif; ?>	

	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	
	
	
	
<?php endwhile; ?>	
<?php get_footer(); ?>
