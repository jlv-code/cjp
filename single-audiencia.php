<?php 

	/**
		@author: jlv
		@file: single-audiencia.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

	<article class="SingleHearing Block">
		<div class="Block-inner u-inner">
			<div class="Box Box--one">
				<?php if(have_posts()): while(have_posts()): the_post() ?>
				<?php $headquarters = $court = $categories = $tags = ''; ?>

				<?php $headquarterss = get_the_terms(get_the_ID(),'sede') ?>
				<?php foreach ($headquarterss as $m) $headquarters .= $m->name.', '; ?>
				<?php $headquarters = trim($headquarters,', '); ?>
				
				<?php $courts = get_the_terms(get_the_ID(),'tribunal') ?>
				<?php foreach ($courts as $c) $court .= $c->name.', '; ?>
				<?php $court = trim($court,', '); ?>

				<?php $categories = get_the_terms(get_the_ID(),'category') ?>
				<?php foreach ($categories as $cat) $category .= $cat->name.', '; ?>
				<?php $category = trim($category,', '); ?>
				
				<?php $tags = get_the_terms(get_the_ID(),'post_tag') ?>
				<?php foreach ($tags as $t) $tag .= $t->name.', '; ?>
				<?php $tag = trim($tag,', '); ?>

				<div class="SingleHearing-title u-txt-black u-br-orange"><span class="u-txt-orange">Expediente</span> <?php the_title() ?></div>
				<div class="SingleHearing-status"><span class="u-txt-orange">Estatus</span> <?php echo types_render_field("estatus",array('output'=>'normal')) ?></div>
				<div class="SingleHearing-date u-txt-black u-bg-lightgray"><span class="u-txt-orange">Fecha de la Audiencia</span> <?php echo types_render_field("fecha", array('output'=>'normal')) ?></div>
				<div class="Box Box--justify">
					<div class="SingleHearing-headquarters Box u-txt-black"><span class="u-txt-orange">Sede</span> <?php echo $headquarters ?></div>
					<div class="SingleHearing-court Box u-txt-black u-br-lightgray"><span class="u-txt-orange">Tribunal</span> <?php echo $court ?></div>
				</div>
				<div class="Box Box--justify">
					<div class="SingleHearing-prosecutor Box u-txt-black"><span class="u-txt-orange">Fiscal del Ministerio</span> <?php echo types_render_field("fiscal-del-ministerio-publico", array('output'=>'normal')) ?></div>
					<div class="SingleHearing-prosecutor Box u-txt-black"><span class="u-txt-orange">Defensa</span> <?php echo types_render_field("defensa", array('output'=>'normal')) ?></div>
				</div>
				<div class="Box Box--justify">
					<div class="SingleHearing-victim Box u-bg-lightgray u-br-orange"><span class="u-txt-orange">Victima(s)</span> <?php echo types_render_field("victimas", array('output'=>'normal')) ?></div>
					<div class="SingleHearing-imputed Box u-bg-lightgray u-br-orange"><span class="u-txt-orange">Imputado(s)</span> <?php echo types_render_field("imputados", array('output'=>'normal')) ?></div>
				</div>
				<div class="SingleHearing-observations u-txt-black">
					<span class="Block SingleHearing--observations u-txt-orange u-br-orange">Observaciones</span>
					<?php echo types_render_field("observaciones", array('output'=>'normal')) ?>
				</div>
				<div class="Box Box--justify">
					<div class="SingleHearing-category Box u-txt-darkgray"><span class="Block u-txt-orange">Categorías</span> <?php echo $category ?></div>
					<div class="SingleHearing-tags Box u-txt-darkgray"><span class="Block u-txt-orange">Etiquetas</span> <?php echo $tag ?></div>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="Post Box--two">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</article>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>