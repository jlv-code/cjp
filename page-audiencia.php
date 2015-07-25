<?php 
	
	/**
		@author: jlv
		@file: page-audiencia.php
		@version: 2.0
		Template Name: Página de Audiencias
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<div class="Block">
	<div class="Hearings Block-inner u-inner">
		<div class="Box Box--justify">
			<div class="Box Box--one">
				<?php if(have_posts()): while(have_posts()): the_post() ?>
				<div class="Hearings-title Block u-txt-orange u-br-orange"><?php the_title() ?></div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata() ?>
				<div class="Hearings-list Block">
					<div class="Block">
						<div class="Hearing-head Block u-bg-orange u-txt-lightgray">
							<div class="Hearing-headDate Box">Fecha</div>
							<div class="Hearing-headNumOfActs Box">Número de actos</div>
							<div class="Hearing-headRecords Box">Expedientes</div>
							<div class="Hearing-headKinfOfAct Box">Tipo de Acto</div>
						</div>
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
						<?php $p = new WP_Query(array('post_type'=>'audiencia','paged'=>$paged)) ?>
						<?php $flag = true; ?>

						<?php if($p->have_posts()): while($p->have_posts()): $p->the_post() ?>

						<?php //$headquarters = $tribunal = ''; ?>
						<?php //$headquarterss = get_the_terms(get_the_ID(),'sede') ?>
						<?php //foreach ($headquarterss as $m) $headquarters .= $m->name.', '; ?>
						<?php //$headquarters = trim($headquarters,', '); ?>
						<?php //$courts = get_the_terms(get_the_ID(),'tribunal') ?>
						<?php //foreach ($courts as $c) $tribunal .= $c->name.', '; ?>
						<?php //$tribunal = trim($tribunal,', '); ?>

						<?php $acts = types_child_posts("acto"); ?>
						<?php $numOfActs = count($acts); ?>
						<?php foreach ($acts as $act): ?>
						<?php $titlesActs[] = $act->post_title ?>
						<?php $kindOfActs[] = $act->fields['tipo-de-acto'] ?>
						<?php endforeach; ?>

						<div class="Hearing u-br-orange u-txt-darkgray <?php echo ($flag == true)?'u-bg-lightgray':''; ?>">
							<div class="Hearing-date u-br-orange"><?php echo types_render_field("fecha", array('output'=>'normal')) ?></div>
							<div class="Hearing-numOfActs Box"><?php echo $numOfActs ?></div>
							<div class="Hearing-RecordsActs Box">
								<?php for ($i=0;$i<count($titlesActs);$i++): ?>
								<div class="Hearing-innerRecordsActs Block u-br-darkgray">
									<div class="Hearing-records Box"><?php echo $titlesActs[$i] ?></div>
									<div class="Hearing-acts Box"><?php echo $kindOfActs[$i] ?></div>
								</div>
								<?php endfor; ?>
							</div>
						</div>
						<?php $numOfActs = '' ?>
						<?php $titlesActs = array() ?>
						<?php $kindOfActs = array() ?>
						<?php $flag = ($flag == false)?true:false; ?>
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata() ?>
					</div>
					<div class="Pagination Box--center"><?php the_pagination($p); ?></div>	
				</div>
			</div>
			<div class="Sidebar Box Box--two">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>