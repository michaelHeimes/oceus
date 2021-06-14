<?php
		
	if ('' != get_the_post_thumbnail()){ 
		$urlArray = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero');
		$heroImg = "background-image:url(". $urlArray[0] .")"; 
	} elseif(is_singular('post')){
		$urlArray = wp_get_attachment_image_src(get_post_thumbnail_id(53), 'hero');
		$heroImg = "background-image:url(". $urlArray[0] .")";
		$news = true;
	}else {
		$heroImg = "";	
	}		
?>

<section class="hero" style="<?php echo $heroImg; ?>">
	<div class="contain">
		<h1 class="hero-title"><?php if($news === true){echo 'News & Events';}else {the_title();} ?></h1>
		<?php if(get_field('subtitle')) : ?>
			<h2 class="hero-subtitle"><?php the_field('subtitle'); ?></h2>
		<?php endif; ?>
	</div>
</section>
