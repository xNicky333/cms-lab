<?php
/**
 * Szablon tylko dla strony o slugu "o-nas".
 * Hierarchia: page-o-nas.php (child) -> page.php (rodzic) -> index.php
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'mf-o-nas' ); ?>>
		<header class="entry-header alignwide">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p class="mf-lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>

			<section class="mf-firma-info" aria-label="<?php echo esc_attr__( 'Dane firmy', 'mf-child' ); ?>">
				<h2><?php echo esc_html__( 'Dane kontaktowe', 'mf-child' ); ?></h2>
				<p><strong><?php echo esc_html( 'SKYTECH FPV' ); ?></strong></p>
				<p><?php echo esc_html__( 'Adres: ul. Dronowa 13, 33-345 Poznań', 'mf-child' ); ?></p>
				<p>
					<?php echo esc_html__( 'E-mail:', 'mf-child' ); ?>
					<a href="<?php echo esc_url( 'mailto:sklep@skytech.pl' ); ?>"><?php echo esc_html( 'sklep@skytech.pl' ); ?></a>
				</p>
				<p>
					<?php echo esc_html__( 'Telefon:', 'mf-child' ); ?>
					<a href="<?php echo esc_url( 'tel:+48123456789' ); ?>"><?php echo esc_html( '123 456 789' ); ?></a>
				</p>
			</section>
		</div>
	</article>
	<?php
endwhile;

get_footer();