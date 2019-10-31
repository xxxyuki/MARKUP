<!-- 投稿ページ -->
<?php get_header(); ?>

<div id="single">
    <div class="inner">
        
       <main class="single-content">
           
           <?php
           if(have_posts()):
            while(have_posts()):
                the_post(); ?>     

        <!-- entry -->
            <article <?php post_class(array('entry')); ?>>
                
               <div class="single-header">
                   <h2 class="single-title"><span>▶</span><?php the_title(); ?></h2>
               </div>
             
                <div class="single-img">
                <?php
                    if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large' );
                    }
                    ?>
                </div>

                <div class="single-body">
                    <?php
                    the_content(); ?>
                </div>

            </article> <!--//entry-->

            <?php
            endwhile;
            endif;
            ?>
    
       </main>

    </div><!-- //inner-->
</div><!-- //single-content-->




<?php get_footer(); ?>