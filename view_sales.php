<?php ob_start();?>
<?php include 'include/dbConnection.php';
?>

<?php include 'include/session.php';?>
<?php
$result = mysqli_query($conn, "SELECT U_id FROM user WHERE U_id='$session_id'") or die('Error In Session');
$row = mysqli_fetch_array($result);
?>
<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';
?>
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
                                               <h1><span>Customer</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
                                               <h4>Record Book</h4>
                                           </div>
                                         </div>
                                       </div>

                                       <div class="setting">
                                          <div class="backbtn"><a href="sales.php"> </a></div>
                                           <div class="subtext"><h2>Add New Sales</h2></div>
                                          <div class="clear"></div>
                                      </div>


            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                  <div class="x_content">

	<?php include 'PHP/Read/view-sales-script.php';?>
                    <!-- Smart Wizard -->

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>

                          <a href="new_sales.php">
                            <span class="step_no">1</span>
                            <span class="step_descr centered-text">
                                            <strong>Add New Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="payment_plan.php">
                            <span class="step_no">2</span>
                            <span class="step_descr centered-text">
                                              <strong>Create Payment Plan</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no step-active">3</span>
                            <span class="step_descr centered-text">
                                            <strong>View Sales</strong><br />
                                          </span>
                          </a>
                        </li>

                      </ul>

                      <div class="row">
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


                                <div class="tab-pane fade" id="paymentpane" role="tabpanel" aria-labelledby="profile-tab">
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
                                <div class="tab-pane fade" id="paymentslips" role="tabpanel" aria-labelledby="contact-tab">
                                  <div class="table-responsive">
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
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

            </div>
          </div>
           <!-- / RIGHT LIST -->
          </div>
        </div>
        <!-- /page content -->

        <!-- /footer content -->
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


  </body>
</html>
