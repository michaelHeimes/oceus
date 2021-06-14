<?php
/*
/ Template Name: Sidebar Callout
*/
?>
<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section class="wysi has-callout">
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
		<div class="sidebar">
			<a class="block-link color-green" href="/solutions/oceus-in-action" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/action-callout.jpg');">
                <div class="content">
                    <h3>Oceus in Action</h3>
                    <p>Explore who and where our solutions connect, inform and protect</p>
                </div>
                <svg width="20" height="20"><use xlink:href="#plus"></use></svg>
            </a>
		</div>
	</section>
	
	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	

	<?php endwhile; ?>
<?php get_footer(); ?>
