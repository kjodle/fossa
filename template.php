<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Fossa theme for the GetSimple CMS
*
* Version 1.2 2014.08.15
*
*****************************************************/
?>
<!doctype html>
<html lang=en>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<meta name="robots" content="index, follow" />
	<link rel="icon" href="<?php get_site_url(); ?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php get_site_url(); ?>favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php get_theme_url(); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php get_theme_url(); ?>/css/print.css" />
	<link href='http://fonts.googleapis.com/css?family=Galdeano' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<?php get_header(); ?>
	<!-- Required for some plugins to work; triggers theme header hooks as of GS 3.0. -->
</head>

<body id="<?php get_page_slug(); ?>">

<!-- container -->
<div id="container">

	<!-- header -->
	<div id="header">
		<h1 class="noprint"><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
		<h2 class="noprint"><?php get_component('tagline'); ?></h2>
	</div>
	<!-- end header -->
	
	<!--main menu -->
	<div id="nav">
		<ul>
			<?php get_navigation(return_page_slug()); ?>
		</ul>
	<div class="clear"></div>
	</div>
	<!--end main menu -->

	<!--content -->
	<div id="content">

		<!-- Add support for Hierarchical Menus plugin @ http://get-simple.info/extend/plugin/hierarchical-menus/528/ -->
		<?php
			if (function_exists('get_breadcrumb_navigation')) {
					fossa_hier_menu();
				}
		?>

		<!-- Add page title -->
		<h1 id="page-title"><?php get_page_title(); ?></h1>

		<!-- Add sharing buttons at top of page if "Share Top" component exists -->
		<?php fossa_sharetop(); ?>

		<!-- Fetch the page content -->
		<?php get_page_content(); ?> 

		<!-- Add support for Child Menu plugin @ http://get-simple.info/extend/plugin/child-menu/40/ -->
		<?php /*
			if (function_exists('go_child_menu')) {
				fossa_child_menu();
			}
		*/ ?>

		<!-- Add page publishing data -->
		<p class="meta" > Last edited on&nbsp;<?php get_page_date('d M Y'); ?></p>


		<!-- Add sharing buttons at bottom of page if "Share Bottom" component exists -->
		<?php fossa_sharebottom(); ?>

		<!-- Print page title, tagline, and copyright nicely, but does not display on screen -->
		<div class="nodisplaybox nodisplay">
			<p><b>Page URL:</b> <?php get_page_url(); ?></p>
			<p>&copy;<?php echo date('Y'); ?> <?php get_site_name(); ?></a></p>
		</div><!-- End "nodisplay" area -->

		</div><!--end content -->

	<!--sidebar -->
	<div id="sidebar">
		<?php get_component('sidebar');	?>
		<!-- Adds adspace under sidebar 1 if "Sidebar1 Ads" component exists -->
		<?php fossa_sidebar1_ads(); ?>
	</div>
	<!--end sidebar -->

	<!--sidebar2 -->
	<div id="sidebar2">
		<?php get_component('sidebar2'); ?>
		<!-- Adds adspace under sidebar 1 if "Sidebar1 Ads" component exists -->
		<?php fossa_sidebar2_ads(); ?>
	</div>
	<!--end sidebar2 -->

<div class="clear"></div>
	<!--footer -->
	<div id="footer">
		<!-- Add copyright information -->
		"<?php get_page_title(); ?>" &copy; <?php echo date('Y'); ?> <i><a href="<?php get_site_url(); ?>" title="Home"><?php get_site_name(); ?></a></i> 
		<div class="right" >
		<?php get_site_credits(); ?> &bull; Fossa Theme by <a href="http://kjodle.net/">Kenneth John Odle</a>
		</div>
	</div>
	<!--end footer -->


	<?php get_footer(); ?>
	<!-- Required for some plugins to work; triggers theme footer hooks as of GS 3.0. -->
</div>
<!-- end container -->

</body>
</html>