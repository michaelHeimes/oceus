<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<?php if( have_rows('git_blocks') ): ?>
		<section class="in-touch">
		    <div class="contain">
		        <div class="in-touch-title">
		            <h2><?php the_field('git_title'); ?></h2>
		        </div>
		        <div class="in-touch-body">
			<?php 
				while( have_rows('git_blocks') ): the_row(); 
				$gitTitle = get_sub_field('title');
				$gitText = get_sub_field('text');
				$gitImage = get_sub_field('icon');
				$git_link = get_sub_field( 'link' );
				$git_link_target = $git_link['target'] ? $git_link['target'] : '_self';
			?>
			
				<div class="in-touch-item">
		            <div class="icon">
		                <?php echo wp_get_attachment_image( $gitImage, 'full' ); ?>
		            </div>
		            <div class="body">
		                <h3><a href="<?php echo $git_link['url']; ?>" target="<?php echo $git_link_target; ?>"><?php echo $gitTitle; ?></a></h3>
		                <p><?php echo $gitText; ?></p>
		            </div>
		        </div>
			
			
			
			<?php endwhile; ?>
		
		        </div>
		    </div>
		</section>
		
		<?php endif; ?>

    <section class="contact-form">
        <div class="contain">
            <div class="contact-form-copy">
                <h2>Questions?</h2>
                <p>We are here to help. If you have questions, comments, or need more information, simply fill out the form to contact us.</p>
            </div>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div>
    </section>

	
	<?php endwhile; ?>
<?php get_footer(); ?>
