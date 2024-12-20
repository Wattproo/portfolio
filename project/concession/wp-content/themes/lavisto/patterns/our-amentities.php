<?php

/**
 * Title: Our Amentities Section
 * Slug: lavisto/our-amentities
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/service_img.jpg',
    $lavisto_url . 'assets/images/icon_1.png',
    $lavisto_url . 'assets/images/icon_2.png',
    $lavisto_url . 'assets/images/icon_3.png',
    $lavisto_url . 'assets/images/icon_4.png',
    $lavisto_url . 'assets/images/icon_5.png',
    $lavisto_url . 'assets/images/icon_6.png',
);
?>
<!-- wp:group {"metadata":{"name":"Featured Services"},"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"0px","top":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"lavisto-slide-up"} -->
        <div class="wp-block-column is-vertically-aligned-center lavisto-slide-up" style="flex-basis:50%"><!-- wp:image {"id":842,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($lavisto_images[0]) ?>" alt="" class="wp-image-842" style="border-radius:0px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"lavisto-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center lavisto-fade-up" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"54px"}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0;font-size:54px"><?php esc_html_e('Our Amenities', 'lavisto') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"50px","left":"50px"},"margin":{"top":"60px"}}}} -->
                <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column"><!-- wp:image {"id":849,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[1]) ?>" alt="" class="wp-image-849" style="width:50px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:20px"><?php esc_html_e('Swimming Pool', 'lavisto') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum proin gravida velit auctor sde re sit amet space.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column"><!-- wp:image {"id":1114,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[2]) ?>" alt="" class="wp-image-1114" style="width:50px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:20px"><?php esc_html_e('Gym &amp; Yoga', 'lavisto') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum proin gravida velit auctor sde re sit amet space.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"50px","left":"50px"},"margin":{"top":"50px"}}}} -->
                <div class="wp-block-columns" style="margin-top:50px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column"><!-- wp:image {"id":1115,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[3]) ?>" alt="" class="wp-image-1115" style="width:50px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:20px"><?php esc_html_e('Spa &amp; Massage', 'lavisto') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum proin gravida velit auctor sde re sit amet space.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column"><!-- wp:image {"id":1116,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[4]) ?>" alt="" class="wp-image-1116" style="width:50px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:20px"><?php esc_html_e('Boat Tours', 'lavisto') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum proin gravida velit auctor sde re sit amet space.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"50px","left":"50px"},"margin":{"top":"50px"}}}} -->
                <div class="wp-block-columns" style="margin-top:50px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column"><!-- wp:image {"id":1118,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[5]) ?>" alt="" class="wp-image-1118" style="width:50px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:20px"><?php esc_html_e('Diving &amp; Snorkeling', 'lavisto') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum proin gravida velit auctor sde re sit amet space.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column"><!-- wp:image {"id":1119,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[6]) ?>" alt="" class="wp-image-1119" style="width:50px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:20px"><?php esc_html_e('Private Beach', 'lavisto') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum proin gravida velit auctor sde re sit amet space.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->