<?php

/**
 * Title: Tour & Activities
 * Slug: lavisto/activities-block
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/climbing.jpg',
    $lavisto_url . 'assets/images/bike_ride.jpg',
    $lavisto_url . 'assets/images/snow.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Local Tours Activisties"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"8em","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8em;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"lavisto-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group lavisto-fade-up"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase","fontSize":"54px"}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:54px;text-transform:uppercase"><?php esc_html_e('Local Tours &amp; Activities', 'lavisto') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"74px"},"blockGap":{"left":"40px"}}},"className":"lavisto-fade-up"} -->
    <div class="wp-block-columns lavisto-fade-up" style="margin-top:74px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"}},"className":"is-style-default local-tour-package-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default local-tour-package-box" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":869,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"contentPosition":"top right","isDark":false,"className":"local-tour-package","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-right local-tour-package" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-869" alt="" src="<?php echo esc_url($lavisto_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"10px","right":"10px"}}},"backgroundColor":"light-color","textColor":"heading-color","fontSize":"x-small"} -->
                        <p class="has-text-align-center has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:8px;padding-right:10px;padding-bottom:8px;padding-left:10px;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('$250/Person', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h3 class="wp-block-heading has-big-font-size" style="margin-top:24px"><?php esc_html_e('Climbing', 'lavisto') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud laboris.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'lavisto') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"}},"className":"is-style-default local-tour-package-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default local-tour-package-box" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[1]) ?>","id":922,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"contentPosition":"top right","isDark":false,"className":"local-tour-package","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-right local-tour-package" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-922" alt="" src="<?php echo esc_url($lavisto_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"10px","right":"10px"}}},"backgroundColor":"light-color","textColor":"heading-color","fontSize":"x-small"} -->
                        <p class="has-text-align-center has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:8px;padding-right:10px;padding-bottom:8px;padding-left:10px;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('$250/Person', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h3 class="wp-block-heading has-big-font-size" style="margin-top:24px"><?php esc_html_e('Bike Riding', 'lavisto') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud laboris.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'lavisto') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"}},"className":"is-style-default local-tour-package-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default local-tour-package-box" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[2]) ?>","id":923,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"contentPosition":"top right","isDark":false,"className":"local-tour-package","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-right local-tour-package" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-923" alt="" src="<?php echo esc_url($lavisto_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"10px","right":"10px"}}},"backgroundColor":"light-color","textColor":"heading-color","fontSize":"x-small"} -->
                        <p class="has-text-align-center has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:8px;padding-right:10px;padding-bottom:8px;padding-left:10px;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('$250/Person', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h3 class="wp-block-heading has-big-font-size" style="margin-top:24px"><?php esc_html_e('Snow Sports', 'lavisto') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud laboris.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-border-color-border-color wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('Read More', 'lavisto') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->