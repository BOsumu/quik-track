<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>


<!-- <link href="assets/lib/select2/css/select2.min.css" rel="stylesheet"> -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <!-- /SIDE LIST -->
<?php include 'include/sidelist_cal.php';?>
            <!--/ SIDE  LIST -->
           <!-- RIGHT LIST -->
            <div class="col-sm-10 mail_view">

                <div class="mail_heading row">
                  <div class="col-md-12">
                   <div class="heading">
                       <h1 class="breadcrums"><span>Sales</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
                       <h4>Record Book</h4>
                   </div>
                 </div>
                </div>

                <div class="setting">
                   <div class="backbtn"><a href="dashboard.php"> </a></div>
                   <div class="printbtn"><a class="print" id="pdf-button" onclick="printDiv()" href="#">&nbsp;</a></div>
                    <div class="subtext"><h2>Add New Sales</h2></div>
                   <div class="clear"></div>
               </div>



               <div class="">
       <div class="col-md-12 col-sm-12  ">
         <div class="x_panel">

           <div class="x_content">

             <ul class="nav nav-tabs bar_tabs tab-text" id="myTab" role="tablist">
               <li class="nav-item">
                 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#saledetails" role="tab" aria-controls="home" aria-selected="true">Sale Details</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#paymentplane" role="tab" aria-controls="profile" aria-selected="false">Payment Plane</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="contact" aria-selected="false">Payment</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#paymentslips" role="tab" aria-controls="contact" aria-selected="false">Payment Slips</a>
               </li>
             </ul>
             <div class="tab-content" id="myTabContent">

               <!-- 1TAB -->
               <div class="tab-pane fade show active" id="saledetails" role="tabpanel" aria-labelledby="home-tab">
                 <script>
                   function printDiv() {
                       var divContents = document.getElementById("GFG").outerHTML; // Include the outerHTML to get the div with its style
                       var a = window.open('', '', 'height=1500, width=1500');
                       a.document.write('<html>');
                       a.document.write('<body>');
                       a.document.write(divContents);
                       a.document.write('</body></html>');
                       a.document.close();
                       a.print();
                   }
               </script>

                 <div class="invoice overflow-auto" id='GFG' style="border:1px solid #000000 !important; padding: 10px !important;">

    
               </div>

             <!-- 1TAB -->

             <!-- 2TAB -->
               <div class="tab-pane fade" id="paymentplane" role="tabpanel" aria-labelledby="profile-tab">
                 Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                     booth letterpress, commodo enim craft beer mlkshk aliquip
               </div>
            <!-- 2TAB -->

            <!-- 3TAB -->
               <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="contact-tab">
                 xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                     booth letterpress, commodo enim craft beer mlkshk
               </div>
               <!-- 3TAB -->

               <!-- 4TAB -->
               <div class="tab-pane fade" id="paymentslips" role="tabpanel" aria-labelledby="contact-tab">
                 xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                     booth letterpress, commodo enim craft beer mlkshk
               </div>
               <!-- 4TAB -->

             </div>
           </div>
         </div>
       </div>



             </div>

           </div>
         </div>
       </div>


           <!-- jQuery -->
           <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
           <!-- Bootstrap -->
          <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
           <!-- FastClick -->
           <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
           <!-- NProgress -->
           <script src="assets/vendors/nprogress/nprogress.js"></script>
           <!-- jQuery Smart Wizard -->
           <!-- <script src="assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> -->
           <!-- Custom Theme Scripts -->
           <script src="assets/build/js/custom.min.js"></script>
           <script src="assets/vendors/validation/jquery.validate.min.js"></script>
       <script src="assets/vendors/validation/validation-script.js"></script>
