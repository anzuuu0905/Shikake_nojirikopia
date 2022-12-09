<footer>
 <div class="inner">
  <div class="row">
   <div class="left">
    <p class="logo">
     <a href="<?php echo home_url(''); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_blue.svg" alt="のじりこぴあ">
     </a>
    </p>
    <div class="info_txt">
     <p class="address">〒886-0212　宮崎県小林市野尻町東麓5160番地 　<br>TEL <a href="tel:0984443000">0984-44-3000</a></p>
	<p class="open">平日：10:00~17:00　土日祝： 9:00~17:00<br>定休日：毎月第1水曜日<br>（当日祝日の場合は翌日）
     </p>
    </div>
    <?php the_field('teikyubi', 27); ?>
   </div>
   <div class="right">
    <p class="footer-logo_txtbox pc"><img src="<?php echo get_template_directory_uri(); ?>/img/title_footer.png" alt="子供から大人まで楽しめる自然いっぱいの総合レジャーランド"></p>
    <p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/title_footer_sp.png" alt="子供から大人まで楽しめる自然いっぱいの総合レジャーランド"></p>
	<section class="calendar calendar-pc">
		<?php echo do_shortcode( '[xo_event_calendar holidays="regular-holiday" navigation="false" months="2"]' ); ?>
	</section>
   </div>
  </div>
  <div class="gnav pc">
   <ul>
    <li class="top"><a href="<?php echo home_url(''); ?>"><span>TOP</span></a></li>
    <li class="about"><a href="<?php bloginfo('url'); ?>/about"><span>のじりこぴあ<br>について</span></a></li>
    <li class="play"><a href="<?php bloginfo('url'); ?>/play"><span>遊具のご案内</span></a></li>
    <li class="pool"><a href="<?php bloginfo('url'); ?>/pool"><span>プール</span></a></li>
    <li class="doam"><a href="<?php bloginfo('url'); ?>/dome"><span>メロン型<br>ドーム</span></a></li>
    <li class="shop"><a href="<?php bloginfo('url'); ?>/shop"><span>外売店</span></a></li>
    <li class="history"><a href="<?php bloginfo('url'); ?>/history"><span>歴史民俗<br>資料館</span></a></li>
    <li class="camp yasumi"><a href=""><span>のじり湖<br>キャンプ村</span></a></li>
    <li class="access"><a href="<?php bloginfo('url'); ?>/map_access"><span>園内マップ<br>アクセス</span></a></li>
    <li class="blog"><a href="<?php bloginfo('url'); ?>/archives/category/staffblog"><span>スタッフ<br>ブログ</span></a></li>
   </ul>
  </div>
  <nav class="sitemenu pc">
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
	 <section class="calendar calendar-sp">
		<?php echo do_shortcode( '[xo_event_calendar holidays="regular-holiday" navigation="false" months="2"]' ); ?>
	</section>
 </div>
	
 <div class="bar">
  <div class="inner">
   <div class="row">
    <div class="left">
     <p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_nojiri.svg" alt="ハーメックのじり株式会社"></p>
     <p class="address">〒886-0212 <br class="sp">宮崎県小林市野尻町東麓5160番地　</p>
    </div>
    <div class="right">
     <ul>
      <li><a href="https://yuparu-nojiri.com"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_station.png" alt="道の駅ゆ〜ぱるのじり"></a></li>
      <li><a href="<?php echo home_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_logo.png" alt="のじりこぴあ"></a></li>
     </ul>
    </div>
   </div>
  </div>
 </div>
<!--
 <div class="bnr_area pc">
  <ul>
   <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer_bnr.png" alt=""></a></li>
   <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer_bnr.png" alt=""></a></li>
   <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer_bnr.png" alt=""></a></li>
   <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer_bnr.png" alt=""></a></li>
  </ul>
 </div>
-->
 <p class="copy">Copyright (c) 2022 Nojirikopia. All Rights Reserved.</p>
</footer>
<?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</html>