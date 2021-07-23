<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<title>Our Blogs - Jeevess Ayurveda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We post often to our blog to keep you updated with the latest insights and trends">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/linea-arrows.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/panelmenu.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slider.css">
    <link href="css/newsscroll.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
	<link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/select-style.css">
    <link rel="stylesheet" href="css/date.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel=“canonical” href=“https://jeevess.in/blog” />

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N9RZ3HQ');</script>
<!-- End Google Tag Manager -->

</head>

<body> <div id="preloader"></div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9RZ3HQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="body_wraper">
<?php include 'header.php'?>  
    
<section class="inbnr blog_bnr" style="background:url(images/inbg23.jpg) no-repeat center; background-size:cover">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-6">
<div class="blog_bnrbox">
<h2>Blog   </h2>
<p>We post often to our blog to keep you updated with the latest insights and trends.</p>
</div>
</div>
</div>
</div>
</section>

<section class="blog_post_list bg_light">
<div class="container">
<div class="row blog_row">

<?php
include("configuration/dbconnect.php");
$datasql = mysqli_query($connect, "SELECT * FROM `news` ORDER BY `news_id` DESC");
while($row = mysqli_fetch_array($datasql)){
?>
<div class="col-lg-4 col-md-6 bg_col">
<div class="sec_post_box">
<div class="sp_image comn_img_block deblg_img">
<img src="globalpannel/public/images/<?php echo $row['news_image'];?>">
<?php
$newdate = $row['news_date'];
$month = date("M",strtotime($newdate));
$day = date("d",strtotime($newdate));
$year = date("Y",strtotime($newdate));
?>
<?php
$replaced = str_replace(' ', '-', $row['news_title']);
?>
<div class="post_date"><span class="p_date"><?php echo $day;?></span><span class="p_month"><?php echo $month;?></span></div>
<a href="blog/<?php echo $replaced;?>">more</a>
</div> 
<div class="sp_img_title">
<!--<h6><a href="blog/<?php echo $row['news_id'];?>"><?php echo $row['news_title'];?></a></h6>-->

<h6><a href="blog/<?php echo $replaced;?>"><?php echo $row['news_title'];?></a></h6>
</div> 
</div>
</div> 
<?php
}
?>
    
    
</div>
    
</div>
</section>    
  
<?php include 'footer.php'?>  
    
 
</div> <!-- bodywrapper -->
<?php include 'send-enquiry.php'?>   

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/stickynew.js"></script>
    <script src="js/panelmenu.js"></script>
    <script src="js/panel-custom.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/totop.js"></script>
    <script src="js/slick.min.js"></script>	
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/custom.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
</script>
    
  
</body>

</html>