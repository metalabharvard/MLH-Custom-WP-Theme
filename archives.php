<?php
/**
 * Template Name: Archives
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php get_header(); ?>

<div id="contentNews" role="main">
				
	<h1>News</h1>

<?php 
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'paged' => $paged,
  'posts_per_page' => 10,
  'caller_get_posts'=> 1
);
$temp = $wp_query;  // assign orginal query to temp variable for later use   
$wp_query = null;
$wp_query = new WP_Query($args); 
?>

<?php


			
 get_template_part( 'loop', 'index' );?>
			
			</div><!-- #contentNews -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>


