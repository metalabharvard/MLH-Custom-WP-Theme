<?php

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	


<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/gif" href="images/mlh.ico">  
<script type="text/javascript" src="javascript/jquery/js/jquery-1.4.2.min.js"></script>  
<script type="text/javascript" src="javascript/logo.js"></script>  



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>
<div id="wrapper">
	<div id="header">
<!--[if IE]>
<div id="logo" class="ieLogo">
		<a href="http://metalab.harvard.edu"></a>
</div>
<![endif]-->


<!--[if !IE]> <-->
<div id="logo">
		<a href="http://metalab.harvard.edu"></a>
</div>

<!--> <![endif]-->



	
	<?php get_template_part('nav'); ?>
	<div class="clear"></div>
	</div><!-- #header -->	

	<div id="contentHome" role="main">
	<h1>News</h1>
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
	</div><!-- #contentHome -->
	<div class="clear"></div>			

<?php get_footer(); ?>
