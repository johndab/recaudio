<div id="opinions" class="dark pb-5" >
  <hr style="max-width: 60%; border-color: white" class="pb-5 mt-0">
  
  <div class="container py-3" >
    <h1 class="section-title">
      <?php echo apply_filters( 'the_content', get_post(461)->post_title ); ?>
    </h1>

    <?php echo do_shortcode('[rl_gallery id="468"] '); ?>
  </div>

  <div class="container py-3" >
    <h1 class="section-title">
      <?php echo apply_filters( 'the_content', get_post(52)->post_title ); ?>
    </h1>
    <?php echo apply_filters( 'the_content', get_post(52)->post_content ); ?>
  </div>
</div>