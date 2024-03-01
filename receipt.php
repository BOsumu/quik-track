<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>
<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <!-- /SIDE LIST -->
            <div class="col-sm-2 mail_list_column">
              <h2>Sales Summary</h2>
                  <h3>for Feb - 2024</h3>
              <p>This a summary of the present total payment collections for the above said month.</p>
              <!-- <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button> -->
              <a href="#">
                <div class="mail_list">
                  <div class="left">
                    <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                  </div>
                  <div class="right">
                    <h3>Dennis Mugo <small>3.00 PM</small></h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                  </div>
                </div>
              </a>


            </div>
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
                                          <div class="backbtn"><a href="dashboard.php"> </a></div>
                                           <div class="subtext"><h2>Add New Sales</h2></div>
                                          <div class="clear"></div>
                                      </div>


            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                  <div class="x_content">

										<?php include 'PHP/Read/view-receipt.php';?>
														<hr/>

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
														<div class="card">
													    <div class="card-body">
													        <div>
                                    <div class="toolbar hidden-print">
                                        <div class="text-end"  style="padding-bottom: 36px;">
                                            <button type="button" class="btn btn-print btn-sm" id="pdf-button" onclick="printDiv()" style="float:right;"><i class="fa fa-file-pdf-o"></i> Print</button>
                                        </div>
                                    </div>
                          <hr>
																	<div class="invoice overflow-auto" id='GFG'>
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
																	</tbody>
																</table>
																<table style="width: 100%;">
																	<tbody>
																		<tr>
																			<td style="width: 100%; background-color: #fff !important; color:#000 !important;">
																				<div style="font-size: 1.50rem; color:#008cff;"><b>OFFICIAL RECEIPT - #<?php echo $payment_id;?></b></div>
																			  <div>Date: <?php echo $pay_dates; ?></div>


																				<?php
																				$select_admin = "SELECT * FROM user  WHERE U_id ='$payment_add_by'";
																				$run_query = mysqli_query($conn,$select_admin);
																				while ($row_post = mysqli_fetch_array($run_query)){
																				  $U_FName = $row_post ['U_FName'];
																				}

																				?>
																				<div>Crate By: <?php echo $U_FName; ?></div>

																			</td>
																		</tr>
																	</tbody>
																</table>
																<br></br>
																<table class="table" style="width: 100%;">
																	<tbody>
																		<?php
																		$select_sales = "SELECT * FROM  sales  WHERE sale_id ='$sale_id'";
																		$run_query = mysqli_query($conn, $select_sales);
																		while ($row_post = mysqli_fetch_array($run_query)) {
																				$Customer_id = $row_post['Customer_id'];
																				$project_id = $row_post['project_id'];
																				$unit_id = $row_post['unit_id'];
																				$sale_date = $row_post['sale_date'];
																				$sale_unit_price = $row_post['sale_unit_price'];
																				$sale_unit_discount_price = $row_post['sale_unit_discount_price'];
																				$sale_unit_discount_price_presentage = $row_post['sale_unit_discount_price_presentage'];
																				$selling_price = $row_post['selling_price'];
																		}
																		////////////////////
																		$select_customer = "SELECT * FROM  customer  WHERE Customer_id ='$Customer_id'";
																		$run_query = mysqli_query($conn, $select_customer);
																		while ($row_post = mysqli_fetch_array($run_query)) {
																				$C_namewinitials = $row_post['C_namewinitials'];
																				$C_Address = $row_post['C_Address'];
																				$C_NIC = $row_post['C_NIC'];
																				$C_Passport = $row_post['C_Passport'];
																				$C_Phone = $row_post['C_Phone'];
																				$C_Country = $row_post['C_Country'];

																		}
																		?>
																		<tr style ="padding: 0px 0px 10px 0px !important;">
																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Received From

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;<?php echo $C_namewinitials; ?>
																		</td>


																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">
																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			NIC / Passport No

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;	<?php echo $C_NIC; ?> / <?php echo $C_Passport; ?>

																		</td>
																		</tr>


																		<tr style ="padding: 0px 0px 10px 0px !important;">
																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Address

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;	<?php echo $C_Address; ?>, <?php echo $C_Country; ?>

																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">
																			<?php
																			$select_project = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
																			$run_query = mysqli_query($conn,$select_project);
																			while ($row_post = mysqli_fetch_array($run_query)){
																			  $project_name = $row_post ['project_name'];
																				}

																				$select_project_units = "SELECT * FROM project_units   WHERE unit_id ='$unit_id'";
																				$run_query = mysqli_query($conn,$select_project_units);
																				while ($row_post = mysqli_fetch_array($run_query)){
																					$unit_Name = $row_post ['unit_Name'];
																					$unit_Size = $row_post ['unit_Size'];
																					}
																			?>
																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Purchasing of

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;	Unit <?php echo $unit_Name; ?> (<?php echo $unit_Size; ?> SQ.FT.),
																		<?php echo $project_name; ?>

																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">

																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Pay Mathod

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;
																		<?php echo $payment_methord; ?>

																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">

																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Payment Discription

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;
																		<?php echo $payment_discription; ?>

																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">

																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Sheet No

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;
																		<?php echo $pay_sheetno; ?>

																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">

																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Payid Amount

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;
																		<b style=" background-color: #fff !important; color:#000 !important;"><?php echo number_format($paid_amount, 2); ?> LKR</b>

																		</td>
																		</tr>

																		<tr style ="padding: 0px 0px 10px 0px !important;">
																			<?php

																			// Check if the intl extension is enabled
																			if (!extension_loaded('intl')) {
																			    echo "The intl extension is not enabled. Please enable it to use the NumberFormatter class.";
																			    exit;
																			}

																			// Set locale for Sri Lankan Rupees
																			setlocale(LC_MONETARY, 'si_LK');

																			// Create NumberFormatter object
																			$formatter = new NumberFormatter('si_LK', NumberFormatter::SPELLOUT);

																			// Convert paid amount to words
																			$paidAmountInWords = ucwords($formatter->formatCurrency($paid_amount, 'LKR'));

																			?>


																		<td style="width:25%; background-color: #fff !important; color:#000 !important;">
																			Payid Amount in Words

																		</td>
																		<td style="width: 75%; background-color: #fff !important; color: #000 !important; border-bottom: 1px dotted #000;">: &nbsp;&nbsp;
																		<?php echo $paidAmountInWords; ?> Only

																		</td>
																		</tr>

																	</tbody>
																</table>
																<br/>

																<table style="width:100%;">

																	<thead>
																<tr>
																<td style="width:10%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">Date</td>
																<td style="width: 30%; border:1px solid !important;background-color: #014C83 !important; color:#fff !important;">Description</td>
																<td style="width: 30%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;" align="right">Paid Amount (LKR)</td>
																<td style="width: 30%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;" align="right">Amount (LKR)</td>
																</tr>
															</thead>
															<tbody>
																<tr>


																<td style="width:10%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">

																</td>
																<td style="width: 30%; border:1px solid !important;background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Selling Price</td>
																<td style="width: 30%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"  align="right">


																</td>
																<td style="width: 30%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right"><?php echo number_format($selling_price, 2); ?></td>
																</tr>

																<tr>

																	<?php
																	$sale_id = $sale_id;
																	$payment_query = "SELECT SUM(paid_amount) AS payment_amount FROM payments WHERE sale_id = $sale_id AND pay_date < '$pay_dates'";
																	$payment_result = mysqli_query($conn, $payment_query);
																	$payment_row = mysqli_fetch_array($payment_result);
																	$numberFromDB = isset($payment_row['payment_amount']) ? $payment_row['payment_amount'] : 0;
																	$formattedTotalPaid = number_format($numberFromDB, 2);

																	$balance = $selling_price - $numberFromDB;
																	$totla_privospay = $numberFromDB - $paid_amount;
																	?>


																<td style="width:10%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">

																</td>
																<td style="width: 30%; border:1px solid !important;background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">Total Previous Payments</td>
																<td style="width: 30%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"  align="right">
																	<?php echo number_format($numberFromDB, 2); ?>

																</td>
																<td style="width: 30%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right"></td>
																</tr>

																<tr>


																<td style="width:10%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;">
																	<?php
																	$originalDate = $pay_dates;
																	$formattedDate = date("d-m-Y", strtotime($originalDate));
																	echo $formattedDate;
																	?>
																</td>
																<td style="width: 30%; border:1px solid !important;background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"><?php echo $pay_discription; ?></td>
																<td style="width: 30%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;"  align="right">
																	<?php echo number_format($paid_amount, 2); ?>

																</td>
																<td style="width: 30%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right"></td>
																</tr>




																</tbody>
																</table>
																<table style="width: 100%;">
																<tbody>
																	<?php $tillnowpay = $numberFromDB + $paid_amount; ?>
																<tr>
																<td style="width: 85%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right">Total Paid Till Now</td>
																<td style=" padding: 5px; width: 20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important; " align="right"><b>(<?php echo number_format ($tillnowpay, 2); ?>)</b></td>
																</tr>
																<?php  $tillbalnce= $selling_price - $tillnowpay; ?>
																<tr>
																<td style="width: 85%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important;" align="right">Balance</td>
																<td style="padding: 5px; width: 20%; border:1px solid !important; background-color: #f7f4f4 !important; color:#000 !important; border-color: #000 !important; " align="right"><b><?php echo number_format($tillbalnce, 2); ?></b></td>
																</tr>
																</tbody>
																</table>





																		<br/><br/><br/>
																		<footer>
																			<table style="width: 100%;">
																				<tbody>
																					<tr>
																							<td style="width: 25%; " align="center">
																								<p>..................................</p>
																								<p>Prepared By</p>
																							</td>
																							<td style="width: 25%; " align="center">
																								<p>..................................</p>
																								<p>Approved By</p>
																							</td>
																							<td style="width: 50%; " align="center">
																								<p>..................................</p>
																								<p>Customer Signature</p>
																							</td>
																					</tr>
																				</tbody>

																			</table>

																		</footer>

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

		<script>
			$(document).ready(function() {
			  var table = $('#example2').DataTable( {
				buttons: ['excel', 'pdf', 'print'],
				lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
			  });

			  table.buttons().container()
				.appendTo('#example2_wrapper .col-md-6:eq(0)')
				.addClass('btn-container'); // Add a class to the buttons container
			});
		  </script>

		  <style>
			/* Add custom styling for the space between buttons and length menu */
			.btn-container {
			  margin-top: 10px; /* Adjust this value as needed for the desired spacing */
			}
		  </style>

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





  </body>
</html>
