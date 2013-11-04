<?php
/*　固定ページ　*/
?>

<?php get_header();	// header.phpを呼び出します ?>

<div id="wrapper" class="cf">
<div id="main">

<p class="caution">※ このテンプレートは page.phpが管理しています</p>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<article class="cf">
	
	<?php
	/*
	固定ページの表示
	固定ページは、最初に「the_post」テンプレートタグで呼び出された投稿を取得し、
	各テンプレートタグでそれを表示します
	*/
	
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
	<?php
	else:
	/* 指定されたページが見つからなかった場合 */
	?>
	<header>
	<h1>ページが見つかりませんでした</h1>
	</header>
	<div class="body">
	<p>指定されたページは見つかりませんでした。</p>
	<!-- / .body --></div>
	<?php
	endif;
	?>
	
	<p><a href="<?php bloginfo('url'); ?>">トップページへ戻る</a></p>
	</article>
	
</div>

<!-- / #main --></div>


<div id="side">

<?php get_sidebar(); // sidebar.php を読み込みます ?>

<!-- / #side --></div>
<!-- / #wrapper --></div>

<?php get_footer(); // footer.php を読み込みます ?>