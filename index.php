<?php get_header(); ?>

    <div id="main">
    <div id=main2>
    <div id="content">
        
     <a id=logo_icon_left href="<?php echo home_url(); ?>/" ><div  id=logo_left ></div></a>
     <div id=left_up><div id=left_up_inner></div></div>
    <div id=leftcontent>
    <!--leftcontent-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
    <p><?php the_content(__('(more...)')); ?></p>
     <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    <!--eofleftcontent-->
    </div>
    </div>
    <div id=rightbox>
<div>    

    <a id=logo_icon_right href="<?php echo home_url(); ?>/" ><div  id=logo_right ></div></a>
    <div id=right_up><div id=right_up_inner></div></div>
    <div id=rightcontent>
    <h1>Rightside</h1>
<p>6Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus ipsum id nibh ultricies, id condimentum velit commodo. Fusce consequat augue luctus, vestibulum ante eu, tristique sapien. Nam eu tincidunt elit, non venenatis lorem. Etiam laoreet magna tellus, at ultrices tellus cursus non. Duis malesuada felis nec orci tempor, non semper lacus semper. Donec non dapibus nunc, vel fringilla sapien. Vivamus fermentum accumsan turpis. Fusce sagittis eros lacinia, lobortis mi ac, semper augue. Integer ut suscipit nunc. Cras in ultrices ex, hendrerit tempus nulla. Nullam sollicitudin tristique sapien quis euismod. Nunc mollis eget nisl ac iaculis. Quisque porttitor placerat dui nec pellentesque. Vivamus rhoncus nunc eu eros volutpat, vel tempus magna efficitur. Proin rutrum erat at tellus egestas pulvinar. Nam ac lacus rhoncus nisl condimentum lacinia.
</p><p>

5Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus ipsum id nibh ultricies, id condimentum velit commodo. Fusce consequat augue luctus, vestibulum ante eu, tristique sapien. Nam eu tincidunt elit, non venenatis lorem. Etiam laoreet magna tellus, at ultrices tellus cursus non. Duis malesuada felis nec orci tempor, non semper lacus semper. Donec non dapibus nunc, vel fringilla sapien. Vivamus fermentum accumsan turpis. Fusce sagittis eros lacinia, lobortis mi ac, semper augue. Integer ut suscipit nunc. Cras in ultrices ex, hendrerit tempus nulla. Nullam sollicitudin tristique sapien quis euismod. Nunc mollis eget nisl ac iaculis. Quisque porttitor placerat dui nec pellentesque. Vivamus rhoncus nunc eu eros volutpat, vel tempus magna efficitur. Proin rutrum erat at tellus egestas pulvinar. Nam ac lacus rhoncus nisl condimentum lacinia.
</p><p>
4Duis a varius nibh, at vestibulum justo. Curabitur efficitur risus in nisl ultricies rutrum. Vestibulum aliquam, lectus sit amet varius imperdiet, velit leo malesuada tortor, vel efficitur quam massa non urna. Cras dictum elit vitae tortor volutpat, et ultricies erat sagittis. Nunc pretium, orci vitae tincidunt accumsan, ligula sem blandit lectus, eu pulvinar neque diam nec libero. Sed pharetra laoreet elit, sit amet vestibulum nulla consectetur ac. Phasellus ex justo, porta eget tempus nec, efficitur eget mi. Ut eu facilisis lorem. Nulla ac purus eu sapien facilisis cursus. Nulla nec consequat diam, quis efficitur nunc. Morbi molestie, nibh ac tincidunt vulputate, nisi sapien sagittis risus, eu pulvinar nunc massa quis mauris. Suspendisse fermentum urna sed tincidunt venenatis. Pellentesque sit amet feugiat mauris, at efficitur urna. Suspendisse potenti.
</p><p>
3Donec viverra euismod lorem at placerat. Aliquam aliquet a diam vel ornare. In ullamcorper mi porttitor nulla blandit, in pharetra arcu vestibulum. Donec nec nulla ipsum. Quisque molestie rutrum imperdiet. Ut tempus aliquet mi, sit amet consectetur velit tristique et. Donec elit odio, aliquam id neque eu, condimentum molestie massa. Ut nulla est, viverra in cursus nec, molestie ac turpis. Phasellus varius dapibus velit, cursus imperdiet lorem blandit id. Nam pharetra placerat nibh id vehicula. Nulla tristique felis vel convallis viverra. Praesent purus diam, semper eget vestibulum ac, tristique ullamcorper mi.
</p><p>
2Quisque eget sapien dapibus lorem elementum vehicula. Cras rutrum, orci at vestibulum accumsan, ante nibh dapibus mi, vel feugiat nibh nisl ut lorem. Nullam accumsan eget eros et elementum. Nulla pellentesque felis nulla, non dictum mauris cursus et. Nullam vehicula eleifend suscipit. Sed id aliquam nulla. Curabitur aliquet libero ac tortor blandit sagittis. Pellentesque euismod nulla quis neque lacinia, vel accumsan nulla dictum. Mauris ultrices placerat enim ut venenatis.
</p><p>
1In id lacinia ipsum. Aenean dictum nisl et molestie scelerisque. Curabitur vitae consequat sapien. Vivamus mollis consectetur purus id tincidunt. Donec tristique libero sit amet eros porta suscipit. Ut tristique nunc at urna mollis commodo. Phasellus consectetur fermentum maximus. Cras suscipit felis non ante aliquet, id ultrices dui pretium. Mauris id placerat mauris. Nunc accumsan ipsum vitae tellus iaculis porttitor. Mauris lacinia ac purus vel elementum. Integer aliquet tellus at commodo pulvinar. 
    </p>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    
    <div id="delimiter">
    </div>
    

<?php get_footer(); ?>
