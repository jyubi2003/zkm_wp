<?php get_header(); ?>
<?php the_post(); ?>

<div class="row">
	<div class="large-9 columns">
		<nav class="breadcrumbs">
			<a href="/wp/">Home</a>
			<a class="current"><?php the_title(); ?></a>
		</nav>
		
		<article id="content" style="margin-bottom: 3em">
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
		</article>
		
		<p><a href="/wp/" class="buttom expand small">トップページへ</a></p>
	</div>
	
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
