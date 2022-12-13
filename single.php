
  <?php get_header(  );?>

  <div id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php get_template_part('template_part/post_setup');?>    
          <?php if(comments_open()):?>     
          <?php comments_template();?>     
          <?php endif;?>     
        </div>
      </div>
    </div>
  </div>


  <?php get_footer(  );?>
  