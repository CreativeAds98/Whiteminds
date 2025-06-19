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
      <title>Contact Us - Whiteminds</title>
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
         <h1>Contact</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
         <div class="col-lg-5 justify-content-center align-self-center text-lg-left text-sm-center text-xs-center">
            <h2>Get in Touch</h2>
            <span class="h7 mt-0">Contact us today for a quote</span>
           <!--  <p class="mt-2">Etiam rhoncus leo a dolor placerat, nec elem entum ipsum conval Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p> -->
            <!-- contact icons-->
            <ul class="list-unstyled mt-3 list-contact colored-icons">
               <li class="mb-1"><i class="fas fa-phone margin-icon "></i> +91 9626555527, +91 9751122440</li>
                <p style="margin-bottom: 0px;"><b>For Admission Enquiries:</b></p>
                <li class="mb-1"><i class="fas fa-envelope margin-icon"></i> <a href="mailto:happychild@whiteminds.in" style="color: #6A6A71!important;">happychild@whiteminds.in</a></li>
               <p style="margin-bottom: 0px;"><b>For Career Opportunities: </b></p>
               <li class="mb-1"><i class="fas fa-envelope margin-icon"></i> <a href="mailto:goodwork@whiteminds.in" style="color: #6A6A71!important;">goodwork@whiteminds.in</a></li>

               
               <li><i class="fas fa-map-marker margin-icon"></i> 16/A, S.C.Nagar, Varatharajapuram, Coimbatore-641015.</li>
            </ul>
            <!-- /list-->
         </div>
         <!-- /col-lg- -->
         <!-- contact-info-->
         <div class="contact-info col-lg-6 offset-lg-1 res-margin notepad">
            <h4>Send us a message</h4>
            <!-- Form Starts -->
            <form id="fm" method="post" role="form">
            <div id="">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Name<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field"> 
                     </div>
                     <div class="col-md-6">
                        <label>Email Address <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field"> 
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control input-field"> 
                     </div>
                     <div class="col-md-12">
                        <label>Message<span class="required">*</span></label>
                        <textarea name="message"  class="textarea-field form-control" rows="3"></textarea>
                     </div>
                  </div>
                  <button type="submit"  value="Submit" class="btn btn-primary">Send message</button>
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
   $("#fm").validate({
     rules: {
        name: {
                    required: true,
                    },

                    email: {
                    required: true,
                    email: true
                    },
                  
                   
                     subject: {
                    required: true,
                    },
                     message: {
                        required: true,
                     },
                    

         },
      submitHandler : function () {
    $.ajax({
                type : "POST",
                url : "form.php",
                data : $('#fm').serialize(),
                success : function (data) {
                    $('#success').html(data);
                    $("#fm").trigger("reset");
                }
            });
   }
});
   });
</script>
<?php include ('includes/footerinner.php'); ?>
</body>
</html>