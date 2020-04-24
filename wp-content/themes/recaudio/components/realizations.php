<div id="realizations" class="pb-3">
  <hr style="max-width: 60%; border-color: white" class="pb-5 mt-0">

  <div class="container pb-3">  
    <h1 class="section-title pb-5">
      <?php echo apply_filters( 'the_content', get_post(45)->post_title ); ?>
    </h1>
    <div>
      <?php echo apply_filters( 'the_content', get_post(45)->post_content ); ?>
    </div>
  </div>
</div>