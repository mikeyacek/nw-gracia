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

?>


			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek1['url']; ?>" alt="<?php echo $obrazek1['alt']; ?>" />
				<?php the_field('produkt_1'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek2['url']; ?>" alt="<?php echo $obrazek2['alt']; ?>" />
				<?php the_field('produkt_2'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek3['url']; ?>" alt="<?php echo $obrazek3['alt']; ?>" />
				<?php the_field('produkt_3'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek4['url']; ?>" alt="<?php echo $obrazek4['alt']; ?>" />
				<?php the_field('produkt_4'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek5['url']; ?>" alt="<?php echo $obrazek5['alt']; ?>" />
				<?php the_field('produkt_5'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek6['url']; ?>" alt="<?php echo $obrazek6['alt']; ?>" />
				<?php the_field('produkt_6'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek7['url']; ?>" alt="<?php echo $obrazek7['alt']; ?>" />
				<?php the_field('produkt_7'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek8['url']; ?>" alt="<?php echo $obrazek8['alt']; ?>" />
				<?php the_field('produkt_8'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek9['url']; ?>" alt="<?php echo $obrazek9['alt']; ?>" />
				<?php the_field('produkt_9'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
			</div>
			
			<div class="kosm_foto_leve">
				<img src="<?php echo $obrazek10['url']; ?>" alt="<?php echo $obrazek10['alt']; ?>" />
				<?php the_field('produkt_10'); ?>


				<!--<div class="objednavka_kad_leva">Cena: <span class="telefon_c"><?php the_field('cena_keratin'); ?></span></div>-->

				
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
