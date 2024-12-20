<?php

/**
 * Title: Photo Gallery
 * Slug: lavisto/photo-gallery
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/g1.jpg',
    $lavisto_url . 'assets/images/g2.jpg',
    $lavisto_url . 'assets/images/g3.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Photo Gallery"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"54px"},"spacing":{"margin":{"bottom":"37px"}}}} -->
            <h1 class="wp-block-heading" style="margin-bottom:37px;font-size:54px"><?php esc_html_e('From Hotel Photos Gallery', 'lavisto') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:image {"id":1016,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($lavisto_images[0]) ?>" alt="" class="wp-image-1016" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:gallery {"columns":1,"imageCrop":false,"linkTo":"none","sizeSlug":"full","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
            <figure class="wp-block-gallery has-nested-images columns-1"><!-- wp:image {"id":1019,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($lavisto_images[1]) ?>" alt="" class="wp-image-1019" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":1018,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($lavisto_images[2]) ?>" alt="" class="wp-image-1018" /></figure>
                <!-- /wp:image -->
            </figure>
            <!-- /wp:gallery -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->