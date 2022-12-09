<?php get_header(); ?>
<body id="sitemap">
<?php get_template_part('menu'); ?>
 <section id="sitemap_area">
  <div class="inner">
   <h1 class="page_title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_sitemap.png" alt="サイトマップ">
    <span>Site map</span>
   </h1>
   <div class="sitemap_block hasimg">
    <ul>
     <li>
      <a href="<?php bloginfo('url'); ?>/about">
       <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_sitemap_1.png" alt="のじりこぴあについて"></p>
       <p class="link">＞ のじりこぴあについて</p>
      </a>
     </li>
     <li>
      <a href="<?php bloginfo('url'); ?>/play">
       <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_sitemap_2.png" alt="遊具のご案内"></p>
       <p class="link">＞ 遊具のご案内</p>
      </a>
     </li>
     <li>
      <a href="<?php bloginfo('url'); ?>/pool">
       <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_sitemap_3.png" alt="湧水プール"></p>
       <p class="link">＞ 湧水プール</p>
      </a>
     </li>
     <li>
      <a href="<?php bloginfo('url'); ?>/dome">
       <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_sitemap_4.png" alt="メロン型ドーム"></p>
       <p class="link">＞ メロン型ドーム</p>
      </a>
     </li>
     <li>
      <a href="<?php bloginfo('url'); ?>/shop">
       <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_sitemap_5.png" alt="外売店"></p>
       <p class="link">＞ 外売店</p>
      </a>
     </li>
     <li>
      <a href="<?php bloginfo('url'); ?>/history">
       <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_sitemap_6.png" alt="歴史民俗資料館"></p>
       <p class="link">＞ 歴史民俗資料館</p>
      </a>
     </li>
    </ul>
   </div>
   <div class="sitemap_block">
    <ul>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/map_access">＞ 園内マップ・アクセス</a></p>
     </li>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/archives/category/staffblog">＞ スタッフブログ</a></p>
     </li>
    </ul>
   </div>
   <div class="sitemap_block sitemenu">
    <ul>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/archives/category/news">＞ お知らせ</a></p>
     </li>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/archives/category/e-award">＞ 受賞実績</a></p>
     </li>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/privacypolicy">＞ プライバシーポリシー</a></p>
     </li>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/archives/category/event">＞ イベント情報</a></p>
     </li>
		 <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/company">＞ 運営会社</a></p>
     </li>
	 <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/contact">＞ お問い合わせ</a></p>
	 </li>
	 <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/archives/category/e-media">＞ メディア掲載</a></p>
     </li>
     <li>
      <p class="link"><a href="<?php bloginfo('url'); ?>/recruit">＞ 採用情報</a></p>
     </li>
     <li></li>
    </ul>
   </div>
  </div>
 </section>
<?php get_footer(); ?>