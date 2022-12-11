<style>
 #staffblog #blog_list .blog_nav{
  margin-bottom: 30px;
 }
 .search_box{
  width: 1140px;
  margin: 0 auto;
 }
 .search_box form{
  display: flex;
  justify-content: flex-end;
  margin: 0 auto 60px;
 }
 .search_box form input:first-child{
  width: 270px;
  height: 26px;
  padding: 20px;
  font-size: 15px;
  border: solid 1.5px #000;
 }
 .search_box form input:last-child{
  background-color: #202c5c;
  padding: 10px;
  height: 43px;
 }
 @media (max-width: 1100px){
  .search_box{
   width: 100%;
  }
  #staffblog #blog_list .blog_nav > ul{
   width: 100%;
  }
  .search_box form{
   justify-content: flex-start;
   margin: 0 auto 30px;
  }
  .search_box form input:first-child{
   width: 100%;
  }
 }
</style>
<form action="<?php echo home_url(); ?>">
 <input type="text" id="search" name="s" placeholder="ブログ内キーワード検索" value="<?php the_search_query(); ?>">
 <input type="image" src="<?php bloginfo('template_url'); ?>/img/search_icon.png">
</form>