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
                                          <div class="backbtn"><a href="sales.php"> </a></div>
                                           <div class="subtext"><h2>Add New Sales</h2></div>
                                          <div class="clear"></div>
                                      </div>


            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                  <div class="x_content">


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
                      <div>

                        <div class="row">


                        <div class="col-md-12 col-sm-12">
                          <div class="x_content">


                    </script>
<?php include 'PHP/Read/view-payment-plan.php';?>
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

                            <?php
              $select_scustomer = "SELECT * FROM customer  WHERE Customer_id ='$Customer_idS'";
              $run_query = mysqli_query($conn, $select_scustomer);
              while ($row_post = mysqli_fetch_array($run_query)) {
                  $C_namewinitialss = $row_post['C_namewinitials'];
                  $C_Addresss = $row_post['C_Address'];
                  $C_Countrys = $row_post['C_Country'];
                  $C_NICs = $row_post['C_NIC'];
                  $C_Passports = $row_post['C_Passport'];
                  $C_Phones = $row_post['C_Phone'];
              }
              ?>


								<div><b><?php echo $C_namewinitials; ?></b> </div>
								<?php
								if ($Customer_idS > 0) {
									echo '<div><b>'. $C_namewinitialss.'</b></div>';
								}else {
									// code...
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
                  								<table class="table" style="width:100%; margin-bottom: initial;">

                  									<thead>
                  								<tr>
                  								<td style="width:10%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">#</td>
                  								<td style="width: 40%; border:1px solid !important;background-color: #014C83 !important; color:#fff !important;">Description</td>
                  								<td style="width: 25%; border:1px solid !important; background-color: #014C83 !important; color:#fff !important;">Due Date</td>
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
                  								<table class="table" style="width: 100%;">
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

                            </form>




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
