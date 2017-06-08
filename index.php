<?php get_header(); ?>

    <div id="main">
    <div id=main2>
    <div id="content">
         <div id="content2">
        
     <a id=logo_icon_left href="<?php echo home_url(); ?>/" ><div  id=logo_left ></div></a>
     <div id=left_up><div id=left_up_inner></div></div>
    <div id=leftcontent>
    <!--leftcontent-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(__('(more...)')); ?></p>
     <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    <!--eofleftcontent-->
    </div></div>
    </div>
    <div id=rightbox>
<div id="rightbox2">    

    <a id=logo_icon_right href="<?php echo home_url(); ?>/" ><div  id=logo_right ></div></a>
    <div id=right_up><div id=right_up_inner></div></div>
    <div id=rightcontent>
     
    <?php if ( is_active_sidebar( 'rightdefault' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'rightdefault' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    
    <div id="delimiter">
    </div>
    

<?php get_footer(); ?>
