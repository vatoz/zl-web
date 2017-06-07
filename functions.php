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

function zl_web_front($atts,$content=null){
    
    $content=  str_replace("<p", "<div class=paragraph_front><div class=paragraph_front_overlay></div><p", $content);
    if(isset($atts["href"])){
    $content=  str_replace("</p>", "</p></div><a class=front_more href='".$atts["href"]."' >Číst dál</a>", $content);
        
    }else{
    $content=  str_replace("</p>", "</p></div>", $content);
        
    }
    echo $content;
    
}

add_action( 'widgets_init', 'zl_web_widgets_init' );

add_shortcode( 'zlin_front' , 'zl_web_front' );
