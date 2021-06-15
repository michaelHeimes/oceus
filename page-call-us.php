<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<?php if( have_rows('git_blocks') ): ?>
		<section class="in-touch">
		    <div class="contain">
		        <div class="in-touch-title">


			        <div class="contain">
			            <div class="contact-form-copy">
			                <p>Call us to discuss what Oceus can do for you.</p>
			                
						    <h4><a href="/email-us">Email Us</a></h4>
						    <h4><a href="/locations">Locations</a></h4>			            
			                
			            </div>
			        </div>


		        </div>
		        <div class="in-touch-body">
			<?php 
				while( have_rows('git_blocks') ): the_row(); 
				$gitTitle = get_sub_field('title');
				$gitText = get_sub_field('text');
			?>
			
				<div class="in-touch-item">
		            <div class="body">
		                <h3><?php echo $gitTitle; ?></h3>
		                <p><?php echo $gitText; ?></p>
		            </div>
		        </div>
			
			
			
			<?php endwhile; ?>
		
		        </div>
		    </div>
		</section>
		
		<?php endif; ?>

	
	<?php endwhile; ?>
<?php get_footer(); ?>
