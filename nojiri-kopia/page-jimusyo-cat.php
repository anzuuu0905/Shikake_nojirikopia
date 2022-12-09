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
   <ul id="pagePath">
			<li><a href="<?php bloginfo('url');?>">TOP</a> &gt; </li>
			<li><a href="<?php echo home_url('blogall'); ?>">すべて</a></li>
		</ul>
   <!-- 検索ボックス -->
   <div class="search_box"><?php get_search_form(); ?></div>
   <!-- 検索ボックス -->
   <div class="article_list">
    <ul class="list">
     <?php $wp_query = new WP_Query();
     $my_posts = array(
      'post_type' => 'post',
      'category_name' => 'e-jimusyo,n-jimusyo,sb-jimusyo',
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