<?php

/**
 * Title: Cart Template
 * Slug: lavisto/template-cart
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
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"x-large"} -->
                    <h1 class="wp-block-heading alignwide has-text-align-center has-light-color-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Cart', 'lavisto') ?></h1>
                    <!-- /wp:heading -->

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

        <!-- wp:woocommerce/cart -->
        <div class="wp-block-woocommerce-cart alignwide is-loading"><!-- wp:woocommerce/filled-cart-block -->
            <div class="wp-block-woocommerce-filled-cart-block"><!-- wp:woocommerce/cart-items-block -->
                <div class="wp-block-woocommerce-cart-items-block"><!-- wp:woocommerce/cart-line-items-block -->
                    <div class="wp-block-woocommerce-cart-line-items-block"></div>
                    <!-- /wp:woocommerce/cart-line-items-block -->

                    <!-- wp:woocommerce/cart-cross-sells-block -->
                    <div class="wp-block-woocommerce-cart-cross-sells-block"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"big"} -->
                        <h2 class="wp-block-heading has-big-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('You may be interested in…', 'lavisto') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:woocommerce/cart-cross-sells-products-block {"columns":4} -->
                        <div class="wp-block-woocommerce-cart-cross-sells-products-block"></div>
                        <!-- /wp:woocommerce/cart-cross-sells-products-block -->
                    </div>
                    <!-- /wp:woocommerce/cart-cross-sells-block -->
                </div>
                <!-- /wp:woocommerce/cart-items-block -->

                <!-- wp:woocommerce/cart-totals-block -->
                <div class="wp-block-woocommerce-cart-totals-block"><!-- wp:woocommerce/cart-order-summary-block -->
                    <div class="wp-block-woocommerce-cart-order-summary-block"><!-- wp:woocommerce/cart-order-summary-heading-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-heading-block -->

                        <!-- wp:woocommerce/cart-order-summary-coupon-form-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-coupon-form-block -->

                        <!-- wp:woocommerce/cart-order-summary-totals-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-totals-block"><!-- wp:woocommerce/cart-order-summary-subtotal-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-subtotal-block -->

                            <!-- wp:woocommerce/cart-order-summary-fee-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-fee-block -->

                            <!-- wp:woocommerce/cart-order-summary-discount-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-discount-block -->

                            <!-- wp:woocommerce/cart-order-summary-shipping-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-shipping-block -->

                            <!-- wp:woocommerce/cart-order-summary-taxes-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-taxes-block -->
                        </div>
                        <!-- /wp:woocommerce/cart-order-summary-totals-block -->
                    </div>
                    <!-- /wp:woocommerce/cart-order-summary-block -->

                    <!-- wp:woocommerce/cart-express-payment-block -->
                    <div class="wp-block-woocommerce-cart-express-payment-block"></div>
                    <!-- /wp:woocommerce/cart-express-payment-block -->

                    <!-- wp:woocommerce/proceed-to-checkout-block -->
                    <div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
                    <!-- /wp:woocommerce/proceed-to-checkout-block -->

                    <!-- wp:woocommerce/cart-accepted-payment-methods-block -->
                    <div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
                    <!-- /wp:woocommerce/cart-accepted-payment-methods-block -->
                </div>
                <!-- /wp:woocommerce/cart-totals-block -->
            </div>
            <!-- /wp:woocommerce/filled-cart-block -->

            <!-- wp:woocommerce/empty-cart-block -->
            <div class="wp-block-woocommerce-empty-cart-block"><!-- wp:heading {"textAlign":"center","className":"with-empty-cart-icon wc-block-cart__empty-cart__title"} -->
                <h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title"><?php esc_html_e('Your cart is currently empty!', 'lavisto') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:separator {"className":"is-style-dots"} -->
                <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots" />
                <!-- /wp:separator -->

                <!-- wp:heading {"textAlign":"center"} -->
                <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('New in store', 'lavisto') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:woocommerce/product-new {"columns":4,"rows":1} /-->
            </div>
            <!-- /wp:woocommerce/empty-cart-block -->
        </div>
        <!-- /wp:woocommerce/cart -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->