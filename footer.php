<footer id="footyer_area">
  <div id="footer">
    <div class="container">
      <div class="row">
        <?php dynamic_sidebar('footerarea');?>
      </div>
    </div>
  </div>
  <section id="copyright_area">
    <div class="container">
      <div class="row">
        <p><?php echo get_theme_mod('rajikul_copyright_section');?></p>
      </div>
    </div>
  </section>
</footer>

   <a href="#" class="top_aroow"><i class="fa-solid fa-arrow-up"></i></a>

  <?php wp_footer(  );?>
</body>
</html>