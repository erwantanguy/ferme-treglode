<?php get_header(); ?>
	<div id="content" class="col-md-10">
		<?php $bandeau_1 = get_field('bandeau_1', 'option');
		$bandeau_2 = get_field('bandeau_2', 'option');
		$bandeau_3 = get_field('bandeau_3', 'option'); //print_r($bandeau_1); ?>
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
					<h1><?php the_field('titre', 'option'); ?></h1>
					<h2><?php the_field('sous-titre', 'option'); ?></h2>
				</header>
				<?php the_field('texte', 'option'); ?>
				<div class="news">
						<h2><a href="http://www.ferme-letreglode.fr/actualites/">Actualités</a></h2>
    				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
    				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            
    				<div class="news-equestre">
        				<div class="news-front">
            				<li class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            				<li class="art-img"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail();?></a></li>
        				</div><!-- .news-front -->

        				<div class="news-text">
							<div class="art-txt"><?php the_content(); ?>
							<p style="text-align:right"><small>Publié le : <?php the_date(); ?></small></p>
						</div>	
        				</div><!-- .news-text -->
    				</div><!-- .news-equestre -->
    				<?php endwhile; wp_reset_postdata(); ?>
               
				</div><!-- .news -->
			</div><!-- #texte -->
			<aside id="court">
				<picture class="col-xs-4">
					<a href="<?php echo get_page_link('32'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo_cours.gif"; ?>"></a>
				</picture>
				<picture class="col-xs-4">
					<a href="<?php echo get_page_link('38'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo_stages.gif"; ?>"></a>
				</picture>
				<picture class="col-xs-4">
					<a href="<?php echo get_page_link('40'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo-rando.gif"; ?>"></a>
				</picture>
			</aside>
		</section>
		<aside class="col-sm-5 col-md-4">
			<div id="image" class="hidden-xs">
				<img src="<?php echo $bandeau_3['sizes']['bd3'];?>" alt="<?php echo $bandeau_3['alt'];?>" class="bd">
			</div>
			<?php get_template_part( 'menudroit' ); ?>
		</aside>
	</div>
<?php get_footer(); ?>