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
 .inner #pagePath{
  width: 1140px;
  margin: 0 auto;
  display: flex;
 }
@media (max-width: 1100px){
 #staffblog #blog_list .blog_nav > ul{
  width: 100%;
 }
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
     <li class="current"><a href="<?php bloginfo('url'); ?>/archives/blogs">すべて</a></li>
     <ul class="sub">
      <li<?php if(is_page('shisetsu')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/shisetsu">施設全体</a></li>
      <li<?php if(is_page('yugu')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/yugu">遊具</a></li>
      <li<?php if(is_page('pool-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/pool-cat">プール</a></li>
      <li<?php if(is_page('dome-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/dome-cat">メロン型<br class="sp">ドーム</a></li>
      <li<?php if(is_page('shop-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/shop-cat">外売店</a></li>
      <li<?php if(is_page('history-cat')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/history-cat">歴史民俗<br class="sp">資料館</a></li>
     </ul>
     <li<?php if ( is_category(array('staffblog')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/staffblog">スタッフ<br>ブログ</a></li>
     <li<?php if ( is_category(array('news')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/news">お知らせ</a></li>
     <li<?php if ( is_category(array('event')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント<br>情報</a></li>
     <li<?php if(is_page('media')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/media">メディア<br>掲載</a></li>
     <li<?php if(is_page('award')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/award">受賞<br>実績</a></li>
    </ul>
   </nav>-->
   <ul id="pagePath">
			<li><a href="<?php bloginfo('url');?>">TOP</a> &gt; </li>
			<li><a href="<?php bloginfo('url'); ?>/archives/blogs">すべて</a></li>
		</ul>
   <!-- 検索ボックス -->
   <div class="search_box"><?php get_search_form(); ?></div>
   <!-- 検索ボックス -->
   <div class="article_list">
    <ul class="list">
     <?php $wp_query = new WP_Query();
     $my_posts = array(
      'post_type' => 'post',
      'posts_per_page'=> '20',
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
    <ul class="pager"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></ul>
    <?php wp_reset_postdata(); ?>
   </div>
  </div>
 </section>
<?php get_footer(); ?>