<?php get_header(); ?>
<body id="dome">
<?php get_template_part('menu'); ?>
 <section id="intro" class="wave orange">
  <div class="inner">
   <h1 class="page_title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_doam_1st.png" alt="メロン型ドーム">
    <span>melon shaped dome</span>
   </h1>
   <?php if(have_rows('slide_repeat')): ?>
   <div class="slider">
    <?php while(have_rows('slide_repeat')): the_row(); ?>
    <p class="slide"><img src="<?php the_sub_field('slide_img'); ?>" alt=""></p>
    <?php endwhile; ?>
   </div>
   <?php endif; ?>
   <div class="detail">
    <p>印象的なフォルムが目印のメロン型ドーム。<br>
     野尻町の特産物でもある<span class="marker">メロンのかたちの建物</span>です。<br>
     メロン型ドームでは、夏休みなど不定期での<br class="pc"><span class="marker">お子さん向けのイベント</span>を実施しています。<br>
     お越しの際には、是非イベント情報もチェックしてくださいね。<br>
     また、メロン型ドームの入り口付近には売店と休憩スペースがあります。<br>
     遊具やプールなどでたくさん遊んだあとの休憩にどうぞ！
    </p>
   </div>
   <div class="block_list">
    <div class="item">
     <h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/title_inside.png" alt="屋内で遊ぼう！">
      <span>屋内で遊ぼう！</span>
     </h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_doam_1.png" alt="屋内で遊ぼう！"></p>
     <div class="desc">
      <p>屋内施設なので、イベント開催時には、雨の日でも天候を気にせず楽しく遊べます。お越しの際には、イベント情報を是非チェックしてくださいね。</p>
      <p class="btn orange"><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント情報を詳しく</a></p>
     </div>
    </div>
    <div class="item">
     <h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/title_outside.png" alt="ちょっと休憩">
      <span>ちょっと休憩</span>
     </h3>
     <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_doam_2.png" alt="ちょっと休憩"></p>
     <div class="desc">
      <p>アメリカンドッグ・から揚げ、ソフトクリーム・ホットコーヒーなど軽食や飲み物を各種ご用意しています。休憩スペースもありますので、休憩にどうぞ。</p>
      <p class="btn orange"><a href="<?php bloginfo('url'); ?>/shop">外売店を詳しく</a></p>
     </div>
    </div>
   </div>
   <div class="closed_notice">
    <p>新型コロナウイルス感染症拡大防止のため、<br>
     バイキングレストラン及び物産販売所は休業し、<br>
     以降の現在も再開の目処がたっておりません。</p>
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
      'category_name' => 'sb-dome,e-dome,n-dome',
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