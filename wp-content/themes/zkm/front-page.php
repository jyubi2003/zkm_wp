<!-- DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" -->
<!-- html><head -->
<?php get_header(); ?>
  <!-- title></title -->
<!-- /head -->

<!-- body -->
<div id="front-page" class="row">
  <div class="large-12 columns"> <header> </header>
    <h1><img src="/wp/_shared/img/logo.png" alt="ZKM 全国健称マラソン会"></h1>
    <div class="columns large-9">
    <div id="catchcopy" class="row">
      <div class="columns large-4">
        <h3>全国健称マラソン会</h3>
      </div>
      <div class="columns large-8">
        <h4>「ZKM 全国健称マラソン会」は、６０才以上のマラソン会</h4>
        <p>全国健称マラソン会のホームページへ、ご訪問ありがとうございます。このサイトは全国健称マラソン会（ＺＫＭ）のサイトです。全国健称マラソン会は、高齢者の健康増進を目指す、全国でただ一つの高齢者のみによるマラソン会です。
        このサイトは、会の活動を広く知ってもらうために開設しました。当会の活動に興味を持たれた方は、遠慮なくお問い合わせください。</p>
      </div>
    </div>
    <section id="news">
      <?php $news = get_posts( 'posts_per_page=5' ); ?>
      <?php foreach($news as $post): ?>
      <?php setup_postdata($post); ?>
      <a href="<?php the_permalink(); ?>">
      <div class="alert-box">
        <p><?php the_title(); ?> -<?php the_date(); ?> </p>
      </div>
      </a>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </section>
    <div id="content">
    <h4>お知らせ</h4>
	ZKMの公式アカウントができました <br>
	twitterやfacebookなど、ZKMの公式アカウントができました。こちらもよろしくお願いします。<br>
	youtube：http://www.youtube.com/user/ZkmSince1971<br>
	twitter：@zkmsince1971（フォローしてね）<br>
	facebook：https://www.facebook.com/ZKM.HONBU<br>

	こちらは会長のfacebookページです。<br>
	https://www.facebook.com/ryuichi.yoshida.9212?fref=ts<br>
	こちらもよろしくお願いします。<br>
	活動報告・写真の投稿について <br>
	ZKM本部では、会員の皆さんのの活動報告、デジカメ写真などを募集しています。参加した競技会、イベントの内容と、とっておきのベストショットをお送りください！もちろん、支部名、会員番号、お名前も忘れずに！！
	（会の主旨に則ったものでしたら、競技会でなくてもＯＫです。親睦会とか…楽しい情報をお寄せください）</div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
<!-- /body></html -->