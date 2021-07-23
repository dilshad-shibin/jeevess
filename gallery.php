<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<title>Explore our gallery - Jeevess Ayurveda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
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
    
<section class="inbnr" style="background:url(images/inbg4.jpg) no-repeat center; background-size:cover">
<div class="container">
<div class="row">
<div class="col-lg-6 ">
<h2>Gallery </h2>
<ul class="bnr_links">
<li><a href="https://jeevess.in">Home</a></li>
<li>Gallery </li>
</ul>
</div>
</div>
</div>
</section>

<section class="gallery_landing bg_light">
<div class="container">
<div class="row gylng_row">


<?php
include("configuration/dbconnect.php");
$findsql = mysqli_query($connect, "SELECT * FROM `gallery` ORDER BY `gallery_id` DESC");
while($row = mysqli_fetch_array($findsql)){
?>
<?php
$gallery_id = $row['gallery_id'];
$datasql = mysqli_query($connect, "SELECT * FROM `gallery_album` WHERE `gallery_id` = '$gallery_id'");
$nofrows = mysqli_num_rows($datasql);
?>
<div class="col-lg-6 col-md-6 gylng_col">
<?php
if($nofrows==0){
?>
<a class="gy_lang_catebox comn_img_block" href="#">
<?php
} else {
?>
<a class="gy_lang_catebox comn_img_block" href="gallerydetails/<?php echo $gallery_id;?>">
<?php
}
?>
<img src="globalpannel/public/images/<?php echo $row['gallery_cover'];?>">
<div class="gy_lang_title">
<h6><?php echo $row['gallery_name'];?></h6>
<div class="gy_lang_more">Explore <i class="fas fa-caret-right"></i></div>
</div>
</a>
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