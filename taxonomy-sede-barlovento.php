<?php 
	
	/**
		@author: jlv
		@file: taxonomy-sede-barlovento.php
		@version: 2.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<div class="Block">
	<div class="Hearings Block-inner u-inner">
		<div class="Box Box--justify">
			<div class="Box Box--one">
				<div class="Hearings-title Block u-txt-orange u-br-orange"><?php single_term_title('Extensión &raquo; ') ?></div>
				<div class="Hearings-list Block">
					<div class="Block u-br-orange" style="margin-bottom:20px;border-bottom-width:1px;border-bottom-style:solid;">
						<img src="<?php echo get_template_directory_uri() ?>/static/images/sede-barlovento.jpg" alt="Barlovento">
					</div>
					<div class="Block">
						<div class="Hearing-head Block u-bg-orange u-txt-lightgray">
							<div class="Hearing-headDate Box">Fecha</div>
							<div class="Hearing-headNumOfActs Box">Número de actos</div>
							<div class="Hearing-headRecords Box">Expedientes</div>
							<div class="Hearing-headKinfOfAct Box">Tipo de Acto</div>
						</div>
						<?php if(have_posts()): while(have_posts()): the_post() ?>

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
				<?php get_sidebar('hearings') ?>
			</div>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>