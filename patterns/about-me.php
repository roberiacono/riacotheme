<?php
/**
 * Title: About Me
 * Slug: riacot/about-me
 * Categories: In evidenza
 */
?>
<!-- wp:group {"metadata":{"categories":["featured"],"patternName":"core/block/11296","name":"About Me"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('About Me', 'riacot');?></h2>
<!-- /wp:heading -->

<!-- wp:image {"width":"125px","height":"125px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-kelvin809-810775.jpg" alt="" class="" style="border-radius:100px;object-fit:cover;width:125px;height:125px"/></figure>
<!-- /wp:image -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Hello! I\'m a passionate and driven individual with a strong interest in [your field or industry]. I enjoy tackling new challenges, learning continuously, and contributing to meaningful projects. With a background in [your background or skill area], I strive to bring creativity, problem-solving, and collaboration to everything I do. When I\'m not working, you can find me exploring new ideas, enjoying time with friends, or diving into a good book.', 'riacot');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sThis is placeholder text. Update this section with your personal story, professional experience, and interests to better reflect who you are.%2$s', 'riacot' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->