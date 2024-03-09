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
                   <div class="subtext"><h2>Add New Sales</h2></div>
                  <div class="clear"></div>
              </div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                  <div class="x_content">
	<?php include 'PHP/Read/view-sales-script.php';?>

                    <!-- Smart Wizard -->

                    <div class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>

                          <a href="#">
                            <span class="step_no step-active">1</span>
                            <span class="step_descr centered-text">
                                            <strong>Add New Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">2</span>
                            <span class="step_descr centered-text">
                                              <strong>Create Payment Plan</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">3</span>
                            <span class="step_descr centered-text">
                                              <strong>View Sales</strong><br />
                                          </span>
                          </a>
                        </li>

                      </ul>
                      <div>

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
                                          <!-- ///Sale Details,payments TABS -->
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
                                            <div class="toolbar hidden-print">
                                              <div class="text-end"  style="padding-bottom: 36px;">
                                                <button type="button" class="btn btn-print btn-sm" id="pdf-button" onclick="printDiv()" style="float:right;"><i class="fa fa-file-pdf-o"></i> Print</button>
                                                </div>
                                            </div>
                                            <div class="invoice overflow-auto" id='GFG'>
                                              <table class="table" style="width: 100%;">
                                              <tbody>
                                              <tr>
                                              <td style="width: 50%; border-bottom: 1px solid !important; padding:0px !important; background-color: #fff !important; color:#000 !important;" align="left">
                                              <img src="assets/images/companylogo.png"/>

                                              </td>
                                              <td style="width: 50%; border-bottom: 1px solid !important; padding:0px !important; background-color: #fff !important;" align="right">
                                                <h1 style="color:#008cff; font-size: 1.75rem; padding:10px;">Kelsey Homes Limited</h1>
                                                <div>No. 9A, De Fonseka Place, Colombo 04, Sri Lanka</div>
                                                <div>+94 770 774 774</div>
                                                <div>info@kelsey.lk</div>

                                              </td>

                                              </tr>




                                              <tr>
                                              <td style="width: 50%; background-color: #fff !important; color:#000 !important;" >

                                              </td>
                                              <td style="width: 100%; background-color: #fff !important; " align="right">
                                                <div style="font-size: 1.50rem; color:#008cff;"><b>SALE DETAILS</b></div>
                                                <div>Crate Date: <?php echo $sale_date; ?></div>
                                                <?php
                                                $select_admin = "SELECT * FROM user  WHERE U_id ='$sale_crate_by'";
                                                $run_query = mysqli_query($conn,$select_admin);
                                                while ($row_post = mysqli_fetch_array($run_query)){
                                                  $U_FName = $row_post ['U_FName'];
                                                }

                                                ?>
                                                <div>Crate By: <?php echo $U_FName; ?></div>
                                                <br/>

                                              </td>

                                              </tr>
                                              </tbody>
                                              </table>

                                              <table style="width:100%;">
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
                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Customer Full Name</td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $C_fullname; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Customer Name with Initials </td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $C_namewinitials; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Customer NIC / Passport </td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $C_NIC; ?> / <?php echo $C_Passport; ?></td>
                                                  </tr>

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Customer Contact </td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $C_Phone; ?></td>
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
                                                    <tr>
                                                      <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Second Owner Full Name</td>
                                                      <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">'. $C_fullnames .'</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Second Owner Name with Initials </td>
                                                      <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">'. $C_namewinitialss .'</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Second Owner NIC / Passport </td>
                                                      <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">'. $C_NICs .' / '. $C_Passports .'</td>
                                                    </tr>

                                                    <tr>
                                                      <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Second Owner Contact </td>
                                                      <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">'. $C_Phones .'</td>
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

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Project Name </td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $project_name; ?></td>
                                                  </tr>

                                                  <?php
                                                  $select_admin = "SELECT * FROM project_units   WHERE unit_id ='$unit_id'";
                                                  $run_query = mysqli_query($conn,$select_admin);
                                                  while ($row_post = mysqli_fetch_array($run_query)){
                                                    $unit_Name = $row_post ['unit_Name'];
                                                    $unit_Size = $row_post ['unit_Size'];
                                                    }
                                                  ?>

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Unit</td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $unit_Name; ?></td>
                                                  </tr>

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Unit Size</td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $unit_Size; ?> SQ.FT.</td>
                                                  </tr>

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Unit Price</td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo number_format ($sale_unit_price,2);?> LKR</td>
                                                  </tr>

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Discount</td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo number_format ($sale_unit_discount_price, 2);?> LKR</td>
                                                  </tr>

                                                  <tr>
                                                    <td style="width:20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Selling Price</td>
                                                    <td style="width:80%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo number_format ($selling_price, 2);?> LKR</td>
                                                  </tr>
                                                </tbody>

                                              </table>

                                              <br/><br/><br/>
                                              <footer>
                                                <p>...................................</p>
                                                <p>Authorized Signature</p>

                                              </footer>

                                            </div>

                                          </div>
                                          <!-- ////////////////// END //////////////////////// -->
                                          <!-- ///Sale Details,payments TABS -->
                                          <div class="tab-pane fade" id="paymentplane" role="tabpanel" aria-labelledby="profile-tab">
                                            <script>
          											    function printDiv2() {
          											        var divContents = document.getElementById("printpp").outerHTML; // Include the outerHTML to get the div with its style
          											        var a = window.open('', '', 'height=1500, width=1500');
          											        a.document.write('<html>');
          											        a.document.write('<body>');
          											        a.document.write(divContents);
          											        a.document.write('</body></html>');
          											        a.document.close();
          											        a.print();
          											    }
          											</script>

                                <div class="toolbar hidden-print">
                                    <div class="text-end"  style="padding-bottom: 36px;">
                                        <button type="button" class="btn btn-print btn-sm" id="pdf-button" onclick="printDiv()" style="float:right;"><i class="fa fa-file-pdf-o"></i> Print</button>
                                    </div>
                                </div>
                                <div class="invoice overflow-auto" id='printpp'>
                                  <table class="table" style="width: 100%;" >
                                  <tbody>
                                  <tr>
                                  <td style="width: 50%; border-bottom: 1px solid !important; padding:0px !important; background-color: #fff !important; color:#000 !important;" align="left">
                                  <img src="assets/images/companylogo.png"/>

                                  </td>
                                  <td style="width: 50%; border-bottom: 1px solid !important; padding:0px !important; background-color: #fff !important;" align="right">
                                    <h1 style="color:#008cff; font-size: 1.75rem; padding:10px;">Kelsey Homes Limited</h1>
                                    <div>No. 9A, De Fonseka Place, Colombo 04, Sri Lanka</div>
                                    <div>+94 770 774 774</div>
                                    <div>info@kelsey.lk</div>

                                  </td>

                                  </tr>

                                  <tr>
                                  <td style="width: 50%; background-color: #fff !important; color:#000 !important;" >
                                  <div>PAYMENT PLAN TO:</div>
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

                                  <div><b><?php echo $C_namewinitials; ?></b></div>

                                  <?php

                                  $select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_idS'";
                                  $run_query = mysqli_query($conn, $select_admin);
                                  while ($row_post = mysqli_fetch_array($run_query)) {
                                      $C_namewinitialss = $row_post['C_namewinitials'];

                                  }

                                  if ($Customer_idS > 0) {
                                    echo "<div><b>$C_namewinitialss</b></div>";
                                  }else{

                                  }
                                  ?>

                                  <div><?php echo $C_Address; ?>, <?php echo $C_Country; ?>.</div>


                                  </td>
                                  <td style="width: 50%; background-color: #fff !important; " align="right">
                                    <div style="font-size: 1.50rem; color:#008cff;"><b>PAYMENT PLAN</b></div>
                                    <div>Crate Date: <?php echo $sale_crate_bate; ?></div>
                                    <?php
                                    $select_admin = "SELECT * FROM user  WHERE U_id ='$sale_crate_by'";
                                    $run_query = mysqli_query($conn,$select_admin);
                                    while ($row_post = mysqli_fetch_array($run_query)){
                                      $U_FName = $row_post ['U_FName'];
                                    }

                                    ?>
                                    <div>Crate By: <?php echo $U_FName; ?></div>
                                    <hr/>
                                    <?php
                                    $select_admin = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
                                    $run_query = mysqli_query($conn,$select_admin);
                                    while ($row_post = mysqli_fetch_array($run_query)){
                                      $project_name = $row_post ['project_name'];
                                      }
                                    ?>
                                    <div><b>Project :</b> <?php echo $project_name; ?></div>
                                    <?php
                                    $select_admin = "SELECT * FROM project_units   WHERE unit_id ='$unit_id'";
                                    $run_query = mysqli_query($conn,$select_admin);
                                    while ($row_post = mysqli_fetch_array($run_query)){
                                      $unit_Name = $row_post ['unit_Name'];
                                      $unit_Size = $row_post ['unit_Size'];
                                      }
                                    ?>

                                    <div><b>Unit :</b> <?php echo $unit_Name; ?></div>
                                    <div><b>Unit Size :</b> <?php echo $unit_Size; ?>SQ.FT.</div>
                                    <div><b>Unit Price :</b> <?php echo number_format ($sale_unit_price,2);?> LKR</div>
                                    <div><b>Discount :</b> <?php echo number_format ($sale_unit_discount_price, 2);?> LKR</div>
                                    <div><b>Selling Price :</b> <?php echo number_format ($selling_price, 2);?> LKR</div>


                                  </td>

                                  </tr>
                                  </tbody>
                                  </table>
                                  <br/>
                                  <table style="width:100%;">

                                    <thead>
                                  <tr>
                                  <td style="width:10%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">#</td>
                                  <td style="width: 40%; border:1px solid !important;background-color: #014C83 !important; color:#fff !important;">Description</td>
                                  <td style="width: 25%; border:1px solid !important; background-color:#014C83 !important; color:#fff !important;">Due Date</td>
                                  <td style="width: 25%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">Amount(LKR)</td>
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
                                  <td style="width:10%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                                  <td style="width: 50%; border:1px solid !important;background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $row['installment']; ?></td>
                                  <td style="width: 20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">
                                    <?php
                                    $originalDate = $row['due_date'];
                                    $formattedDate = date("d-m-Y", strtotime($originalDate));
                                    echo $formattedDate;
                                    ?>

                                  </td>
                                  <td style="width: 20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right"><?php echo number_format($row['amount'], 2); ?></td>
                                  </tr>
                                  <?php
                                  $i++;
                                }
                                ?>

                                  </tbody>
                                  </table>
                                  <table style="width: 100%;">
                                  <tbody>
                                  <tr>
                                  <td style="width: 85%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right">GRAND TOTAL</td>
                                  <td style="width: 20%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important; border-color: #000 !important; " align="right"><b><?php echo number_format($selling_price, 2); ?></b></td>
                                  </tr>
                                  </tbody>
                                  </table>
                                  <br/><br/><br/>
                                  <footer>
                                    <p>...................................</p>
                                    <p>Authorized Signature</p>

                                  </footer>

                                </div>

                                          </div>
                                            <!-- ////////////////////////////////////////// -->
                                          <!-- ///Sale Details,payments TABS -->
                                            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="contact-tab">
                                              <script>
            											    function printDiv3() {
            											        var divContents = document.getElementById("printpymentplan").outerHTML; // Include the outerHTML to get the div with its style
            											        var a = window.open('', '', 'height=1500, width=1500');
            											        a.document.write('<html>');
            											        a.document.write('<body>');
            											        a.document.write(divContents);
            											        a.document.write('</body></html>');
            											        a.document.close();
            											        a.print();
            											    }
            											</script>
                                  <div class="toolbar hidden-print">
                                      <div class="text-end"  style="padding-bottom: 36px;">
                                          <button type="button" class="btn btn-print btn-sm" id="pdf-button" onclick="printDiv()" style="float:right;"><i class="fa fa-file-pdf-o"></i> Print</button>
                                      </div>
                                  </div>


                                  											<div class="invoice overflow-auto" id='printpymentplan'>
                                  												<table style="width: 100%;">
                                  												<tbody>
                                  												<tr>
                                  												<td style="width: 50%; border-bottom: 1px solid !important; padding:0px !important; background-color: #fff !important; color:#000 !important;" align="left">
                                  												<img src="assets/images/companylogo.png"/>

                                  												</td>
                                  												<td style="width: 50%; border-bottom: 1px solid !important; padding:0px !important; background-color: #fff !important;" align="right">
                                  												  <h1 style="color:#008cff; font-size: 1.75rem; padding:10px;">Kelsey Homes Limited</h1>
                                  												  <div>No. 9A, De Fonseka Place, Colombo 04, Sri Lanka</div>
                                  												  <div>+94 770 774 774</div>
                                  												  <div>info@kelsey.lk</div>

                                  												</td>

                                  												</tr>

                                  												<tr>
                                  												<td style="width: 50%; background-color: #fff !important; color:#000 !important;" >
                                  												<div>PAYMENT LIST TO:</div>
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

                                  												<div><b><?php echo $C_namewinitials; ?></b></div>

                                  												<?php

                                  												$select_admin = "SELECT * FROM customer  WHERE Customer_id ='$Customer_idS'";
                                  												$run_query = mysqli_query($conn, $select_admin);
                                  												while ($row_post = mysqli_fetch_array($run_query)) {
                                  														$C_namewinitialss = $row_post['C_namewinitials'];

                                  												}

                                  												if ($Customer_idS > 0) {
                                  													echo "<div><b>$C_namewinitialss</b></div>";
                                  												}else{

                                  												}
                                  												?>

                                  												<div><?php echo $C_Address; ?>, <?php echo $C_Country; ?>.</div>



                                  												</td>
                                  												<td style="width: 50%; background-color: #fff !important; " align="right">
                                  												  <div style="font-size: 1.50rem; color:#008cff;"><b>PAYMENT LIST</b></div>
                                  												  <div>Crate Date:
                                  														<?php
                                  														$currentDateTime = new DateTime('now');
                                  														$currentDate = $currentDateTime->format('d - m - Y');
                                  														echo $currentDate;

                                  													?></div>
                                  													<hr/>
                                  													<?php
                                  													$select_admin = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
                                  													$run_query = mysqli_query($conn,$select_admin);
                                  													while ($row_post = mysqli_fetch_array($run_query)){
                                  													  $project_name = $row_post ['project_name'];
                                  														}
                                  													?>
                                  													<div><b>Project :</b> <?php echo $project_name; ?></div>
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

                                  													<div><b>Unit :</b> <?php echo $unit_Name; ?></div>
                                  													<div><b>Unit Size :</b> <?php echo $unit_Size; ?>SQ.FT.</div>
                                  													<div><b>Unit Price :</b> <?php echo number_format ($sale_unit_price,2);?> LKR</div>
                                  													<div><b>Discount :</b> <?php echo number_format ($sale_unit_discount_price, 2);?> LKR</div>
                                  													<div><b>Selling Price : <?php echo number_format ($selling_price, 2);?> </b> LKR</div>
                                  													<div><b>Total Paid :<span class="text-success"> <?php echo number_format ($numberFromDB, 2); ?></b></span> LKR </div>
                                  													<div><b>Balance : <span class="text-danger"> <?php echo number_format($balance, 2); ?></b></span> LKR</div>


                                  												</td>

                                  												</tr>
                                  												</tbody>
                                  												</table>
                                  												<br/>
                                  												<table style="width:100%;">

                                  													<thead>
                                  												<tr>
                                  												<td style="width:10%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">#</td>
                                  												<td style="width: 40%; border:1px solid !important;background-color: #014C83 !important; color:#fff !important;">Description</td>
                                  												<td style="width: 25%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">Payment Date</td>
                                  												<td style="width: 25%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;" align="right">Amount(LKR)</td>
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
                                  												<td style="width:10%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                                  												<td style="width: 50%; border:1px solid !important;background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $row['pay_discription']; ?></td>
                                  												<td style="width: 20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">
                                  													<?php
                                  													$originalDate = $row['pay_date'];
                                  													$formattedDate = date("d-m-Y", strtotime($originalDate));
                                  													echo $formattedDate;
                                  													?>

                                  												</td>
                                  												<td style="width: 20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right"><?php echo number_format($row['paid_amount'], 2); ?></td>
                                  												</tr>
                                  												<?php
                                  												$i++;
                                  											}
                                  											?>

                                  												</tbody>
                                  												</table>
                                  												<table style="width: 100%;">
                                  												<tbody>
                                  												<tr>
                                  												<td style="width: 85%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right">Total Paid</td>
                                  												<td style="width: 20%; border:1px solid !important; background-color: #fff !important; color:#000 !important; border-color: #000 !important; " align="right"><b><?php echo number_format ($numberFromDB, 2); ?></b></td>
                                  												</tr>
                                  												</tbody>
                                  												</table>
                                  												<br/><br/><br/>
                                  												<footer>
                                  													<p>...................................</p>
                                  													<p>Authorized Signature</p>

                                  												</footer>

                                  											</div>

                                          </div>
                                            <!-- ////////////////////////////////////////// -->
                                          <!-- ///Sale Details,payments TABS -->
                                          <div class="tab-pane fade" id="paymentslips" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="table-responsive">
                                              <br>
                                              <br>
                                               <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
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
                                               </table>
                                             </div>
                                                <!-- ////////////////////////////////////////// -->
                                          </div>
                                        </div>
                                      </div>
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
