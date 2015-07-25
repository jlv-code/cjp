<?php 

	/**
		@author: jlv
		@file: page-news.php
		@version: 1.0
		Template Name: Página de Noticias
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>


<div class="Block">
	<div class="Category Block-inner u-inner">
		<div class="Box Box--justify">
			<div class="Box Box--one">
				<?php if(have_posts()): while(have_posts()): the_post() ?>
				<div class="Category-title Block u-txt-orange u-br-orange"><?php the_title() ?></div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata() ?>
				<div class="Category-list Block">
					<div class="Box Box--justify">
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
						<?php $p = new WP_Query(array('post_type'=>'post', 'paged'=>$paged)) ?>
						<?php if($p->have_posts()): while($p->have_posts()): $p->the_post() ?>
						<div class="Post Post--category">
							<div class="Post-image Post--imageCategory"><?php the_post_thumbnail('lsThumb') ?></div>
							<div class="Post-title Post--titleCategory u-txt-black"><a class="Post-link u-txt-black" href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
							<div class="Post-date Post--dateCategory u-txt-black u-br-orange"><?php the_time('d/M/Y') ?></div>
							<div class="Post-excerpt Post--excerptCategory u-txt-black u-paragraph-size"> <?php the_excerpt() ?></div>							
						</div>
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