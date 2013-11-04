<?php
/*　メインテンプレート　*/
?>

<?php get_header();	// header.phpを呼び出します ?>

<div id="wrapper" class="cf">
<div id="main">

<p class="caution">※ このテンプレートは index.phpが管理しています</p>


<?php
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

<!-- / #main --></div>


<div id="side">

<?php get_sidebar(); // sidebar.php を読み込みます ?>

<!-- / #side --></div>
<!-- / #wrapper --></div>

<?php get_footer(); // footer.php を読み込みます ?>