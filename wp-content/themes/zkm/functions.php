<?php
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
}
?>
