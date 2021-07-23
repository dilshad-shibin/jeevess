
  
<div class="enquiry_sidebar enq-show">
<span class="enq_closs"><i class="icofont-close-line"></i></span>
<div class="container">
<div class="enq_sbr_in">
<div >
<div class="enq_form_tilte">
<h5 class="fade_Bottom fb_sec1">Register For Your Treatment </h5>
</div>
<div class="enq_form_outer">
<form class="form_style fade_Bottom fb_sec2" name="form2" method="post" action="email.php">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="ftr_input">
   <label >Arriving  </label>
 <input class="date_icon" data-date-format="dd/mm/yyyy" id="datepicker" onkeypress="return false" name="arriving" required>
 
</div>  
</div>
    <div class="col-lg-4 col-sm-6">
    <div class="ftr_input ">
   <label >No of Guests </label>
 <input type="number" name="guests" required>
 
</div> 
</div>
    <div class="col-lg-4 col-sm-6">
 <div class="ftr_input ">
   <label > Cottage Type </label>
<select class="cus-select form-control" data-minimum-results-for-search="Infinity" name="cottagetype" required>
                    <option value="" selected disabled>Select </option>
                    <option value="Single Cottages">Single Cottages     </option>
                    <option value="Twin Cottages">Twin Cottages</option>
                    <option value="Annex Cottages">Annex Cottages </option> 

                  </select>
 
</div> 
</div>
<div class="col-lg-4 col-sm-6">
<div class="ftr_input ">
   <label >Your name</label>
 <input type="text" name="name" required>
 
</div> 
</div>
<div class="col-lg-4 col-sm-6">
<div class="ftr_input ">
   <label >Your Email</label>
 <input type="email" name="email" required>
 
</div> 
</div>
<div class="col-lg-4 col-sm-6">
<div class="ftr_input ">
   <label >Your Phone</label>
 <input type="number" name="phone" required>
 
</div> 
</div>

<div class="col-lg-4">
 <div class="ftr_input ">
  <input type="hidden" name="esource" value="<?php echo $_SESSION['source'];?>">
 <input type="submit" value="Book Now" class="input_btn" name="booknow">
</div>   
</div>
</div> 
  
</form>
</div>

</div>
</div>
</div>
<div class="stars_outer">

<div id='stars2'></div>

</div>
</div>



