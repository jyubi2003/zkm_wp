<?php get_header(); ?>
<div id="front-page" class="row">
	<div class="large-12 columns">
	
		<header>
			<h1><img src="/wp/_shared/img/logo.png" alt="ZKM 全国健称マラソン会"></h1>
			
			<div id="catchcopy" class="row">
				<div class="columns large-4">
					<h2>全国健称マラソン会</h2>
				</div>
				<div class="columns large-8">
					<p>「全国健称マラソン会」は、６０歳からの人たちによる、全国で唯一の高齢者のためのマラソンの会です。</p>
				</div>
			</div>
			
			<section id="news">
				<?php $news = get_posts( 'posts_per_page=5' ); ?>
				<?php foreach($news as $post): ?>
					<?php setup_postdata($post); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="alert-box">
							<p><?php the_title(); ?> - <?php the_date(); ?></p>
						</div>
					</a>
				<!-- ?php }; ? -->
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</section>
		</header>
		
		<div id="content">
			<p>…</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>
