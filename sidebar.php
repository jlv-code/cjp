<?php 

	/**
		@author: jlv
		@file: sidebar.php
		@version: 1.0
	 */

?>


<?php if (!dynamic_sidebar('general')): ?>

	<?php $p = new WP_Query(array('category_name'=>'noticias', 'posts_per_page'=>'10')) ?>
	<div class="Post--titleList u-txt-black u-br-orange">Noticias Relacionadas</div>
		<?php if ($p->have_posts()): while($p->have_posts()): $p->the_post() ?>

		<div class="Post Box Post--listSidebar">
			<div class="Post-title">
				<a class="Post-link Post--sidebarTitle u-txt-orange u-br-orange" href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</div>
		</div>
	<?php endwhile; endif; wp_reset_postdata() ?>
	
<?php endif; ?>
