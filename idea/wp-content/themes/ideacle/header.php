<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Com_Ideacle
 * @since iDeacle Theme 0.2
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="web,software,Web Development">
	<meta name="author" content="iDeacle,codingz">
	<meta name="viewport" content="width=device-width">	
	<title><?php
		/*
	 	* Print the <title> tag based on what is being viewed.
	 	*/
		global $page, $paged;
		wp_title( '|', true, 'right' );
		$path = get_template_directory_uri();
		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<!-- clear css-->
		<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link href="<?php echo get_template_directory_uri(); ?>/styles/gray.css" media="screen" rel="stylesheet" type="text/css" />	
		<script type="text/javascript" language="javascript" src="<?php echo $path; ?>/js/libs/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo $path; ?>/js/libs/jquery.tools.min.js"></script>
		<link rel="stylesheet" href="<?php echo $path; ?>/css/prettyPhoto.css" type="text/css" media="screen" />
		<script src="<?php echo $path; ?>/js/libs/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script type="text/javascript" language="javascript" src="<?php echo $path; ?>/js/general.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo $path; ?>/js/libs/jquery.easing.1.3.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/css/home.css" />	
		<script type="text/javascript" language="javascript" src="<?php echo $path; ?>/js/home.js"></script>		
		<script type="text/javascript" src="<?php echo $path; ?>/js/libs/modernizr-2.5.3.min.js"></script>
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

<body onload="load_animations()">
<div class="header_img" id="aside2">
	
    <div class="topnav">
    	<div class="container_12">        
		<div class="logo"><a href="index.html"><img src="<?php echo $path; ?>/images/logo.png" alt="IDEACLE" width="157" height="36" border="0" /></a></div>
<!-- topmenu -->            
        <div class="menu-header">
        
	        <ul class="topmenu">
				<li class="parent first current-menu-item"><a href="#"><span>What We Do</span></a></li>
              	<li class="parent"><a href="#"><span>Service</span></a></li>
              	<li class="parent"><a href="#"><span>Portfolio</span></a></li>
              	<li class="parent"><a href="#"><span>Blog</span></a></li>
              	<li class="parent"><a href="blog.html"><span>iDeacle Team</span></a></li>
              	<li class="last"><a href="contacts.html"><span>Contact</span></a></li>
       	  </ul>
        </div>
<!--/ topmenu -->        
	</div>            
    </div>
<!--/ header -->