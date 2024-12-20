<?php

/**
 * Title: Latest Post Articles
 * Slug: lavisto/latest-articles
 * Categories: lavisto
 */
?>
<!-- wp:group {"metadata":{"name":"Latest Post Articles"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","className":"lavisto-fade-up","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group lavisto-fade-up has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":23,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"className":"lavisto-post-featuredimg is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group lavisto-post-featuredimg is-style-default" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#706f7b","isUserOverlayColor":true,"minHeight":400,"contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#706f7b"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"0px","bottom":"0px"},"blockGap":"0"},"layout":{"selfStretch":"fixed","flexSize":"90px"},"dimensions":{"minHeight":"80px"}},"backgroundColor":"dark-shade","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
                                <div class="wp-block-group has-dark-shade-background-color has-background" style="min-height:80px;padding-top:0px;padding-right:28px;padding-bottom:0px;padding-left:28px"><!-- wp:post-date {"format":"M","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1","textTransform":"uppercase"}},"textColor":"light-color","fontSize":"small"} /-->

                                    <!-- wp:post-date {"format":"j","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"textColor":"light-color","fontSize":"x-large","fontFamily":"montagu-slab"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0"},"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group" style="margin-top:20px;margin-bottom:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"meta-color","fontSize":"small"} /-->

                        <!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"x-large"} /-->

                        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}}},"textColor":"light-color","className":"is-style-readmore-hover-black-shadow"} /--></div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"54px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"bottom":"40px"}}},"textColor":"light-color","className":"lavisto-header"} -->
            <h1 class="wp-block-heading has-text-align-left lavisto-header has-light-color-color has-text-color has-link-color" style="margin-bottom:40px;font-size:54px;font-style:normal;font-weight:400"><?php esc_html_e('Latest Articles and Insights', 'lavisto') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:query {"queryId":23,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px"}},"className":"lavisto-post-featuredimg is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group lavisto-post-featuredimg is-style-default" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"100px"} -->
                        <div class="wp-block-column" style="flex-basis:100px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"},"blockGap":"0"},"layout":{"selfStretch":"fixed","flexSize":"106px"},"dimensions":{"minHeight":"100px"}},"backgroundColor":"light-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="min-height:100px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><!-- wp:post-date {"format":"M","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1","textTransform":"uppercase"}},"textColor":"dark-shade","fontSize":"small"} /-->

                                    <!-- wp:post-date {"format":"j","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"textColor":"dark-shade","fontSize":"x-large","fontFamily":"montagu-slab"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"meta-color","fontSize":"small"} /--></div>
                                <!-- /wp:group -->

                                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"big"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->