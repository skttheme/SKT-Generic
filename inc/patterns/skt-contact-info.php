<?php
/**
 * SKT Contact Info
 */
return array(
	'title'      => __( 'SKT Contact Info', 'skt-generic' ),
	'categories' => array( 'skt' ),
	'blockTypes' => array( 'core/template-part/skt' ),
	'content'    => '<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"130px","bottom":"130px"}},"color":{"background":"#f9f9f9"}},"className":"skt-patns-contact-info-section","layout":{"inherit":false,"contentSize":"1170px"}} -->
<section class="wp-block-group alignfull skt-patns-contact-info-section has-background" style="background-color:#f9f9f9;padding-top:130px;padding-bottom:130px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"right":"0px"}}}} -->
<div class="wp-block-column" style="padding-right:0px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"47px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"30px","right":"0px"}}},"textColor":"black"} -->
<h3 class="has-black-color has-text-color" style="font-size:47px;font-style:normal;font-weight:700;line-height:1.3;margin-right:0px;margin-bottom:30px">Contact Info</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"},"color":{"text":"#2a2a2a"}}} -->
<p class="has-text-color" style="color:#2a2a2a;font-size:17px;font-style:normal;font-weight:400">123 Columbia St, Brooklyn street, NY<br>12345, United States</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"35px"}}}} -->
<div class="wp-block-group" style="padding-top:35px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"skt-patns-contact-info-fld"} -->
<div class="wp-block-group skt-patns-contact-info-fld"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"19%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:19%"><!-- wp:paragraph -->
<p>Phone:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph -->
<p>+12345678900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"skt-patns-contact-info-fld"} -->
<div class="wp-block-group skt-patns-contact-info-fld"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"19%"} -->
<div class="wp-block-column" style="flex-basis:19%"><!-- wp:paragraph -->
<p>Email:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>example@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"skt-patns-contact-info-fld"} -->
<div class="wp-block-group skt-patns-contact-info-fld"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"19%"} -->
<div class="wp-block-column" style="flex-basis:19%"><!-- wp:paragraph -->
<p>Website:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>+12345678900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#FFFFFF","iconBackgroundColor":"primary","iconBackgroundColorValue":"#3E9C4E","size":"has-normal-icon-size","align":"left","className":"is-style-default","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"60px"}}}} -->
<ul class="wp-block-social-links alignleft has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:60px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":799,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default" style="border-radius:4px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/patterns/skt-contact-info/skt-contact-info-img-1.jpg" alt="" class="wp-image-799"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->',
);