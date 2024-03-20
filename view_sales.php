<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<!-- Datatables -->

<!-- Datatables -->

<link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!-- Developer css -->
<link href="assets/developer/css/developer.css" rel="stylesheet">




<!-- Developer css -->

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


            <div class="row">
              <?php

																															$select_project = "SELECT * FROM project   WHERE project_id ='$project_id'";
																															$run_query = mysqli_query($conn,$select_project);
																															while ($row_post = mysqli_fetch_array($run_query)){
																																$company_id = $row_post ['company_id'];


																															}



																															$select_company = "SELECT * FROM companies    WHERE company_id ='$company_id'";
																															$run_query = mysqli_query($conn,$select_company);
																															while ($row_post = mysqli_fetch_array($run_query)){
																																$company_name = $row_post ['company_name'];
																																$company_Email = $row_post ['company_Email'];
																																$company_Phone = $row_post ['company_Phone'];
																																$company_address = $row_post ['company_address'];


																															}

																															?>

<div class="col-md-12 col-sm-12">
  	<?php include 'PHP/Read/view-sales-script.php';?>
       <div class="x_panel">

         <div class="x_content">

           <ul class="nav nav-tabs bar_tabs tab-text" id="myTab" role="tablist">
             <li class="nav-item">
               <a class="nav-link active" id="saledetails-tab" data-toggle="tab" href="#saledetails" role="tab" aria-controls="saledetails" aria-selected="true">Sale Details</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="paymentplane-tab" data-toggle="tab" href="#paymentplane" role="tab" aria-controls="paymentplane" aria-selected="false">Payment Plane</a>
             </li>
            <li class="nav-item">
               <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
             </li>
            <li class="nav-item">
               <a class="nav-link" id="paymentslips-tab" data-toggle="tab" href="#paymentslips" role="tab" aria-controls="paymentslips" aria-selected="false">Payment Slips</a>
             </li>
           </ul>
           <div class="tab-content" id="myTabContent">
             <!-- SALES -->
             <div class="tab-pane fade show active" id="saledetails" role="tabpanel" aria-labelledby="saledetails-tab">
               <div class="setting">
                  <div class="backbtn"><a href="dashboard.php"> </a></div>
                  <div class="printbtn"><a class="print" id="pdf-button" onclick="printDiv1()" href="#">&nbsp;</a></div>
                   <div class="subtext"><h2>Sales Details</h2></div>
                  <div class="clear"></div>
              </div>

               <script>
                 function printDiv1() {
                     var divContents = document.getElementById("sales").outerHTML; // Include the outerHTML to get the div with its style
                     var a = window.open('', '', 'height=1500, width=1500');
                     a.document.write('<html>');
                     a.document.write('<body>');
                     a.document.write(divContents);
                     a.document.write('</body></html>');
                     a.document.close();
                     a.print();
                 }
             </script>
               <!-- <div class="toolbar hidden-print">
                 <div class="text-end"  style="padding-bottom: 36px;">
                   <button type="button" class="btn btn-print btn-sm" id="pdf-button" onclick="printDiv()" style="float:right;"><i class="fa fa-file-pdf-o"></i> Print</button>
                   </div>
               </div> -->

               <div class="invoice overflow-auto" id='sales' style="border:1px solid #000000 !important; padding: 20px !important;">
                 <link href="assets/build/css/receipt-css1.css" rel="stylesheet">
                 <table class="table" style="width: 100%;">
                 <tbody>
                 <tr>

                 <td style="width: 50%; padding:0px !important; background-color: #fff !important;" align="left">
                   <h1 class="printh1" style="color:#000000; font-size: 1.75rem; padding:5px;"><?php echo $company_name;?></h1>
                   <div><?php echo $company_address;?></div>
                   <div><?php echo $company_Phone;?></div>
                  <div><?php echo $company_Email;?></div>
                 </td>

                 </tr>



<!--
                 <tr>

                 <td style="width: 100%; background-color: #000 !important;width: 25px;" align="left">
                   <div style="font-size: 1.50rem; color:#fff;"><b>SALE DETAILS</b></div>

                 </td>

                 </tr> -->
                 </tbody>
                 <table style="width: 100%;">
                   <tbody>
                     <td class="receipt-no">
                       <div class="receipt-no-span" style="margin-top: 1.5px !important;">
                         <h2>SALE DETAILS</h2></div>
                           <br>
                     </td>
                   </tbody>
                 </table>
                 <br></br>
                 </table>



                 <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                               <div class="col-md-9">
                                                              <table class="table" style="width: 100%; margin-bottom: 0rem;">
                                                                <tbody>
                                                                  <?php
                                                                  $select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_id'";
                                                                  $run_query = mysqli_query($conn, $select_admin);
                                                                  while ($row_post = mysqli_fetch_array($run_query)) {
                                                                      $C_fullname = $row_post ['C_fullname'];
                                                                      $C_namewinitials = $row_post['C_namewinitials'];
                                                                      $C_Address = $row_post['C_Address'];
                                                                      $C_Country = $row_post['C_Country'];
                                                                      $C_NIC = $row_post['C_NIC'];
                                                                      $C_Passport = $row_post['C_Passport'];
                                                                      $C_Phone = $row_post['C_Phone'];
                                                                  }
                                                                  ?>

                                                                  <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Create Date</td>
                                                                  <td>:</td>
                                                                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $sale_date; ?>	</td>
                                                                  </tr>

                                                                  <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Create By</td>
                                                                  <td>:</td>
                                                                  <?php
                                                                  $select_admin = "SELECT * FROM user  WHERE U_id ='$sale_crate_by'";
                                                                  $run_query = mysqli_query($conn,$select_admin);
                                                                  while ($row_post = mysqli_fetch_array($run_query)){
                                                                    $U_FName = $row_post ['U_FName'];
                                                                  }

                                                                  ?>
                                                                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo $U_FName; ?>	</td>
                                                                  </tr>


                                                                  <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                  <td style="width:30%; background-color: #fff !important; color:#000 !important;">Customer Full Name</td>
                                                                  <td>:</td>
                                                                  <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo $C_fullname; ?>	</td>
                                                                  </tr>

                                                                  <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                  <td style="width:30%; background-color: #fff !important; color:#000 !important;">Customer Name with Initials</td>
                                                                  <td>:</td>
                                                                  <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;	<?php echo $C_namewinitials; ?></td>
                                                                  </tr>

                                                                  <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                  <td style="width:30%; background-color: #fff !important; color:#000 !important;">Customer NIC / Passport </td>
                                                                  <td>:</td>
                                                                  <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_NIC; ?> / <?php echo $C_Passport; ?>	</td>
                                                                  </tr>


                                                                  <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                  <td style="width:30%; background-color: #fff !important; color:#000 !important;">	Customer Contact</td>
                                                                  <td>:</td>
                                                                  <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_Phone; ?>	</td>
                                                                  </tr>

                                                                  <?php

                                                                  $select_customers = "SELECT * FROM customer  WHERE Customer_id ='$Customer_idS'";
                                                                  $run_query = mysqli_query($conn, $select_customers);
                                                                  while ($row_post = mysqli_fetch_array($run_query)) {
                                                                      $C_fullnames = $row_post ['C_fullname'];
                                                                      $C_namewinitialss = $row_post['C_namewinitials'];
                                                                      $C_Addresss = $row_post['C_Address'];
                                                                      $C_Countrys = $row_post['C_Country'];
                                                                      $C_NICs = $row_post['C_NIC'];
                                                                      $C_Passports = $row_post['C_Passport'];
                                                                      $C_Phones = $row_post['C_Phone'];
                                                                  }


                                                                  if ($Customer_idS > 0) {
                                                                    echo '
                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Second Owner Full Name</td>
                                                                    <td>:</td>
                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;'. $C_fullnames .'</td>
                                                                    </tr>

                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Second Owner Name with Initials </td>
                                                                    <td>:</td>
                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;'. $C_namewinitialss .'</td>
                                                                    </tr>

                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Second Owner NIC / Passport </td>
                                                                    <td>:</td>
                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;'. $C_NICs .' / '. $C_Passports .'	</td>
                                                                    </tr>


                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Second Owner Contact</td>
                                                                    <td>:</td>
                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;'. $C_Phones .'</td>
                                                                    </tr>

                                                                    ';
                                                                  }else {
                                                                    // code...
                                                                  }

                                                                  ?>


                                                                                                                    <?php
                                                                                                                    $select_admin = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
                                                                                                                    $run_query = mysqli_query($conn,$select_admin);
                                                                                                                    while ($row_post = mysqli_fetch_array($run_query)){
                                                                                                                      $project_name = $row_post ['project_name'];
                                                                                                                      }
                                                                                                                    ?>

                                                                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Project Name</td>
                                                                                                                    <td>:</td>
                                                                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo $project_name; ?></td>
                                                                                                                    </tr>


                                                                                                                    <?php
                                                                                                                    $select_admin = "SELECT * FROM project_units   WHERE unit_id ='$unit_id'";
                                                                                                                    $run_query = mysqli_query($conn,$select_admin);
                                                                                                                    while ($row_post = mysqli_fetch_array($run_query)){
                                                                                                                      $unit_Name = $row_post ['unit_Name'];
                                                                                                                      $unit_Size = $row_post ['unit_Size'];
                                                                                                                      }
                                                                                                                    ?>

                                                                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Unit</td>
                                                                                                                    <td>:</td>
                                                                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo $unit_Name; ?></td>
                                                                                                                    </tr>


                                                                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Unit Size</td>
                                                                                                                    <td>:</td>
                                                                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo $unit_Size; ?> SQ.FT.</td>
                                                                                                                    </tr>


                                                                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Unit Price</td>
                                                                                                                    <td>:</td>
                                                                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo number_format ($sale_unit_price,2);?> LKR</td>
                                                                                                                    </tr>

                                                                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Discount</td>
                                                                                                                    <td>:</td>
                                                                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo number_format ($sale_unit_discount_price, 2);?> LKR</td>
                                                                                                                    </tr>

                                                                                                                    <tr style ="padding: 0px 0px 10px 0px !important;">
                                                                                                                    <td style="width:30%; background-color: #fff !important; color:#000 !important;">Selling Price</td>
                                                                                                                    <td>:</td>
                                                                                                                    <td style="width: 70%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed#999;"> &nbsp;&nbsp;<?php echo number_format ($selling_price, 2);?> LKR</td>
                                                                                                                    </tr>





                                                                </tbody>
                                                              </table>

                                                              <br/><br/><br/>
                                                              <footer>
                                                                <p>...................................</p>
                                                                <p>Authorized Signature</p>

                                                              </footer>
                                                            </div>


                                                               <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


               </div>
             </div>
             <!-- SALES -->
             <!-- PAYMENTS PLAN -->
             <div class="tab-pane fade" id="paymentplane" role="tabpanel" aria-labelledby="paymentplane-tab">

               <div class="setting">
                  <div class="backbtn"><a href="dashboard.php"> </a></div>
                  <div class="printbtn"><a class="print" id="pdf-button" onclick="printDiv2()" href="#">&nbsp;</a></div>
                   <div class="subtext"><h2>Payment plan</h2></div>
                  <div class="clear"></div>
              </div>
               <script>
             function printDiv2() {
             var divContents = document.getElementById("paymentp").outerHTML; // Include the outerHTML to get the div with its style
             var a = window.open('', '', 'height=1500, width=1500');
             a.document.write('<html>');
             a.document.write('<body>');
             a.document.write(divContents);
             a.document.write('</body></html>');
             a.document.close();
             a.print();
             }
             </script>
               <div class="invoice overflow-auto" id='paymentp' style="padding:20px; border:1px solid #000000;">

                 <link href="assets/build/css/receipt-css1.css" rel="stylesheet">
               <table class="table" style="width: 100%;" >
               <tbody>
               <tr>

                 <td style="width: 50%; padding:0px !important; background-color: #fff !important;" align="left">
                   <h1 class="printh1" style="color:#000000; font-size: 1.75rem; padding:5px;"><?php echo $company_name;?></h1>
                   <div><?php echo $company_address;?></div>
                   <div><?php echo $company_Phone;?></div>
                  <div><?php echo $company_Email;?></div>
                 </td>
               </tr>
               </tbody>
               </table>

               <table style="width: 100%;">
                 <tbody>
                   <td class="receipt-no">
                     <div class="receipt-no-span" style="margin-top: 1.5px !important;">
                       <h2>PAYMENT PLAN</h2></div>
                         <br>
                   </td>
                 </tbody>
               </table>
             </br></br>

             <div class="col-md-9">
               <table class="table" style="width: 100%; margin-bottom: 0rem;">
                <tbody>

                  <tr>
                  <td colspan="3" class="pp-td"> &nbsp;&nbsp;Customer Details</td>
                  </tr>


                  <?php
                  $select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_id'";
                  $run_query = mysqli_query($conn, $select_admin);
                  while ($row_post = mysqli_fetch_array($run_query)) {
                      $C_namewinitials = $row_post['C_namewinitials'];
                      $C_Address = $row_post['C_Address'];
                      $C_Country = $row_post['C_Country'];
                      $C_NIC = $row_post['C_NIC'];
                      $C_Passport = $row_post['C_Passport'];
                      $C_Phone = $row_post['C_Phone'];
                  }
                  ?>


                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">First Customer </td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_namewinitials; ?>	</td>
                  </tr>

                  <?php

                  $select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_idS'";
                  $run_query = mysqli_query($conn, $select_admin);
                  while ($row_post = mysqli_fetch_array($run_query)) {
                      $C_namewinitialss = $row_post['C_namewinitials'];

                  }
                  ?>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Second Customer </td>
                  <td>:</td>
                  <?php   if ($Customer_idS > 0) {?>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_namewinitialss;?>	</td>
                 <?php
                }else{

                }
                ?>
                  </tr>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Address</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_Address; ?>, <?php echo $C_Country; ?></td>
                  </tr>

                  <tr>
                  <td colspan="3" class="pp-td"> &nbsp;&nbsp;Payment Plan</td>
                  </tr>




                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Create Date</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $sale_crate_bate; ?></td>
                  </tr>

                  <?php
                  $select_admin = "SELECT * FROM user  WHERE U_id ='$sale_crate_by'";
                  $run_query = mysqli_query($conn,$select_admin);
                  while ($row_post = mysqli_fetch_array($run_query)){
                    $U_FName = $row_post ['U_FName'];
                  }
                  ?>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Create By</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $U_FName; ?></td>
                  </tr>
                  <?php
                  $select_admin = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
                  $run_query = mysqli_query($conn,$select_admin);
                  while ($row_post = mysqli_fetch_array($run_query)){
                    $project_name = $row_post ['project_name'];
                    }
                  ?>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Project</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $project_name; ?></td>
                  </tr>

                  <?php
                  $select_admin = "SELECT * FROM project_units   WHERE unit_id ='$unit_id'";
                  $run_query = mysqli_query($conn,$select_admin);
                  while ($row_post = mysqli_fetch_array($run_query)){
                    $unit_Name = $row_post ['unit_Name'];
                    $unit_Size = $row_post ['unit_Size'];
                    }
               ?>
                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Unit</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $unit_Name; ?></td>
                  </tr>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Unit Size</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $unit_Size; ?>SQ.FT.</td>
                  </tr>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Unit Price</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo number_format ($sale_unit_price,2);?> LKR</td>
                  </tr>

                  <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Discount</td>
                  <td>:</td>
                  <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo number_format ($sale_unit_discount_price, 2);?> LKR</td>
                  </tr>

                  <!-- ///AMOUNT -->
                     <tr style ="padding: 0px 0px 10px 0px !important;">
                       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Selling Price</td>
                       <td>:</td>
                       <td class="boxfield"><div class="currency">LKR. </div>
                       <div class="amount"><?php echo number_format ($selling_price, 2);?>   /=</div></td>
                     </tr>
                     <!-- ///AMOUNT -->
                </tbody>
               </table>
             </div>
             <!-- col-9 -->
             <!-- <table>-->
             <div class="col-md-9" style="padding: 10px;background-color: #F6F6F6;">
              <table style="width:100%; border-collapse: inherit;">

                <thead>
              <tr>
              <td style="width:10%; border:1px solid #333333 !important; background-color: #333333 !important; color:#fff !important;padding:5px;">#</td>
              <td style="width: 30%; border:1px solid #333333 !important;background-color: #333333 !important; color:#fff !important;padding:5px;">Description</td>
              <td style="width: 30%; border:1px solid #333333 !important; background-color: #333333 !important; color:#fff !important;padding:5px;" align="right">Due Date</td>
              <td style="width: 30%; border:1px solid #333333 !important; background-color: #333333 !important; color:#fff !important;padding:5px;" align="right">Amount (LKR)</td>
              </tr>
             </thead>

             <tbody>
               <?php
                 $sql = "SELECT * FROM payment_plan WHERE sale_id = '$sale_id' ";
                 $result = mysqli_query($conn, $sql);
                 $i = 1;
                 while ($row = mysqli_fetch_array($result)) {
                   ?>
              <tr>
              <td class="label1"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
              <td class="label1"><?php echo $row['installment']; ?></td>
              <td class="label1" align="right">
                <?php
                $originalDate = $row['due_date'];
                $formattedDate = date("d-m-Y", strtotime($originalDate));
                echo $formattedDate;
                ?>
              </td>
              <td class="label1" align="right"><?php echo number_format($row['amount'], 2); ?></td>
              </tr>
              <?php
              $i++;
             }
             ?>

              <tr style="border-top: 2px solid #fff;">
                <td colspan="3" class="label2" align="right">GRAND TOTAL</td>
                <td class="label2" align="right"><b></b><?php echo number_format($selling_price, 2); ?></td>
              </tr>

              </tbody>
              </table>
                </div>
             <!--</table> -->

             <!-- total -->
             <!-- <div class="col-md-9">
             <table>
               <tbody>
                <tr style ="padding: 0px 0px 10px 0px !important;">
                  <td style="width:25%; background-color: #fff !important; color:#000 !important;">Grand Total</td>
                  <td>:</td>
                  <td class="boxfield"><div class="currency">LKR. </div>
                  <div class="amount"><?php echo number_format ($selling_price, 2);?>   /=</div></td>
                </tr>
              </tbody>
            </table>
          </div> -->

          <!-- FOOTERT -->
          	<br/><br/><br/>
            <div class="col-md-9">
              <foot>
                <tbody style="width: 100%;">
                  <tr>
                    <td>
                      <p>...................................</p>
                      <p>Authorized Signature</p>
                    </td>
                  </tr>
                </tbody>
              </foot>
            </div>
          <!-- FOOTERT -->
              </div>

             </div>
             <!-- PAYMENTS PLAN -->
             <!-- PAYMENTS -->
             <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
               <div class="setting">
                  <div class="backbtn"><a href="dashboard.php"> </a></div>
                  <div class="printbtn"><a class="print" id="pdf-button" onclick="printDiv3()" href="#">&nbsp;</a></div>
                   <div class="subtext"><h2>Payment List</h2></div>
                  <div class="clear"></div>
              </div>
               <script>
       function printDiv3() {
           var divContents = document.getElementById("payments").outerHTML; // Include the outerHTML to get the div with its style
           var a = window.open('', '', 'height=1500, width=1500');
           a.document.write('<html>');
           a.document.write('<body>');
           a.document.write(divContents);
           a.document.write('</body></html>');
           a.document.close();
           a.print();
       }
   </script>

   	<div class="invoice overflow-auto" id='payments'style="padding:20px; border:1px solid #000000;">

      <link href="assets/build/css/receipt-css1.css" rel="stylesheet" type="text/css">
    <table class="table" style="width: 100%;" >
    <tbody>
    <tr>

      <td style="width: 50%; padding:0px !important; background-color: #fff !important;" align="left">
        <h1 class="printh1" style="color:#000000; font-size: 1.75rem; padding:5px;"><?php echo $company_name;?></h1>
        <div><?php echo $company_address;?></div>
        <div><?php echo $company_Phone;?></div>
       <div><?php echo $company_Email;?></div>
      </td>
    </tr>
    </tbody>
    </table>

    <table style="width: 100%;">
      <tbody>
        <td class="receipt-no">
          <div class="receipt-no-span" style="margin-top: 1.5px !important;">
            <h2>PAYMENT LIST</h2></div>
              <br>
        </td>
      </tbody>
    </table>
  </br></br>
  <!-- title -->

  <div class="col-md-9">
    <table class="table" style="width: 100%; margin-bottom: 0rem;">
     <tbody>

       <tr>
       <td colspan="3" class="pp-td"> &nbsp;&nbsp;Customer Details</td>
       </tr>

       <?php
       $select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_id'";
       $run_query = mysqli_query($conn, $select_admin);
       while ($row_post = mysqli_fetch_array($run_query)) {
           $C_namewinitials = $row_post['C_namewinitials'];
           $C_Address = $row_post['C_Address'];
           $C_Country = $row_post['C_Country'];
           $C_NIC = $row_post['C_NIC'];
           $C_Passport = $row_post['C_Passport'];
           $C_Phone = $row_post['C_Phone'];
       }
       ?>



       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">First Customer </td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_namewinitials; ?>	</td>
       </tr>

       <?php
       $select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_idS'";
       $run_query = mysqli_query($conn, $select_admin);
       while ($row_post = mysqli_fetch_array($run_query)) {
           $C_namewinitialss = $row_post['C_namewinitials'];

       }
       ?>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Second Customer </td>
       <td>:</td>
       <?php   if ($Customer_idS > 0) {?>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_namewinitialss;?>	</td>
      <?php
     }else{

     }
     ?>
       </tr>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Address</td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $C_Address; ?>, <?php echo $C_Country; ?></td>
       </tr>

       <tr>
       <td colspan="3" class="pp-td"> &nbsp;&nbsp;Payment List</td>
       </tr>




       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Create Date</td>
       <td>:</td>
       <?php
        $currentDateTime = new DateTime('now');
        $currentDate = $currentDateTime->format('d-m-Y');
      ?>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $currentDate; ?></td>
       </tr>

       <?php
       $select_admin = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
       $run_query = mysqli_query($conn,$select_admin);
       while ($row_post = mysqli_fetch_array($run_query)){
         $project_name = $row_post ['project_name'];
         }
       ?>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Project</td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $project_name; ?></td>
       </tr>
       <?php
       $select_admin = "SELECT * FROM project_units   WHERE unit_id ='$unit_id'";
       $run_query = mysqli_query($conn,$select_admin);
       while ($row_post = mysqli_fetch_array($run_query)){
         $unit_Name = $row_post ['unit_Name'];
         $unit_Size = $row_post ['unit_Size'];
         }
       ?>
       <?php
        $sale_id = $sale_id;
        $payment_query = "SELECT SUM(paid_amount) AS payment_amount FROM payments WHERE sale_id = $sale_id";
        $payment_result = mysqli_query($conn, $payment_query);
        $payment_row = mysqli_fetch_array($payment_result);
        $numberFromDB = isset($payment_row['payment_amount']) ? $payment_row['payment_amount'] : 0;
        $formattedTotalPaid = number_format($numberFromDB, 2);

        $balance = $selling_price - $numberFromDB;
        ?>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Unit</td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $unit_Name; ?></td>
       </tr>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Unit Size</td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo $unit_Size; ?>SQ.FT.</td>
       </tr>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Unit Price</td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo number_format ($sale_unit_price,2);?> LKR</td>
       </tr>

       <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Discount</td>
       <td>:</td>
       <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo number_format ($sale_unit_discount_price, 2);?> LKR</td>
       </tr>

       <!-- ///AMOUNT -->
          <tr style ="padding: 0px 0px 10px 0px !important;">
            <td style="width:25%; background-color: #fff !important; color:#000 !important;">Selling Price</td>
            <td>:</td>
            <td class="boxfield"><div class="currency">LKR. </div>
            <div class="amount"><?php echo number_format ($selling_price, 2);?>   /=</div></td>
          </tr>
          <!-- ///AMOUNT -->

          <!-- <tr style ="padding: 0px 0px 10px 0px !important;">
          <td style="width:25%; background-color: #fff !important; color:#000 !important;">Total Paid</td>
          <td>:</td>
          <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo number_format ($numberFromDB, 2); ?> LKR</td>
          </tr>

          <tr style ="padding: 0px 0px 10px 0px !important;">
          <td style="width:25%; background-color: #fff !important; color:#000 !important;">Balance</td>
          <td>:</td>
          <td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dashed #999;"> &nbsp;&nbsp;<?php echo number_format($balance, 2); ?> LKR</td>
          </tr> -->
     </tbody>
    </table>
  </div>
  <!-- col-9 -->
  <!-- table -->
   <div class="col-md-9" style="padding: 10px;background-color: #F6F6F6;">
       <table style="width:100%; border-collapse: inherit;}">
         <thead>
       <tr>
       <td style="width:10%; border:1px solid #333333 !important; background-color: #333333 !important; color:#fff !important;padding:5px;">#</td>
       <td style="width: 30%; border:1px solid #333333 !important;background-color: #333333 !important; color:#fff !important;padding:5px;">Description</td>
       <td style="width: 30%; border:1px solid #333333 !important; background-color: #333333 !important; color:#fff !important;padding:5px;" align="right">Payment Dates</td>
       <td style="width: 30%; border:1px solid #333333 !important; background-color: #333333 !important; color:#fff !important;padding:5px;" align="right">Amount (LKR)</td>
       </tr>
      </thead>
           <tbody>
             <?php
                $sql = "SELECT * FROM payments WHERE sale_id = '$sale_id' ";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
                    <td class="label1"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                    <td class="label1"><?php echo $row['pay_discription']; ?></td>
                    <td class="label1" align="right">
                      <?php
                      $originalDate = $row['pay_date'];
                      $formattedDate = date("d-m-Y", strtotime($originalDate));
                      echo $formattedDate;
                      ?>
                    </td>
                    <td class="label1" align="right"><?php echo number_format($row['paid_amount'], 2); ?></td>
                    </tr>
                    <?php
                    $i++;
                   }
                   ?>
                  </tr>

                  <tr style="border-top: 2px solid #fff;">
                    <td colspan="3" class="label2" align="right">TOTAL CREATED INSTALLMENT</td>
                    <td class="label2" align="right"><b></b><?php echo number_format ($numberFromDB, 2); ?></td>
                  </tr>
                  <tr style="border-top: 2px solid #fff;">
                    <td colspan="3" class="label2" align="right">TOTAL BALANCE TO PAY</td>
                    <td class="label2" align="right"><b></b><?php echo number_format($balance, 2); ?></td>
                  </tr>

           </tbody>
     </table>
   </div>
  <!-- /table -->

  <!-- total -->
  <div class="col-md-9">
  <table>
    <tbody>
     <tr style ="padding: 0px 0px 10px 0px !important;">
       <td style="width:25%; background-color: #fff !important; color:#000 !important;">Total paid(Till now)</td>
       <td>:</td>
       <td class="boxfield"><div class="currency">LKR. </div>
       <div class="amount"><?php echo number_format ($numberFromDB, 2); ?>   /=</div></td>
     </tr>
   </tbody>
 </table>
</div>

<!-- FOOTERT -->
  <br/><br/><br/>
  <div class="col-md-9">
    <foot>
      <tbody style="width: 100%;">
        <tr>
          <td>
            <p>...................................</p>
            <p>Authorized Signature</p>
          </td>
        </tr>
      </tbody>
    </foot>
  </div>
<!-- FOOTERT -->

    </div>

             </div>
             <!-- PAYMENTS -->
             <!-- SLIPS -->
             <div class="tab-pane fade" id="paymentslips" role="tabpanel" aria-labelledby="paymentslips-tab">

                 <!-- table -->

  <div class="x_panel">
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">


                                              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead class="paymentslips1">
                                                  <tr>
                                                    <th>Payment Date</th>
                                                    <th>Description</th>
                                                    <th>Amount(LKR)</th>
                                                    <th>View</th>
                                                  </tr>
                                                </thead>


                                                <tbody>
                                                  <?php
                                                    $sql = "SELECT * FROM payments WHERE sale_id = '$sale_id' ";
                                                    $result = mysqli_query($conn, $sql);
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_array($result)) {
                                                      ?>
                                                      <tr>
                                                          <td><?php echo $row['pay_date']; ?></td>
                                                          <td><?php echo $row['pay_discription']; ?></td>
                                                          <td><?php echo  number_format($row['paid_amount'], 2); ?></td>

                                                          <td><a href="receipt.php?receipt_id=<?php echo $row['payment_id']; ?>"><button type="button" class="btn btn-sm btn-view">View Payment Slip</button></a></td>
                                                      </tr>
                                                      <?php
                                                      $i++;
                                                  }
                                                  ?>

                                                </tbody>
                                                <tfoot class="paymentslips2">
                      <tr>
                        <tr>
                          <th>Payment Date</th>
                          <th>Description</th>
                          <th>Amount(LKR)</th>
                          <th>View</th>
                        </tr>
                      </tr>
                  </tfoot>
                                              </table>

      <!-- <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Payment Date</th>
            <th>Description</th>
            <th>Amount(LKR)</th>
            <th>View</th>
          </tr>
        </thead>


        <tbody>
          <?php
            $sql = "SELECT * FROM payments WHERE sale_id = '$sale_id' ";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
              ?>
              <tr>
                  <td><?php echo $row['pay_date']; ?></td>
                  <td><?php echo $row['pay_discription']; ?></td>
                  <td><?php echo  number_format($row['paid_amount'], 2); ?></td>

                  <td><a href="receipt.php?receipt_id=<?php echo $row['payment_id']; ?>"><button type="button" class="btn btn-sm btn-view">View Payment Slip</button></a></td>
              </tr>
              <?php
              $i++;
          }
          ?>

        </tbody>
      </table> -->
    </div>
  </div>
</div>
</div>
  </div>

  <!-- table -->


             </div>
             <!-- SLIPS -->
           </div>


         </div>
       </div>
     </div>


                    </div>
                    <!-- End SmartWizard Content -->

                  </div>

              </div>
            </div>
            <?php include 'PHP/Write/addSales_script.php';?>
          </div>
           <!-- / RIGHT LIST -->
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer style="margin-left: 0px;">
          <div class="pull-right" style="margin-left: 0px;">
             © 2023 - <script> document.write(new Date().getFullYear())</script>2024 All right reserved. Quik Track for Blue Ocean Group Of Companies &amp; Kelsey Developments PLC, made with ❤️ by <a href="javascript:;" class="fw-medium">Blue Ocean IT</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
<!-- Datatables -->
<script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>





  	<script>
  	    // Add an event listener to the First Owner dropdown
  	    $('#firstowner').on('change', function () {
  	        // Enable the Second Owner dropdown
  	        $('#secondowner').prop('disabled', false);

  	        // Get the selected value
  	        var selectedValue = $(this).val();

  	        // Disable the option in the Second Owner dropdown with the same value
  	        $('#secondowner option[value="' + selectedValue + '"]').prop('disabled', true);

  	        // If the previously selected option in Second Owner is not selected in First Owner anymore, enable it
  	        if ($(this).data('prevValue')) {
  	            $('#secondowner option[value="' + $(this).data('prevValue') + '"]').prop('disabled', false);
  	        }

  	        // Store the current selected value for future reference
  	        $(this).data('prevValue', selectedValue);
  	    });
  	</script>

  	<script>
  	document.addEventListener("DOMContentLoaded", function () {
  	    // Get references to the two dropdowns and the input field
  	    const projectSelect = document.getElementById("project-select");
  	    const projectUnitSelect = document.getElementById("project-unit-select");
  	    const inputCompareatprice = document.getElementById("inputCompareatprice");

  	    // Event listener for the project dropdown
  	    projectSelect.addEventListener("change", function () {
  	        // Clear the project unit dropdown and unit price field
  	        projectUnitSelect.innerHTML = '<option selected disabled value>Select</option>';
  	        inputCompareatprice.value = "";

  	        // Get the selected project ID
  	        const selectedProjectId = projectSelect.value;

  	        // Fetch project units related to the selected project using AJAX
  	        if (selectedProjectId !== "Select") {
  	            fetchProjectUnits(selectedProjectId);
  	        }
  	    });

  	    // Event listener for the project unit dropdown
  	    projectUnitSelect.addEventListener("change", function () {
  	        // Get the selected unit object (including unit_Name and unit_Price)
  	        const selectedUnit = projectUnitSelect.options[projectUnitSelect.selectedIndex];

  	        // Set the unit Name and unit Price in the input field
  	        inputCompareatprice.value = selectedUnit.getAttribute("data-unit-price");
  	    });

  	    // Function to fetch project units using AJAX
  	    function fetchProjectUnits(projectId) {
  	        $.ajax({
  	            url: "fetch_project_units.php",
  	            type: "POST",
  	            data: { project_id: projectId }, // Corrected parameter name
  	            dataType: "json", // Specify JSON dataType
  	            success: function (data) {
  	                if (data && data.length > 0) { // Check if data is valid and not empty
  	                    // Append project unit options to the dropdown
  	                    data.forEach(function (unit) {
  	                        const option = document.createElement("option");
  	                        option.value = unit.unit_id;
  	                        option.textContent = unit.unit_Name;
  	                        option.setAttribute("data-unit-price", unit.unit_Price); // Store unit_Price as data attribute
  	                        projectUnitSelect.appendChild(option);
  	                    });
  	                } else {
  	                    // Handle the case where no data is returned
  	                    console.log("No project units found for the selected project.");
  	                }
  	            },
  	            error: function (xhr, status, error) {
  	                // Handle AJAX errors, e.g., network issues or server errors
  	                console.error("AJAX error:", status, error);
  	            }
  	        });
  	    }
  	});

  </script>



  		<script>
  		// Example starter JavaScript for disabling form submissions if there are invalid fields
  			(function () {
  			  'use strict'

  			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  			  var forms = document.querySelectorAll('.needs-validation')

  			  // Loop over them and prevent submission
  			  Array.prototype.slice.call(forms)
  				.forEach(function (form) {
  				  form.addEventListener('submit', function (event) {
  					if (!form.checkValidity()) {
  					  event.preventDefault()
  					  event.stopPropagation()
  					}

  					form.classList.add('was-validated')
  				  }, false)
  				})
  			})()
  	</script>

  	<script>
          function calculateDiscount() {
              // Get the values entered by the user and remove commas
              const unitPrice = parseFloat(document.getElementById("inputCompareatprice").value.replace(/,/g, ''));
              const discountLKR = parseFloat(document.getElementById("inputDiscount").value);

              // Calculate the discount percentage with one decimal place
              const discountPercentage = ((discountLKR / unitPrice) * 100).toFixed(1);

              // Calculate the selling price
              const sellingPrice = (unitPrice - discountLKR).toFixed(2);

              // Update the "Discount (%)" and "Selling Price (LKR)" fields
              document.getElementById("inputDiscountpercentage").value = discountPercentage;
              document.getElementById("inputSellingPrice").value = sellingPrice;
          }
      </script>

      <!-- <script>
        // Additional code for adding placeholder in search box of select2
        (function($) {
          var Defaults = $.fn.select2.amd.require('select2/defaults');

          $.extend(Defaults.defaults, {
            searchInputPlaceholder: ''
          });

          var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

          var _renderSearchDropdown = SearchDropdown.prototype.render;

          SearchDropdown.prototype.render = function(decorated) {

            // invoke parent method
            var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

            this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

            return $rendered;
          };

        })(window.jQuery);
      </script>


<script src="assets/lib/select2/js/select2.min.js"></script> -->

  </body>
</html>
