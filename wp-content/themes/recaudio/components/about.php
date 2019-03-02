<div class="dark" >
  <div id="about" class="container py-3" >
    <h1 class="section-title">
      <?php echo apply_filters( 'the_content', get_post(24)->post_title ); ?>
    </h1>
    <div class="row" style="padding-bottom: 80px;">
      <div class="col-12 col-md-4" >
        <div class="row" >
          <div class="col-6 col-md-12" >
            <img src="<?= get_template_directory_uri() ."/img/kj.jpg" ?>" class="profile-img" />
          </div>
          <div class="col-6 col-md-12" >
            <img src="<?= get_template_directory_uri() ."/img/p2.jpg" ?>" class="profile-img" />
          </div>
        </div>
      </div>
      <div class="col-12 col-md-8" style="padding: 40px 50px; font-weight: 300">
        <?php echo apply_filters( 'the_content', get_post(24)->post_content ); ?>
      </div>
    </div>
  </div>
</div>