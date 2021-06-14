<?php
/*
/ Template Name: Form Page
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

	<?php if(get_field('form_id')): ?>
    <section class="contact-form">
        <div class="contain">
            <div class="contact-form-copy">
                <h2><?php the_field('form_title'); ?></h2>
                <p><?php the_field('form_text'); ?></p>
            </div>
            <?php echo do_shortcode('[gravityform id="'. get_field('form_id') .'" title="false" description="false"]'); ?>
        </div>
    </section>
	<?php endif; ?>
	
	<?php endwhile; ?>
<?php get_footer(); ?>
