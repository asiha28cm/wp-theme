<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
<head>
  <meta charset="<?php bloginfo('charset'); //文字エンコーディング情報を出力 ?>">
  <title>
  <?php wp_title('|', true, 'right'); //ページタイトルを出力 ?>
  <?php bloginfo('name'); //サイト名を表示 ?>
  </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); //使用中テーマディレクトリのURLを出力 ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); //ピングバックURLを出力 ?>">
  <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入する ?>
</head>
<body <?php body_class(); //bodyタグにページの種類に応じたクラスを与える ?>>
  <header>
    <div id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Academy Corporation">
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); //トップページのURLを出力 ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/about/">ABOUT</a></li>
        <li><a href="<?php echo home_url(); ?>/map/">MAP</a></li>
        <li><a href="<?php echo home_url(); ?>/blog/">BLOG</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>
  </header>
  <div id="cover">
    <div id="slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png" alt="Welcome to our website!">
    </div>
  </div>
  <!--ここからぱんくずナビ-->
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
  <!--ぱんくずナビここまで-->
