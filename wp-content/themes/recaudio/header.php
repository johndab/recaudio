<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;700&display=swap" rel="stylesheet">
	<link rel="icon" href="<%= BASE_URL %>favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-57x57.png" ?>" >
	<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-60x60.png"?>" >
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-72x72.png"?>" >
	<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-76x76.png"?>" >
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-114x114.png"?>" >
	<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-120x120.png"?>" >
	<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-144x144.png"?>" >
	<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-152x152.png"?>" >
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ."/img/favicon/apple-icon-180x180.png"?>" >
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= get_template_directory_uri() ."/img/favicon/android-icon-192x192.png"?>" >
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ."/img/favicon/favicon-32x32.png"?>" >
	<link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri() ."/img/favicon/favicon-96x96.png"?>" >
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ."/img/favicon/favicon-16x16.png"?>" >
	<link rel="manifest" href="<?= get_template_directory_uri() ."/img/favicon/manifest.json"?>" >
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ."/img/favicon/ms-icon-144x144.png" ?>" >
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164646373-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-164646373-1');
	</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	<div id="content" class="site-content">
