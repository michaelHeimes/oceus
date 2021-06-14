<?php
/*
/ Template Name: Landing Page
*/
?>

<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section>
	    <div class="contain narrow text-center">
	        <h2 class="small-margin"><?php the_field('subhero_title'); ?></h2>
	        <?php the_field('subhero_text'); ?>
	        <?php 
		        $subhero_link = get_field( 'subhero_link' );
		        if($subhero_link) {
			        $subhero_link_target = $subhero_link['target'] ? $subhero_link['target'] : '_self';
			    }
		        if($subhero_link) : ?>
				<p class="home-about-cta"><a href="<?php echo $subhero_link['url'] ?>" target="<?php echo $subhero_link_target; ?>"><?php echo $subhero_link['title']; ?> &nbsp;<svg width="5" height="10"><use xlink:href="#angle"></use></svg></a></p>
	        <?php endif; ?>
	    </div>
	</section>

	<?php if( have_rows('solutions_repeater') ): ?>
		<section class="block-links bg-sand">
		    <div class="contain">
		        <h2 class="text-center"><?php the_field('solutions_title'); ?></h2>
		        <div class="lg-2s gutter-30">
					<?php 
						while( have_rows('solutions_repeater') ): the_row(); 
						$solutionTitle = get_sub_field('title'); 
						$solutionText = get_sub_field('text');	
						$solutionLink = get_sub_field('link');	
						$solutionLink_target = $solutionLink['target'] ? $solutionLink['target'] : '_self';
						$solutionColor = get_sub_field('color');	
						$imageDefault = get_sub_field('image_default');
						$imageHover = get_sub_field('image_hover');
					?>
					
					<div class="col">
		                <a class="block-link color-<?php echo $solutionColor; ?>" href="<?php echo $solutionLink['url'] ?>" target="<?php echo $solutionLink_target; ?>" style="background-image: url(<?php echo wp_get_attachment_image_url( $imageHover, "block-link" ); ?>);">
			                <div class="block-link-bg" style="background-image: url(<?php echo wp_get_attachment_image_url( $imageDefault, "block-link" ); ?>);"></div>
		                    <div class="content">
		                        <h3><?php echo $solutionTitle; ?></h3>
		                        <p><?php echo $solutionText; ?></p>
		                    </div>
		                    <svg width="20" height="20"><use xlink:href="#plus"></use></svg>
		                </a>
		            </div>
				
				
				
			<?php endwhile; ?>
			
				</div>
		    </div>
		</section>
		<?php endif; ?>


	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	
	
	<?php endwhile; ?>
<?php get_footer(); ?>
