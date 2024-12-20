<?php

/**
 * Title: Rooms Showcase
 * Slug: lavisto/room-showcase
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/room_1.jpg',
    $lavisto_url . 'assets/images/room_2.jpg',
    $lavisto_url . 'assets/images/icon_guest.png',
    $lavisto_url . 'assets/images/icon_bed.png',
    $lavisto_url . 'assets/images/icon_bathroom.png',
    $lavisto_url . 'assets/images/icon_wifi.png',
    $lavisto_url . 'assets/images/icon_van.png',
    $lavisto_url . 'assets/images/icon_laundry.png',
    $lavisto_url . 'assets/images/icon_breakfast.png',
);
?>
<!-- wp:group {"metadata":{"name":"Room and CTA"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Room Showcase"},"style":{"spacing":{"padding":{"top":"100px","bottom":"160px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1440px"}} -->
    <div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:160px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"54px"}},"textColor":"heading-color"} -->
                    <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:54px"><?php esc_html_e('Rooms &amp; Suites', 'lavisto') ?></h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"heading-color","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"18px","textTransform":"uppercase"},"spacing":{"padding":{"left":"45px","right":"45px","top":"18px","bottom":"18px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-button-hover-hard-black-shadow","fontFamily":"montagu-slab"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-heading-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:18px;padding-right:45px;padding-bottom:18px;padding-left:45px"><?php esc_html_e('View More', 'lavisto') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"16px"}}}} -->
        <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":942,"dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":580,"contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-942" alt="" src="<?php echo esc_url($lavisto_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"lavisto-room-price","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                        <div class="wp-block-group lavisto-room-price"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"backgroundColor":"light-color","textColor":"dark-color","fontSize":"small"} -->
                            <p class="has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:10px;padding-right:14px;padding-bottom:10px;padding-left:14px;text-transform:uppercase"><?php esc_html_e('$270/Night', 'lavisto') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:34px"><a href="#"><?php esc_html_e('Deluxe Room', 'lavisto') ?></a></h2>
                        <!-- /wp:heading -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"24px"}},"border":{"top":{"color":"#e1e7f585","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":974,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[2]) ?>" alt="" class="wp-image-974" style="object-fit:contain;width:22px;height:22px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                <p class="has-text-align-center has-small-font-size"><?php esc_html_e('4 Guests', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":964,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[3]) ?>" alt="" class="wp-image-964" style="object-fit:contain;width:22px;height:22px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                <p class="has-text-align-center has-small-font-size"><?php esc_html_e('2 Beds', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":976,"width":"22px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[4]) ?>" alt="" class="wp-image-976" style="object-fit:contain;width:22px;height:auto" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                <p class="has-text-align-center has-small-font-size"><?php esc_html_e('1 Bathroom', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[1]) ?>","id":945,"dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":580,"contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-945" alt="" src="<?php echo esc_url($lavisto_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"lavisto-room-price","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                        <div class="wp-block-group lavisto-room-price"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"backgroundColor":"light-color","textColor":"dark-color","fontSize":"small"} -->
                            <p class="has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:10px;padding-right:14px;padding-bottom:10px;padding-left:14px;text-transform:uppercase"><?php esc_html_e('$270/Night', 'lavisto') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:34px"><a href="#"><?php esc_html_e('Deluxe Room', 'lavisto') ?></a></h2>
                        <!-- /wp:heading -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"24px"}},"border":{"top":{"color":"#e1e7f585","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":974,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[2]) ?>" alt="" class="wp-image-974" style="object-fit:contain;width:22px;height:22px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                <p class="has-text-align-center has-small-font-size"><?php esc_html_e('4 Guests', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":964,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[3]) ?>" alt="" class="wp-image-964" style="object-fit:contain;width:22px;height:22px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                <p class="has-text-align-center has-small-font-size"><?php esc_html_e('2 Beds', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":976,"width":"22px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[4]) ?>" alt="" class="wp-image-976" style="object-fit:contain;width:22px;height:auto" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                <p class="has-text-align-center has-small-font-size"><?php esc_html_e('1 Bathroom', 'lavisto') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Featured CTA"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"lavisto-featured-cta","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group lavisto-featured-cta"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"42px","bottom":"42px"}}},"backgroundColor":"heading-color","className":"featured-box"} -->
            <div class="wp-block-columns featured-box has-heading-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:42px;padding-bottom:42px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":995,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($lavisto_images[5]) ?>" alt="" class="wp-image-995" style="object-fit:cover;width:50px;height:50px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Wifi &amp; Internet', 'lavisto') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":1003,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($lavisto_images[6]) ?>" alt="" class="wp-image-1003" style="object-fit:cover;width:50px;height:50px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Airport Transfer', 'lavisto') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":1013,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($lavisto_images[7]) ?>" alt="" class="wp-image-1013" style="object-fit:cover;width:50px;height:50px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Laundry Services', 'lavisto') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":1014,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($lavisto_images[8]) ?>" alt="" class="wp-image-1014" style="object-fit:cover;width:50px;height:50px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Breakfast in Bed', 'lavisto') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->