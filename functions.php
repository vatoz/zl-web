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

function zl_web_logo_left(){
    return '<a id=logo_icon_left href="'. home_url(). '" ><IMG src="'.get_template_directory_uri().'/img/logo_left.png"
      id=logo_left ></a>
     <div id=left_up><div id=left_up_inner></div></div>';
}
function zl_web_logo_right(){
    return '<a id=logo_icon_right href="'. home_url(). '" ><img  id=logo_right src="'.get_template_directory_uri().'/img/logo_right.png"></a>
     <div id=right_up><div id=right_up_inner></div></div>';
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