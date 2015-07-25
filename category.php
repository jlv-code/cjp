<?php 

	/**
		@author: jlv
		@file: category.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<div class="Block">
	<div class="Category Block-inner u-inner">
		<div class="Box Box--justify">
			<div class="Box Box--one">
				<div class="Category-title Block u-txt-orange u-br-orange">Categoría &raquo; <?php single_cat_title() ?></div>
				<div class="Category-list Block">
					<div class="Box Box--justify">
						<?php if(have_posts()): while(have_posts()): the_post() ?>
						<div class="Post-image Post--posttypeCategory u-bg-lightgray">En <?php the_post_type() ?></div>
						<div class="Post-title Post--titleCategory u-txt-black"><a class="Post-link u-txt-black" href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
						<div class="Post-date Post--dateCategory u-txt-black u-br-orange"><?php the_time('d/M/Y') ?></div>
						<div class="Post-excerpt Post--excerptCategory u-txt-black u-paragraph-size"> <?php the_excerpt() ?></div>
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata() ?>
					</div>
					<div class="Pagination Box--center"><?php the_pagination(''); ?></div>	
				</div>
			</div>
			<div class="Sidebar Box Box--two">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>