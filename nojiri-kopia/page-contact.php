<?php get_header(); ?>
<link href="https://yuparu-nojiri.com/wp/wp-content/themes/nojiri/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<body id="contactn">
<style>
 .contact,
 .access,
 .blog{
  padding-bottom: 0px!important;
 }
 .company{
  padding-bottom: 150px;
 }
 header .gnav,
.gnav ul{
 max-height: 134px;
}
 body{
  background: url(../img/bg.png)!important;
 }
 @media (max-width: 896px){
  header .gnav,
  .gnav ul{
   max-height: none;
  }
 }
</style>
<?php get_template_part('menu'); ?>
<div class="contact">
<div class="pageTitle page01">
<h2>お問い合わせ<span class="en">Contact Us</span></h2>
</div>
<div class="content">
<div class="topBox">
<p class="text01">当施設へのお問い合わせは、以下の入力フォームからお願いします。<br class="wpBr">
お問い合わせいただいた内容に関して、5営業日以内にメールにて返事いたします。<br class="wpBr">
お急ぎに場合は、ページ下部の電話番号にお電話ください。</p>
<p class="text02">※お問い合わせ内容によっては、お電話差し上げる場合もございます。</p>
</div>
<section class="sec01">
<h2 class="headLine01">WEBでのお問い合わせ</h2>
<p class="text">空欄を入力いただき、「確認する」ボタンをクリック（タップ）してください。「<span class="wpSpan">*</span>」印は入力必須項目です。</p>
<div class="mailForm">
<div class="formBox"><?php echo do_shortcode('[contact-form-7 id="281" title="コンタクトフォーム 1"]'); ?></div>
</div>
<p class="note">※「送信」ボタンをクリック（タップ）していただきますと、入力いただいたメールアドレス宛に自動返信メールを送信します。自動返信メールが届かない場合はご入力いただいたメールアドレスが間違っている場合がございますので、改めて「WEBでのお問い合わせ」からお問い合わせください。</p>
</section>
<section class="sec02">
<h2 class="headLine01">お電話でのお問い合わせ</h2>
<p class="text">営業時間内にお掛けください。また、状況により電話に出られない場合もございます。予めご了承ください。</p>
<p class="tel"><a href="tel:0984443000">0984-44-3000</a></p>
<dl>
<dt>営業時間</dt>
<dd>10:00〜17:00（平日）<br>9:00〜17:00（土日祝）</dd>
</dl>
<p class="note">※定休日：毎月第1水曜日（当日祝日の場合は翌日）</p>
</section>
<div class="comInfo"><!--<a href="[url]/access"><span class="text"><span class="ttl">アクセス情報<small>Acsess Information</small></span><span class="txt">ダミーです。紹介文が入ります。ダミーです。紹介文が入ります。ダミーです。紹介文が入ります。</span></span><span class="btn">もっと見る</span></a>--></div>
</div>
</div>
<?php get_footer(); ?>