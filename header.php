<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="http://www.alphamaleteaparty.com/wordpress/wp-content/themes/amtpboilerplate/images/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>


    <!--Here's jQuery -->
    <script type="text/javascript" src="js/jquery-1.8.2.js"></script>

    <!--And here our erstwhile hero uses jQuery to wow and delight! -->

	  <script type="text/javascript">
	  </script>
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<h1><a href="http://www.alphamaleteaparty.com"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>
		<!-- links section -->
		<nav id="blogNavContainer">
			<ul id="blogMainNav">
				<li><a href="wordpress/">BLOG</a></li>
				<li><a href="wordpress/bio/">BIO</a></li>
				<li><a href="wordpress/press/">PRESS AREA</a></li>
				<li><a href="http://www.songkick.com/artists/3943246-alpha-male-tea-party">GIGS</a></li>
			</ul>
			<br id="navBr" />
			<ul id="blogSocialLinks">
				<li><a href="http://twitter.com/alphamaleTparty">TWATTER</a></li>
				<li><a href="http://www.facebook.com/alphamaleteaparty#">FACEPLACE</a></li>
			</ul>
		</nav>
		<br id="navEndBr" />