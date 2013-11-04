<footer class="row">
<p class="caution">※ ここからは footer.phpが管理しています</p>
<div id="footerInner">
<div class="large-12 columns">
	<hr />
		<div class="row">
			<div class="large-6 columns">
				<p>&copy; ZKM 全国健称マラソン会</p>
			</div>
		</div>
</div>

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

<!-- div class="footer2">
	<?php dynamic_sidebar('footer2'); ?>
<!-- / .footer2 --></div -->

<small>&copy; <?php bloginfo('name'); ?></small>
<!-- / #footerInner --></div>
</footer>

<script>
document.write('<script src=' +
('__proto__' in {} ? '/wp/_shared/js/vendor/zepto' : '/wp/_shared/js/vendor/jquery') +
'.js><\/script>')
</script>

<script src="/wp/_shared/js/foundation.min.js"></script>

<script>
$(document).foundation();
</script>
<?php wp_footer(); ?>
</body>
</html>