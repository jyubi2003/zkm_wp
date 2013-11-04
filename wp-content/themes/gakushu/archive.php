<?php
/*
アーカイブページ
カレンダーやカテゴリー別などに使われます。それぞれのテンプレート分けたい場合には、次のようなテンプレートファイルを作ることもできます。

category.php - カテゴリー
tag.php - タグ
date.php - 日付別
*/
?>

<?php get_header();	// header.phpを呼び出します ?>

<div id="wrapper" class="cf">
<div id="main">

<p class="caution">※ このテンプレートは archive.phpが管理しています</p>

<h1><?php wp_title(' '); ?>のアーカイブ</h1>

<?php
/*
一覧の表示
archive.phpでは、URLに従って絞り込まれた投稿のリストが10件取得されます。
表示は「index.php」などと同様に、have_postsと the_postで取りだしていきます。
*/

while ( have_posts() ):
	the_post();
?>

<article class="cf">
<header>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="date"><?php the_time('y年 n月 j日 H:i'); ?></p>
</header>
<div class="body">
<?php the_content('続きを読む'); ?>
<!-- / .body --></div>
</article>

<?php
endwhile;
?>

<nav id="pagenav">
	<ul>
		<li class="prev"><?php previous_posts_link(); ?></li>
		<li class="next"><?php next_posts_link(); ?></li>
	</ul>
</nav>


<!-- / #main --></div>


<div id="side">

<?php get_sidebar(); // sidebar.php を読み込みます ?>

<!-- / #side --></div>
<!-- / #wrapper --></div>

<?php get_footer(); // footer.php を読み込みます ?>