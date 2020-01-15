<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<title><?php wp_title() ?></title>
		<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_uri() ?>">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- 管理画面などから設定した内容が反映される -->
    <?php wp_head() ?>
	</head>

	<body <?php body_class() ?>>
