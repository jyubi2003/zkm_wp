<footer class="row">
	<!-- p class="caution">※ ここからは footer.phpが管理しています</p -->
	<div id="footerInner">
		<div class="large-12 columns">
			<hr />
			<div class="footer1">
				<?php dynamic_sidebar('footer1'); ?>
			</div>
		</div>

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