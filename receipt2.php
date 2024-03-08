<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>

<!-- Custom Theme Style -->
<link href="assets/build/css/receipt-css.css" rel="stylesheet">
<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>

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
                                               <h1><span>Sales</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Payments</h1>
                                               <h4>Record Book</h4>
                                           </div>
                                         </div>
                                       </div>

                                       <div class="setting">
                                          <div class="backbtn"><a href="dashboard.php"> </a></div>
                                          <div class="printbtn"><a class="print" id="pdf-button" onclick="printDiv()" href="#">&nbsp;</a></div>
                                           <div class="subtext"><h2>Sales Receipt</h2></div>
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
                                    <!-- <div class="toolbar hidden-print">
                                        <div class="text-end"  style="padding-bottom: 36px;">
                                            <button type="button" class="btn btn-print btn-sm" id="pdf-button" onclick="printDiv()" style="float:right;"><i class="fa fa-file-pdf-o"></i> Print</button>
                                        </div>
                                    </div> -->
                          <hr>
																	<div class="invoice overflow-auto" id='GFG'>
																		<table style="width: 100%;">
																		<tbody>
																		<tr>
																		<td style="width: 50%; padding:0px !important; background-color: #fff !important; color:#000 !important;" align="left">
																		<img src="assets/images/companylogo.png"/>

																		</td>
																		<td style="width: 50%; padding:0px !important; background-color: #fff !important;" align="right">
																		  <h1 style="color:#008cff; font-size: 1.75rem; padding:10px;">Kelsey Homes Limited</h1>
																		  <div>No. 9A, De Fonseka Place, Colombo 04, Sri Lanka</div>
																		  <div>+94 770 774 774</div>
																		  <div>info@kelsey.lk</div>
																		</td>
																	</tr>
																	</tbody>
																</table>
																 <table style="width: 100%;" id="receipt">
																	<tbody>
																		<tr>
                                      <td class="title" colspan="3">
                                      <h4>Official Receipt
                                      <span>No :#<?php echo $payment_id;?></b></span></h4>
                                      <div class="clear"></div>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<br></br>

                 <table id="receipt" style="width: 100%;">
                   <tr>
                   <td class="label">Create By</td>
                   <td class="sep">:</td>
                   	<?php
                   	$select_admin = "SELECT * FROM user  WHERE U_id ='$payment_add_by'";
                   	$run_query = mysqli_query($conn,$select_admin);
                   	while ($row_post = mysqli_fetch_array($run_query)){
                   	$U_FName = $row_post ['U_FName'];
                   	}
                   	?>
                   <td class="field"><?php echo $U_FName; ?></td>
                   </tr>
                  <tr>
                  <td class="label">Date</td>
                  <td class="sep">:</td>
                  <td class="field">2024-03-07</td>
                  </tr>
                  <tr>
                  <td class="label">Received From</td>
                  <td class="sep">:</td>
                  <td class="field">W.G.R.Rajadurai</td>
                  </tr>
                  <tr>
                  <td class="label">NIC / Passport No</td>
                  <td class="sep">:</td>
                  <td class="field">000000000</td>
                  </tr>
                  <tr>
                  <td class="label">Address</td>
                  <td class="sep">:</td>
                  <td class="field">No.67/4,Digana Road,Kundasale</td>
                  </tr>
                  <tr>
                  <td class="label">Payment of</td>
                  <td class="sep">:</td>
                  <td class="field">asd</td>
                  </tr>
                  <tr>
                  <td class="label">Purchasing of</td>
                  <td class="sep">:</td>
                  <td class="field">
                  Lot 143 ( 1958 SQ.FT. ) at 24/2, Courts Road, Weligampitiya</td>
                  </tr>
                  <tr>
                  <td class="label">Cash/Cheque</td>
                  <td class="sep">:</td>
                  <td class="field">
                  Cash&nbsp;&nbsp;[ cash ]</td>
                  </tr>
                  <tr>
                  <td class="label">Amount in Words</td>
                  <td class="sep">:</td>
                  <td class="field">Twenty-Eight Million One Hundred and Ninety-Five Thousand and Twenty-Four Only</td>
                  </tr>
                  <tr>
                  <td class="label">Amount</td>
                  <td class="sep">:</td>
                  <td class="boxfield"><div class="currency">LKR. </div>
                  <div class="amount">28,195,024 /=</div></td>
                  </tr>
                  <tr>
                  <td colspan="3">
                  <table class="inner_receipt">
                  <thead>
                  <tr>
                  <td class="date">Date</td>
                  <td class="description">Description</td>
                  <td class="amount">Paid Amount</td>
                  <td class="amount">Total</td>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td class="date">&nbsp;</td>
                  <td class="description">Selling Price</td>
                  <td class="amount">&nbsp;</td>
                  <td class="amount">LKR. 29,205,024</td>
                  </tr>
                  <tr><!-- Payment done previously -->
                  <td class="date">2023-11-07</td>
                  <td class="description">Total Previous Payments</td>
                  <td class="amount">LKR. 1,010,000</td>
                  <td class="amount">&nbsp;</td>
                  </tr>
                  <tr><!-- Payment for Today -->
                  <td class="date">2024-03-07</td>
                  <td class="description">asd</td>
                  <td class="amount">LKR. 28,195,024</td>
                  <td class="amount">&nbsp;</td>
                  </tr>
                  <tr>
                  <td class="date">&nbsp;</td>
                  <td class="description">Total Paid Till Now</td>
                  <td class="amount">&nbsp;</td>
                  <td class="amount">( LKR. 29,205,024 )</td>
                  </tr>
                  <tr>
                  <td class="date">&nbsp;</td>
                  <td class="description">Balance</td>
                  <td class="amount">&nbsp;</td>
                  <td class="amount">LKR. 0</td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  <tr>
                  <td class="signature">
                  <p>Prepared By</p>
                  </td>
                  <td class="signature" colspan="2">
                  <p style="float:left; margin-right:10px;">Approved By</p>
                  <p style="float:right;">Customer Signature</p>
                  </td>
                  </tr>
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
