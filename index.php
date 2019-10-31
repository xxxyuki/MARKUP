<?php get_header(); ?>

    <!-- style="background-image:url(img/grape.jpg)" -->
    <div id="mv">
        <div class="mv-content">
            
            <div class="back1"></div>
            <div class="back"></div>
            <div class="name">
                <p>I'm Yuki.</p>
            </div>
            <div class="name">
                <p>Welcome to My Portfolio site.</p>
            </div>
            <div class="name">
                <p>...Ready to know about me?</p>
            </div>
            <div class="back"></div>
            <div class="back"></div>
            <div class="back"></div>
            <div class="back"></div>
        </div>
    </div>

    <!-- skills -->
     <div id="skills">
         <div class="inner">
　　　　　　　<h2 class="skills-title">
                Skills
              </h2>

            <div class="skills-items">
                <!-- skills-item -->
                <div class="skills-item">
                    <div class="skills-item-title html">
                        <h3>HTML/CSS</h3>      
                    </div>
                    <div class="triangle"></div>
                    <div class="skills-info">
                        <p>基本のコーディングが可能。レスポンシブデザインにも対応。</p>
                    </div>
                </div><!-- //skills-item-->
                  
                <!-- skills-item -->
                <div class="skills-item">
                    <div class="skills-item-title js">
                        <h3>JS/JQ</h3>      
                    </div>
                    <div class="triangle"></div>
                    <div class="skills-info">
                        <p>アニメーション。サイトに動きを加えメリハリを付けます。</p>
                    </div>
                </div><!-- //skills-item-->
                  
                <!-- skills-item -->
                <div class="skills-item">
                    <div class="skills-item-title php">
                        <h3>WordPress</h3>      
                    </div>
                    <div class="triangle"></div>
                    <div class="skills-info">
                        <p>WordPressの導入。PHPでのEC構築学習中。</p>
                    </div>
                </div><!-- //skills-item-->
                  
            </div><!-- //skills-items -->　　
  

         </div>
     </div><!-- //skills-->
   

     <!-- content ”works”-->
      <div id="content">
          <div class="inner">
              <h2 class="content-title">
                  Works
              </h2>
            <!-- primary -->
            <main id="primary">
                
            <?php
            if(have_posts()) :?>

                <!-- entries -->
                <div class="entries">

                <?php
                while(have_posts()):
                    the_post(); ?>

                 <!-- entry-item   -->
                   <a href="<?php the_permalink(); ?>" class="entry-item">
                       <div class="entry-item-img">
                           <?php
                           if(has_post_thumbnail()){
                               the_post_thumbnail('large');
                           }else{
                               echo '<img src="'.esc_url(get_template_directory_uri()).'/img/noimg.png" alt="">';
                           }
                           ?>
                           <!-- <img src="/img/bootstrap.png" alt=""> -->
                       </div>
                   </a><!-- //entry-item -->
                
                <?php
                 endwhile;
                 ?>
               

                </div> <!-- //entries -->
              <?php endif; ?>

            </main><!-- //primary -->
          </div> <!-- //inner -->
        </div><!-- //content -->
        
    
<?php get_footer(); ?>