<?php 

// Widgets Area
function widgets_area() {

	register_sidebar(array(
		'id' => 'general',
		'name' => 'Barra Lateral General',
		'description' => 'La información aquí suminstrada, se mostrará en las sección de Noticias, Busqueda, Etiquetas, Categorías',
		'before_widget' => '<div class="widget u-bg-lightgray">',
		'after_widget' => '</div>',
		'before_title' => '<div class="titlewidget u-bg-yellow u-txt-black">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

}

add_action( 'widgets_init', 'widgets_area' );