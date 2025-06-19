<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title>Franchise Enquiry - Whiteminds</title>
      <?php include ('includes/script.php'); ?>
   </head>
   <!-- ==== body starts ==== -->
   <body id="top">
      <?php include ('includes/menu.php'); ?>
      <div id="page-wrapper"><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>Franchise Enquiry</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Franchise Enquiry</li>
            </ol>
         </nav>
         <!-- /breadcrumb -->
      </div>
      <!-- /jumbo-heading -->
   </div>
   <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page pb-0">
   <div class="container block-padding">
      <div class="row">
         
         <!-- /col-lg- -->
         <!-- contact-info-->
         <div class="contact-info col-lg-12 res-margin notepad">
           
            <!-- Form Starts -->
            <form id="fm2" method="post" role="form">
            <div id="">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Name<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field"> 
                     </div>
                     <div class="col-md-6">
                        <label>Mobile Number <span class="required">*</span></label>
                        <input type="number" name="mobile" class="form-control input-field"> 
                     </div>
                  </div>
                  <div class="row">
                   <div class="col-md-6">
                        <label>Email Address <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field"> 
                     </div>
                     <div class="col-md-6">
                        <label>Locatoin</label>
                        <input type="text" name="location" class="form-control input-field"> 
                     </div>
                     <div class="col-md-12">
                        <label>Message<span class="required">*</span></label>
                        <textarea name="message"  class="textarea-field form-control" rows="3"></textarea>
                     </div>
                  </div>
                  <button type="submit" value="Submit" class="btn btn-primary">Send message</button>
               </div>
               <!-- /form-group-->
               <div id="success"></div>
          
            </div>
              </form>
            <!-- /contact)form-->
         </div>
         <!-- /contact-info-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
  
</div>
<!-- /page --></div>
<!--/ page-wrapper -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $("#fm2").validate({
     rules: {
        name: {
                    required: true,
                    },

                    email: {
                    required: true,
                    email: true
                    },
                  
                    mobile: {
                    required: true,
                    number: true
                     },
                     location: {
                    required: true,
                    },
                     message: {
                        required: true,
                     },
                    

         },
      submitHandler : function () {
    $.ajax({
                type : "POST",
                url : "php/contact2.php",
                data : $('#fm2').serialize(),
                success : function (data) {
                    $('#success').html(data);
                    $("#fm2").trigger("reset");
                }
            });
   }
});
   });
</script>
<?php include ('includes/footerinner.php'); ?>
</body>
</html>