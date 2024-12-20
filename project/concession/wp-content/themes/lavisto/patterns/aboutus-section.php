<?php

/**
 * Title: About Us Section
 * Slug: lavisto/aboutus-section
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/about_img_1.jpg',
    $lavisto_url . 'assets/images/about_img_2.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"About Us"},"style":{"spacing":{"padding":{"top":"110px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:var(--wp--preset--spacing--30);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"40px"}}},"className":"lavisto-fade-up"} -->
    <div class="wp-block-columns lavisto-fade-up" style="margin-top:0px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"540px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"54px"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:54px"><?php esc_html_e('Experience the Luxury Lifestyle at Lavisto!', 'lavisto') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px;margin-bottom:40px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"45px","right":"45px","top":"18px","bottom":"18px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:18px;padding-right:45px;padding-bottom:18px;padding-left:45px"><?php esc_html_e('Read More', 'lavisto') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:image {"id":823,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($lavisto_images[0]) ?>" alt="" class="wp-image-823" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"24px"}}},"textColor":"heading-color"} -->
            <h4 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="margin-top:24px;font-size:24px"><?php esc_html_e('Welcome to the best five-star deluxe hotel in city!', 'lavisto') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"id":821,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($lavisto_images[1]) ?>" alt="" class="wp-image-821" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->