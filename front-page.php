<?php get_header();
while ( have_posts() ) : the_post(); ?>

<?php if( have_rows('slides') ): ?>
	<div class="home-hero">
		<div class="slider-element">
		<?php 
			while( have_rows('slides') ): the_row(); 
			$image = get_sub_field('image');
			$titleOne =  get_sub_field('title_one');
			$titleTwo =  get_sub_field('title_two');
			$text =  get_sub_field('text');
		?>
			
			<div class="slide" style="background-image:url(<?php echo wp_get_attachment_image_url( $image, "hero" ); ?>);">
		        <div class="slide-content">
		            <h1><strong><?php echo $titleOne; ?></strong> <?php echo $titleTwo; ?></h1>
		            <p><?php echo $text; ?></p>
		        </div>
		    </div>
		
		<?php endwhile; ?>
		</div>
	    <div class="slide-controls">
	        <div class="slide-progress">
	            <div class="slide-progress-current"></div>
	            <div class="slide-progress-bar"></div>
	            <div class="slide-progress-last"></div>
	        </div>
	        <button type="button" class="btn-left">
	            <svg width="8" height="15"><use xlink:href="#angle" /></svg>
	        </button>
	        <button type="button" class="btn-right">
	            <svg width="8" height="15"><use xlink:href="#angle" /></svg>
	        </button>
	    </div>
	</div>
<?php endif; ?>



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

<?php
$image = get_field( 'callout_image' );
$title = get_field( 'callout_title' );
$body = get_field( 'callout_body' );
$callout_link = get_field( 'callout_link' );
$callout_link_target = $callout_link['target'] ? $callout_link['target'] : '_self';
?>

<section class="callout">
    <div class="contain">

        <div class="callout-image-wrap">
            <a href="<?php echo $callout_link['url'] ?>" target="<?php echo $callout_link_target; ?>" class="callout-image" style="background-image:url(<?php echo $image; ?>)">
                <svg width="20" height="20"><use xlink:href="#plus"></use></svg>
            </a>
        </div>

        <div class="callout-body">
            <?php if ( $title ) : ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ( $body ) : ?>
                <p><?php echo $body; ?></p>
            <?php endif; ?>

            <?php if ( $callout_link ) : ?>
                <a class="btn" href="<?php echo $callout_link['url'] ?>" target="<?php echo $callout_link_target; ?>">
                    <?php echo $callout_link['title']; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if( have_rows('solutions_repeater') ): ?>
<section class="block-links">
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


<?php if( have_rows('products_repeater') ): ?>
	<section class="bg-sand">
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
		</div>
	</section>
<?php endif; ?>       

<?php get_template_part( 'inc/modules/getInTouch'); ?>
            

            

            



<?php endwhile; ?>
<?php get_footer(); ?>
