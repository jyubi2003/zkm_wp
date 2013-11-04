<?php
/*
検索ページ
検索結果のページに利用されます。検索キーワードは「get_search_query()」テンプレートタグで表示します。
*/
?>

<?php get_header();	// header.phpを呼び出します ?>

<div id="wrapper" class="cf">
<div id="main">

<p class="caution">※ このテンプレートは search.phpが管理しています</p>

<article class="cf">
	<div class="body">
		<h1><?php wp_title(' '); ?></h1>

		<?php
		if ( have_posts() ): // 検索結果がある場合
		?>
			<ul>
			<?php
			while ( have_posts() ):
				the_post();
			?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php
			endwhile;
			?>
			</ul>
		<?php else:  // 検索結果がない場合 ?>
			<p>検索結果が見つかりませんでした。他のキーワードで検索して下さい。</p>
		<?php endif; ?>
	</div>
</article>

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