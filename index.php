<?php get_header(); ?>

    <div id="main">
    <div id=main2>
    <div id="content">
    <div id="content2">
        
    <!--leftcontent-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(__('(more...)')); ?>
     <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    <!--eofleftcontent-->
    
    </div>
    </div>
    </div>
    
    </div>
    </div>
   
<?php get_footer(); ?>
