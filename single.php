<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section class="wysi">
		<div class="contain">
			<h2 class="single-title"><?php the_title(); ?></h2>
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
			<?php the_content(); ?>
		</div>
	</section>
	
	<?php get_template_part( 'inc/modules/getInTouch'); ?>

	<?php endwhile; ?>

<?php get_footer(); ?>
