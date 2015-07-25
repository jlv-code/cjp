<?php 

// Widgets Area
function widgets_area() {

	register_sidebar(array(
		'id' => 'general',
		'name' => 'Barra Lateral General',
		'description' => 'La información aquí suminstrada, se mostrará en las sección de Noticias, Busqueda, Etiquetas, Categorías',
		'before_widget' => '<div id="widgetcontent">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widgettitle">',
		'after_title' => '</div>',
		'empty_title'=> '',
	));

}

add_action( 'widgets_init', 'widgets_area' );