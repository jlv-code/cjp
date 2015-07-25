<?php 

	/**
		@author: jlv
		@file: single.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

	<article class="Single Block">
		<div class="Block-inner u-inner">
            <div class="Post Box Box--one">
                <?php if(have_posts()): while(have_posts()): the_post() ?>
                <div class="Post-title Post--singleTitle u-txt-black"><?php the_title() ?></div>
                <div class="Post-date Post--singleDate u-bg-orange"><?php the_time('d M/Y') ?></div>
                <div class="Post-tag Post--singleTag u-txt-black"><?php the_tags() ?></div>
                <div class="Post-content Post--singleContent u-txt-black u-br-lightgray"><?php the_content() ?></div>
                <?php endwhile; endif; ?>
                
                <div class="Post PostRelated u-txt-black">
                    <div class="Post-title PostRelated-title u-txt-black">Noticias Relacionadas</div>
                    <div class="PostRelated-list Box Box--justify">
                        <?php
                            $orig_post = $post;
                            global $post;
                            $tags = wp_get_post_tags($post->ID);
                            if ($tags) {
                            $tag_ids = array();
                            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                            $args=array(
                            'tag__in' => $tag_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page'=>3, // Número de entradas relacionadas a mostrar.
                            'caller_get_posts'=>1
                            );
                            $my_query = new wp_query( $args );
                            while( $my_query->have_posts() ) {
                            $my_query->the_post();
                        ?>
                        <div class="Post Post--postsRelated Box">
                            <div class="Post-image Post--imageRelated"><a class="Post-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('lsThumb'); ?></a></div>
                            <div class="Post-title Post--titleRelated"><a class="Post-link u-txt-black" href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
                        </div>
                        <?php }
                        }
                            $post = $orig_post;
                            wp_reset_query();
                        ?>
                    </div>
                </div>    
            </div>
            <div class="Post Box--two"><?php get_sidebar(); ?></div>
		</div>
	</article>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>