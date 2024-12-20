<?php
/**
 * Car Repair Blocks: Customizer
 *
 * @subpackage Car Repair Blocks
 * @since 1.0
 */

function car_repair_blocks_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('car_repair_blocks_pro', array(
        'title'    => __('CAR REPAIR BLOCKS PREMIUM ', 'car-repair-blocks'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('car_repair_blocks_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Car_Repair_Blocks_Pro_Control($wp_customize, 'car_repair_blocks_pro', array(
        'label'    => __('CAR REPAIR BLOCKS PREMIUM', 'car-repair-blocks'),
        'section'  => 'car_repair_blocks_pro',
        'settings' => 'car_repair_blocks_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'car_repair_blocks_customize_register' );


define('CAR_REPAIR_BLOCKS_PRO_LINK',__('https://www.ovationthemes.com/products/car-repair-wordpress-theme','car-repair-blocks'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Car_Repair_Blocks_Pro_Control')):
    class Car_Repair_Blocks_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CAR REPAIR BLOCKS PREMIUM ','car-repair-blocks');?> </a>
	        </div>
            <div class="col-md">
                <img class="car_repair_blocks_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'car-repair-blocks');?> </li>                 
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'car-repair-blocks');?> </li>
                    <li class="upsell-car_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'car-repair-blocks');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CAR REPAIR BLOCKS PREMIUM ','car-repair-blocks');?> </a>
            </div>
        </label>
    <?php } }
endif;