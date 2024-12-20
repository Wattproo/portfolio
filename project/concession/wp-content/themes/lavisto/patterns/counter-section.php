<?php

/**
 * Title: Counter Section
 * Slug: lavisto/counter-section
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Achievement Stats"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":807,"hasParallax":true,"isUserOverlayColor":true,"minHeight":640,"gradient":"primary-gradient","contentPosition":"center center","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover has-parallax" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
        <div class="wp-block-cover__image-background wp-image-807 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($lavisto_images[0]) ?>)"></div>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"24px"}}},"fontSize":"xxx-large"} -->
                    <h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="margin-bottom:24px;font-style:normal;font-weight:700"><?php esc_html_e('50+', 'lavisto') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size"><?php esc_html_e('Years In Industry', 'lavisto') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'lavisto') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"24px"}}},"fontSize":"xxx-large"} -->
                    <h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="margin-bottom:24px;font-style:normal;font-weight:700"><?php esc_html_e('150+', 'lavisto') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size"><?php esc_html_e('Branches Worldwide!', 'lavisto') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'lavisto') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"24px"}}},"fontSize":"xxx-large"} -->
                    <h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="margin-bottom:24px;font-style:normal;font-weight:700"><?php esc_html_e('100+', 'lavisto') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size"><?php esc_html_e('Countries', 'lavisto') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'lavisto') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->