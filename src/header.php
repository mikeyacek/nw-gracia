<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		<?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' : '; } ?>
		<?php bloginfo('name'); ?>
	</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>"


	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>



</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">

			<!-- Nazev stranky -->
			<div class="hlavicka-text">
				<div class="nazev_webu">
					<a href="<?php echo home_url(); ?>"><?php the_field('nazev_webu_1', 'option'); ?></a>
				</div>
				<div class="podnazev_webu">
					<a href="<?php echo home_url(); ?>"><?php the_field('podnazev_webu_1', 'option'); ?></a>
				</div>
			</div>

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/gracia_vektor_sedivy.svg" alt="Logo" class="logo-img">
				</a>
			</div>

			<!-- / Nazev stranky -->

			<!-- Search box -->
				<?php get_template_part('searchform'); ?>
			<!-- / Search box -->
<?php if (is_front_page()): ?>
			<?php

		$image01 = get_field( 'dlazdice_img_1', 'option' );
		$image02 = get_field( 'dlazdice_img_2', 'option' );
		$image03 = get_field( 'dlazdice_img_3', 'option' );
		$image04 = get_field( 'dlazdice_img_4', 'option' );
		$image05 = get_field( 'dlazdice_img_5', 'option' );
		$image06 = get_field( 'dlazdice_img_6', 'option' );
		$image07 = get_field( 'dlazdice_img_7', 'option' );
		$image08 = get_field( 'dlazdice_img_8', 'option' );
		$image09 = get_field( 'dlazdice_img_9', 'option' );

?>
				<div class="dlazdice-blok"> <!--ROZDELENI BLOKU-->

					<a href="<?php the_field('dlazdice_1_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image01['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_1', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_2_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image02['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_2', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_3_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image03['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_3', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_4_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image04['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_4', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_5_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image05['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_5', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_6_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image06['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_6', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_7_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image07['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_7', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_8_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image08['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_8', 'option'); ?>
							</h3>
						</div>

					</a>
					<a href="<?php the_field('dlazdice_9_link', 'option'); ?>" class="dlazdice" style="background-image:url('<?php echo $image09['url']; ?>');">

						<div class="dlazdice-text">
							<h3>
								<?php the_field('dlazdice_popis_9', 'option'); ?>
							</h3>
						</div>

					</a>



				</div>
				<?php endif; ?>
				<div class="zarazka"></div>

				<!-- oddělovač -->
				<!-- <hr class="hr-style"> -->
				<!-- /oddělovač -->
				<!-- /logo -->

				<!-- nav -->
				<!-- <nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> -->
				<!-- /nav -->

		</header>



		<!-- /header -->
