<?php /* Template Name: Šablona kosmetika */ ?>

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
		$image1 = get_field('osobni_foto_1');
		$image2 = get_field('osobni_foto_2');
		$image3 = get_field('osobni_foto_3');
		$image4 = get_field('osobni_foto_4');
		$image5 = get_field('osobni_foto_5');
		$image1cena = get_field('cena_lic');
		$image2cena = get_field('cen_2');
		$image3cena = get_field('cen_3');
		$image4cena = get_field('cen_4');
		$image5cena = get_field('cen_5');
		$warning = get_field('warning'); ?>







		<!-- <div class="fotky_kadernictvi_blok"> -->

			<?php if( !empty($image1) ): ?>
		    	<div class="osobni_foto_leve">


						<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
						<?php the_field('osobni_foto_1-popis'); ?>


		     <?php if( !empty($image1cena) ): ?>
						<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cena_lic'); ?></span></div>
						<?php endif; ?>
		</div>
			<?php endif; ?>




		<?php if( !empty($image2) ): ?>
				<div class="osobni_foto_leve">


					<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
					<?php the_field('osobni_foto_2-popis'); ?>


			 <?php if( !empty($image2cena) ): ?>
					<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cen_2'); ?></span></div>
					<?php endif; ?>
		</div>
		<?php endif; ?>



		<?php if( !empty($image3) ): ?>
				<div class="osobni_foto_leve">


					<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
					<?php the_field('osobni_foto_3-popis'); ?>


			 <?php if( !empty($image3cena) ): ?>
					<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cen_3'); ?></span></div>
					<?php endif; ?>
		</div>
		<?php endif; ?>



		<?php if( !empty($image4) ): ?>
				<div class="osobni_foto_leve">


					<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
					<?php the_field('osobni_foto_4-popis'); ?>


			 <?php if( !empty($image4cena) ): ?>
					<div class="objednavka_kad_leva">Objednávky na tel. <span class="telefon_c"><?php the_field('cen_4'); ?></span></div>
					<?php endif; ?>
		</div>
		<?php endif; ?>



		<?php if( !empty($image5) ): ?>
				<div class="osobni_foto_leve">


					<img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt']; ?>" />
					<?php the_field('osobni_foto_5-popis'); ?>


			 <?php if( !empty($image5cena) ): ?>
					<div class="objednavka_kad_leva">Objednávky: <span class="telefon_c"><?php the_field('cen_5'); ?></span></div>
					<?php endif; ?>
		</div>
		<?php endif; ?>


		<!--<div class="fotky_kadernictvi_blok">-->


			<?php

$obrazek1 = get_field('obrazek_1');
$obrazek2 = get_field('obrazek_2');
$obrazek3 = get_field('obrazek_3');
$obrazek4 = get_field('obrazek_4');
$obrazek5 = get_field('obrazek_5');
$obrazek6 = get_field('obrazek_6');
$obrazek7 = get_field('obrazek_7');
$obrazek8 = get_field('obrazek_8');
$obrazek9 = get_field('obrazek_9');
$obrazek10 = get_field('obrazek_10');
$obrazek11 = get_field('obrazek_11');
$obrazek12 = get_field('obrazek_12');
$kosm1cena = get_field('kosm_1_cena');
$kosm2cena = get_field('kosm_2_cena');
$kosm3cena = get_field('kosm_3_cena');
$kosm4cena = get_field('kosm_4_cena');
$kosm5cena = get_field('kosm_5_cena');
$kosm6cena = get_field('kosm_6_cena');
$kosm7cena = get_field('kosm_7_cena');
$kosm8cena = get_field('kosm_8_cena');
$kosm9cena = get_field('kosm_9_cena');
$kosm10cena = get_field('kosm_10_cena');
$kosm11cena = get_field('kosm_11_cena');
$kosm12cena = get_field('kosm_12_cena');

?>


			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek1['url']; ?>" alt="<?php echo $obrazek1['alt']; ?>" />
				<?php the_field('produkt_1'); ?>

				<?php if( !empty($kosm1cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_1_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek2['url']; ?>" alt="<?php echo $obrazek2['alt']; ?>" />
				<?php the_field('produkt_2'); ?>

				<?php if( !empty($kosm2cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_2_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek3['url']; ?>" alt="<?php echo $obrazek3['alt']; ?>" />
				<?php the_field('produkt_3'); ?>

				<?php if( !empty($kosm3cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_3_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek4['url']; ?>" alt="<?php echo $obrazek4['alt']; ?>" />
				<?php the_field('produkt_4'); ?>

				<?php if( !empty($kosm4cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_4_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek5['url']; ?>" alt="<?php echo $obrazek5['alt']; ?>" />
				<?php the_field('produkt_5'); ?>

				<?php if( !empty($kosm5cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_5_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek6['url']; ?>" alt="<?php echo $obrazek6['alt']; ?>" />
				<?php the_field('produkt_6'); ?>

				<?php if( !empty($kosm6cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_6_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek7['url']; ?>" alt="<?php echo $obrazek7['alt']; ?>" />
				<?php the_field('produkt_7'); ?>

				<?php if( !empty($kosm7cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_7_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek8['url']; ?>" alt="<?php echo $obrazek8['alt']; ?>" />
				<?php the_field('produkt_8'); ?>

				<?php if( !empty($kosm8cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_8_cena'); ?></span></div>
				<?php endif; ?>
			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek9['url']; ?>" alt="<?php echo $obrazek9['alt']; ?>" />
				<?php the_field('produkt_9'); ?>

				<?php if( !empty($kosm9cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_9_cena'); ?></span></div>
				<?php endif; ?>
			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek10['url']; ?>" alt="<?php echo $obrazek10['alt']; ?>" />
				<?php the_field('produkt_10'); ?>

				<?php if( !empty($kosm10cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_10_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek11['url']; ?>" alt="<?php echo $obrazek11['alt']; ?>" />
				<?php the_field('produkt_11'); ?>

				<?php if( !empty($kosm11cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_11_cena'); ?></span></div>
				<?php endif; ?>

			</div>

			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek12['url']; ?>" alt="<?php echo $obrazek12['alt']; ?>" />
				<?php the_field('produkt_12'); ?>

				<?php if( !empty($kosm12cena) ): ?>
				<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('kosm_12_cena'); ?></span></div>
				<?php endif; ?>

			</div>



			<!--<div class="text_kadernictvi_blok">
				<?php the_field('text_clanku_o_keratinu'); ?>
			</div>
			<div class="sloupecky">
				<div class="vyhody">
					<?php the_field('vyhody'); ?>
				</div>
				<div class="nutno_dodrzet">
					<?php the_field('nutno_dodrzet'); ?>
				</div>
			</div>
			<div class="upozorneni">
				<img src="<?php echo $warning['url']; ?>" alt="<?php echo $warning['alt']; ?>" />
				<?php the_field('upozorneni'); ?>
			</div>
			<div class="nejcastejsi_dotazy">
				<?php the_field('nejcastejsi_dotazy'); ?>
			</div>-->

			<!-- +++++++++++++++++++++++++++++++++++++ KONEC DESIGNU ++++++++++++++++++++++++++++++++++++++++++ -->





	</section>
	<!-- /section -->
</main>
<!--GET SIDEBAR-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
