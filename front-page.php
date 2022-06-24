<?php get_header();
while ( have_posts() ) : the_post(); ?>

	<div class="home-hero">
		<div id="fallback-img-wrap" class="bg"></div>
		<div id="video-wrap" class="bg"></div>
		<section>
			<div class="contain text-center">
				<h1><?php the_field('banner_title'); ?></h1>
			</div>
		</section>
	</div>



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
			<p class="home-about-cta text-center"><a class="orange-button" href="<?php echo $subhero_link['url'] ?>" target="<?php echo $subhero_link_target; ?>"><?php echo $subhero_link['title']; ?></a></p>
        <?php endif; ?>
    </div>
</section>

<?php
if( have_rows('solutions_repeater') ):
$blockCount = 0;
while( have_rows('solutions_repeater') ): the_row(); 
	
$blockCount++;endwhile;
endif;
?>

<?php if( have_rows('solutions_repeater') ): ?>
<section class="block-links">
    <div class="contain">
        <h2 class="text-center"><?php the_field('solutions_title'); ?></h2>
        <div class="<?php if($blockCount == 2 || $blockCount == 4):?>lg-2s<?php else:?>lg-3s<?php endif;?> gutter-30">
			<?php 
				while( have_rows('solutions_repeater') ): the_row(); 
				$solutionTitle = get_sub_field('title'); 
				$solutionLink = get_sub_field('link');	
				$imageDefault = get_sub_field('image_default');
			?>
			
			<div class="col">
                <a class="block-link" href="<?php echo $solutionLink ?>" style="background-image: url(<?php echo wp_get_attachment_image_url( $imageDefault, 'block-link' ); ?>);">
                    <div class="content">
                        <h3><?php echo $solutionTitle; ?></h3>
                    </div>
                    <svg width="20" height="20"><use xlink:href="#plus"></use></svg>
                </a>
            </div>
		
		
		
	<?php endwhile; ?>
	
		</div>
    </div>
</section>
<?php endif; ?>


<?php if( have_rows('products_repeater') ): ?>
	<section>
		<div class="contain">
			<h2 class="text-center"><?php the_field('products_title'); ?></h2>
			<div class="featured-slider">
				<?php 
				$featuredProdCount = 1;
				while( have_rows('products_repeater') ): the_row(); 
				$prodTitleBold = get_sub_field('title_bold');
				$prodTitleNorm = get_sub_field('title_normal');
				$prodText = get_sub_field('text');
				$prodImage = get_sub_field('image');
				$prod_link = get_sub_field('link');
				$prod_link_target = $prod_link['target'] ? $prod_link['target'] : '_self';
				?>
				
					<div class="slide">
						<div class="slide-wrap">
							<div class="slide-content">
								<h3><strong><?php echo $prodTitleBold; ?></strong> <?php echo $prodTitleNorm; ?></h3>
								<p><?php echo $prodText; ?></p>
								<a class="btn" href="<?php echo $prod_link['url']; ?>" target="<?php echo $prod_link_target; ?>">Learn More</a>
							</div>
							<div class="slide-image">
								<?php echo wp_get_attachment_image( $prodImage, 'product' ); ?>
							</div>
						</div>
					</div>
				
				<?php $featuredProdCount++;endwhile; ?>
			</div>
			<?php 
			$link = get_field('button_link');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
			<p class="home-products-cta text-center">
				<a class="orange-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</p>
			<?php endif;?>
		</div>
	</section>
<?php endif; ?>       


<?php
if( have_rows('use_cases') ):
$useCasesCount = 0;
while( have_rows('use_cases') ): the_row(); 
	
$useCasesCount++;endwhile;
endif;
?>

<?php if( have_rows('use_cases') ): ?>
	<section class="use-cases bg-gray">
		<div class="contain">
			<h2 class="text-center"><?php the_field('use_cases_title'); ?></h2>
			<div class="uc-grid <?php if($useCasesCount == 2 || $useCasesCount == 4):?>md-2s lg-4s<?php else:?>lg-3s<?php endif;?> gutter-30">
				<?php 
					while( have_rows('use_cases') ): the_row(); 
					$use_cases_Title = get_sub_field('heading'); 
					$use_cases_Text = get_sub_field('text');	
					$use_cases_Link = get_sub_field('page_link');
					$image = get_sub_field('image');	
				?>
			
					<div class="col">
						<a class="use-case-link" href="<?php echo $use_cases_Link; ?>">
							
							<?php if($image):?>
							<div class="img-wrap">
								<img src="<?php echo $image['sizes']['use-cases']; ?>" width="<?php echo $image['sizes']['use-cases-width']; ?>" height="<?php echo $image['sizes']['use-cases-height']; ?>" alt="<?php echo $image['caption']; ?>" />
								<div class="mask flex-center">
									Learn More
								</div>
							</div>
							<?php endif; ?>
								
							<div class="content">
								<h3><?php echo $use_cases_Title; ?></h3>
								<p><?php echo $use_cases_Text; ?></p>
							</div>

						</a>
					</div>
					
				<?php $useCasesCount++;endwhile; ?>

			</div>
		</div>
	</section>
<?php endif; ?>  


<?php get_template_part( 'inc/modules/getInTouch'); ?>
            

            

            



<?php endwhile; ?>
<?php get_footer(); ?>
