<?php get_header(); ?>
<link href="https://yuparu-nojiri.com/wp/wp-content/themes/nojiri/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<body id="recruitp">
<style>
 .contact,
 .access,
 .blog{
  padding-bottom: 0px!important;
 }
 .recruit .sec01 .text,
 .recruit .sec02 .area .textDl{
  color: #333;
 }
 .comLinkList .txt{
  text-align: left;
 }
 section dl{
  width: auto;
 }
 section dl dt:first-of-type,
 section dl dd:first-of-type,
 section dl dt,
 section dl dd{
  border: none;
  font-size: 18px;
 }
 section dl dt{
  padding: 0;
 }
 section dl dd{
  padding: 0 0 0 1em;
 }
</style>
<?php get_template_part('menu'); ?>
<div class="recruit">
<div class="pageTitle page01">
<h2>採用情報<span class="en">Recruit</span></h2>
</div>
<div class="content">
<div class="topBox">
<p class="text01">ダミーです。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。挨拶文が入ります。</p>
<p class="text02">ハーメックのじり株式会社<br class="wpBr">
代表取締役<span class="wpSpan"><img src="https://yuparu-nojiri.com/wp/wp-content/themes/nojiri/img/company/imgtext01.png" alt=""></span></p>
</div>
<section class="sec01">
<h2 class="headLine01">募集職種</h2>
<p class="text">現在、以下の職種で求人を行っています。</p>
 <?php $column_posts = get_posts('post_type=post&posts_per_page=4&cat=52'); ?>
<ul class="comLinkList">
 <?php foreach ( $column_posts as $post ): setup_postdata($post); ?>
 <li><a href="<?php the_permalink(); ?>"><span class="img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <span class="tag tag03">採用情報</span></span><span class="date"><?php the_time('Y.m.d'); ?></span>
  <span class="txt"><?php the_title(); ?></span>
  <?php $posttags = get_the_tags(); if ( $posttags ) { echo '<span class="taglist">'; foreach ( $posttags as $tag ) { echo '&#035;'.$tag->name.''; } echo '</span>'; } ?>
  <span class="user"><?php the_author_meta('nickname'); ?></span></a></li>
 <?php endforeach; wp_reset_postdata(); ?>
 </ul>
</section>
<section class="sec02">
<div class="area">
<h2 class="headLine01">待遇・福利厚生</h2>
<dl class="textDl">
<dt>給与</dt>
<dd class="ddStyle01">
<p class="txt01">：経験／年齢／能力等を考慮の上、当社規定により支給（ダミー）<br class="wpBr">
【月給例】<br class="wpBr">
25歳学卒　246,000円（手当除く）<br class="wpBr">
30歳学卒　325,000円（手当除く）<br class="wpBr">
33歳学卒　337,000円（手当除く）</p>
<p class="txt02">【年収例】</p>
<dl>
<dt>メンバー</dt>
<dd>約450万円以上（月給　26万円以上）</dd>
<dt>チームリーダークラス</dt>
<dd>約650万円以上（月給　37万円以上）</dd>
<dt>係長クラス</dt>
<dd>約800万円以上（月給　46万円以上）</dd>
<dt>管理職</dt>
<dd>約1,200万円以上（月給　62万円以上）</dd>
</dl>
<p class="note">※残業20H/月込</p>
</dd>
<dt>試用期間</dt>
<dd>：入社後2か月（ダミー）</dd>
<dt>契約期間</dt>
<dd>：期間の定めなし（ダミー）</dd>
<dt>諸手当</dt>
<dd>：時間外勤務手当、住宅手当、家族手当、通勤手当 他（ダミー）</dd>
<dt>給与改定</dt>
<dd>：年1回（6月）（ダミー）</dd>
<dt>賞与</dt>
<dd>：年2回（6月、12月）（ダミー）</dd>
<dt>勤務地</dt>
<dd>：道の駅ゆ～ぱるのじり</dd>
<dt>勤務時間</dt>
<dd>：8時間（時間帯は職種により異なる）（ダミー）</dd>
<dt>休日・休暇</dt>
<dd>：週休2日制（弊社カレンダーによる）、5月・8月・年末年始の連休など年間休日121日。<br class="wpBr">
その他年次有給休暇、特別休暇などあり。（ダミー）</dd>
<dt>保険</dt>
<dd>：雇用保険、労災保険、健康保険、厚生年金保険（ダミー）</dd>
<dt>福利厚生</dt>
<dd>：退職年金、互助会、特別見舞金、財形貯蓄、住宅共済会など（ダミー）</dd>
</dl>
</div>
<div class="area area01">
<h2 class="headLine01">選考・応募方法</h2>
<dl class="textDl">
<dt>選考方法</dt>
<dd>：種類選考の後、面接を2回（ダミー）</dd>
<dt>応募方法</dt>
<dd>：必要書類を以下に郵送してください。<br class="wpBr">
〒886-0212<br class="wpBr">
宮崎県小林市野尻町東麓5160番地<br class="wpBr">
ハーメックのじり株式会社<br class="wpBr">
採用担当宛（ダミー）<br class="wpBr">
書類選考後、履歴書に記載の電話番号に連絡いたします。（ダミー）</dd>
<dt>必要書類</dt>
<dd>：履歴書（写真貼付）、職務経歴書（ダミー）</dd>
<dt>必要資格</dt>
<dd>：募集職種内の記事をご参照ください。（ダミー）</dd>
</dl>
<p class="btmText">※郵送いただいた各書類は、弊社<a href="<?php bloginfo('url'); ?>/privacypolicy">プライバシーポリシー</a>に則り、厳正に取り扱います。</p>
<div class="comBtn btn01"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></div>
</div>
</section>
</div>
</div>
<?php get_footer(); ?>