<?php 

	/**
		@author: jlv, naivy
		@file: page.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<div class="Block">
	<div class="Page Block-inner u-inner">
		<div class="Box Box--one">
			<?php if(have_posts()): while(have_posts()): the_post() ?>
			<div class="Page-title  u-txt-orange u-br-orange"><?php the_title() ?></div>
			<div class="Post-content Post--contentPage u-txt-black u-paragraph-size"> <?php the_content() ?></div>							
			<?php endwhile; endif; ?>
		</div>
		<div class="Sidebar Box Box--two">
			<?php get_sidebar() ?>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>