
	</div><!-- #content -->

  <div class="footer">
    <div class="d-flex justify-content-center">
      <div class="mx-5">
        <a href="https://www.instagram.com/recaudio.pl">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <div class="mx-5">
        <a href="https://www.facebook.com/Rec-Audio-2233027257010342/">
          <i class="fab fa-facebook"></i>
        </a>
      </div>
      <div class="mx-5" >
        <a href="mailto:krzysztof@recaudio.pl">
          <i class="far fa-envelope"></i>
        </a>
      </div>
    </div>
  </div>
</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" crossorigin="anonymous"></script>
<script>
	$('a[href*="#"]').on('click', function (e) {
		e.preventDefault();

		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 50
		}, 1000, 'easeInOutQuad');
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
