<?php
/**
 * Title: index
 * Slug: riacot/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":1,"fontFamily":"inter"} -->
<h1 class="wp-block-heading has-inter-font-family"><?php esc_html_e('Latest Posts', 'riacot');?></h1>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"riacot/latest-10-posts"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->