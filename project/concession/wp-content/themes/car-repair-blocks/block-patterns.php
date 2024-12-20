<?php
/**
 * Car Repair Blocks: Block Patterns
 *
 * @since Car Repair Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Car Repair Blocks 1.0
 *
 * @return void
 */
function car_repair_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'car-repair-blocks'    => array( 'label' => __( 'Car Repair Blocks', 'car-repair-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'car_repair_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'car_repair_blocks_register_block_patterns', 9 );
