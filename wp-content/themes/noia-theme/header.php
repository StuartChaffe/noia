<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?></title>
<link rel="icon" href="/favicon.ico"><!-- 32×32 -->
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png"><!-- 180×180 -->
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/0146a544b89e552c5e3c27ffa/34537882a71b3b4245a3f3fbb.js");</script>

	
<?php wp_head(); ?>

<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-100645214-1', 'auto');
	ga('set', 'anonymizeIp', true);
	ga('send', 'pageview');</script>
	<!-- End: Google Analytics -->
</head>
<body <?php body_class(); ?>>
<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<!-- <div class="global-container"> -->
<?php get_template_part( 'partials/global-alert' ); ?>
<?php get_template_part( 'partials/global-header' ); ?>
