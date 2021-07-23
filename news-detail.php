<?php
include("configuration/dbconnect.php");
$id1=mysqli_real_escape_string($connect, $_GET['id']);
$replaced1 = str_replace('-', ' ', $id1);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<title><?php echo $replaced1;?> | JEEVESS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/linea-arrows.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="../css/panelmenu.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link href="../css/newsscroll.css" rel="stylesheet">
    <link href="../css/jquery.fancybox.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/select2.min.css">
    <link rel="stylesheet" href="../css/select-style.css">
    <link rel="stylesheet" href="../css/date.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
</head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N9RZ3HQ');</script>
<!-- End Google Tag Manager -->

<body> <div id="preloader"></div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9RZ3HQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="body_wraper">
<?php include 'header1.php'?>  
    
<section class="inbnr ib_link_only" style="background:url(../images/inbg4.jpg) no-repeat center; background-size:cover">
<div class="container">
<div class="row">
<div class="col-lg-6 ">
<ul class="bnr_links">
<li><a href="../index">Home</a></li>
<li><a href="../blog">Blog</a></li>
</ul>
</div>
</div>
</div>
</section>

<?php

include("configuration/dbconnect.php");

$id=mysqli_real_escape_string($connect, $_GET['id']);

$replaced = str_replace('-', ' ', $id);

$datasql = mysqli_query($connect, "SELECT * FROM `news` WHERE `news_title` = '$replaced'");

while($row = mysqli_fetch_array($datasql)){

?>

<section class="single_blog_sec bg_light">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="sb_sec_box">
<div class="sing_bg_img comn_img_block">
<img src="../globalpannel/public/images/<?php echo $row['news_image'];?>">
<?php
$newdate = $row['news_date'];
$month = date("M",strtotime($newdate));
$day = date("d",strtotime($newdate));
$year = date("Y",strtotime($newdate));
?>
<div class="post_date"><span class="p_date"><?php echo $day;?></span><span class="p_month"><?php echo $month;?></span></div>
</div>  
<div class="sing_bg_content">
<h4><?php echo $row['news_title'];?></h4> 
<p><?php echo $row['news_description'];?>
</p>
</div>
</div>
</div> 
</div>
</div>
</section>

<?php
}
?>    
    
<?php include 'quick-enquiry-link1.php'?>  
    
<?php include 'related-post-links1.php'?>  
  
<?php include 'footer1.php'?>  
    
 
</div> <!-- bodywrapper -->
<?php include 'send-enquiry.php'?>   

    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/stickynew.js"></script>
    <script src="../js/panelmenu.js"></script>
    <script src="../js/panel-custom.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/totop.js"></script>
    <script src="../js/slick.min.js"></script>	
    <script src="../js/jquery.fancybox.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/custom.js"></script>
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