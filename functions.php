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
        register_nav_menu("primary","Hlavní Zlín");

}

function zl_web_long($atts,$content=null){
    $t=  rand(1999, 10000000);
    return "<div id=fade_".$t." class=paragraph_front>".
            "<div id=overlay_".$t." class=paragraph_front_overlay></div>".
     "<div id=content_".$t." class=paragraph_front_content>".

     $content.
     "</div>".
            "</div>"
            . "<a id=hide_".$t." class=front_more href='#' onclick='Unfade(".$t.")'>Číst dál...</a>".
     "\n";
}

function zl_web_logo($left){
    $side=($left?"left":"right");
    return '<a class=inlogo  id=logo_icon_'.$side.' href="'. home_url(). '" ><IMG src="'.get_template_directory_uri().'/img/logo_'.$side.'.png"
      id=logo_'.$side.' ></a>
     <div id='.$side.'_down><img id='.$side.'_down_inner src="'.get_template_directory_uri().'/img/down.png"></div>';
    
}
function zl_web_logo_left(){
    return zl_web_logo(true);
}
function zl_web_logo_right(){
    return zl_web_logo(false);
}
function zl_web_sloupec(){
return '
    </div>
    </div>
    <div id=rightbox>
    <div id="rightbox2">';   
}
add_action( 'widgets_init', 'zl_web_widgets_init' );

add_shortcode( 'zlin_long' , 'zl_web_long' );
add_shortcode( 'zlin_logo_leve' , 'zl_web_logo_left' );
add_shortcode( 'zlin_logo_prave' , 'zl_web_logo_right' );
add_shortcode( 'zlin_sloupec' , 'zl_web_sloupec' );

remove_filter("the_content","wpautop");
remove_filter("the_excerpt","wpautop");