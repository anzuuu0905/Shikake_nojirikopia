<?php get_header(); ?>
<body id="blog_detail">
<style>
#blog_detail #blog_content .blog_nav ul{
 width: 1240px;
 }
 #blog_detail #blog_content .blog_nav ul li{
  text-align: center;
 }
 .inner #pagePath{
  width: 1140px;
  margin: 0 auto 40px;
  display: flex;
 }
 @media (max-width: 1100px){
  #blog_detail #blog_content .blog_nav ul{
   width: 100%;
  }
 }
</style>
<?php get_template_part('menu'); ?>
 <section id="blog_content" class="wave">
  <div class="inner">
   <h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/title_blog.png" alt="">
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
     <li<?php if ( is_category(array('news','n-recruit')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/news">お知らせ</a></li>
     <li<?php if ( is_category(array('event')) ) { echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/archives/category/event">イベント<br>情報</a></li>
     <li<?php if(is_page('media')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/media">メディア<br>掲載</a></li>
     <li<?php if(is_page('award')){ echo ' class="current"'; } ?>><a href="<?php bloginfo('url'); ?>/award">受賞<br>実績</a></li>
    </ul>
   </nav>-->
   <ul id="pagePath">
   <li><a href="<?php bloginfo('url');?>">TOP</a> &gt; </li>
    <?php
    $categories = get_the_category();
    if ( $categories ) {
     foreach ( $categories as $category ) {
      echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.' &gt; </a></li>';
     }
    }
    ?>
   <li><?php the_title(); ?></li>
  </ul>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <div class="article">
    <?php if ( has_post_thumbnail() ): ?>
    <p class="eyecatch"><div class="post_thumb" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div></p>
    <?php else: ?>
    <?php endif; ?>
    <div class="txt_area">
     <div class="date_label">
      <p class="date"><?php the_time('Y.m.d'); ?></p>
      <?php if(get_field('post_custom')): ?>
      <p class="label">-<?php the_field('post_custom'); ?>-</p>
      <?php endif; ?>
     </div>
     <p class="ttl">
      <?php the_title(); ?>
     </p>
     <?php the_tags( '<ul class="tags"><li>&#035;', '</li><li>&#035;', '</li></ul>' ); ?>
     <div class="cate_row">
		<div class="cat-box-neo">
			<?php 
			$categories = get_the_category();
			foreach( $categories as $category ):
				$parent = $category -> parent;
				if( $parent ):
					echo '<p class="cate genre cat-box_child"><a class="c-meta__cat c-meta__cat--sub" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name. '</a></p>';
				else:
					echo '<p class="cate genre cat-box_parent"><a class="c-meta__cat c-meta__cat--sub" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name. '</a></p>';
				endif;
			endforeach;
			?>
		</div>
		<!-- 
      <p class="cate genre"><?php 
       $categories = get_the_category();  // カテゴリ情報を配列で取得
       foreach( $categories as $category ):
       $parent = $category->parent; // 親カテゴリーIDを取得
       if( $parent ) {
        echo '<a class="c-meta__cat c-meta__cat--sub" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name. '</a>';
       }
       endforeach;
		  ?></p>
      <?php 
      $cat = get_the_category();
      $cat = $cat[0];
      ?>
      <p class="cate <?php echo $cat->category_nicename; ?>"><?php
       $categories = get_the_category();  // カテゴリ情報を配列で取得
       foreach( $categories as $category ) :
       $parent = $category->parent; // 親カテゴリーIDを取得
       if( !$parent ){
        echo '<a class="c-meta__cat c-meta__cat--main" href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
        break;
       }
       endforeach;
       ?></p>-->
     </div>
     <div class="content">
      <?php the_content(); ?>
     </div>
     <?php endwhile; else: ?>
     <?php endif; ?>
     <div class="share">
      <div class="row">
       <h3>Share!</h3>
       <ul>
        <!--<li class="iine"><a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_1.png" alt=""></a></li>
        <li class="tweet"><a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_2.png" alt=""></a></li>
        <li><a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_3.png" alt=""></a></li>
        <li><a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_4.png" alt=""></a></li>
        <li><a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_5.png" alt=""></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_6.png" alt=""></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/ico_sns_7.png" alt=""></a></li>-->
        <?php echo do_shortcode('[addtoany]'); ?>
       </ul>
      </div>
      <div class="author">
       <p class="img"><?php echo get_avatar( get_the_author_id(), 130 ); ?></p>
       <div class="txt">
        <div class="row">
         <div>
          <p class="kaita">この記事を書いた人</p>
          <p class="name"><?php the_author_nickname(); ?></p>
         </div>
         <p class="link">
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
           この人が書いた<br>他の記事はこちら
           <span>＞</span>
          </a>
         </p>
        </div>
        <p class="profile">
         <?php the_author_meta('user_description'); ?>
        </p>
       </div>
      </div>
     </div>
     <div class="comment">
      <h3>コメントはこちらから</h3>
      <?php comment_form(); ?>
      <div class="latest_comment">
       <h3>最新のコメント</h3>
       <div>
        <?php if( $comments = get_comments(array('status'=>'approve', 'order'=>'asc', 'post_id'=>$post->ID)) ) : ?>
        <?php foreach($comments as $comment): $post = get_post($comment->comment_post_ID); ?>
        <div class="comment_block">
         <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/author.png" alt=""></p>
         <div class="txt">
          <p class="name"><?php comment_author_link(); ?>さん</p>
          <p class="message">
           <?php comment_text(); ?>
          </p>
         </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <section id="pickup">
  <div class="inner">
   <h2>
    Pick up
    <span>スタッフブログ</span>
   </h2>
   <div class="article_list">
    <ul class="list">
     <?php $column_posts = get_posts('post_type=post&posts_per_page=4'); ?>
     <?php foreach ( $column_posts as $post ): setup_postdata($post); ?>
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
      </a>-->
     </li>
     <?php endforeach; wp_reset_postdata(); ?>
    </ul>
   </div>
  </div>
</section>
<?php get_footer(); ?>