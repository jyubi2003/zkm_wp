<?php
/* ヘッダーモジュール */
?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<title><?php wp_title('', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body id="<?php echo (is_front_page() ? 'home' : 'second'); ?>" <?php body_class( $class ); ?>>
<nav id="globalNav">
<div class="globalNavInner">
<?php wp_nav_menu( array('menu'=>'globalnav') );	// メニューバーを表示します ?>
<!-- / .globalNavInner --></div>
<!-- / #globalNav --></nav>

<div class="site-header">
	<header id="header">
	<hgroup>
	<?php /* トップページの場合のみ h1要素とします*/ ?>
	<?php if ( is_home() ): ?>
	
		<h1><?php bloginfo('name'); ?></h1>
	
	<?php else: ?>　<!-- 読者の方へ： 269pで「38行目を書き換える」と記載がありますが、26行目に読み替えてください -->
	
		<p id="siteid"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
	
	<?php endif; ?>
	
		<p><?php bloginfo('description'); ?></p>
	</hgroup>
	
	<p class="caution" style="margin-left: 30px">※ここまでは、header.phpが管理しています</p>
<!-- / #header --></header>
<!-- / .site-header --></div>
