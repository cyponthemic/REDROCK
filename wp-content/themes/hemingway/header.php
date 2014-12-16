<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php wp_title('|', true, 'right'); ?></title>
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="big-wrapper">
	
			<div class="header-cover section bg-dark-light no-padding">
		
		<?php global $post; ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large', false, '' );
			if(is_shop()){$src=wp_get_attachment_image_src( get_post_thumbnail_id(9),'large', false, '' );}
			?>
		
		
		
				<div  class="fullheight header section" style="background-image: url(
				<?php if (is_product()) : ?><?php header_image(); ?>
				<?php elseif (has_post_thumbnail()) : ?><?php echo $src[0];; ?>
				
				<?php else : ?><?php header_image(); ?><?php endif; ?>);"
				data-top="background-position:50% 50%;" data-top-bottom="background-position: 50% 100%;"
				>
							
					<div class="header-inner section-inner">
										
							<div class="blog-info">
							
								<img class=" redrocklogo" src="<?php echo get_template_directory_uri()?>/images/logo-800.png">
							
							</div> <!-- /blog-info -->
							
						
									
					</div> <!-- /header-inner -->
								
				</div> <!-- /header -->
			
			</div> <!-- /bg-dark -->
			
			<div class="navigation section no-padding bg-dark">
			
				<div class="navigation-inner section-inner">
				
					<div class="toggle-container hidden">
			
						<div class="nav-toggle toggle">
								
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
							
							<div class="clear"></div>
						
						</div>
						
						<!--
<div class="search-toggle toggle">
								
							<div class="metal"></div>
							<div class="glass"></div>
							<div class="handle"></div>
						
						</div>
-->
						
						<div class="clear"></div>
					
					</div> <!-- /toggle-container -->
					
					
				
					<ul class="blog-menu">
					
						<?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary', 
								'walker' => new hemingway_nav_walker
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
						
						<div class="clear"></div>
												
					 </ul>
					 
					 <ul class="mobile-menu">
					
						<?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary', 
								'walker' => new hemingway_nav_walker
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
						
					 </ul>
				 
				</div> <!-- /navigation-inner -->
				
			</div> <!-- /navigation -->