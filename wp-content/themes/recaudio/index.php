<?php

get_header();
?>

	<div id="app">
		<?php get_template_part( 'components/nav' ); ?>
		<?php get_template_part( 'components/carousel' ); ?>
		<?php get_template_part( 'components/about' ); ?>
		<?php get_template_part( 'components/offer' ); ?>
		<?php get_template_part( 'components/realizations' ); ?>
		<?php get_template_part( 'components/opinions' ); ?>
		<?php get_template_part( 'components/contact' ); ?>
  </div>

<?php
get_footer();
