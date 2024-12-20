<?php
/**
 * Title: Latest News
 * Slug: car-repair-blocks/latest-news
 * Categories: car-repair-blocks, latest-news
 */
?>

<!-- wp:group {"className":"latest-news","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news"><!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"shot-heading","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group shot-heading"><!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest News','car-repair-blocks'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"18px"} -->
<div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"latest-blogs","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"wow swing blog-box-upper","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow swing blog-box-upper" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"blog-img-outer","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-img-outer"><!-- wp:post-featured-image {"isLink":true,"align":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"className":"blog-meta-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group blog-meta-row" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"primary","className":"date-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group date-box has-primary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-date {"textAlign":"center","format":"j M","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"12px"}},"textColor":"white"} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"showPostTitle":false,"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-excerpt {"excerptLength":15,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','car-repair-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->