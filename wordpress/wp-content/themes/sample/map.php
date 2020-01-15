<?php
/*
Template Name: Info 〜インフォメーション〜
*/
?>
<!-- ヘッダー -->
<?php get_header() ?>
<!-- メニュー -->
<?php get_template_part('content', 'menu') ?>
		<div id="main">

			<!-- blog_list -->
			<section id="map">
				<h1 class="title"><?= get_the_title() ?></h1>
				<div id="content">
					<?= get_post_meta($post->ID, 'map', true) ?>
				</div>
			</section>
			<section id="shop_info" class="site-width">
				<?php if (have_posts()) :
								while (have_posts()) : the_post(); ?>
									<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
										<?php the_content() ?>
									</div>
								<?php endwhile
							else : ?>
								<div class="post">
									<h2>記事はありません</h2>
									<p>お探しの記事は見つかりませんでした。</p>
								</div>
				<?php endif ?>
			</section>


		</div>
		<?php get_footer() ?>
