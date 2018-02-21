<?php /*
Template name: Page randonnées
 */
?>
<?php get_header(); ?>
<div id="content" class="col-md-10">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
	<?php $bandeau_1 = get_field('bandeau_1');
		$bandeau_2 = get_field('bandeau_2');
		$bandeau_3 = get_field('bandeau_3'); //print_r($bandeau_1); ?>
	<section class="col-sm-7 col-md-8">
			<div id="images">
				<picture alt="<?php echo $bandeau_1['alt'];?>">
					<source media="(min-width:992px)" srcset="<?php echo $bandeau_1['sizes']['bd1']; ?>"></source>
					<source media="(min-width:768px) and (max-width:991px)" srcset="<?php echo $bandeau_1['sizes']['bd1sm']; ?>"></source>
					<source srcset="<?php echo $bandeau_1['sizes']['bd1xs']; ?>"></source>
					<img src="<?php echo $bandeau_1['sizes']['bd1xs']; ?>" alt="<?php echo $bandeau_1['alt'];?>" class="bd">
				</picture>
				<picture alt="<?php echo $bandeau_2['alt'];?>" class="hidden-sm hidden-xxs">
					<img src="<?php echo $bandeau_2['sizes']['bd2']; ?>" alt="<?php echo $bandeau_2['alt'];?>" class="bd">
				</picture>
			</div>
			<div id="texte">
				<header>
					<h1><?php the_title(); ?></h1>
					<?php if(get_field('sous-titre')){?><h2><?php the_field('sous-titre'); ?></h2><?php }?>
				</header>
				<dl id="ssmenu">
                	<dt>Découvrir  La région</dt>
                	<dd>
                		<?php wp_nav_menu(array(
							'theme_location' => 'troisieme',
							//'walker' => new Bootstrap_Walker_Nav_Menu(),
							//'menu_class' => 'nav navbar-nav'
						) );
						?>
                	</dd>
                </dl>
				<?php the_content(); ?>
			</div>
		</section>
		<aside class="col-sm-5 col-md-4">
			<div id="image" class="hidden-xs">
				<img src="<?php echo $bandeau_3['sizes']['bd3'];?>" alt="<?php echo $bandeau_3['alt'];?>" class="bd">
			</div>
			<?php get_template_part( 'menudroit' ); ?>
		</aside>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>