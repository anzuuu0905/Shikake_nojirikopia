<?php get_header(); ?>
<body id="staffblog">
<style>
 #staffblog #blog_list .blog_nav > ul{
  width: 1240px;
 }
 #staffblog #blog_list .blog_nav ul li:nth-last-child(1),
 #staffblog #blog_list .blog_nav ul li:nth-last-child(2),
 #staffblog #blog_list .blog_nav ul li:nth-last-child(3),
 #staffblog #blog_list .blog_nav ul li:nth-last-child(5){
  text-align: center;
 }
 .search_result_text{
  clear: both;
  text-align: center;
  font-size: 25px;
  margin: 0 auto 40px;
 }
@media (max-width: 1100px){
 #staffblog #blog_list .blog_nav > ul{
  width: 100%!;
 }
 }
 .search_result_text2{
  margin: 0 auto;
  display: block;
 }
</style>
<?php get_template_part('menu'); ?>
 <section id="blog_list">
  <div class="inner">
   <h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_blog.png" alt="スタッフブログ">
    <span>Staff Blog</span>
   </h2>
	  <?php get_template_part( 'blog', 'nav' ); ?>
   <!--<nav class="blog_nav">
    <ul>
     <li><a href="<?php bloginfo('url'); ?>/archives/blogs">すべて</a></li>
     <ul class="sub">
      <li<?php if(is_page('shisetsu')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/shisetsu">施設全体</a></li>
      <li<?php if(is_page('yugu')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/yugu">遊具</a></li>
      <li<?php if(is_page('pool-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/pool-cat">プール</a></li>
      <li<?php if(is_page('dome-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/dome-cat">メロン型<br class="sp">ドーム</a></li>
      <li<?php if(is_page('shop-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/shop-cat">外売店</a></li>
      <li<?php if(is_page('history-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/history-cat">歴史民俗<br class="sp">資料館</a></li>
     </ul>
     <li class="current"><a href="<?php bloginfo('url'); ?>/archives/category/staffblog">スタッフ<br>ブログ</a></li>
     <li<?php if ( is_category(array('news')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/news">お知らせ</a></li>
     <li<?php if ( is_category(array('event')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント<br>情報</a></li>
     <li<?php if(is_page('media')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/media">メディア<br>掲載</a></li>
     <li<?php if(is_page('award')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/award">受賞<br>実績</a></li>
    </ul>
   </nav>-->
   <!-- 検索ボックス -->
   <div class="search_box"><?php get_search_form(); ?></div>
   <!-- 検索ボックス -->
   <div class="article_list">
    <p class="search_result_text">「<?php the_search_query(); ?>」の検索結果</h2>
    <ul class="list">
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
    <li>
		<?php get_template_part( 'blog', 'box' ); ?>
		<!--<a href="<?php the_permalink(); ?>">
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
         <?php 
         $cat = get_the_category();
         $cat = $cat[0];
         ?>
         <p class="cate <?php echo $cat->category_nicename; ?>"><?php
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
          ?></p>
        </div>
       </div>
     <div class="txt">
      <div class="txt_inner">
       <div class="date_name">
        <p class="date"><?php the_time('Y.m.d'); ?></p>
        <?php if(get_field('post_custom')): ?>
        <p class="label">-<?php the_field('post_custom'); ?>-</p>
        <?php endif; ?>
        <p class="name"><?php the_author_meta('nickname'); ?></p>
       </div>
       <p class="ttl">
        <?php the_title(); ?>
       </p>
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
    </a>--></li>
    <?php endwhile; ?>
    </ul>
    <?php else : ?>
    <p class="search_result_text2">検索されたキーワードにマッチする記事はありませんでした。</p>
    <?php endif; ?>
   <ul class="pager"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></ul>
   <?php wp_reset_postdata(); ?>
    </div>
  </div>
 </section>
<?php get_footer(); ?>