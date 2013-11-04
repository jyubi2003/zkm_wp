<?php
/*
404ページ

URLが無効な場合などに利用されます
*/
?>

<?php get_header();	// header.phpを呼び出します ?>

<div id="wrapper" class="cf">
<div id="main">

<p class="caution">※ このテンプレートは 404.phpが管理しています</p>

<div id="post-404" <?php post_class(); ?>>

	<article class="cf">
	
	<header>
	<h1>ページが見つかりませんでした</h1>
	</header>
	<div class="body">
	<p>指定されたページは見つかりませんでした。</p>
	<!-- / .body --></div>
	
	</article>
	
</div>

<!-- / #main --></div>


<div id="side">

<?php get_sidebar(); // sidebar.php を読み込みます ?>

<!-- / #side --></div>
<!-- / #wrapper --></div>

<?php get_footer(); // footer.php を読み込みます ?>