<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zurbox Lite
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	$stored_meta = get_post_meta( $post->ID, 'show_featured_image', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	if ( get_theme_mod( 'featured_image_page' ) == 'header' && $stored_meta != 1 ) {
		the_post_thumbnail( 'zurbox-entry', array('class' => 'thumbnail header-image') );
	}

	if ( ! has_post_thumbnail() || has_post_thumbnail() && $stored_meta == 1 || get_theme_mod( 'featured_image_page' ) == 'header' ) {
		if ( has_excerpt() || get_post_meta( $post->ID, 'disable-title', true ) != true ) {
?>
			<header class="entry-header">
				<?php if ( get_post_meta( $post->ID, 'disable-title', true ) != true ) : ?>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php endif; ?>
				<?php if ( has_excerpt() ) : ?>
					<?php the_excerpt(); ?>
				<?php endif; ?>
			</header><!-- .entry-header -->
<?php
		}
	} ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zurbox-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'zurbox-lite' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->