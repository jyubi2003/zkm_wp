<?php get_header(); ?>

<h1></h1>
<div class="row">
	<div class="large-9 columns">
		<nav class="breadcrumbs">
			<a href="/wp/">Home</a>
			<a class="current"><?php the_title(); ?></a>
		</nav>

		<article id="content" style="margin-bottom: 3 em">
			<h1>ページが見つかりません</h1>
			<p> お探しのページは見つかりませんでした。</p>
		</article>

		<p><a href="/" class="button expand small"> トッフ?ヘ?ーシ?へ </a></p>
	</div>
	
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
