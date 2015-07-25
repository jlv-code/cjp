<?php 

	/**
		@author: jlv
		@file: search.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<div class="Block">
        <div class="Search Block-inner u-inner">
            <div class="Box Box--justify">
                <div class="Box Box--one">
                    <div class="Search-title Block Search--titleSearch u-txt-orange u-br-orange">
                                    RESULTADOS DE LA BÚSQUEDA:  <span class="Search--nameSearch u-txt-black"><?php print strip_tags($_GET['s']) ?></span>
                    </div>
                    <div class="Search-list Block">
                        <div class="Box">
                            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                    <div class="Post Post--search u-br-lightgray">
                                        <div class="Box Box--justify">
                                            <div class="Post-date Post--dateSearch u-bg-orange"><?php the_time('d M - g:i a') ?></div>
                                            <div class="Post-content Box Post--contentSearch">
                                                <div class="Post-title Post--titleSearch u-txt-black">
                                                    <a class="Post-link u-txt-black" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="Post-excerpt Post--excerptSearch"><?php the_excerpt(); ?></div>
                                            </div>
                                            <div class="Post-link Post--linkSearch u-bg-orange"><a class="Post-link u-txt-lightgray" href="<?php the_permalink() ?>">Leer mas..</a></div>
                                        </div>
                                    </div>
                            <?php endwhile; ?>
                            <div class="Pagination Box--center"><?php the_pagination(''); ?></div>
                            <?php else: ?>
                                    <span>Lo Sentimos no se encontraron resultados para esa busqueda, vuelva a intentar.</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="Sidebar Box Box--two">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>