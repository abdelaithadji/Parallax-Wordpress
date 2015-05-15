<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap.css" media="screen" type="text/css" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.parallax-1.1.3.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
	<script>(function(){document.documentElement.className='js'})();</script>
        <script type="text/javascript">
$(document).ready(function(){
	$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#intro').parallax("50%", 0.1);
	$('#second').parallax("50%", 0.1);
	$('.bg').parallax("50%", 0.4);
	$('#third').parallax("50%", 0.3);

})
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <nav class="principal-nav">
                <ul id="nav">
                    <li><a href="#intro" title="Next Section"><img src="images/dot.png" alt="Link"/></a></li>
                    <li><a href="#second" title="Next Section"><img src="images/dot.png" alt="Link"/></a></li>
                    <li><a href="#third" title="Next Section"><img src="images/dot.png" alt="Link"/></a></li>
                    <li><a href="#fifth" title="Next Section"><img src="images/dot.png" alt="Link"/></a></li>
                </ul>
    </nav>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

        <header id="intro" class="header">
           
            
         <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
            
            
        </header>

	<div id="content" class="site-content">
          