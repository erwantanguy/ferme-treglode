<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			<?php 
				if(is_home() || is_front_page()) :
					bloginfo('name');
				else :
					wp_title("", true);
				endif;
			?>
		</title>
		<meta name="author" content="Matias">
		<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />-->
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); echo '?ver=' . filemtime( get_bloginfo( 'stylesheet_url' ) ); ?>" type="text/css" media="screen" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php wp_head(); ?>
		<?php $image = get_field('logo', 'option'); ?>
		<meta name="verify-v1" content="/4AEuiavkJITY84MFva7hn3szBge8IwPDXMdsailbo4=" />
	</head>

	<body <?php body_class(); ?>>
		<div id="fond">
			<div id="page" class="container">
				<header role="banner" id="menuG" class="col-md-2 navbar navbar-static-top bs-docs-nav">
			    <div class="navbar-header">
			      <button aria-expanded="false" aria-controls="bs-navbar" data-target="#bs-navbar" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <?php //print_r($image[sizes]); ?>
			      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php 
			      	if(!$image){bloginfo('name');} else{echo'<img src="'.$image[url].'" alt="'.$image['alt'].'" class="logo" />';} 
			      ?></a>
			    </div>
			    <nav class="collapse navbar-collapse" id="bs-navbar">
			      	<?php wp_nav_menu(array(
						'theme_location' => 'premier',
						'walker' => new Bootstrap_Walker_Nav_Menu(),
						'menu_class' => 'nav navbar-nav'
					) );
					?>
					
			    
				    <div id="moteurrecherche" class="nav navbar-nav navbar-right col-lg-1">
						<ul id="socialmedia" class="nav navbar-nav navbar-right">
		            <?php if(get_option('facebook')){?>
									<li class="fb"><a href="<?php echo get_option('facebook'); ?>" title="Facebook <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<?php }?>
								<?php if(get_option('twitter')){?>
									<li><a href="<?php echo get_option('twitter'); ?>" title="Twitter <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<?php }?>
								<?php if(get_option('instagram')){?>
									<li><a href="<?php echo get_option('instagram'); ?>" title="Instagram <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<?php }?>
								<?php if(get_option('pinterest')){?>
									<li><a href="<?php echo get_option('pinterest'); ?>" title="Pinterest <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								<?php }?>
								<?php if(get_option('flickr')){?>
									<li class="hidden-md"><a href="<?php echo get_option('flickr'); ?>" title="Flickr <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
								<?php }?>
								<?php if(get_option('spotify')){?>
									<li><a href="<?php echo get_option('spotify'); ?>" title="Spotify <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-spotify"></i></a></li>
								<?php }?>
								<?php if(get_option('mail')){?>
									<li class="mail"><a href="mailto:<?php echo get_option('mail'); ?>" title="Mail à <?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a></li>
								<?php }?>
		         	 </ul>
				  </div>
				  
			  </nav>
			</header>