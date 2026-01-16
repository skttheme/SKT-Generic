<?php
/**
 * SKT Hero Image
 */
return array(
	'title'      => __( 'SKT Hero Image', 'skt-generic' ),
	'categories' => array( 'skt' ),
	'blockTypes' => array( 'core/template-part/skt' ),
	'content'    => '<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"className":"skt-patns-hero-image","layout":{"inherit":false,"contentSize":""}} -->
<section class="wp-block-group alignfull skt-patns-hero-image" style="padding-top:0px;padding-bottom:0px"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/patterns/skt-hero-image/skt-hero-image-img-1.jpg","id":42,"dimRatio":0,"focalPoint":{"x":"0.64","y":"0.45"},"minHeight":789,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:789px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-42" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/patterns/skt-hero-image/skt-hero-image-img-1.jpg" style="object-position:64% 45%" data-object-fit="cover" data-object-position="64% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"55px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"background"} -->
<h2 class="has-text-align-center has-background-color has-text-color" style="font-size:55px;font-style:normal;font-weight:500;line-height:1.2;margin-bottom:30px"><strong>Business Solutions For </strong><br><strong>All Enterprises</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"17px"}},"textColor":"background"} -->
<p class="has-text-align-center has-background-color has-text-color" style="font-size:17px">Proin quis sem ex. Suspendisse tellus est,<br> accumsan sit amet commodo.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"backgroundColor":"background","textColor":"black","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"40px","right":"40px"}},"typography":{"fontSize":"18px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:18px"><a class="wp-block-button__link has-black-color has-background-background-color has-text-color has-background" href="#" style="border-radius:100px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->',
);
