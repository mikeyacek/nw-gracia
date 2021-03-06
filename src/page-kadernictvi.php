<?php /* Template Name: Šablona kadeřnictví */ ?>

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
$telefon1 = get_field('telefon_kadernice_1');
$telefon2 = get_field('telefon_kadernice_2');

if( !empty($image1) ): ?>

				<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
				<?php the_field('osobni_fotografie_1-popis'); ?>
<?php endif; ?>
<?php
if( !empty($telefon1) ): ?>
				<div class="objednavka_kad_leva">Objednávky na tel. čísle: <span class="telefon_c"><?php the_field('telefon_kadernice_1'); ?></span></div>
<?php endif; ?>
			</div>

			<div class="osobni_foto_prave">

				<?php

$image2 = get_field('osobni_fotografie_2');

if( !empty($image2) ): ?>

				<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
				<p>
					<?php the_field('osobni_fotografie_2-popis'); ?>
				</p>
<?php endif; ?>
<?php
if( !empty($telefon2) ): ?>
				<div class="objednavka_kad_prava">Objednávky na tel. čísle: <span class="telefon_c"><?php the_field('telefon_kadernice_2'); ?></span></div>
<?php endif; ?>


			</div>
		</div>

		<div class="text_kadernictvi_blok">
			<?php the_field('text_clanku'); ?>
		</div>

		<!-- +++++++++++++++++++++++++++++++++++++ KONEC DESIGNU ++++++++++++++++++++++++++++++++++++++++++ -->



	</section>
	<!-- /section -->
</main>
<!--GET SIDEBAR-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
