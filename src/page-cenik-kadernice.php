<?php /* Template Name: Šablona ceník */ ?>

<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section class="platno">

		<h1>
			<?php the_title(); ?>
		</h1>

		<!-- +++++++++++++++++++++++++++++++++++++ DESIGN +++++++++++++++++++++++++++++++++++++++++++++++++ -->

		

		<div class="text_kadernictvi_blok">
			<?php the_field('text_clanku_o_keratinu'); ?>
		</div>

		<!-- +++++++++++++++++++++++++++++++++++++ KONEC DESIGNU ++++++++++++++++++++++++++++++++++++++++++ -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

			<?php comments_template( '', true ); // Remove if you don't want comments ?>

			<br class="clear">

			<?php edit_post_link(); ?>

		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<!-- article -->
		<article>

			<h2>
				<?php _e( 'Tady nic není, asi jste se překlepli.', 'html5blank' ); ?>
			</h2>

		</article>
		<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>
<!--GET SIDEBAR-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
