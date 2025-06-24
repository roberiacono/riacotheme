<?php
/**
 * Title: wp-custom-template-single-with-sidebar
 * Slug: riacot/wp-custom-template-single-with-sidebar
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"tagName":"article","layout":{"type":"constrained"}} -->
<article class="wp-block-group"><!-- wp:post-title {"level":1} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-author {"showBio":false,"byline":"","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s•%2$s', 'riacot' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"displayType":"modified"} /-->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s•%2$s', 'riacot' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image /-->

<!-- wp:post-content /--></article>
<!-- /wp:group -->

<!-- wp:comments {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"}}}} -->
<div class="wp-block-comments" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination /-->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"border":{"radius":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-column has-base-2-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:33.33%"><!-- wp:block {"ref":11734} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->