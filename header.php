<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package IMCO
 * @subpackage Ley3de3
 * @since Ley3de3 1.0
 */
?><!DOCTYPE HTML>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<base href="/">
	<title>
	<?php
		wp_title( '|', true, 'right' );
	?>
	</title>

	<?php
		global $page, $paged,$current_lang,$current_page,$current_title;
		//$current_lang = pll_current_language();
		$current_page = $post->post_name;
		$current_title = $post->post_title;
	?>

	<!--script type='text/javascript'>
		var current_page = '<?php global $post; echo $post->post_name; ?>';
	</script-->

	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700italic' rel='stylesheet' type='text/css'>


	<script src="<?php bloginfo('template_directory');?>/bower_components/jquery/dist/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

	<script src='<?php bloginfo('template_directory') ?>/js/jquery.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/interactions.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/api-interactions.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.mxnphpCustomSelect.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/charts.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/galleryfunctions.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.mousewheel.min.js' type='text/javascript'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.mCustomScrollbar.min.js' type='text/javascript'></script>
	
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/highcharts-more.js"></script>
	<script src="http://code.highcharts.com/modules/data.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-4404650-1']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<?php wp_head();?>

</HEAD>

<body <?php body_class(); ?>>
<div id="header" class="row container-fluid">
	<div class="col-md-2 valign">
		<a href='/' > <img class="logo" src="<?php bloginfo('template_directory') ?>/images/logo.png"></a>
	</div>
	<div class="col-md-10 valign">
		<div class="right">
			<?php wp_nav_menu( array( 'theme_location' => 'header', 'container_class'=>'menu-horizontal' ) ); ?>
			<div class='social '>
				<a href='https://www.facebook.com/ley3de3/' target="_blank" class='facebook'></a>
				<a href='https://twitter.com/ley3de3' target="_blank" class='twitter'></a>
				<a href='https://www.youtube.com/channel/UC5P7XD5if94XVnABe38sVUg' target="_blank" class='youtube'></a>
			</div>
		</div>
    </div>
</div>

<div id="wrap" ><div id="main" class="clearfix"><div id="topBackRepeat">
	<div id='content'>
