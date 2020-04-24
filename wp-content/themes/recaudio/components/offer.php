<div id="offer" class="position-relative pb-5" >
  <hr style="max-width: 60%; border-color: white" class="pb-4">

  <div  class="container pb-3">
    <h1 class="section-title pb-5">
      <?php echo apply_filters( 'the_content', get_post(29)->post_title ); ?>
    </h1>
    <div class="row text-left" >
      <?php echo apply_filters( 'the_content', get_post(29)->post_content ); ?>
    </div>
  </div>
</div>