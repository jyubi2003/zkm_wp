<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar();

	register_sidebar(array(
		'name' => 'インフォメーション',
		'id' => 'footer1'
	));
/*
	register_sidebar(array(
		'name' => 'フッター右',
		'id' => 'footer2'
	));
*/
}
?>

