<?php
/**
 * Title: 404
 * Slug: riacot/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Page Not Found', 'riacot');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'riacot');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search for","buttonText":"Search","buttonUseIcon":true} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->