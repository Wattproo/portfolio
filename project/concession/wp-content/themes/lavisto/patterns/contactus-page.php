<?php

/**
 * Title: Contact Us Page 
 * Slug: lavisto/contactus-page
 * Categories: lavisto-contact
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:group {"metadata":{"name":"Location Map"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"lavisto-location-map","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group lavisto-location-map" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:html -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23246.175995421017!2d-73.99963259264177!3d40.762361164906196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a55bf63875%3A0x2db38ea8193eb167!2s178%20W%2027th%20St%2C%20New%20York%2C%20NY%2010012%2C%20USA!5e0!3m2!1sen!2snp!4v1717824489180!5m2!1sen!2snp" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- /wp:html -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Get in Touch', 'lavisto') ?></h3>
        <!-- /wp:heading -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'lavisto') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-medium-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('2824 Fleming Street, Montgomery', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-medium-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('+1 (012) 345-6789', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-medium-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('email@yoursite.com', 'lavisto') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-heading-color-color has-text-color has-link-color has-medium-font-size"><!-- wp:list-item -->
                    <li><?php esc_html_e('Monday - Friday : 10:00AM - 6:00PM', 'lavisto') ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                <ul class="wp-block-social-links" style="margin-top:40px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->