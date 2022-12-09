<?php get_header(); ?>
<body id="company">
<style>
 .contact,
 .access,
 .blog{
  padding-bottom: 0px!important;
 }
 .company{
  padding-bottom: 150px;
 }
 .gnav.pc{
 max-height: 133px;
}
header .gnav,
.gnav ul{
 max-height: 134px;
}
 body{
  background: url('../img/bg.png')!important;
 }
 @media (max-width: 896px){
  header .gnav,
  .gnav ul{
   max-height: none;
  }
  .blog{
  min-height: none!important;
 }
 }
</style>
<?php get_template_part('menu'); ?>
<div class="company">
<div class="pageTitle page01">
<h2>運営会社<span class="en">Company</span></h2>
</div>
<div class="content">
<div class="topBox">
<p class="text01">このページはリニューアル中です。完成まで、しばらくお待ちくださいませ。</p>
<!--<p class="text02">ハーメックのじり株式会社<br class="wpBr">
代表取締役<span class="wpSpan"><img src="https://yuparu-nojiri.com/wp/wp-content/themes/nojiri/img/company/imgtext01.png" alt=""></span></p>-->
</div>
<!--<section class="sec01">
<h2 class="headLine01">会社概要</h2>
<dl>
<dt>社名</dt>
<dd>：ハーメックのじり株式会社</dd>
<dt>所在地</dt>
<dd>：〒886-0212<br class="wpBr">
宮崎県小林市野尻町東麓5160番地<br class="wpBr">
<a href="tel:0984442210">0984-44-2210</a></dd>
<dt>設立</dt>
<dd>：1998年8月</dd>
<dt>代表者</dt>
<dd>：代表取締役　金山 宏樹</dd>
<dt>事業内容</dt>
<dd>：ダミーです、小売業、飲食業、娯楽業、他</dd>
</dl>
<div class="comBtn btn01"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></div>
</section>-->
</div>
</div>
<?php get_footer(); ?>