<div class="black position-relative py-5" >

  <div class="led text-left dark position-relative">
    <img src="<?= get_template_directory_uri() ."/img/led.png" ?>"
      style="max-height: 200px; max-width: 50%">
  </div>

  <div id="offer" class="container pb-3">
    <h1 class="section-title pb-5">
      <?php echo apply_filters( 'the_content', get_post(29)->post_title ); ?>
    </h1>
    <div class="row text-left" >
      <?php echo apply_filters( 'the_content', get_post(29)->post_content ); ?>
    </div>
  </div>
</div>