<?php

function zl_web_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right part of all pages',
		'id'            => 'rightdefault',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'zl_web_widgets_init' );
