<?php get_header(); ?>
<div id="content" class="col-md-10">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
	<?php $bandeau_1 = get_field('bandeau_1');
		$bandeau_2 = get_field('bandeau_2');
		$bandeau_3 = get_field('bandeau_3'); //print_r($bandeau_2); ?>
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
				<?php the_content(); ?>
			</div>
		</section>
		<aside class="col-sm-5 col-md-4">
			<div id="image" class="hidden-xs">
				<img src="<?php echo $bandeau_3['sizes']['bd3'];?>" alt="<?php echo $bandeau_3['alt'];?>" class="bd">
			</div>
			<?php get_template_part( 'menudroit' ); ?>
			<div class="bull-ins">
				<h3><b>Stages et les randonnées</b></h3>
				<p>Merci de nous retourner le bulletin d'inscription ci-dessous :</p>
				<a href="http://www.ferme-letreglode.fr/wp-content/uploads/2018/01/bulletin_inscription_treglode.pdf" target="_blank">Bulletin d'inscription</a>
			</div>
		</aside>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>