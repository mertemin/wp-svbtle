<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<header class="page_title">
	<h2><?php print_post_title() ?></h2>
</header>

<?php get_template_part( 'loop', 'index' ); ?>

<div class="comments">
	<?php comments_template(); ?>
</div><!-- .comments -->

<nav class="pagination">
  <span class="prev">
    <a href="<?php echo home_url('/blog'); ?>" class="back_to_blog">←&nbsp;&nbsp;&nbsp;read more</a>
  </span>
</nav>

<?php get_footer(); ?>