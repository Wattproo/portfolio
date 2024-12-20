<?php

/**
 * Title: Footer Default
 * Slug: lavisto/footer-default
 * Categories: lavisto, footer
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/lavisto-white.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"0","left":"0","bottom":"30px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"dark-color","className":"lavisto-footer","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group lavisto-footer has-dark-color-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:30px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"},"margin":{"top":"0","bottom":"60px"},"padding":{"bottom":"32px"}},"border":{"bottom":{"color":"var:preset|color|border-dark-color","width":"1px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:var(--wp--preset--color--border-dark-color);border-bottom-width:1px;margin-top:0;margin-bottom:60px;padding-bottom:32px"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"light-color","fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Sign Up Newsletter', 'lavisto') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:contact-form-7/contact-form-selector {"id":253,"hash":"f245613","title":"Newsletter","className":"lavisto-newsletter"} -->
                <div class="wp-block-contact-form-7-contact-form-selector lavisto-newsletter"><?php esc_html_e('Insert the contact form shortcode with the additional CSS class- "lavisto-newsletter"', 'lavisto'); ?></div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"50px"},"margin":{"top":"40px"}}}} -->
        <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"width":"35%","className":"lavisto-footer-list"} -->
            <div class="wp-block-column lavisto-footer-list" style="flex-basis:35%"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column {"width":"90%"} -->
                    <div class="wp-block-column" style="flex-basis:90%"><!-- wp:image {"id":1129,"width":"240px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[0]) ?>" alt="" class="wp-image-1129" style="width:240px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'lavisto') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"dark-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"30px","bottom":"0"}}}} -->
                        <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"lavisto-footer-list"} -->
            <div class="wp-block-column lavisto-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('Quick Links', 'lavisto') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About Us', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Policy', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Terms and Conditions', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Contact Us', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"lavisto-footer-list"} -->
            <div class="wp-block-column lavisto-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('Services', 'lavisto') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About Us', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Policy', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Terms and Conditions', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Contact Us', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":""} -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:400;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Contact Us', 'lavisto') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"0"},"padding":{"left":"4px"}}},"className":"lavisto-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group lavisto-footer-list" style="margin-bottom:0;padding-left:4px"><!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"medium"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:500;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-medium-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('+1 (012) 345-6780', 'lavisto') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                        <li class="has-normal-font-size"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'lavisto') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                        <li class="has-normal-font-size"><a href="#"><?php esc_html_e('email@example.com', 'lavisto') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"},"padding":{"top":"30px","bottom":"10px"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|border-dark-color","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-dark-color);border-top-width:1px;margin-top:60px;padding-top:30px;padding-bottom:10px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"light-color","fontSize":"normal"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Lavisto by CozyThemes.', 'lavisto') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"lavisto-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
    <div class="wp-block-button lavisto-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'lavisto') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->