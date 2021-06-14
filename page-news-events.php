<?php get_header(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>
	<section class="wysi" style="padding-bottom:0;">
		<div class="contain">
			<?php the_content(); ?>
		</div>
	</section>
	<section class="blog-list">
		<div class="blog-wrap">
			
			<?php
				$args = array('post_type' => 'post', 'posts_per_page' => 7, 'paged' => $paged);
				$wp_query = new WP_Query($args);
					if($wp_query->have_posts()) : 
					while($wp_query->have_posts()) : 
					$wp_query->the_post();
			?>	
			
				<div class="blog-item">
					<?php
						if ('' != get_the_post_thumbnail()){ 
							$urlArray = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'IMAGESIZE');
							$heroImg = "background-image:url(". $urlArray[0] .");";  
						} else {
							$heroImg = "background-image:url(". get_bloginfo('template_url') ."/dist/img/blog-default.png);";
							
						}	
					?>
					<a class="blog-image" style="<?php echo $heroImg; ?>" href="<?php the_permalink(); ?>"></a>
					<div class="blog-content">
						<div class="blog-meta">
							<svg width="20" height="20"><use xlink:href="#calendar"></use></svg><span class="blog-date"><?php echo get_the_date('F j, Y'); ?></span><span class="blog-categories"><?php
								$taxonomy = 'category';
								// Get the term IDs assigned to post.
								$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
								
								// Separator between links.
								$separator = ', ';
								
								if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
								
								$term_ids = implode( ',' , $post_terms );
								
								$terms = wp_list_categories( array(
								    'title_li' => '',
								    'style'    => 'none',
								    'echo'     => false,
								    'taxonomy' => $taxonomy,
								    'include'  => $term_ids
								) );
								
								$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
								
								// Display post categories.
								echo  $terms;
								}	
							?>
							</span>
						</div>
						<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="blog-excerpt"><?php echo get_excerpt(200); ?> <a href="<?php the_permalink(); ?>">Read More&nbsp;<svg width="5" height="10"><use xlink:href="#angle"></use></svg></a>
						
					</div>
				</div>
			
			<?php endwhile;?>
			<?php 
				if (function_exists("pagination")) {
					echo '<div class="pagination">';
					pagination($wp_query->max_num_pages);
					echo '</div>';
				} 
			?>
			<?php else: ?>
			<?php endif; wp_reset_query(); ?>
			
		</div>
	</section>
	
	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	

<?php get_footer(); ?>
