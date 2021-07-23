<section class="related_blog_slider">
<div class="container">
<div class="rld_blog_title">
<h3 class="in_main_title">Latest Post</h3> 
<div class="custom_nav  navid2 ">
<i class="icofont-thin-left prev slick-arrow" style=""></i>
<i class="icofont-thin-right next slick-arrow" style=""></i>
</div>
</div>
<div class="slick_customstyle" >
<div class="" id="related-blog-slider">



<?php
include("configuration/dbconnect.php");
$datasql = mysqli_query($connect, "SELECT * FROM `news` ORDER BY `news_id` DESC");
while($row = mysqli_fetch_array($datasql)){
?>

<div class="item ">
<div class="rld_blg_cate ">
<div class="rld_blog_img comn_img_block">
<img src="../globalpannel/public/images/<?php echo $row['news_image'];?>">   
</div>    
 <h6><?php echo $row['news_title'];?></h6>   
 <?php
$replaced = str_replace(' ', '-', $row['news_title']);
?>
<a href="../blog/<?php echo $replaced;?>">more</a>
</div>            
</div>

<?php
}
?>
           
</div>
</div>
</div>
</section>