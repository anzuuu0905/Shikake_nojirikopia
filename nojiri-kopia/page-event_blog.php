<?php get_header(); ?>
<body id="staffblog">
<?php get_template_part('menu'); ?>
    <section id="blog_list">
        <div class="inner">
            <h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/title_blog.png" alt="スタッフブログ">
                <span>Staff Blog</span>
            </h2>
            <nav class="blog_nav">
                <ul>
                    <li><a href="">すべて</a></li>
                    <ul class="sub">
                        <li><a href="shisetsu_blog">施設全体</a></li>
                        <li><a href="yugu_blog">遊具</a></li>
                        <li><a href="pool_blog">プール</a></li>
                        <li><a href="dome_blog">メロン型<br class="sp">ドーム</a></li>
                        <li><a href="shop_blog">外売店</a></li>
                        <li><a href="history_blog">歴史民俗<br class="sp">資料館</a></li>
                    </ul>
                    <li><a href="staffblog">スタッフブログ</a></li>
                    <li><a href="news_blog">お知らせ</a></li>
                    <li class="current"><a href="<?php bloginfo('url'); ?>/event_blog">イベント情報</a></li>
                </ul>
            </nav>
            <div class="article_list">
             <?php
             $column_posts = get_posts('post_type=post&posts_per_page=20&cat=20');
             ?>
                <ul class="list">
                 <?php
foreach ( $column_posts as $post ):
    setup_postdata($post); ?>
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
                                    <p class="cate news"><?php
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
                        </a>
                    </li>
                 <?php endforeach;
wp_reset_postdata(); ?>
                </ul>
                <ul class="pager">
                    <li class="prev"><a href=""><span class="pc">前へ&nbsp;</span>＜</a></li>
                    <li class="current"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li class="next"><a href="">＞<span class="pc">&nbsp;次へ</span></a></li>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer(); ?>