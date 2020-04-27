<div id="soundOffer">
    <hr style="max-width: 60%; border-color: white" class="pb-5 mt-5">
    <!-- <h1 class="section-title">Oferta dźwięku</h1>
    <div class="container d-flex justify-content-center flex-wrap">
    </div> -->

    <h1 class="section-title pb-5">
      <?php echo apply_filters( 'the_content', get_post(390)->post_title ); ?>
    </h1>
    <div class="row text-left mx-0 sm-gallery" >
      <?php echo apply_filters( 'the_content', get_post(390)->post_content ); ?>
    </div>
</div>