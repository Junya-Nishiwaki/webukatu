<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>サンプルホームページ</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header class="site-width">
			<h1><a href="index.html">WEBUKATU</a></h1>
			<nav id="top-nav">
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="http://webukatu.com/sample/html_practice/#about">ABOUT</a></li>
					<li><a href="http://webukatu.com/sample/html_practice/#merit">MERIT</a></li>
					<li><a href="http://webukatu.com/sample/html_practice/#recruit">RECRUIT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a href="map.html">INFO</a></li>
					<li><a href="blog_list.html">BlOG</a></li>
				</ul>
			</nav>
		</header>
		<div id="main">

			<!-- blog_list -->
			<section id="blog_list" class="site-width">
				<h1 class="title">BLOG</h1>
				<div id="content" class="article">
					<article class="article-item">
						<h2 class="article-title"><a href="blog.html">サンプル記事１サンプル記事１</a></h2>
						<h3 style="font-size:80%;">crazy-wp　2014年11月10日　カテゴリー： ブログ</h3>
						<img src="img/photo2.jpeg" class="article-img">
						<p class="article-body">
							サンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメント
							サンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメント
						</p>
					</article>
					<article class="article-item">
						<h2 class="article-title"><a href="blog.html">サンプル記事２サンプル記事２</a></h2>
						<h3 style="font-size:80%;">crazy-wp　2014年11月10日　カテゴリー： ブログ</h3>
						<img src="img/photo4.jpeg" class="article-img">
						<p class="article-body">
							サンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメント
							サンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメント
						</p>
					</article>
					<article class="article-item">
						<h2 class="article-title"><a href="blog.html">サンプル記事３サンプル記事３</a></h2>
						<h3 style="font-size:80%;">crazy-wp　2014年11月10日　カテゴリー： ブログ</h3>
						<img src="img/photo5.jpeg" class="article-img">
						<p class="article-body">
							サンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメント
							サンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメントサンプルコメント
						</p>
					</article>
					<div class="pagenation">
						<ul>
							<li class="active">1</li>
							<li><a href="">2</a></li>
							<li class="next"><a href="">NEXT</a></li>
						</ul>
					</div>
				</div>
        <!-- サイドバー -->
        <?php get_sidebar() ?>
			</section>


		</div>
		<footer>
			Copyright <a href="http://webukatu.com/">ウェブカツ!!サンプルホームページ</a>. All Rights Reserved.
		</footer>
	</body>
</html>
