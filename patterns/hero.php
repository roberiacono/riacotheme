<?php
/**
 * Title: Hero
 * Slug: riacot/hero
 * Categories: 
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"categories":[],"patternName":"core/block/11295","name":"Hero"},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-pixabay-265667-1.jpg","alt":"pexels-pixabay-265667","dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0px;margin-bottom:0px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e('pexels-pixabay-265667', 'riacot');?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-pixabay-265667-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e('Welcome to My Site', 'riacot');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('This is my little home away from home. Here, you will get to know me. I\'ll share my likes, hobbies, and more. Every now and then, I\'ll even have something interesting to say in a blog post.', 'riacot');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e('Contact me', 'riacot');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->