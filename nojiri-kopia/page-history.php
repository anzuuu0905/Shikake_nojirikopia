<?php get_header(); ?>
<body id="history">
<?php get_template_part('menu'); ?>
 <section id="intro">
  <div class="inner">
   <h1 class="page_title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_history_1st.png" alt="">
    <span>Museum of History and Folklore</span>
   </h1>
   <?php if(have_rows('slide_repeat')): ?>
   <div class="slider">
    <?php while(have_rows('slide_repeat')): the_row(); ?>
    <p class="slide"><img src="<?php the_sub_field('slide_img'); ?>" alt=""></p>
    <?php endwhile; ?>
   </div>
   <?php endif; ?>
   <div class="detail">
    <p>野尻湖対岸にある<span class="marker">戸崎城址</span>を意識した城館風の建物で、<br class="pc">町内産の木材を使用して造られています。<br>先人たちが遺してくれた貴重な財産である<br><span class="marker">有形無形の文化財</span>を保存・伝承するために収集・展示してあります。<br>三階窓から、橋の向こう側に「伊東四十八城」の一つに数えられた<br class="pc">戸崎城を望むことができます。<br><span class="marker">野尻町の歴史・民俗は一目で分かる資料館</span>です。</p>
   </div>
  </div>
 </section>
 <section id="information" class="wave orange">
  <div class="inner">
   <h2>
    ご案内
    <span>Information</span>
   </h2>
   <p class="first_txt"><span class="marker">入館料：無料</span></p>
   <dl>
    <dt>開館時間</dt>
    <dd><span>10:00-17:00（平日）</span><span>　9:00-17:00（土日祝）</span></dd>
    <dt>定休日</dt>
    <dd><span>毎月第一水曜日</span><span>（当日祝日の場合は翌日）※</span>
    <span>※変更する場合がございます。</span><span>☆くん蒸などにより臨時休館する場合があります。</span>
    </dd>
    <p class="t_text"><?php the_field('teikyubi', 27); ?></p>
   <div></div>
   </dl>
   
   <div class="block_list">
    <div class="item">
     <h3>郷土芸能</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_history_1.png" alt="郷土芸能"></p>
     <div class="desc">
      <p>
       野尻町の地区それぞれで伝承されている郷土芸能（踊り）の装束を展示しています。<br>
       ｜１階｜
      </p>
     </div>
    </div>
    <div class="item">
     <h3>郷土の民具</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_history_2.png" alt="郷土の民具"></p>
     <div class="desc">
      <p>
       実際に使用されてきた農具の展示のほか、昭和初期ごろの民家の様子も再現しています。<br>
       ｜１階｜
      </p>
     </div>
    </div>
    <div class="item">
     <h3>町内遺跡の出土品</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_history_3.png" alt="町内遺跡の出土品"></p>
     <div class="desc">
      <p>
       発掘調査が行われた遺跡の遺物を中心に展示しています。現在使っている道具の原形となるものが多数あります。<br>
       ｜２階｜
      </p>
     </div>
    </div>
    <div class="item">
     <h3>ビデオコーナー</h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_history_4.png" alt="ビデオコーナー"></p>
     <div class="desc">
      <p>
       野尻町の歴史・産業・民話・四季等について、映像でご覧いただけます。<br>
       ｜３階｜
      </p>
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
      'category_name' => 'sb-history,e-history,n-history',
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