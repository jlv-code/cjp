<?php 
	
	/**
		@author: jlv
		@file: page-antecedentes-penales.php
		@version: 2.0
		Template Name: Página de Antecedentes Penales
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
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
						<?php $p = new WP_Query(array('post_type'=>'antecedentes-penales','paged'=>$paged)) ?>
						<?php $flag = true; ?>

						<?php if($p->have_posts()): while($p->have_posts()): $p->the_post() ?>

						<div class="Hearing u-br-orange u-txt-darkgray <?php echo ($flag == true)?'u-bg-lightgray':''; ?>">
							<a href="<?php echo types_render_field('documento-pdf',array('output'=>'raw')) ?>"><?php the_title() ?></a>
						</div>
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