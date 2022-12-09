<?php get_header(); ?>
<body id="shop">
<?php get_template_part('menu'); ?>
 <section id="intro">
  <div class="inner">
   <h1 class="page_title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_shop_1st.png" alt="外売店">
    <span>shop</span>
   </h1>
   <?php if(have_rows('slide_repeat')): ?>
   <div class="slider">
    <?php while(have_rows('slide_repeat')): the_row(); ?>
    <p class="slide"><img src="<?php the_sub_field('slide_img'); ?>" alt=""></p>
    <?php endwhile; ?>
   </div>
   <?php endif; ?>
  </div>
 </section>
 <section id="menu" class="wave orange">
  <div class="inner">
   <h2>
    メニュー
    <span>menu</span>
   </h2>
   <div class="menu_list">
    <div class="left">
     <div class="menu_block">
      <h3>ICE CREAM</h3>
      <dl>
       <dt>ソフトクリーム　バニラ</dt>
       <dd>350円</dd>
       <dt>ソフトクリーム　特濃ミルク</dt>
       <dd>380円</dd>
       <dt>メロン</dt>
       <dd>380円</dd>
							<dt>ミックス</dt>
       <dd>380円</dd>
							<dt>チョコ</dt>
       <dd>380円</dd>
       <dt>高級ソフトクリーム「クレミア」</dt>
       <dd>500円</dd>
      </dl>
     </div>
     <div class="menu_block">
      <h3>SUNDAE</h3>
      <dl>
       <dt>イチゴ</dt>
       <dd>450円</dd>
       <dt>メロン</dt>
       <dd>450円</dd>
							<dt>チョコ</dt>
       <dd>450円</dd>
       <dt>ブルーベリー</dt>
       <dd>450円</dd>
       <dt>ミルク</dt>
       <dd>450円</dd>
       <dt>キャラメル</dt>
       <dd>450円</dd>
      </dl>
     </div>
     <div class="menu_block">
      <h3>DRINKS</h3>
      <dl>
       <dt>ホットコーヒー</dt>
       <dd>150円</dd>
       <dt>アイスコーヒー　ー季節限定ー</dt>
       <dd>160円</dd>
       <dt>ホットココア　ー季節限定ー</dt>
       <dd>150円</dd>
       <dt>ホット甘酒　ー季節限定ー</dt>
       <dd>150円</dd>
       <dt>ホット抹茶オレ　ー季節限定ー</dt>
       <dd>150円</dd>
       <dt>コーラ</dt>
       <dd>120円</dd>
       <dt>オレンジジュース</dt>
       <dd>120円</dd>
       <dt>ジンジャーエール</dt>
       <dd>120円</dd>
      </dl>
     </div>
    </div>
    <div class="right">
     <div class="menu_block">
      <h3>FOOD</h3>
      <dl>
       <dt>フライドポテト</dt>
       <dd>230円</dd>
       <dt>アメリカンドッグ</dt>
       <dd>230円</dd>
       <dt>揚げたこやき</dt>
       <dd>330円</dd>
       <dt>鶏のから揚げ</dt>
       <dd>250円</dd>
       <dt>フランクフルト</dt>
       <dd>230円</dd>
       <dt>フライドチキン</dt>
       <dd>200円</dd>
       <dt>カレーパン</dt>
       <dd>180円</dd>
       <dt>牛肉コロッケ</dt>
       <dd>110円</dd>
      </dl>
     </div>
     <div class="menu_block">
      <h3>OTHERS</h3>
      <dl>
       <dt>カップ麺　<small>☆お湯もご用意しています</small></dt>
       <dd>150円</dd>
       <dt>焼き芋　ー季節限定ー</dt>
       <dd>150円</dd>
      </dl>
     </div>
    </div>
    <p class="notice">※メニューは変更になる場合があります。</p>
   </div>
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
      'category_name' => 'sb-shop,e-shop,n-shop',
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