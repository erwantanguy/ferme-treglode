<div id="menuD">
	<?php
	if( have_rows('petit_menu','options') ):
	$li = 1;
	//var_dump($link);
	?>
	<ul class="second">
	    <?php while ( have_rows('petit_menu','options') ) : the_row();
	    	if( have_rows('lien') ):
			    while ( have_rows('lien','options') ) : the_row();
			    	if( get_row_layout() == 'link_in' ):
			        	$link = get_sub_field('link');$link = $link[0];
			        elseif( get_row_layout() == 'link_out' ):
			        	$link = get_sub_field('link');
			        endif;
			    endwhile;
			endif;//print_r($link);
		?>
		<li<?php if($li===2){ echo ' class="news"';} ?>>
	        <a href="<?php echo $link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/pucecarre_vertf.gif" alt="puce verte" /> <?php the_sub_field('ancre_du_lien'); ?></a>
		</li>
	    <?php $li++;endwhile;?>
	</ul>
	<?php endif; ?>
	<div class="info">
		<?php wp_nav_menu(array(
			'theme_location' => 'deuxieme',
			'walker' => new Bootstrap_Walker_Nav_Menu(),
			'menu_class' => 'nav navbar-nav'
		) );
		?>
    	<?php if(is_home()){$info = get_field('linfo_en_plus', 'options');}elseif(is_page()){$info = get_field('linfo_en_plus');}//print_r($info); ?>
 		<img src="<?php echo $info['sizes']['infoplus']; ?>" alt="<?php $info['alt']; ?>" class="deco" /></div>
 		<?php
	if( have_rows('supplement','options') ):
	$li = 1;
	//var_dump($link);
	?>
	<ul id="contextuel">
	    <?php while ( have_rows('supplement','options') ) : the_row();
	    	if( have_rows('lien') ):
			    while ( have_rows('lien','options') ) : the_row();
			    	if( get_row_layout() == 'link_in' ):
			        	$link = get_sub_field('link');$link = $link[0];
			        elseif( get_row_layout() == 'link_out' ):
			        	$link = get_sub_field('link');
			        endif;
			    endwhile;
			endif;
		?>
		<li<?php if($li===2){ echo ' class="news"';} ?>>
	        <a href="<?php echo $link; ?>"><?php the_sub_field('ancre_du_lien'); ?></a>
		</li>
	    <?php $li++;endwhile;?>
	</ul>
	<?php endif; ?>
	<?php get_sidebar('ma_sidebar'); ?>
	<?php if(get_field('map')){?>
		<ul class="contextuel">
			<li><a href="<?php the_field('lien_map'); ?>"><?php if(get_field('ancre_du_lien_map_video')){the_field('ancre_du_lien_map_video');}else{?>Agrandir le plan<?php }?></a></li>
			<li id="map">
				<div class="embed-responsive embed-responsive-16by9">
					<?php the_field('map'); ?>
				</div>
			</li>
		</ul>
	<?php } ?>
</div>