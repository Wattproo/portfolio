<?php
/**
 * Title: Banner
 * Slug: car-repair-blocks/banner
 * Categories: car-repair-blocks, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.jpg'); ?>","id":1957,"dimRatio":70,"overlayColor":"base","isUserOverlayColor":true,"minHeight":800,"minHeightUnit":"px","align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignwide banner-image-cover" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1957" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"className":"is-vertically-aligned-center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"banner-content wow flipInX"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content wow flipInX" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"shot-heading","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group shot-heading"><!-- wp:separator {"backgroundColor":"white"} -->
<hr class="wp-block-separator has-text-color has-white-color has-alpha-channel-opacity has-white-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"white"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Welcome To our Automobile','car-repair-blocks'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"62px","fontStyle":"normal","fontWeight":"900"}},"textColor":"white","fontFamily":"saira"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color has-saira-font-family" style="font-size:62px;font-style:normal;font-weight:900"><?php esc_html_e('Professional Car Fixing','car-repair-blocks'); ?><br><?php esc_html_e('Service ','car-repair-blocks'); ?><span class="color"><?php esc_html_e('Anytime','car-repair-blocks'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','car-repair-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"},"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"#e0e0e0"}}},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"text":"#e0e0e0"}},"fontFamily":"saira"} -->
<div class="wp-block-button has-custom-font-size has-saira-font-family" style="font-size:18px;font-style:normal;font-weight:700"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;color:#e0e0e0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Read More','car-repair-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->