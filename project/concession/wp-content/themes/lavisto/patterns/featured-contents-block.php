<?php

/**
 * Title: Featured Content Blocks
 * Slug: lavisto/featured-contents-block
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/meeting_hall.jpg',
    $lavisto_url . 'assets/images/wedding_celebration.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Featured Content Blocks"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Meeting \u0026 Events"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":1159,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($lavisto_images[0]) ?>" alt="" class="wp-image-1159" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":""} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
                <h1 class="wp-block-heading"><?php esc_html_e('Meeting &amp; Events', 'lavisto') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px;margin-bottom:40px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"18px","bottom":"18px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:18px;padding-right:35px;padding-bottom:18px;padding-left:35px"><?php esc_html_e('Explore More', 'lavisto') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Weeding \u0026 Celebrations"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
                <h1 class="wp-block-heading"><?php esc_html_e('Wedding &amp; Celebrations', 'lavisto') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px;margin-bottom:40px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"18px","bottom":"18px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:18px;padding-right:35px;padding-bottom:18px;padding-left:35px"><?php esc_html_e('Explore More', 'lavisto') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":1159,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($lavisto_images[1]) ?>" alt="" class="wp-image-1159" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->