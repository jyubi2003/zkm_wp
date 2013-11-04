<?php get_header(); ?>
<?php the_post(); ?>

<h1></h1>
<div class="row">
	<div class="large-9 columns">
		<nav class="breadcrumbs">
			<a href="/wp/">Home</a>
			<a href="/wp/news">お知らせ</a>
			<a class="current"><?php the_title(); ?></a>
		</nav>

	<article id="content" style="margin-bottom: 3em">
		<h2><?php the_title(); ?> <small> - <?php the_date(); ?></small></h2>

		<?php the_content(); ?>
		<?php comments_template(); ?>
	</article>

	<p><a href="/wp/" class="button expand small">トップページへ</a></p>

	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>