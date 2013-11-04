<?php
/*
フッターモジュール

各ファイルから「get_footer()」テンプレートタグで呼び出されます
*/
?>

<footer id="footer">
<p class="caution">※ ここからは footer.phpが管理しています</p>
<div id="footerInner">

<?php
/*
ウィジットを表示します。functions.phpであらかじめ、次のように定義しています。

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'フッター左',
		'id' => 'footer1'
	));
	register_sidebar(array(
		'name' => 'フッター右',
		'id' => 'footer2'
	));
}

ここで idに付加した「sidebar」を表示しています
*/
?>

<div class="footer1">
	<?php dynamic_sidebar('footer1'); ?>
<!-- / .footer1 --></div>

<div class="footer2">
	<?php dynamic_sidebar('footer2'); ?>
<!-- / .footer2 --></div>

<small>&copy; <?php bloginfo('name'); ?></small>
<!-- / #footerInner --></div>
<!-- / #footer --></footer>

<?php wp_footer(); ?>
</body>
</html>
