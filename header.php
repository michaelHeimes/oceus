<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.png" />
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128051660-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	 
	  gtag('config', 'UA-128051660-1');
	</script>
</head>

<body <?php body_class(); ?>>
<div style="display:none;">
    <?php include_once('dist/icons/svg/symbols.svg'); ?>
</div>
<header class="masthead">
	<div class="contain wide">

		<a href="<?php bloginfo( 'url' ); ?>" class="logo">
			<img src="<?php bloginfo('template_url'); ?>/dist/img/oceus-logo.png" alt="Oceus">
		</a>

        <div id="desktop-nav" class="desktop-nav bg-blue">	
			<?php
				wp_nav_menu( array(
					'theme_location' => 'utility',
					'menu_class' => 'nav utility-nav',
					"title_li" => false,
					"container" => false
				) );
			?>
			
    		<?php
    			wp_nav_menu( array(
    				'theme_location' => 'header',
    				'menu_class' => 'nav main-nav',
    				"title_li" => false,
    				"container" => false,
					'link_before'    => '<span>',
					'link_after'     => '</span>'
    			) );
    		?>
        </div>
        <button type="button" class="hamburger" aria-label="Menu" arial-controls="desktop-nav"><div></div></button>
        <button type="button" class="hamburger" aria-label="Menu" arial-controls="mobile-nav"><div></div></button>
        <div class="mobile-nav" id="mobile-nav">
			<div class="mobile-nav-inner">
				<ul class="mobile-nav-inner-nav">
					<?php
						$mobilemenu = wp_nav_menu( array(
						    'theme_location' => 'header',
						    'container' => false,
						    'items_wrap' => '%3$s',
						    'echo' => false,
						) );
						echo $mobilemenu;
					?>
				</ul>
				<ul class="mobile-utility">
					<?php
						$mobileutil = wp_nav_menu( array(
						    'theme_location' => 'utility',
						    'container' => false,
						    'items_wrap' => '%3$s',
						    'echo' => false,
						) );
						echo $mobileutil;
					?>
				</ul>
			</div>
		</div>
	</div>
</header>
<div class="nav-backdrop"></div>