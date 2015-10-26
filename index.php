<?php 

	/**
		@author: jlv
		@file: index.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<div class="Slider">
	<div class="Slider-inner">
		<div class="Block u-inner"></div>
	</div>
</div>

<div class="Courts u-br-orange">
	<div class="Courts-inner">
		<div class="Block u-inner">
			<div class="Box Box--justify">
				<div class="Box">
					<a href="<?php bloginfo('url') ?>/sede/los-teques" class="BigButton u-bg-red u-br-darkred">
						<span class="Block BigButton-smallText u-txt-lightgray">Sede</span>
						<span class="Block BigButton-bigText u-txt-lightgray">Los Teques</span>
					</a>
				</div>
				<div class="Box">
					<a href="<?php bloginfo('url') ?>/sede/barlovento" class="BigButton u-bg-red u-br-darkred">
						<span class="Block BigButton-smallText u-txt-lightgray">Extensión</span>
						<span class="Block BigButton-bigText u-txt-lightgray">Barlovento</span>
					</a>
				</div>
				<div class="Box">
					<a href="<?php bloginfo('url') ?>/sede/valles-del-tuy" class="BigButton u-bg-red u-br-darkred">
						<span class="Block BigButton-smallText u-txt-lightgray">Extensión</span>
						<span class="Block BigButton-bigText u-txt-lightgray">Valles del Tuy</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="News u-bg-lightgray">
	<div class="News-inner">
		<div class="Block u-inner">
			<div class="Block">
				<div class="Block-inner">
					<span class="News-title u-txt-lightgray u-bg-orange">Noticias</span>
				</div>
			</div>
			<div class="Box Box--justify">
				<?php $p = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>'8')) ?>
				<?php if ($p->have_posts()): while($p->have_posts()): $p->the_post() ?>
				<div class="Post Box Post--home">
					<div class="Post-image">
						<a class="Post-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail('lsMediun') ?></a>
					</div>
					<div class="Post-date Post--homeDate u-bg-darkgray">
						<a class="Post-link" href="<?php the_permalink() ?>"><?php the_time('d M/Y') ?></a>
					</div>
					<div class="Post-title">
						<strong><a class="Post-link Post--homeTitle u-txt-darkgray" href="<?php the_permalink() ?>"><?php the_title() ?></a></strong>
					</div>
					<div class="Post-excerpt">
						<a class="Post-link Post--homeExcerpt u-txt-darkgray" href="<?php the_permalink() ?>"><?php the_excerpt() ?></a>
					</div>
				</div>
				<?php endwhile; endif; wp_reset_postdata() ?>
			</div>
			<div class="Block">
				<div class="Block-inner News--alignRight">
					<a href="<?php bloginfo('url') ?>/noticias" class="News-more u-txt-lightgray u-bg-orange">Ver más noticias</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>