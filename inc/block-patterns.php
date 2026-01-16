<?php
/**
 * SKT Generic : Block Patterns
 *
 * @since SKT Generic 1.0
 */

function skt_generic_register_block_patterns() {
	$block_pattern_categories = array(
		'skt' => array( 'label' => __( 'SKT Patterns', 'skt-generic' ) ),
	);

	$block_pattern_categories = apply_filters( 'skt_generic_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}

	$block_patterns = array(
		'skt-hero-image',
		'skt-work',
		'skt-left-image', 
		'skt-services',
		'skt-contact-info'
	);

	$block_patterns = apply_filters( 'skt_generic_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'skt-generic/' . $block_pattern,
			require $pattern_file // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		);
	}
}
add_action( 'init', 'skt_generic_register_block_patterns', 9 );