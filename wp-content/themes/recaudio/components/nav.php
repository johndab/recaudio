<nav class="navbar navbar-expand-xl navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= get_template_directory_uri() ."/img/logo.png" ?>" style="max-height: 50px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarMain" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#videoOffer" v-smooth-scroll >
              <?php echo apply_filters( 'the_content', get_post(463)->post_title); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#soundOffer" v-smooth-scroll >
            <?php echo apply_filters( 'the_content', get_post(466)->post_title ); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap" href="#about" v-smooth-scroll >O nas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#opinions" v-smooth-scroll >Opinie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" v-smooth-scroll>Kontakt</a>
          </li>
          <li class="nav-item icon mx-2">
            <a class="nav-link" href="https://www.facebook.com/Rec-Audio-2233027257010342/" >
              <i class="fab fa-facebook" ></i>
            </a>
          </li>
          <li class="nav-item icon mx-2">
            <a class="nav-link" href="https://www.instagram.com/recaudio.pl">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<script>
$('a.nav-link').on('click', function() {
  if($(window).width() < 992) {
    $('.navbar-toggler').click();
  }
});
</script>