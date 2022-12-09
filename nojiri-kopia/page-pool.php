<?php get_header(); ?>
<body id="pool">
<?php get_template_part('menu'); ?>
 <section id="intro">
  <div class="inner">
   <h1 class="page_title">
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_pool_1st.png" alt="湧水プール">
    <span>swimming pool with slides</span>
   </h1>
   <?php if(have_rows('slide_repeat')): ?>
   <div class="slider">
    <?php while(have_rows('slide_repeat')): the_row(); ?>
    <p class="slide"><img src="<?php the_sub_field('slide_img'); ?>" alt=""></p>
    <?php endwhile; ?>
   </div>
   <?php endif; ?>
   <div class="detail">
    <p>夏限定でオープンする、湧水プールです。<br class="pc"><span class="marker">自然の湧水</span>を利用しているので、暑い夏には水が<span class="marker"></span>冷たくて気持ちいい</span>！<br>大小２基の<span class="marker">ウォータースライダー</span>も人気です。<br class="pc">幼児用のプール40cmと一般のプール70cmから110cmの深さのプールがあり、<br class="pc"><span class="marker">浮き輪のレンタルやアイスの販売</span>もございます。<br>泳ぎ疲れたら、<span class="marker">プールサイドのテントでリラックス。</span><br>暑い夏にご家族やお友達と思いっきりプールを楽しんでください。</p>
  </div>
 </div>
</section>
<section id="information">
 <div class="inner">
  <h2>
   ご案内
   <span>Information</span>
  </h2>
  <p class="first_txt"><span class="marker">夏季（７月中旬〜８月末）のみ営業</span></p>
  <dl>
   <dt>営業時間</dt>
   <dd>10:00-17:00</dd>
  </dl>
  <p class="txt">
	☆ウォータースライダー稼働時間は、<br>
	  11:00-12:00,13:00-14:00,15:00-16:00です。<br>
   ☆12:00-12:30は休憩時間です。<br>
   ☆悪天候により中止になる場合があります。
  </p>
 </div>
</section>
<section id="charge" class="wave orange">
 <div class="inner">
  <h2>
   ご利用料金
   <span>charge</span>
  </h2>
  <dl>
   <dt>幼児（３歳未満）</dt>
   <dd>無料</dd>
   <dt>幼児（３歳以上）</dt>
   <dd>200円</dd>
   <dt>小学生・中学生</dt>
   <dd>300円</dd>
   <dt>高校生以上</dt>
   <dd>500円</dd>
   <dt>見学（プールサイド）</dt>
   <dd>200円</dd>
  </dl>
  <div class="block_list">
   <div class="item">
    <h3>
     <img src="<?php echo get_template_directory_uri(); ?>/img/title_slide.png" alt="ウォータースライダー">
     <span>ウォータースライダー</span>
    </h3>
    <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_pool_2.png" alt="ウォータースライダー"></p>
    <div class="desc">
     <p>全長９１mのウォータースライダーは、迫力満点！２基あるので是非どちらも滑ってみてください。<br>｜身長制限あり｜120cm以上</p>
    </div>
   </div>
   <div class="item">
    <h3>
     <img src="<?php echo get_template_directory_uri(); ?>/img/title_pool_2nd.png" alt="プール">
     <span>プール</span>
    </h3>
    <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_pool_3.png" alt="プール"></p>
    <div class="desc">
     <p>
      幼児用のプール40cmと一般のプール70cmのエリアと110cmのエリアにわかれています。
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
      'category_name' => 'e-pool,n-pool,sb-pool',
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