<!DOCTYPE html>
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="ja" > <![endif]-->
<!--[if gt IE 8]><!--> 	<html class="no-js" lang="ja" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<?php if ( is_front_page() ): ?>
		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
	<?php endif; ?>

	<link rel="stylesheet" href="/wp/_shared/css/foundation.css" />
	<script src="/wp/_shared/js/vendor/custom.modernizr.js"></script>
	
	<style>
	header #news p {
		margin: 0;
	}
	
	header h1 {
		margin: 50px auto 80px;
		text-align: center;
	}
	</style>
	<?php wp_head(); ?>
</head>
<body>

<nav class="top-bar">
	<ul class="title-area">
		<!-- Title Area -->
		<li class="name">
			<h1><a href="/">ZKM</a>
			</h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
	</ul>
	
	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			<li><a href="/">トップ</a></li>
			<li><a href="/news">お知らせ</a></li>
			<li><a href="/contact">お問い合わせ</a></li>
		</ul>
	</section>
</nav>
