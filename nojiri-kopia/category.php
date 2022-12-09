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
     <li><a href="<?php bloginfo('url'); ?>/archives/blogs">すべて</a></li>
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
<?php
	$categories = get_the_category();
	if($categories):
		foreach( $categories as $category ){
			$parent = $category->parent;
			if( !$parent ){
				echo '<li><a href="'.get_category_link($category->term_id).'">' . $category->name . '</a></li>';
				break;
			}
		}
	else:
		//現在のカテゴリーアーカイブの名前を取得
		//$cat_p = get_query_var('category_name');
		//現在開いてるカテゴリページのカテゴリIDを取得
		global $cat;
		//現在開いてるカテゴリページの親カテゴリIDを親子順に全て取得
		$cat_parent_ids = array_reverse(get_ancestors($cat, 'category'));
		foreach ($cat_parent_ids as $cat_parent_id) :
			$cat_parent = get_category($cat_parent_id, 'category');
			//echo $cat_parent->name;
			break;
		endforeach;
	endif;
?>
<?php if($cat_parent): ?>
		<a href="<?= get_category_link($cat_parent_id); ?>"><?= $cat_parent->name; ?></a>
<?php endif; ?>
  
	   </ul>
   <!-- 検索ボックス -->
   <div class="search_box"><?php get_search_form(); ?></div>
   <!-- 検索ボックス -->
   <div class="article_list">
    <ul class="list">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <li>
		 <?php get_template_part( 'blog', 'box' ); ?>
     </li>
     <?php endwhile; endif; ?>
    </ul>
    <ul class="pager"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></ul>
    <?php wp_reset_postdata(); ?>
   </div>
  </div>
 </section>
<?php get_footer(); ?>