<?php
/**
 * Title: Template Index
 * Slug: template-index
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md)">
	<!-- wp:post-title {"textAlign":"center","level":1} /-->

	<!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|md"}}}} -->
	<div class="wp-block-query alignwide" style="padding-top:var(--wp--preset--spacing--md)"><!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true} /-->

		<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","right":"0","bottom":"var:preset|spacing|xs","left":"0"}}}} /-->

		<!-- wp:post-excerpt {"moreText":"Read more"} /-->
		<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->

