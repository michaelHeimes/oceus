<?php// if( have_rows('git_blocks') ): ?>
		<section class="in-touch has-border">
		    <div class="contain">
		        <div class="in-touch-title">
		            <h2><?php //the_field('git_title'); ?>Get In Touch</h2>
		        </div>
		        <div class="in-touch-body">
			        
			<?php 
/*
				while( have_rows('git_blocks') ): the_row(); 
				$gitTitle = get_sub_field('title');
				$gitText = get_sub_field('text');
				$gitImage = get_sub_field('icon');
				$git_link = get_field( 'link' );
				$git_link_target = $git_link['target'] ? $git_link['target'] : '_self';
*/
			?>
			
			<!--
				<div class="in-touch-item">
		            <div class="icon">
		                <?php echo wp_get_attachment_image( $gitImage, 'full' ); ?>
		            </div>
		            <div class="body">
		                <h3><a href="<?php echo $git_link['url']; ?>" target="<?php echo $git_link_target; ?>"><?php echo $gitTitle; ?> <svg width="9" height="16"><use xlink:href="#angle"></use></svg></a></h3>
		                <p><?php echo $gitText; ?></p>
		            </div>
		        </div>
			-->
			
			<div class="in-touch-item">
	            <div class="icon">
	                <img src="<?php bloginfo('template_url'); ?>/dist/img/getintouch-contact.png" alt="">
	            </div>
	            <div class="body">
	                <h3><a href="/contact-us">Contact <svg width="9" height="16"><use xlink:href="#angle"></use></svg></a></h3>
	                <p>Questions? We’re here to help with any inquiry 24/7.</p>
	            </div>
	        </div>
	        
	        <div class="in-touch-item">
	            <div class="icon">
	                <img src="<?php bloginfo('template_url'); ?>/dist/img/getintouch-buy.png" alt="">
	            </div>
	            <div class="body">
	                <h3><a href="/how-to-buy">Buy <svg width="9" height="16"><use xlink:href="#angle"></use></svg></a></h3>
	                <p>Put our comprehensive suite of solutions and services to work for you.</p>
	            </div>
	        </div>
	        
	        <div class="in-touch-item">
	            <div class="icon">
	                <img src="<?php bloginfo('template_url'); ?>/dist/img/getintouch-partner.png" alt="">
	            </div>
	            <div class="body">
	                <h3><a href="/about/partners">Partner <svg width="9" height="16"><use xlink:href="#angle"></use></svg></a></h3>
	                <p>Discover the advantage of an Oceus partnership.</p>
	            </div>
	        </div>

	        <div class="in-touch-item">
	            <div class="icon">
	                <img src="<?php bloginfo('template_url'); ?>/dist/img/getintouch-join.png" alt="">
	            </div>
	            <div class="body">
	                <h3><a href="/careers">Join <svg width="9" height="16"><use xlink:href="#angle"></use></svg></a></h3>
	                <p>Join a strong company with an exciting future.</p>
	            </div>
	        </div>


			<?php// endwhile; ?>
		
		        </div>
		    </div>
		</section>
	<?php// endif; ?>