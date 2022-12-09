<?php
/*
Template Name: ナビゲーション
*/
?>

<?php
if(is_single()){
	$categories = get_the_category();
	$cat = $categories[0]->slug;
	$catsub = $categories[1]->slug;
	$catsubtxt = mb_substr($categories[1]->slug, 0, 2);
}
?>
<nav class="blog_nav blog_nav-new">
    <ul>
		<li<?php if(is_author() || is_search() || is_tag() || is_page(array('blogall', 'shisetsu', 'yugu', 'pool-cat', 'dome-cat', 'shop-cat', 'history-cat', 'shisetsucyou-cat', 'jimusyo-cat', 'buppan-cat'))){
			echo ' class="current-cat"';
		} ?>><a href="<?php echo home_url('blogall'); ?>">すべて</a></li>
        <li<?php if($cat == 'staffblog' || $catsub == 'staffblog' || is_category(array('staffblog', 'sb-shisetsu', 'sb-yugu', 'sb-pool', 'sb-dome', 'sb-shop', 'sb-history', 'sb-shisetsucyou', 'sb-jimusyo', 'sb-buppan'))){
			echo ' class="current-cat"';
		} ?>><a href="<?php echo home_url('archives/category/staffblog'); ?>">スタッフ<br class="sp">ブログ</a></li>
        <li<?php if ($cat == 'news' || $catsub == 'news' || is_category(array('news', 'n-shisetsu', 'n-yugu', 'n-pool', 'n-dome', 'n-shop', 'n-history', 'n-shisetsucyou', 'n-jimusyo', 'n-buppan', 'n-recruit'))) {
			echo ' class="current-cat"';
		} ?>><a href="<?php echo home_url('archives/category/news'); ?>">お知らせ</a></li>
        <li<?php if ($cat == 'event' || $catsub == 'event' || is_category(array('event', 'e-shisetsu', 'e-yugu', 'e-pool', 'e-dome', 'e-shop', 'e-history', 'e-shisetsucyou', 'e-jimusyo', 'e-buppan'))) {
			echo ' class="current-cat"';
		} ?>><a href="<?php echo home_url('archives/category/event'); ?>">イベント<br class="sp">情報</a></li>
		<li<?php if($cat == 'e-media' || is_category(array('e-media', 'em-01', 'em-02', 'em-03', 'em-04', 'em-05'))){
			echo ' class="current-cat"';
		} ?>><a href="<?php echo home_url('archives/category/e-media'); ?>">メディア<br class="sp">掲載</a></li>
        <li<?php if($cat == 'e-award' || $catsub == 'e-award' || is_category(array('e-award', 'ea-shisetsu', 'ea-yugu', 'ea-pool', 'ea-dome', 'ea-shop', 'ea-history', 'ea-shisetsucyou', 'ea-jimusyo', 'ea-buppan'))){
			echo ' class="current-cat"';
		} ?>><a href="<?php echo home_url('archives/category/e-award'); ?>">受賞<br class="sp">実績</a></li>
    </ul>
	<ul class="sub blog_nav-sabcat">
		<?php if(is_page(array('blogall', 'shisetsu', 'yugu', 'pool-cat', 'dome-cat', 'shop-cat', 'history-cat', 'shisetsucyou-cat', 'jimusyo-cat', 'buppan-cat'))): ?>
			<li<?php if(is_page('blogall')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('blogall'); ?>">すべて</a></li>
			<li<?php if(is_page('shisetsu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('shisetsu'); ?>">施設全体</a></li>
			<li<?php if(is_page('yugu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('yugu'); ?>">遊具</a></li>
			<li<?php if(is_page('pool-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('pool-cat'); ?>">プール</a></li>
			<li<?php if(is_page('dome-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('dome-cat'); ?>">メロン型ドーム</a></li>
			<li<?php if(is_page('shop-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('shop-cat'); ?>">外売店</a></li>
			<li<?php if(is_page('history-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('history-cat'); ?>">歴史民俗資料館</a></li>
			<li<?php if(is_page('shisetsucyou-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('shisetsucyou-cat'); ?>">施設長</a></li>
			<li<?php if(is_page('jimusyo-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('jimusyo-cat'); ?>">事務所</a></li>
			<li<?php if(is_page('buppan-cat')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('buppan-cat'); ?>">物販</a></li>
		<?php elseif($cat == 'staffblog' || $catsub == 'staffblog' || is_category(array('staffblog', 'sb-shisetsu', 'sb-yugu', 'sb-pool', 'sb-dome', 'sb-shop', 'sb-history', 'sb-shisetsucyou', 'sb-jimusyo', 'sb-buppan'))): ?>
			<li<?php if(is_category('staffblog')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/staffblog'); ?>">すべて</a></li>
			<li<?php if($catsub == 'sb-shisetsu' || is_category('sb-shisetsu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-shisetsu'); ?>">施設全体</a></li>
			<li<?php if($catsub == 'sb-yugu' || is_category('sb-yugu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-yugu'); ?>">遊具</a></li>
			<li<?php if($catsub == 'sb-pool' || is_category('sb-pool')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-pool'); ?>">プール</a></li>
			<li<?php if($catsub == 'sb-dome' || is_category('sb-dome')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-dome'); ?>">メロン型ドーム</a></li>
			<li<?php if($catsub == 'sb-shop' || is_category('sb-shop')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-shop'); ?>">外売店</a></li>
			<li<?php if($catsub == 'sb-history' || is_category('sb-history')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-history'); ?>">歴史民俗資料館</a></li>
			<li<?php if($cat == 'sb-shisetsucyou' || $catsub == 'sb-shisetsucyou' || is_category('sb-shisetsucyou')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-shisetsucyou'); ?>">施設長</a></li>
			<li<?php if($cat == 'sb-jimusyo' || $catsub == 'sb-jimusyo' || is_category('sb-jimusyo')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-jimusyo'); ?>">事務所</a></li>
			<li<?php if($cat == 'sb-buppan' || $catsub == 'sb-buppan' || is_category('sb-buppan')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/sb-buppan'); ?>">物販</a></li>
		<?php elseif($cat == 'news' || $catsub == 'news' || is_category(array('news', 'n-shisetsu', 'n-yugu', 'n-pool', 'n-dome', 'n-shop', 'n-history', 'n-shisetsucyou', 'n-jimusyo', 'n-buppan', 'n-recruit'))): ?>
			<li<?php if(is_category('news')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/news'); ?>">すべて</a></li>
			<li<?php if($catsub == 'n-shisetsu' || is_category('n-shisetsu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-shisetsu'); ?>">施設全体</a></li>
			<li<?php if($catsub == 'n-yugu' || is_category('n-yugu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-yugu'); ?>">遊具</a></li>
			<li<?php if($catsub == 'n-pool' || is_category('n-pool')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-pool'); ?>">プール</a></li>
			<li<?php if($catsub == 'n-dome' || is_category('n-dome')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-dome'); ?>">メロン型ドーム</a></li>
			<li<?php if($catsub == 'n-shop' || is_category('n-shop')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-shop'); ?>">外売店</a></li>
			<li<?php if($catsub == 'n-history' || is_category('n-history')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-history'); ?>">歴史民俗資料館</a></li>
			<li<?php if($cat == 'n-shisetsucyou' || $catsub == 'n-shisetsucyou' || is_category('n-shisetsucyou')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-shisetsucyou'); ?>">施設長</a></li>
			<li<?php if($cat == 'n-jimusyo' || $catsub == 'n-jimusyo' || is_category('n-jimusyo')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-jimusyo'); ?>">事務所</a></li>
			<li<?php if($cat == 'n-buppan' || $catsub == 'n-buppan' || is_category('n-buppan')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-buppan'); ?>">物販</a></li>
			<li<?php if($catsub == 'n-recruit' || is_category('n-recruit')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/n-recruit'); ?>">採用情報</a></li>
		<?php elseif($cat == 'event' || $catsub == 'event' || is_category(array('event', 'e-shisetsu', 'e-yugu', 'e-pool', 'e-dome', 'e-shop', 'e-history', 'e-shisetsucyou', 'e-jimusyo', 'e-buppan'))): ?>
			<li<?php if(is_category('event')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/event'); ?>">すべて</a></li>
			<li<?php if($catsub == 'e-shisetsu' || is_category('e-shisetsu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-shisetsu'); ?>">施設全体</a></li>
			<li<?php if($catsub == 'e-yugu' || is_category('e-yugu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-yugu'); ?>">遊具</a></li>
			<li<?php if($catsub == 'e-pool' || is_category('e-pool')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-pool'); ?>">プール</a></li>
			<li<?php if($catsub == 'e-dome' || is_category('e-dome')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-dome'); ?>">メロン型ドーム</a></li>
			<li<?php if($catsub == 'e-shop' || is_category('e-shop')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-shop'); ?>">外売店</a></li>
			<li<?php if($catsub == 'e-history' || is_category('e-history')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-history'); ?>">歴史民俗資料館</a></li>
			<li<?php if($cat == 'e-shisetsucyou' || $catsub == 'e-shisetsucyou' || is_category('e-shisetsucyou')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-shisetsucyou'); ?>">施設長</a></li>
			<li<?php if($cat == 'e-jimusyo' || $catsub == 'e-jimusyo' || is_category('e-jimusyo')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-jimusyo'); ?>">事務所</a></li>
			<li<?php if($cat == 'e-buppan' || $catsub == 'e-buppan' || is_category('e-buppan')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-buppan'); ?>">物販</a></li>
		<?php elseif($cat == 'e-media' || is_category(array('e-media', 'em-01', 'em-02', 'em-03', 'em-04', 'em-05'))): ?>
			<li<?php if(is_category('e-media')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-media'); ?>">すべて</a></li>
			<li<?php if($catsub == 'em-01' || is_category('em-01')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/em-01'); ?>">新聞・雑誌</a></li>
			<li<?php if($catsub == 'em-02' || is_category('em-02')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/em-02'); ?>">WEB</a></li>
			<li<?php if($catsub == 'em-03' || is_category('em-03')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/em-03'); ?>">テレビ</a></li>
			<li<?php if($catsub == 'em-04' || is_category('em-04')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/em-04'); ?>">ラジオ</a></li>
			<li<?php if($catsub == 'em-05' || is_category('em-05')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/em-05'); ?>">その他</a></li>
		<?php elseif($cat == 'e-award' || $catsub == 'e-award' || is_category(array('e-award', 'ea-shisetsu', 'ea-yugu', 'ea-pool', 'ea-dome', 'ea-shop', 'ea-history', 'ea-shisetsucyou', 'ea-jimusyo', 'ea-buppan'))): ?>
			<li<?php if(is_category('e-award')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/e-award'); ?>">すべて</a></li>
			<li<?php if($catsub == 'ea-shisetsu' || is_category('ea-shisetsu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-shisetsu'); ?>">施設全体</a></li>
			<li<?php if($catsub == 'ea-yugu' || is_category('ea-yugu')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-yugu'); ?>">遊具</a></li>
			<li<?php if($catsub == 'ea-pool' || is_category('ea-pool')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-pool'); ?>">プール</a></li>
			<li<?php if($catsub == 'ea-dome' || is_category('ea-dome')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-dome'); ?>">メロン型ドーム</a></li>
			<li<?php if($catsub == 'ea-shop' || is_category('ea-shop')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-shop'); ?>">外売店</a></li>
			<li<?php if($catsub == 'ea-history' || is_category('ea-history')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-history'); ?>">歴史民俗資料館</a></li>
			<li<?php if($cat == 'ea-shisetsucyou' || $catsub == 'ea-shisetsucyou' || is_category('ea-shisetsucyou')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-shisetsucyou'); ?>">施設長</a></li>
			<li<?php if($cat == 'ea-jimusyo' || $catsub == 'ea-jimusyo' || is_category('ea-jimusyo')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-jimusyo'); ?>">事務所</a></li>
			<li<?php if($cat == 'ea-buppan' || $catsub == 'ea-buppan' || is_category('ea-buppan')){ echo ' class="current"'; } ?>><a href="<?php echo home_url('archives/category/ea-buppan'); ?>">物販</a></li>
		<?php else: ?>
			
		<?php endif; ?>
	</ul>
</nav>