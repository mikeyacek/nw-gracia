<?php /* Template Name: Šablona kosmetika-ultrazvuková špachtle */ ?>

<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section class="platno">

		<h1>
			<?php the_title(); ?>
		</h1>

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

		<!-- +++++++++++++++++++++++++++++++++++++ DESIGN +++++++++++++++++++++++++++++++++++++++++++++++++ -->

		<div class="fotky_kadernictvi_blok">

			<div class="osobni_foto_leve">
				<?php 

$image1 = get_field('osobni_fotografie_1');



if( !empty($image1) ): ?>

				<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
				<?php the_field('osobni_fotografie_1-popis'); ?>


				<div class="objednavka_kad_leva">Cena (+ sérum dle typu pleti): <span class="telefon_c"><?php the_field('cena_mezoterapie'); ?></span></div>

				<?php endif; ?>
			</div>

			



			<div class="text_kadernictvi_blok">
				<?php the_field('text_clanku'); ?>
			</div>
			<div class="sloupecky">
				
				<div class="nutno_dodrzet">
					<?php the_field('nutno_dodrzet'); ?>
				</div>
			</div>
			
			

			

			<!-- +++++++++++++++++++++++++++++++++++++ KONEC DESIGNU ++++++++++++++++++++++++++++++++++++++++++ -->

			

	</section>
	<!-- /section -->
</main>
<!--GET SIDEBAR-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
