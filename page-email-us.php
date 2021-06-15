<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

    <section class="contact-form">
        <div class="contain">
            <div class="contact-form-copy">
                <p>Write us for prompt answers to your questions or to set-up a time to discuss what Oceus can do for you.</p>
			    <h4><a href="/call-us">Call Us</a></h4>
			    <h4><a href="/locations">Locations</a></h4>
            </div>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div>
    </section>
	
	<?php endwhile; ?>
<?php get_footer(); ?>
