<?php

/**
 * Title: Footer minimal Layout
 * Slug: lavisto/footer-minimal
 * Categories: lavisto, footer
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/lavisto-white.png',
);
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"0","left":"0","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-shade","className":"lavisto-footer","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group lavisto-footer has-light-shade-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:0;padding-bottom:20px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0px","bottom":"10px"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"width":"0px","style":"none"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0px;padding-top:0px;padding-bottom:10px"><!-- wp:navigation {"ref":778,"textColor":"heading-color","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left"}} /-->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","iconBackgroundColor":"dark-shade","iconBackgroundColorValue":"#0039CA","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"30px","bottom":"0"}}}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"vk"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"padding":{"top":"40px","bottom":"10px"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"#d6dbe7","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="border-top-color:#d6dbe7;border-top-width:1px;margin-top:40px;padding-top:40px;padding-bottom:10px"><!-- wp:image {"id":1129,"width":"240px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-duo"}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($lavisto_images[0]) ?>" alt="" class="wp-image-1129" style="width:240px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"heading-color","fontSize":"normal"} -->
                <p class="has-text-align-center has-heading-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Lavisto by CozyThemes.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"lavisto-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button lavisto-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'lavisto') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->