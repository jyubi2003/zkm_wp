<?php get_header(); ?>

	<h1></h1>
	<div class="row">
		<div class="large-9 columns">
		<nav class="breadcrumbs">
			<a href="/wp/">Home</a>
			<a class="current">お知らせ</a>
		</nav>

	<h2>お知らせ</h2>

<section class="list">
<?php while ( have_posts() ): ?>
	<?php the_post(); ?>
	<a class="article" href="<?php the_permalink(); ?>">
		<article>
			<h3><?php the_title(); ?> - <small><?php the_time('Y.m.d'); ?></small></h3>
			<?php the_excerpt(); ?>
		</article>
	</a>
<hr />
<?php endwhile; ?>
</section>

	<?php wp_pagenavi(); ?>
	<p><a href="/wp/" class="button expand small">トップページへ</a></p>
	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
