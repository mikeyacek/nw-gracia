<?php get_header(); ?>



	<main role="main">
		<!-- section -->
		<section class="platno">


			<h1><?php _e( 'Nejnovější příspěvky', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
