<?php
/* このファイルは、WordPressの各種の動きを制御するための特別なファイルです。 */

/*
コンテンツ幅を設定します。画像の横幅の制御などに利用されるため、
サイト内のメインコンテンツの幅を指定する必要があります
*/
if ( ! isset( $content_width ) )
    $content_width = 580;


/*
管理画面で「メニュー」を使えるように設定します。
header.php で定義している「globalnav」を表示できるように設定します
*/
add_theme_support( 'menus' );
register_nav_menu( 'globalnav', 'グローバルナビ' );

/*
管理画面で「ウィジット」を使えるように設定します。
sidebar.php で定義している「sidebar」を表示できるように設定します

Lecture6-16を試す際は、先にこのスクリプトを削除してください
*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'サイドバー',
		'id' => 'sidebar'
	));

	register_sidebar(array(
		'name' => 'フッター左',
		'id' => 'footer1'
	));
	
/*
	register_sidebar(array(
		'name' => 'フッター右',
		'id' => 'footer2'
	));

if ( function_exists('register_sidebar') ) {
	register_sidebar();

	register_sidebar(array(
		'name' => 'インフォメーション',
		'id' => 'footer1'
	));

	register_sidebar(array(
		'name' => 'フッター右',
		'id' => 'footer2'
	));
*/
/*
カスタムヘッダーを有効にします。オプションは次の通り
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
*/
add_theme_support( 'custom-header', array(
	'default-text-color' => '333',
));

/*
カスタム背景を有効にします。オプションは次の通り
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
*/
add_theme_support( 'custom-background' );

/* アイキャッチ画像を使えるように設定します */
add_theme_support( 'post-thumbnails' );

/* RSSフィードの配信を有効にします */
add_theme_support( 'automatic-feed-links' );

}
?>
