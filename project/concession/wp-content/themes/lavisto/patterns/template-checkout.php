<?php

/**
 * Title: Checkout Template
 * Slug: lavisto/template-checkout
 * Categories: template
 * Inserter: false
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":807,"isUserOverlayColor":true,"minHeight":280,"gradient":"primary-gradient","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="padding-top:0px;padding-bottom:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-807" alt="" src="<?php echo esc_url($lavisto_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:post-title {"level":1} /-->

                    <!-- wp:woocommerce/breadcrumbs /-->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

        <!-- wp:woocommerce/checkout {"className":"wc-block-checkout"} -->
        <div class="wp-block-woocommerce-checkout alignwide wc-block-checkout is-loading"><!-- wp:woocommerce/checkout-fields-block -->
            <div class="wp-block-woocommerce-checkout-fields-block"><!-- wp:woocommerce/checkout-express-payment-block -->
                <div class="wp-block-woocommerce-checkout-express-payment-block"></div>
                <!-- /wp:woocommerce/checkout-express-payment-block -->

                <!-- wp:woocommerce/checkout-contact-information-block -->
                <div class="wp-block-woocommerce-checkout-contact-information-block"></div>
                <!-- /wp:woocommerce/checkout-contact-information-block -->

                <!-- wp:woocommerce/checkout-shipping-method-block -->
                <div class="wp-block-woocommerce-checkout-shipping-method-block"></div>
                <!-- /wp:woocommerce/checkout-shipping-method-block -->

                <!-- wp:woocommerce/checkout-pickup-options-block -->
                <div class="wp-block-woocommerce-checkout-pickup-options-block"></div>
                <!-- /wp:woocommerce/checkout-pickup-options-block -->

                <!-- wp:woocommerce/checkout-shipping-address-block -->
                <div class="wp-block-woocommerce-checkout-shipping-address-block"></div>
                <!-- /wp:woocommerce/checkout-shipping-address-block -->

                <!-- wp:woocommerce/checkout-billing-address-block -->
                <div class="wp-block-woocommerce-checkout-billing-address-block"></div>
                <!-- /wp:woocommerce/checkout-billing-address-block -->

                <!-- wp:woocommerce/checkout-shipping-methods-block -->
                <div class="wp-block-woocommerce-checkout-shipping-methods-block"></div>
                <!-- /wp:woocommerce/checkout-shipping-methods-block -->

                <!-- wp:woocommerce/checkout-payment-block -->
                <div class="wp-block-woocommerce-checkout-payment-block"></div>
                <!-- /wp:woocommerce/checkout-payment-block -->

                <!-- wp:woocommerce/checkout-additional-information-block -->
                <div class="wp-block-woocommerce-checkout-additional-information-block"></div>
                <!-- /wp:woocommerce/checkout-additional-information-block -->

                <!-- wp:woocommerce/checkout-order-note-block -->
                <div class="wp-block-woocommerce-checkout-order-note-block"></div>
                <!-- /wp:woocommerce/checkout-order-note-block -->

                <!-- wp:woocommerce/checkout-terms-block -->
                <div class="wp-block-woocommerce-checkout-terms-block"></div>
                <!-- /wp:woocommerce/checkout-terms-block -->

                <!-- wp:woocommerce/checkout-actions-block -->
                <div class="wp-block-woocommerce-checkout-actions-block"></div>
                <!-- /wp:woocommerce/checkout-actions-block -->
            </div>
            <!-- /wp:woocommerce/checkout-fields-block -->

            <!-- wp:woocommerce/checkout-totals-block -->
            <div class="wp-block-woocommerce-checkout-totals-block"><!-- wp:woocommerce/checkout-order-summary-block -->
                <div class="wp-block-woocommerce-checkout-order-summary-block"><!-- wp:woocommerce/checkout-order-summary-cart-items-block -->
                    <div class="wp-block-woocommerce-checkout-order-summary-cart-items-block"></div>
                    <!-- /wp:woocommerce/checkout-order-summary-cart-items-block -->

                    <!-- wp:woocommerce/checkout-order-summary-coupon-form-block -->
                    <div class="wp-block-woocommerce-checkout-order-summary-coupon-form-block"></div>
                    <!-- /wp:woocommerce/checkout-order-summary-coupon-form-block -->

                    <!-- wp:woocommerce/checkout-order-summary-totals-block -->
                    <div class="wp-block-woocommerce-checkout-order-summary-totals-block"><!-- wp:woocommerce/checkout-order-summary-subtotal-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-subtotal-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-subtotal-block -->

                        <!-- wp:woocommerce/checkout-order-summary-fee-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-fee-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-fee-block -->

                        <!-- wp:woocommerce/checkout-order-summary-discount-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-discount-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-discount-block -->

                        <!-- wp:woocommerce/checkout-order-summary-shipping-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-shipping-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-shipping-block -->

                        <!-- wp:woocommerce/checkout-order-summary-taxes-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-taxes-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-taxes-block -->
                    </div>
                    <!-- /wp:woocommerce/checkout-order-summary-totals-block -->
                </div>
                <!-- /wp:woocommerce/checkout-order-summary-block -->
            </div>
            <!-- /wp:woocommerce/checkout-totals-block -->
        </div>
        <!-- /wp:woocommerce/checkout -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->