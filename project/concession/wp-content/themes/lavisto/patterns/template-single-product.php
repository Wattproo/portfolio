<?php

/**
 * Title: Single Product Template
 * Slug: lavisto/template-single-product
 * Categories: template
 * Inserter: false
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":807,"isUserOverlayColor":true,"minHeight":280,"gradient":"primary-gradient","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="padding-top:0px;padding-bottom:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-807" alt="" src="<?php echo esc_url($lavisto_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"xx-large"} /--></div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"normal"} -->
        <div class="wp-block-columns alignwide has-heading-color-color has-text-color has-link-color has-normal-font-size" style="margin-bottom:1rem;font-style:normal;font-weight:600"><!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:woocommerce/product-image-gallery /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:woocommerce/breadcrumbs /-->

                <!-- wp:post-excerpt {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"textColor":"heading-color","fontSize":"big","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

                    <!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:woocommerce/add-to-cart-form /-->

                <!-- wp:woocommerce/product-meta -->
                <div class="wp-block-woocommerce-product-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:woocommerce/product-meta -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:woocommerce/product-details {"align":"wide","style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

        <!-- wp:woocommerce/related-products {"align":"wide"} -->
        <div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true},"layout":{"type":"default"}} -->
            <div class="wp-block-query"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"24px"}}},"fontSize":"large"} -->
                <h2 class="wp-block-heading has-large-font-size" style="margin-bottom:24px">Related products</h2>
                <!-- /wp:heading -->

                <!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
                <!-- wp:group {"className":"lavisto-product-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-group lavisto-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"16px"}}},"className":"lavisto-product-image","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group lavisto-product-image" style="margin-bottom:16px"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"height":"380px","style":{"border":{"radius":"0px"}}} /-->

                        <!-- wp:columns {"className":"lavisto-product-buttons"} -->
                        <div class="wp-block-columns lavisto-product-buttons"><!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"backgroundColor":"background-alt","textColor":"light-color","fontSize":"small","style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} /--></div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"heading-color","fontSize":"normal","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"heading-color","fontSize":"normal","style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:woocommerce/related-products -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->