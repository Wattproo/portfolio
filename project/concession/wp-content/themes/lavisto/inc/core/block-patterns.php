<?php

/**
 * lavisto: Block Patterns
 *
 * @since lavisto 1.0.0
 */

/**
 * Registers pattern categories for lavisto
 *
 * @since lavisto 1.0.0
 *
 * @return void
 */
function lavisto_register_pattern_category()
{
	$block_pattern_categories = array(
		'lavisto' => array('label' => __('Lavisto Sections', 'lavisto')),
		'lavisto-home' => array('label' => __('Lavisto Home Pages', 'lavisto')),
		'lavisto-contact' => array('label' => __('Lavisto Contact Us Pages', 'lavisto')),
		'lavisto-services' => array('label' => __('Lavisto Service Pages', 'lavisto')),
		'lavisto-about' => array('label' => __('Lavisto About Us Pages', 'lavisto'))
	);

	$block_pattern_categories = apply_filters('lavisto_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'lavisto_register_pattern_category', 9);
