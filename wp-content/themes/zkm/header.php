<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="ja" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja" > <!--<![endif]-->

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

<?php wp_head(); ?>

<link rel="stylesheet" href="/wp/_shared/css/style.css" />

</head>
<body id="<?php echo ( is_front_page() ? 'top' : 'second' ); ?>">

<nav class="top-bar">
	<ul class="title-area">
	<!-- Title Area -->
	<li class="name">
		<h1><a href="/wp/">ZKM 全国健称マラソン会</a>
		</h1>
	</li>
	<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
</ul>

	<section class="top-bar-section">
	<!-- Right Nav Section -->
	<ul class="right">
		<li><a href="/wp/">トップ</a></li>
		<li><a href="/wp/news">お知らせ</a></li>
		<li><a href="/wp/contact">お問い合わせ</a></li>
	</ul>
	</section>
</nav>