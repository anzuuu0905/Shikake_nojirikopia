<?php
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
// 「コメントを残す」を削除
add_filter( 'comment_form_defaults', 'my_title_reply');
function my_title_reply( $defaults){
    $defaults['title_reply'] = '';
    return $defaults;
}
//コメント文言を変更
function custom_comment_form($args) {
	$args['comment_notes_before'] = '';
	$args['comment_notes_after'] = '';
    $arg['cookies'] = '';
	$args['label_submit'] = '内容を確認して送信';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');

// 「メールアドレス」と「サイト」を消す
function my_comment_form_remove($arg) {
$arg['email'] = '';
$arg['url'] = '';
return $arg;
 }
 add_filter('comment_form_default_fields', 'my_comment_form_remove');

 // 名前を必須入力にする
function my_preprocess_comment( $comment_data ) {
    if ( empty( trim( $comment_data['comment_author'] ) ) ) {
        wp_die('<strong>エラー</strong>: 必須項目 (名前) を入力してください。');
    }
    return $comment_data;
}
add_filter( 'preprocess_comment', 'my_preprocess_comment', 1 );
 
add_filter('comment_post_redirect', 'comment_redirect');
function comment_redirect(){
wp_redirect('/wp/thanks');
exit();
}
//コメントのテキストの変更
if ( ! function_exists( 'comment_field_customize' ) ) {
	function comment_field_customize($arg) {
		$arg['author'] =  '<div class="form_fields"><p class="comment-form-author">' .
					'<label for="author">お名前</label> ' .
					'<input id="author" name="author" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' class="required" />';
		
		return $arg;
	}
}
add_filter('comment_form_default_fields', 'comment_field_customize');
//検索対象を投稿のみ
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );
?>