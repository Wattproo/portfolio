<?php

/**
 * Title: Product Archive Template
 * Slug: lavisto/template-catalog
 * Categories: template
 * Inserter: false
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"60px","left":"0","right":"0"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":807,"isUserOverlayColor":true,"minHeight":280,"gradient":"primary-gradient","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="padding-top:0px;padding-bottom:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-807" alt="" src="<?php echo esc_url($lavisto_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} /-->

                    <!-- wp:woocommerce/breadcrumbs {"textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}},"textColor":"light-color","className":"lavisto-cart-button","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"small"} -->
        <div class="wp-block-group lavisto-cart-button has-light-color-color has-text-color has-small-font-size" style="margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:woocommerce/product-results-count /-->

            <!-- wp:woocommerce/catalog-sorting {"fontSize":"normal","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":3,"query":{"perPage":"9","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","className":"lavisto-cart-button"} -->
        <div class="wp-block-query lavisto-cart-button"><!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":2},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"lavisto-product-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group lavisto-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"lavisto-product-image","layout":{"type":"constrained"}} -->
                <div class="wp-block-group lavisto-product-image" style="margin-bottom:14px"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"420px","style":{"border":{"radius":"0px"}}} /-->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"lavisto-product-buttons"} -->
                    <div class="wp-block-columns lavisto-product-buttons"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"lavisto-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                <!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"4px","left":"0","right":"0","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-pagination -->
            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->