<?php get_header(); ?>
<body id="play">
<?php get_template_part('menu'); ?>
 <section id="intro" class="wave orange">
  <div class="inner">
   <h1 class="page_title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_play.png" alt="">
    <span>playground equipment</span>
   </h1>
   <?php if(have_rows('slide_repeat')): ?>
   <div class="slider">
    <?php while(have_rows('slide_repeat')): the_row(); ?>
    <p class="slide"><img src="<?php the_sub_field('slide_img'); ?>" alt=""></p>
    <?php endwhile; ?>
   </div>
   <?php endif; ?>
   <div class="detail">
    <p>車や電車が好きなお子さんには、<br class="pc">乗り物の遊具が人気。<br class="pc">コンビネーション遊具や昔懐かしいレトロな遊び道具、<br class="pc">大人も一緒に楽しめるパターゴルフなど<br class="pc"><span class="marker">小さなお子さんから小中学生、大人まで<br class="pc">幅広い年齢の方に遊んでいただけるよう工夫しています。</span><br>自然いっぱいの施設で思いっきり遊んでください。</p>
   </div>
   <div class="block_list" id="equip">
    <div class="item">
     <h3>スキッドレーシング</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_1.png" alt="スキッドレーシング"></p>
     <div class="desc">
      <p>本格エンジンのゴーカートで、家族やお友達と競いあってレースを楽しもう！</p>
      <p>｜料金｜１回　1人乗り410円　２人乗り620円</p>
      <p>｜身長制限あり｜140cm以上</p>
     </div>
    </div>
    <div class="item" id="skycycle">
     <h3>スカイサイクル</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_2.png" alt="スカイサイクル"></p>
     <div class="desc">
      <p>高さ3.3m、1周200mのレールを2人乗りの自転車で走ります。空中散歩は、スリル満点です。</p>
      <p>｜料金｜１回　大人310円　子供310円　幼児（３歳未満）無料
     </div>
    </div>
    <div class="item" id="automobile">
     <h3>電気自動車</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_3.png" alt="電気自動車"></p>
     <div class="desc">
      <p>動物やバイクなど可愛い形の乗り物です。小さなお子さんでも遊んでいただけます。</p>
      <p>｜料金｜１回　100円</p>
     </div>
    </div>
    <div class="item" id="train">
     <h3>こども列車</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_4.png" alt="こども列車"></p>
     <div class="desc">
      <p>踏切もあって線路を走る本格的なこども列車。鉄道好きの方に是非！</p>
      <p>｜料金｜１回　大人310円　子供310円　幼児（３歳未満）無料</p>
     </div>
    </div>
    <div class="item" id="combination">
     <h3>コンビネーション遊具</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_5.png" alt="コンビネーション遊具"></p>
     <div class="desc">
      <p>ネットの遊具やコロコロすべり台、トンネルなど楽しさいっぱいの遊具です。</p>
      <p>｜料金｜無料</p>
     </div>
    </div>
    <div class="item">
     <h3>昔なつかし手作り遊具</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_6.png" alt="昔なつかし手作り遊具"></p>
     <div class="desc">
      <p>竹馬やパッカパッカ、竹とんぼなど昔なつかしい、レトロな手作り遊具で遊べます。</p>
      <p>｜料金｜無料</p>
     </div>
    </div>
    <div class="item" id="golf">
     <h3>パターゴルフ</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_7.png" alt="パターゴルフ"></p>
     <div class="desc">
      <p>子供から大人まで楽しく遊べるコースです。ボール及びパター（クラブ）を貸し出しいたします。</p>
      <p>｜料金｜１回　１人320円</p>
     </div>
    </div>
    <div class="item" id="tabletennis">
     <h3>卓球場</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_play_8.png" alt="卓球場"></p>
     <div class="desc">
      <p>屋根付きのオープンエアスペースで卓球を楽しめます。ラケット最大４本とボール１個を貸し出しいたします。</p>
      <p>｜料金｜1台　30分530円</p>
     </div>
    </div>
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
      'category_name' => 'sb-yugu,e-yugu,n-yugu',
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>