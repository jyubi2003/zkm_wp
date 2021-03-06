<?php
/*
投稿の個別ページ

各投稿を表示するときに利用されます
*/
?>

<?php get_header();	// header.phpを呼び出します ?>

<div id="wrapper" class="cf">
<div id="main">

<p class="caution">※ このテンプレートは single.phpが管理しています</p>
<article class="cf">
<?php
if ( have_posts() ):
	the_post();
?>
<header>
<h1><?php the_title(); ?></h1>
<p class="date"><?php the_time('y年 n月 j日 H:i'); ?></p>
</header>
<div class="body">

<?php the_content(); ?>

<!-- / .body --></div>

<nav id="postnav">
	<div class="nav-page">
		<?php wp_link_pages(); ?>
	</div>

	<div class="nav-post">
		<?php previous_post_link(); ?>　
		<?php next_post_link(); ?>
	</div>
</nav>

<aside id="article-meta">
	<dl>
		<dt>カテゴリー</dt>
		<dd><?php the_category(); ?></dd>
		<dt>タグ</dt>
		<dd><?php the_tags(); ?></dd>
	</dl>
</aside>

<?php
else:
/* 指定されたページが見つからなかった場合 */
?>

<header>
<h2>ページが見つかりませんでした</h2>
</header>
<div class="body">
<p>指定されたページは見つかりませんでした。</p>
<p><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
<!-- / .body --></div>

<?php
endif;
?>


</article>

<!-- / #main --></div>


<div id="side">

<?php get_sidebar(); // sidebar.php を読み込みます ?>

<!-- / #side --></div>
<!-- / #wrapper --></div>

<?php get_footer(); // footer.php を読み込みます ?>