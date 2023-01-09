<html lang="ja">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width,initial-scale=1">
 <title>【公式】のじりこぴあ／九州・宮崎県小林市・野尻町</title>
 <meta name="description" content="夏のプールが大人気！宮崎県小林市にある、子どもから大人まで楽しめる総合レジャースポット。園内にはゴーカートやコンビネーション遊具、湧水プールを備えるほか、パターゴルフ場や歴史民俗資料館も併設されています。古いを超えて、レトロな雰囲気をお楽しみ？ください。">
 <meta name="keywords" content="のじりこぴあ,のじり,宮崎,宮崎県,小林,小林市,野尻,野尻町,イベント,レジャー,レジャースポット,遊具,パターゴルフ,プール,売店,卓球">
 <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <?php if (is_page(array('company','recruit'))){?>
 <link href="https://yuparu-nojiri.com/wp/wp-content/themes/nojiri/style.css" rel="stylesheet" type="text/css">
 <?php }?>
 <?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BXL41SVMMW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BXL41SVMMW');
</script>
</head>
<body id="top">
<?php get_template_part('menu'); ?>
 <div class="mainVisual">
  <ul class="bgList pc">
   <?php if(have_rows('slide_repeat',27)): ?>
   <?php while(have_rows('slide_repeat',27)): the_row(); ?>
			<li style="background-image: url(<?php the_sub_field('slide_img',27); ?>);"></li>
   <?php endwhile; ?>
   <?php endif; ?>
		</ul>
  <ul class="bgList sp">
   <?php if(have_rows('slide_repeat_sp',27)): ?>
   <?php while(have_rows('slide_repeat_sp',27)): the_row(); ?>
			<li style="background-image: url(<?php the_sub_field('slide_img_sp',27); ?>);"></li>
   <?php endwhile; ?>
   <?php endif; ?>
		</ul>
	</div>
 <section class="wave"></section>
 <section id="gnav" class="sp">
  <div class="inner">
   <div class="gnav">
    <ul>
     <li class="top"><a href="<?php echo home_url(''); ?>"><span>TOP</span></a></li>
     <li class="about"><a href="<?php bloginfo('url'); ?>/about"><span>のじりこぴあ<br>について</span></a></li>
     <li class="play"><a href="<?php bloginfo('url'); ?>/play"><span>遊具の<br>ご案内</span></a></li>
     <li class="pool"><a href="<?php bloginfo('url'); ?>/pool"><span>プール</span></a></li>
     <li class="doam"><a href="<?php bloginfo('url'); ?>/dome"><span>メロン型<br>ドーム</span></a></li>
     <li class="shop"><a href="<?php bloginfo('url'); ?>/shop"><span>外売店</span></a></li>
     <li class="history"><a href="<?php bloginfo('url'); ?>/history"><span>歴史民俗<br>資料館</span></a></li>
     <li class="camp yasumi"><a href=""><span>のじり湖<br>キャンプ村</span></a></li>
     <li class="access"><a href="<?php bloginfo('url'); ?>/map_access"><span>園内マップ<br>アクセス</span></a></li>
     <li class="blog"><a href="<?php echo home_url('archives/category/staffblog'); ?>"><span>スタッフ<br>ブログ</span></a></li>
    </ul>
   </div>
  </div>
 </section>
 <section id="information" class="sp wave">
  <div class="inner">
   <h2>Information<span>営業のご案内</span></h2>
   <dl>
    <dt>平日</dt>
    <dd>10:00~17:00</dd>
    <dt>土日祝</dt>
    <dd>9:00~17:00</dd>
   </dl>
   <p class="txt">定休日：毎月第1水曜日（当日祝日の場合は翌日）</p>
   <div class="closed">
    <p><?php the_field('teikyubi', 27); ?></p>
   </div>
  </div>
 </section>
<!--20220717　コンテンツ追加-->
 <section class="charm">
	 <h3 class="charm_ttlsp--img"><img src="<?php echo get_template_directory_uri(); ?>/img/title_main_sp.png" alt="子供から大人まで楽しめる自然いっぱいの総合レジャーランド"></h3>
	 <!--<h3 class="charm_ttlsp">子供から大人まで楽しめる<br>自然いっぱいの<br class="sp">総合レジャーランド</h3>-->
	<div class="charm_wrap">
		<div class="charm_container">
			<h3 class="charm_ttl--img"><img src="<?php echo get_template_directory_uri(); ?>/img/title_main.png" alt="子供から大人まで楽しめる自然いっぱいの総合レジャーランド"></h3>
			<!--<h3 class="charm_ttl">子供から大人まで楽しめる<br>自然いっぱいの<br class="sp">総合レジャーランド</h3>-->
			<p class="charm_text">九州・宮崎県の西部／小林市にある「のじりこぴあ」は、大人も子どもも楽しめる総合レジャースポット。開業は1992（平成４）年。旧野尻町の地域振興策の一環として造られ、年間20万人ものお客様が訪れてくださいます。園内にはゴーカートやコンビネーション遊具、プールを備えるほか、パターゴルフ場や歴史民俗資料館も併設されています。古いを超えて、レトロな雰囲気をお楽しみ？ください。ご来園の方に楽しんでいただくことが大好きなスタッフがお迎えいたします。</p>
		</div>
	</div>
 </section>
 <section id="pickup">
  <div class="inner">
   <h2>Pick up<span>スタッフブログ</span></h2>
   <div class="article_list staff_list_add">
    <ul class="list">
     <?php $wp_query = new WP_Query();
     $my_posts = array(
      'post_type' => 'post',
      'category_name' => 'staffblog',
      'posts_per_page'=> '8',
      'paged' => $paged,
     );
     $wp_query->query( $my_posts );
     if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post(); 
     ?>
     <li>
      <a href="<?php the_permalink(); ?>">
       <div class="img">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="cate_row">
         <p class="cate genre"><?php
          $categories = get_the_category();
          foreach( $categories as $category ){
           // カテゴリーIDを取得
           $cat_id = $category->term_id;
           // 子孫タームのIDを配列で取得
           $cat_child = get_term_children( $cat_id, 'category' );
           // 子孫タームのIDがない場合
           if( !$cat_child ){
            echo '' . $category->name . '';
            break;
           }
          }
          ?></p>
         <?php 
         $cat = get_the_category();
         $cat = $cat[0];
         ?>
			<!--<p class="cate <?php echo $cat->category_nicename; ?>"><?php
          $categories = get_the_category();
          foreach( $categories as $category ){
           // 親カテゴリーIDを取得
           $parent = $category->parent;
           // 親カテゴリーIDがない場合
           if( !$parent ){
            echo '' . $category->name . '';
            break;
           }
          }
          ?></p>-->
		</div>
       </div>
       <div class="txt">
        <div class="txt_inner">
	     <div class="title">
			 <p class="ttl"><?php the_title(); ?></p>
		 </div>
		 <div class="date_name">
          <p class="date"><?php the_time('Y.m.d'); ?></p>
          <?php if(get_field('post_custom')): ?>
          <p class="label">-<?php the_field('post_custom'); ?>-</p>
          <?php endif; ?>
          <p class="name"><?php the_author_meta('nickname'); ?></p>
         </div>
        </div>
        <?php
        $posttags = get_the_tags();
        if ( $posttags ) {
         echo '<ul class="tags">';
         foreach ( $posttags as $tag ) {
          echo '<li>&#035;'.$tag->name.'</li>';
         }
         echo '</ul>';
        }
        ?>
       </div>
      </a>
     </li>
     <?php endwhile;endif; ?>
    </ul>
    <div class="blog__btn-box">
        <p class="btn blog__btn"><a href="<?php echo home_url('archives/category/staffblog'); ?>">過去の投稿をもっと見る</a></p>
        <!-- 検索ボックス -->
        <div class="search_box blog__search"><?php get_search_form(); ?></div>
    <!-- 検索ボックス -->
    </div>
   </div>
  </div>
 </section>
 <section id="news" class="wave">
  <div class="inner">
   <div class="row">
    <div class="ttl">
     <h2>News<span>お知らせ</span></h2>
    </div>
    <div class="list">
     <ul>
      <?php $wp_query = new WP_Query();
     $my_posts = array(
      'post_type' => 'post',
      'category_name' => 'news',
      'posts_per_page'=> '4',
      'paged' => $paged,
     );
     $wp_query->query( $my_posts );
     if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post(); 
     ?>
      <li class="newslist">
       <a href="<?php the_permalink(); ?>">
        <!--<p class="date"><?php the_time('Y.m.d'); ?></p>-->
		   <p class="ttl"><span class="newslist_disc">●</span><?php the_title(); ?></p>
       </a>
      </li>
      <?php endwhile;endif; ?>
     </ul>
     <p class="link"><a href="<?php bloginfo('url'); ?>/archives/category/news">＞ 一覧を見る</a></p>
    </div>
    <!-- <div class="facebook">
     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpia.nojiriko&tabs=timeline&width=300&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=598537003578421"
                        width="300" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div> -->
   </div>
   <div class="nav__sns">
        <a href="https://www.facebook.com/pia.nojiriko/" class="" target="_blank" rel="noreferrer noopener">
        <img src="<?php echo get_template_directory_uri() ?>/img/facebook-icon.svg" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/nojirikopia/" class="" target="_blank" rel="noreferrer noopener">
        <img src="<?php echo get_template_directory_uri() ?>/img/instagram-icon.svg" alt="instagram">
        </a>              
    </div>
  </div>
 </section>
 <section id="event">
  <div class="inner">
   <h2>Event<span>イベント情報</span></h2>
   <div class="article_list staff_list_add">
    <ul class="list">
     <?php $wp_query = new WP_Query();
     $my_posts = array(
      'post_type' => 'post',
      'category_name' => 'event',
      'posts_per_page'=> '4',
      'paged' => $paged,
     );
     $wp_query->query( $my_posts );
     if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post(); 
     ?>
     <li>
      <a href="<?php the_permalink(); ?>">
       <div class="img">
        <?php if ( has_post_thumbnail() ): ?>
        <img src="<?php the_post_thumbnail_url(); ?>">
        <?php else: ?>
        <img src="https://www.nojiri-kopia.com/wp/wp-content/uploads/2022/04/thumbnail.jpg">
        <?php endif; ?>
        <div class="cate_row">
         <p class="cate genre"><?php
          $categories = get_the_category();
          foreach( $categories as $category ){
           // カテゴリーIDを取得
           $cat_id = $category->term_id;
           // 子孫タームのIDを配列で取得
           $cat_child = get_term_children( $cat_id, 'category' );
           // 子孫タームのIDがない場合
           if( !$cat_child ){
            echo '' . $category->name . '';
            break;
           }
          }
          ?></p>
         <!--<p class="cate event"><?php
          $categories = get_the_category();
          foreach( $categories as $category ){
           // 親カテゴリーIDを取得
           $parent = $category->parent;
           // 親カテゴリーIDがない場合
           if( !$parent ){
            echo '' . $category->name . '';
            break;
           }
          }
          ?></p>-->
        </div>
       </div>
       <div class="txt">
        <div class="txt_inner">
		 <div class="title">
			 <p class="ttl"><?php the_title(); ?></p>
		 </div>
         <div class="date_name">
          <p class="date"><?php the_time('Y.m.d'); ?></p>
          <p class="name"><?php the_author_meta('nickname'); ?></p>
         </div>
         <!--<p class="ttl">
          <?php the_title(); ?>
         </p>-->
        </div>
        <?php
        $posttags = get_the_tags();
        if ( $posttags ) {
         echo '<ul class="tags">';
         foreach ( $posttags as $tag ) {
          echo '<li>&#035;'.$tag->name.'</li>';
         }
         echo '</ul>';
        }
        ?>
       </div>
      </a>
     </li>
     <?php endwhile;endif; ?>
    </ul>
    <p class="btn"><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント情報をもっと見る</a></p>
   </div>
  </div>
 </section>
 <section id="enjoy" class="wave">
  <div class="inner">
   <h2><img src="<?php echo get_template_directory_uri(); ?>/img/title_enjoy.png" alt="のじりこぴあ"></h2>
   <div class="enjoy_block">
    <h3><img src="<?php echo get_template_directory_uri(); ?>/img/title_area.png" alt=""></h3>
    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.png" alt=""></div>
    <div class="txt">
     <p class="desc">スカイサイクルやコンビネーション遊具、パターゴルフなど身体を動かして遊べる遊具がたくさん。一年中思いっきり遊べます。</p>
     <p class="btn orange"><a href="<?php bloginfo('url'); ?>/play">遊具を詳しく</a></p>
    </div>
   </div>
   <div class="enjoy_block reverse">
    <h3><img src="<?php echo get_template_directory_uri(); ?>/img/title_pool.png" alt=""></h3>
    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_2.png" alt=""></div>
    <div class="txt">
     <p class="desc">自然の湧水を利用しているプールは、毎年７月中旬〜８月末にオープン。２つのウォータースライダーとプールが楽しめます。</p>
     <p class="btn orange"><a href="<?php bloginfo('url'); ?>/pool">プールを詳しく</a></p>
    </div>
   </div>
   <div class="enjoy_block">
    <h3><img src="<?php echo get_template_directory_uri(); ?>/img/title_doam.png" alt=""></h3>
    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_1.png" alt=""></div>
    <div class="txt">
     <p class="desc">夏休みなど不定期でイベントを実施しています。お越しの際は是非チェックしてくださいね。<br>隣接の外売店で休憩もできます。</p>
     <p class="btn orange"><a href="<?php bloginfo('url'); ?>/dome">メロン型ドームを詳しく</a></p>
    </div>
   </div>
   <div class="enjoy_block_row">
    <div class="enjoy_block">
     <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_4.png" alt=""></div>
     <h3>
      <span class="pc"><img src="<?php echo get_template_directory_uri(); ?>/img/title_history.png" alt=""></span>
      <span class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/title_history_sp.png" alt=""></span>
     </h3>
     <div class="txt">
      <p class="desc">歴史民俗資料館は、野尻町の歴史・民俗が分かる資料館です。先人たちが遺してくれた有形無形の文化財を収集・展示しています。</p>
      <p class="btn orange"><a href="<?php bloginfo('url'); ?>/history">歴史民俗資料館を詳しく</a></p>
     </div>
    </div>
    <div class="enjoy_block">
     <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_5.png" alt=""></div>
     <h3>
      <span class="pc"><img src="<?php echo get_template_directory_uri(); ?>/img/title_shop.png" alt=""></span>
      <span class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/title_shop_sp.png" alt=""></span>
     </h3>
     <div class="txt">
      <p class="desc">
                            アメリカンドッグ・から揚げなどの軽食からソフトクリーム、ホットコーヒーなどがあります。たくさん遊んだ後の休憩にどうぞ。
                        </p>
                        <p class="btn orange"><a href="<?php bloginfo('url'); ?>/shop">外売店を詳しく</a></p>
                    </div>
                </div>
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
            <p class="btn pc"><a href="<?php bloginfo('url'); ?>/map_access">園内マップ・アクセス情報を詳しく見る</a></p>
            <p class="btn sp"><a href="<?php bloginfo('url'); ?>/map_access">園内マップを詳しく見る</a></p>
        </div>
    </section>

    <section id="gmap">
        <h2 class="sp">
            Location
            <span>所在地</span>
        </h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d515102.61151707894!2d130.5688888295447!3d31.988875404530425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f378cb8a7ca31%3A0x57e7444dd01fef9b!2z44Gu44GY44KK44GT44G044GC!5e0!3m2!1sja!2sjp!4v1657875305583!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="btn sp"><a href="<?php bloginfo('url'); ?>/map_access#access">アクセス情報を詳しく見る</a></p>
    </section>
<?php get_footer(); ?>
<script>
	$(function(){
		$('.mainVisual .bgList').slick({
			centerMode: true,
			variableWidth: false,
			autoplay: true,
			fade: true,
			speed: 2000,
			autoplaySpeed: 3000, 
			pauseOnHover: false,
			pauseOnFocus: false,
            arrows: false,
			dots: true,
   responsive: [
				{
				breakpoint: 897,
				settings: {
					slidesToScroll: 1,
					slidesToShow: 1,
					variableWidth: false,
					centerMode: false,
				}
				},
			]
		})
	})
</script>