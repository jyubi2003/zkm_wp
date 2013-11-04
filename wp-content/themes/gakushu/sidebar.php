<?php
/*
サイドバーモジュール

各テンプレートファイルから「get_sidebar()」テンプレートタグで呼び出されます
*/

/*
ウィジットを表示します。functions.phpであらかじめ、次のように定義しています。

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'サイドバー',
		'id' => 'sidebar'
	));
}

ここで idに付加した「sidebar」を表示しています
*/
?>

<p class="caution">※ ここからは sidebar.phpが管理しています</p>
<?php dynamic_sidebar('sidebar'); ?>