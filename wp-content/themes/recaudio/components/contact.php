<div  class="dark" >
  <div id="contact" class="container py-3" >
    <h1 class="section-title">
      <?php echo apply_filters( 'the_content', get_post(55)->post_title ); ?>
    </h1>
    <div class="row justify-content-center" style="padding-bottom: 80px;">
      <div class="col-8 col-md-3" >
        <img src="<?= get_template_directory_uri() ."/img/logo.png" ?>" style="max-width: 100%" />
      </div>
      <div class="col-12 col-md-9" style="padding: 40px 50px; font-weight: 300">
        <div class="row" >
          <?php echo apply_filters( 'the_content', get_post(55)->post_content ); ?>
        </div>
      </div>
    </div>
  </div>
</div>