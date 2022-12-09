<?php get_header(); ?>
<body id="about">
<?php get_template_part('menu'); ?>
 <section id="intro">
  <div class="inner">
   <h1 class="page_title">
    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/title_about.png" alt="のじりこぴあについて">
    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/title_about_sp.png" alt="のじりこぴあについて">
    <span>about Nojirikopia</span>
   </h1>
   <div class="detail">
    <p>
     「のじりこぴあ」は、野尻湖湖畔にある子供から大人まで楽しめる<br class="pc"><span class="marker">自然いっぱいの総合レジャーランド</span>です。<br>
     思いっきり身体を動かして遊べる遊具エリアをはじめ、<br class="pc">夏にはウォータースライダーも備えたプールで遊べます。<br>
     町民の定住やUターン促進により町が活性化して栄えるようにとの願いを込めて<br class="pc">「ケロケロ（帰ろ帰ろ）」から<span class="marker">カエルのモニュメントやキャラクター</span>が<br class="pc">「のじりこぴあ」のシンボルになっています。
    </p>
   </div>
   <div class="block_list" id="symbol">
    <div class="item">
     <h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/title_frog.png" alt="モニュメント">
      <span>モニュメント</span>
     </h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_about_1.png" alt="モニュメント"></p>
     <div class="desc">
      <p>
       のじりこぴあのシンボルとして入口近くで迎えてくれるのはケロケロ（帰ろ帰ろ）共和国のモニュメントです。数えきれないほどカエルがたくさん！何匹いるか数えてみてね！
      </p>
     </div>
    </div>
    <div class="item">
     <h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/title_frog.png" alt="キャラクター">
      <span>キャラクター</span>
     </h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_about_2.png" alt="キャラクター"></p>
     <div class="desc">
      <p>
       マスコットキャラクター「Ｕターンカエル」。 町民の定住促進と、町外在住者が早期にＵターンすることにより、町が更に活性化して栄えるようにとの願いが込められています。
      </p>
     </div>
    </div>
   </div>
  </div>
 </section>
 <section id="information">
  <div class="inner">
   <h2>
    ご案内
    <span>Information</span>
   </h2>
   <p class="first_txt"><span class="marker">入園料・駐車場：無料</span></p>
   <dl>
    <dt>営業時間</dt>
    <dd><span>10:00-17:00（平日）</span><span>　9:00-17:00（土日祝）</span></dd>
    <dt>定休日</dt>
    <dd><span>毎月第一水曜日</span><span>（当日祝日の場合は翌日）※</span><span>※変更する場合がございます。</span></dd>
    <p class="t_text"><?php the_field('teikyubi', 27); ?></p>
    <div></div>
   </dl>
   <p class="txt">
    遊具や施設によっては料金がかかる場合がございます。<br class="pc">遊具やプールのご利用料金については、下記のリンクよりご確認ください。
   </p>
   <div class="btns">
    <p class="btn orange"><a href="<?php bloginfo('url'); ?>/play">遊具を詳しく</a></p>
    <p class="btn orange"><a href="<?php bloginfo('url'); ?>/pool">プールを詳しく</a></p>
   </div>
  </div>
 </section>
 <section id="stage" class="wave orange">
  <div class="inner">
   <h2>
    屋外ステージについて
    <span>about outdoor stage</span>
   </h2>
   <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_about_3.png" alt="屋外ステージについて"></p>
   <p class="txt">
    のじりこぴあの屋外ステージは１日利用のほか、<br class="pc">練習用に時間利用の貸出をしています。<br>
    開放的なステージで演奏・練習してみませんか？
   </p>
   <dl>
    <dt>入場料を徴収する場合</dt>
    <dd class="time">１日</dd>
    <dd class="price">51,000円</dd>
    <dt>入場料を徴収しない場合</dt>
    <dd class="time">１時間</dd>
    <dd class="price">1,000円</dd>
    <dt>ドラム貸出</dt>
    <dd class="time">１回</dd>
    <dd class="price">500円</dd>
   </dl>
   <p class="notice">
    ☆時間料金は１グループあたりの金額です。練習の内容次第ではご利用できない場合もございます。詳しくは、お電話(<a href="tel:0984443000">0984-44-3000</a>)にてお問い合わせください。
   </p>
  </div>
 </section>
 <section id="pickup" class="wave">
  <div class="inner">
   <h2>
    Pick up
    <span>スタッフブログ</span>
   </h2>
   <div class="article_list">
    <ul class="list">
     <?php $wp_query = new WP_Query();
     $my_posts = array(
      'post_type' => 'post',
      'category_name' => 'sb-shisetsu,e-shisetsu,n-shisetsu,sb-shisetsucyou,e-shisetsucyou,n-shisetsucyou,sb-buppan,e-buppan,n-buppan,sb-jimusyo,e-jimusyo,n-jimusyo',
      'posts_per_page'=> '4',
      'paged' => $paged,
     );
     $wp_query->query( $my_posts );
     if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post(); 
     ?>
     <li>
		 <?php get_template_part( 'blog', 'box' ); ?>
     </li>
     <?php endwhile;endif; ?>
    </ul>
    <p class="btn"><a href="<?php echo home_url('archives/category/staffblog'); ?>">スタッフブログをもっと見る</a></p>
   </div>
  </div>
 </section>
 <section id="map">
  <div class="inner">
   <h2>
    Map
    <span>園内マップ</span>
   </h2>
   <div class="row">
    <div class="img">
     <p class="pc"><img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt=""></p>
     <p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/map_sp.png" alt=""></p>
    </div>
    <div class="txt pc">
     <ol>
      <li><span class="num">1</span><span class="name"><a href="<?php bloginfo('url'); ?>/about#symbol">カエル池</a></span></li>
      <li><span class="num">2</span><span class="name"><a href="<?php bloginfo('url'); ?>/dome">メロン型ドーム</a></span></li>
      <li><span class="num">3</span><span class="name"><a href="<?php bloginfo('url'); ?>/shop">外売店</a></span></li>
      <li><span class="num">4</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#equip">スキッドレーシング</a></span></li>
      <li><span class="num">5</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#train">こども列車</a></span></li>
      <li><span class="num">6</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#skycycle">スカイサイクル</a></span></li>
      <li><span class="num">7</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#automobile">電気自動車</a></span></li>
      <li><span class="num">8</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#combination">コンビネーション遊具</a></span></li>
      <li><span class="num">9</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#golf">パターゴルフ場</a></span></li>
      <li><span class="num">10</span><span class="name"><a href="<?php bloginfo('url'); ?>/play#tabletennis">卓球場</a></span></li>
      <li><span class="num">11</span><span class="name"><a href="<?php bloginfo('url'); ?>/pool">湧水プール</a></span></li>
      <li><span class="num">12</span><span class="name"><a href="<?php bloginfo('url'); ?>/history">歴史民俗資料館</a></span></li>
      <li><span class="num">13</span><span class="name"><a href="<?php bloginfo('url'); ?>/about#stage">屋外ステージ</a></span></li>
     </ol>
    </div>
   </div>
   <p class="btn pc"><a href="<?php bloginfo('url'); ?>/map_access">アクセス情報・園内マップを詳しく見る</a></p>
   <p class="btn sp navy"><a href="<?php bloginfo('url'); ?>/map_access">園内マップを詳しく見る</a></p>
  </div>
 </section>
 <section id="gmap">
  <h2 class="sp">
   Location
   <span>所在地</span>
  </h2>
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d515102.61151707894!2d130.5688888295447!3d31.988875404530425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f378cb8a7ca31%3A0x57e7444dd01fef9b!2z44Gu44GY44KK44GT44G044GC!5e0!3m2!1sja!2sjp!4v1657875305583!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <p class="btn sp navy"><a href="<?php bloginfo('url'); ?>/map_access#access">アクセス情報を詳しく見る</a></p>
 </section>
 <?php get_footer(); ?>