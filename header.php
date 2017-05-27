<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php echo wp_get_document_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page">

<div id="header" role="banner">
		<a id=logo_icon href="<?php echo home_url(); ?>/" ><div  id=logo_top ></div></a>
		<!-- todo search and local menu
		<a id=menu_icon href="<?php echo home_url(); ?>/" ><div  id=nav_top ></div></a>
		<a id=search_icon  href="<?php echo home_url(); ?>/" ><div  id=search_top ></div></a>
		-->
</div>
<div id=navigator>
    <div id=navigator_a>Menu</div>
    <div id=navigator_b>výstupy</div>
    <div id=navigator_cd>výstupy nápady a koniny</div>
</div>

<!-- eof header-->
