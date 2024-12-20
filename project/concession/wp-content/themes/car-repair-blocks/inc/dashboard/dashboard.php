<?php

add_action( 'admin_menu', 'car_repair_blocks_gettingstarted' );
function car_repair_blocks_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'car-repair-blocks'), esc_html__('Begin Installation', 'car-repair-blocks'), 'edit_theme_options', 'car-repair-blocks-guide-page', 'car_repair_blocks_guide');
}

function car_repair_blocks_admin_theme_style() {
   wp_enqueue_style('car-repair-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'car_repair_blocks_admin_theme_style');

if ( ! defined( 'CAR_REPAIR_BLOCKS_SUPPORT' ) ) {
define('CAR_REPAIR_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/car-repair-blocks/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_REVIEW' ) ) {
define('CAR_REPAIR_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/car-repair-blocks/reviews/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_LIVE_DEMO' ) ) {
define('CAR_REPAIR_BLOCKS_LIVE_DEMO',__('https://trial.ovationthemes.com/automobile-repair-blocks-pro/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_BUY_PRO' ) ) {
define('CAR_REPAIR_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/products/car-repair-wordpress-theme','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_PRO_DOC' ) ) {
define('CAR_REPAIR_BLOCKS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-automobile-repair-blocks-pro-doc/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_FREE_DOC' ) ) {
define('CAR_REPAIR_BLOCKS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-car-repair-blocks-free-doc/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_THEME_NAME' ) ) {
define('CAR_REPAIR_BLOCKS_THEME_NAME',__('Premium Car Repair Blocks Theme','car-repair-blocks'));
}

/**
 * Theme Info Page
 */
function car_repair_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$car_repair_blocks_theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $car_repair_blocks_theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'car-repair-blocks'); ?><?php echo esc_html($car_repair_blocks_theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( CAR_REPAIR_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'car-repair-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CAR_REPAIR_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'car-repair-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','car-repair-blocks'); ?></h3>
					<p><?php $car_repair_blocks_theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $car_repair_blocks_theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','car-repair-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','car-repair-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','car-repair-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','car-repair-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','car-repair-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','car-repair-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','car-repair-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','car-repair-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( CAR_REPAIR_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','car-repair-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(CAR_REPAIR_BLOCKS_THEME_NAME); ?></h3>
				<img class="car_repair_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $car_repair_blocks_theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( CAR_REPAIR_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'car-repair-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( CAR_REPAIR_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'car-repair-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( CAR_REPAIR_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'car-repair-blocks'); ?></a>
					<hr>
				</div>
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
		</div>
	</div>

<?php }?>