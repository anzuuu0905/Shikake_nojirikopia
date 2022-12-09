<a href="<?php the_permalink(); ?>">
    <div class="img blog-box_image">
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
    <div class="txt blog-box_text">
        <div class="txt_inner">
            <div class="title">
				<p class="ttl">
					<?php 
						if (mb_strlen($post->post_title, 'UTF-8') > 27) {
							echo mb_substr($post->post_title, 0, 20, 'UTF-8') . ' ……';
						} else {
							echo $post->post_title;
						}
					?></p>
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