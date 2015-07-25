<?php 
	
	/**
		@author: jlv
		@file: taxonomy-sede-valles-del-tuy.php
		@version: 1.0
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
						<img src="<?php echo get_template_directory_uri() ?>/static/images/sede-valles-del-tuy.jpg" alt="Valles del Tuy">
					</div>
					<div class="Block">
						<?php if(have_posts()): while(have_posts()): the_post() ?>
						<?php $headquarters = $court = ''; ?>
						<?php $municipalities = get_the_terms(get_the_ID(),'sede') ?>
						<?php foreach ($municipalities as $m) $headquarters .= $m->name.', '; ?>
						<?php $headquarters = trim($headquarters,', '); ?>
						<?php $courts = get_the_terms(get_the_ID(),'tribunal') ?>
						<?php foreach ($courts as $c) $court .= $c->name.', '; ?>
						<?php $court = trim($court,', '); ?>
						<div class="Hearing u-br-orange <?php echo ($flag == true)?'u-bg-lightgray':''; ?>">
							<div class="Hearing-date u-txt-lightgray u-bg-orange u-br-orange"><?php echo types_render_field("fecha", array('output'=>'normal')) ?></div>
							<div class="Hearing-title u-txt-orange u-br-orange"><a class="Hearing-link u-txt-orange" href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
							<?php if ($headquarters!=''): ?><div class="Hearing-headquarters u-txt-darkgray u-paragraph-size"><?php echo $headquarters ?></div><?php endif ?>
							<?php if ($court!=''): ?><div class="Hearing-courts u-txt-darkgray u-paragraph-size"> <?php echo $court ?></div><?php endif ?>
						</div>
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