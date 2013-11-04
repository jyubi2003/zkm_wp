<?php
/*
コメントモジュール

single.php（投稿の個別ページ）などから呼び出され、コメントの一覧やフォームを表示します
*/
?>

<?php
// 投稿がパスワードで保護されている場合は、コメントを表示しません
if ( post_password_required() ) {	// パスワード保護がされている場合
	return;
}
?>
<div id="comments" class="comments-area">

<?php if ( have_comments() ) :	// コメントがある場合 ?>
	<h2 class="comments-title">コメント (<?php echo get_comments_number();	//　コメント件数 ?>件
	)</h2>
	<ol class="comment-list">
	<?php
		// コメントリストを表示します
		wp_list_comments( array(
			'avatar_size' => 30
		));
	?>
	</ol>
	<?php
	// コメントが複数ページに分かれている場合はナビゲーションを表示します
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
		<nav class="navigation comment-navigation" role="navigation">
			<div class="nav-previous"><?php previous_comments_link('&laquo; 古いコメントへ'); ?></div>
			<div class="nav-next"><?php next_comments_link('新しいコメントへ &raquo;'); ?></div>
		</nav><!-- .comment-navigation -->
	<?php endif; ?>
<?php endif; ?>

<?php // コメントフォームを表示します ?>
<?php comment_form(); ?>
</div><!-- #comments -->
