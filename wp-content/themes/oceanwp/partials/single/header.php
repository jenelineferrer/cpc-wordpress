<?php
/**
 * Displays the post header
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if quote format.
if ( 'quote' === get_post_format() ) {
	return;
}

// Heading tag.
$heading = get_theme_mod( 'ocean_single_post_heading_tag', 'h2' );
$heading = $heading ? $heading : 'h2';
$heading = apply_filters( 'ocean_single_post_heading', $heading );

?>

<?php do_action( 'ocean_before_single_post_title' ); ?>

<header class="entry-header clr">
	<!-- <div class="header-category"><?php the_category( ' <span>/</span> ', get_the_ID() ); ?></div><br/> -->
	<<?php echo esc_attr( $heading ); ?> class="single-post-title entry-title"<?php oceanwp_schema_markup( 'headline' ); ?>><?php the_title(); ?></<?php echo esc_attr( $heading ); ?>>
	<div class="header-author"><?php echo get_avatar( get_the_author(), '50' ); ?> <?php echo get_the_author(); ?> </div><div class="icon-calendar"> <?php echo get_the_date( 'Y.m.d' ); ?></div><br/>
		<!-- .single-post-title -->
</header><!-- .entry-header -->

<?php do_action( 'ocean_after_single_post_title' ); ?>
