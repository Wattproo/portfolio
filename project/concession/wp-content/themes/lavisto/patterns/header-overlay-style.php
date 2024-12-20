<?php

/**
 * Title: Header Overlay Style
 * Slug: lavisto/header-overlay-style
 * Categories: lavisto, header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"var:preset|spacing|60","bottom":"24px","left":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"}}},"backgroundColor":"nav-overlay-color","className":"lavisto-header lavisto-overlap-nav lavisto-sticky-menu","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group lavisto-header lavisto-overlap-nav lavisto-sticky-menu has-nav-overlay-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:var(--wp--preset--spacing--60);padding-bottom:24px;padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"lavisto-sticky-navigation","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group lavisto-sticky-navigation" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-shade","overlayTextColor":"heading-color","className":"mighty-plumbers-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"5px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"x-large"} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"15px"}}} -->
                        <hr class="wp-block-separator has-alpha-channel-opacity" />
                        <!-- /wp:separator -->

                        <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Luxury Hotel', 'lavisto') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"15px"}}} -->
                        <hr class="wp-block-separator has-alpha-channel-opacity" />
                        <!-- /wp:separator -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('+1 (012) 345-6789', 'lavisto') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"className":"is-style-button-hover-hard-black-shadow","fontFamily":"montagu-slab"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow has-montagu-slab-font-family" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('Booking Enquiry', 'lavisto') ?></a></div>
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
</div>
<!-- /wp:group -->