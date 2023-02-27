<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tecnic
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'tecnic' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			/*printf(
				'<p>' . wp_kses(
					 translators: 1: link to WP admin new post page. 
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tecnic' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);*/

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Lo sentimos, pero nada coincide con los términos de búsqueda. Vuelva a intentarlo con otras palabras clave.', 'tecnic' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'Parece que no podemos encontrar lo que estás buscando. Tal vez la búsqueda pueda ayudar.', 'tecnic' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
