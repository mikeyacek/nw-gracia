<?php /* Template Name: Nový produkt */ ?>

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


				<?php

$image1 = get_field('osobni_fotografie_1');
$image2 = get_field('osobni_fotografie_2');
$image3 = get_field('osobni_fotografie_3');
$image4 = get_field('osobni_fotografie_4');
$image5 = get_field('osobni_fotografie_5');
$image1cena = get_field('cena_liceni');
$image2cena = get_field('cena_2');
$image3cena = get_field('cena_3');
$image4cena = get_field('cena_4');
$image5cena = get_field('cena_5');
$warning = get_field('warning'); ?>








<!-- <div class="fotky_kadernictvi_blok"> -->

	<?php if( !empty($image1) ): ?>
    	<div class="osobni_foto_leve">


				<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
				<?php the_field('osobni_fotografie_1-popis'); ?>


     <?php if( !empty($image1cena) ): ?>
				<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cena_liceni'); ?></span></div>
				<?php endif; ?>
</div>
	<?php endif; ?>




<?php if( !empty($image2) ): ?>
		<div class="osobni_foto_leve">


			<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			<?php the_field('osobni_fotografie_2-popis'); ?>


	 <?php if( !empty($image2cena) ): ?>
			<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cena_2'); ?></span></div>
			<?php endif; ?>
</div>
<?php endif; ?>



<?php if( !empty($image3) ): ?>
		<div class="osobni_foto_leve">


			<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
			<?php the_field('osobni_fotografie_3-popis'); ?>


	 <?php if( !empty($image3cena) ): ?>
			<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cena_3'); ?></span></div>
			<?php endif; ?>
</div>
<?php endif; ?>



<?php if( !empty($image4) ): ?>
		<div class="osobni_foto_leve">


			<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
			<?php the_field('osobni_fotografie_4-popis'); ?>


	 <?php if( !empty($image4cena) ): ?>
			<div class="objednavka_kad_leva">Objednávky na tel. <span class="telefon_c"><?php the_field('cena_4'); ?></span></div>
			<?php endif; ?>
</div>
<?php endif; ?>



<?php if( !empty($image5) ): ?>
		<div class="osobni_foto_leve">


			<img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt']; ?>" />
			<?php the_field('osobni_fotografie_5-popis'); ?>


	 <?php if( !empty($image5cena) ): ?>
			<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cena_5'); ?></span></div>
			<?php endif; ?>
</div>
<?php endif; ?>





<!-- </div> -->


<div class="text_kadernictvi_blok">
				<?php the_field('text_clanku'); ?>
			</div>

<!--div class="sloupecky">
				<div class="vyhody">
					<?php the_field('vyhody'); ?>
				</div>-->
				<!--<div class="nutno_dodrzet">
					<?php the_field('nutno_dodrzet'); ?>
				</div>-->




            			<!--<div class="nejcastejsi_dotazy">
				<?php the_field('nejcastejsi_dotazy'); ?>
			</div>-->



			<!--<div class="upozorneni">
				<img src="<?php echo $warning['url']; ?>" alt="<?php echo $warning['alt']; ?>" />
				<?php the_field('upozorneni'); ?>
			</div>-->




			<!-- +++++++++++++++++++++++++++++++++++++ KONEC DESIGNU ++++++++++++++++++++++++++++++++++++++++++ -->



	</section>
	<!-- /section -->
</main>
<!--GET SIDEBAR-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
