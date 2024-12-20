<?php

/**
 * Title: Call To Action Section
 * Slug: lavisto/call-to-action
 * Categories: lavisto
 */
$lavisto_url = trailingslashit(get_template_directory_uri());
$lavisto_images = array(
    $lavisto_url . 'assets/images/ctabg.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Call To Action"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","bottom":"0px","top":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($lavisto_images[0]) ?>","id":1838,"dimRatio":20,"overlayColor":"dark-color","isUserOverlayColor":true,"focalPoint":{"x":0.52,"y":0.97},"minHeight":640,"contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"30px","bottom":"30px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-cover is-light has-custom-content-position is-position-center-left" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1838" alt="" src="<?php echo esc_url($lavisto_images[0]) ?>" style="object-position:52% 97%" data-object-fit="cover" data-object-position="52% 97%" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"54px"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:54px"><?php esc_html_e('Create the best moment of your Life!', 'lavisto') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'lavisto') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"45px","right":"45px","top":"22px","bottom":"22px"}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-hard-black-shadow-sec","fontSize":"normal","fontFamily":"montagu-slab"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family has-normal-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:22px;padding-right:45px;padding-bottom:22px;padding-left:45px"><?php esc_html_e('Booking Enquiry', 'lavisto') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->