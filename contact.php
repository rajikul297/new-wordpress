  <?php 
  /*
  * template name: contact page
  */ 
 ?>
 <?php  get_header(  );?>
  <div id="contact_area">
       <?php
          if(have_posts(  )):
            while(have_posts(  )):the_post();
          ?>
            <div class="post_thum">
              <a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-thumbonails');?></a>
            </div>
            <div class="post_details">
              <?php the_content();?>
            </div>
          <?php
          endwhile;
        else:
          _e('no fost found');
        endif;
          ?>       
  </div>


  <?php get_footer(  );?>
  