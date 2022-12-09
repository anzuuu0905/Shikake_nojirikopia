<script>
$(function () {
  var hd_size = $('.gnav').innerHeight(); //ヘッダーの高さを取得
  var pos = 0;
  $(window).on('scroll', function () {
    var current_pos = $(this).scrollTop(); //現在の位置を取得
    if (current_pos < pos || current_pos == 0) { //上にスクロール もしくは 最上部
      $('.gnav').css({ 'top': 0 }); //ヘッダーを表示
    } else {
      $('.gnav').css({ 'top': '-' + hd_size + 'px' }); //ヘッダーを非表示(下にスクロール)
    }
    pos = current_pos;
  });
});
</script>
<script>
$(function () {
  var hd_size = $('header').innerHeight(); //ヘッダーの高さを取得
  var pos = 0;
  $(window).on('scroll', function () {
    var current_pos = $(this).scrollTop(); //現在の位置を取得
    if (current_pos < pos || current_pos == 0) { //上にスクロール もしくは 最上部
      $('header').css({ 'top': 0 }); //ヘッダーを表示
    } else {
      $('header').css({ 'top': '-' + hd_size + 'px' }); //ヘッダーを非表示(下にスクロール)
    }
    pos = current_pos;
  });
});
</script>
<header>
 <div class="inner">
  <div class="top_sec">
   <div class="tsw">
   <p class="logo">
    <a href="<?php echo home_url(''); ?>">
     <img class="black" src="<?php echo get_template_directory_uri(); ?>/img/logo_black.svg" alt="のじりこぴあ">
     <img class="white" src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" alt="のじりこぴあ">
    </a>
   </p>
   <p id="sp_btn" class="sp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ico_menu.svg" alt="MENU">
   </p>
   <div class="right pc">
    <nav class="sitemenu pc">
     <ul>
      <li><a href="<?php bloginfo('url'); ?>/archives/category/news">お知らせ</a></li>
      <li><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント情報</a></li>
	  <li><a href="<?php bloginfo('url'); ?>/archives/category/e-media">メディア掲載</a></li>
	  <li><a href="<?php bloginfo('url'); ?>/archives/category/e-award">受賞実績</a></li>
      <li><a href="<?php bloginfo('url'); ?>/company">運営会社</a></li>
      <li><a href="<?php bloginfo('url'); ?>/recruit">採用情報</a></li>
      <li><a href="<?php bloginfo('url'); ?>/sitemap">サイトマップ</a></li>
      <li class="contact"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
     </ul>
    </nav>
    <div class="time_info">
     <p class="ttl">営業のご案内</p>
     <div class="time_sec">
      <div class="row">
       <div class="time_block">
        <p class="block_ttl">・平日・</p>
        <p class="time">10:00~17:00</p>
       </div>
       <div class="time_block">
        <p class="block_ttl">・土日祝・</p>
        <p class="time">9:00~17:00</p>
       </div>
      </div>
      <p class="notice">定休日：毎月第1水曜日（当日祝日の場合は翌日）</p>
     </div>
     <div class="closed_info">
      <p class="closed_info--text">
       <?php the_field('teikyubi', 27); ?>
      </p>
     </div>
    </div>
   </div>
    </div>
  </div>
  <div class="gnav">
   <p class="close sp"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_close.svg" alt="閉じる"></p>
   <ul>
    <li class="top"><a href="<?php echo home_url(''); ?>"><span>TOP</span></a></li>
    <li class="about"><a href="<?php bloginfo('url'); ?>/about"><span>のじりこぴあ<br>について</span></a></li>
    <li class="play"><a href="<?php bloginfo('url'); ?>/play"><span>遊具のご案内</span></a></li>
    <li class="pool"><a href="<?php bloginfo('url'); ?>/pool"><span>プール</span></a></li>
    <li class="doam"><a href="<?php bloginfo('url'); ?>/dome"><span>メロン型<br>ドーム</span></a></li>
    <li class="shop"><a href="<?php bloginfo('url'); ?>/shop"><span>外売店</span></a></li>
    <li class="history"><a href="<?php bloginfo('url'); ?>/history"><span>歴史民俗<br>資料館</span></a></li>
    <li class="camp yasumi"><a href=""><span>のじり湖<br>キャンプ村</span></a></li>
    <li class="access"><a href="<?php bloginfo('url'); ?>/map_access"><span>園内マップ<div class="sp">・</div><br class="pc">アクセス</span></a></li>
	<li class="blog"><a href="<?php echo home_url('archives/category/staffblog');?>"><span>スタッフ<br>ブログ</span></a></li>
   </ul>
   <nav class="sitemenu sp">
    <ul>
     <li><a href="<?php bloginfo('url'); ?>/archives/category/news">お知らせ</a></li>
     <li><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント情報</a></li>
	 <li><a href="<?php bloginfo('url'); ?>/archives/category/e-media">メディア掲載</a></li>
	 <li><a href="<?php bloginfo('url'); ?>/archives/category/e-award">受賞実績</a></li>
     <li><a href="<?php bloginfo('url'); ?>/company">運営会社</a></li>
     <li><a href="<?php bloginfo('url'); ?>/recruit">採用情報</a></li>
     <li><a href="<?php bloginfo('url'); ?>/sitemap">サイトマップ</a></li>
     <li><a href="<?php bloginfo('url'); ?>/privacypolicy">プライバシーポリシー</a></li>
     <li class="contact"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
    </ul>
   </nav>
   <p class="close last sp"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_close.svg" alt="閉じる"><span>閉じる</span></p>
  </div>
 </div>
</header>