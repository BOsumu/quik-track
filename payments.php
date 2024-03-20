<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" href="assets/images/favicon.png" type="image/png" />

    <title>Payment List | Quick Track Admin - Kelsey Developments PLC</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">

    <!-- Developer css -->
    <link href="assets/developer/css/developer.css" rel="stylesheet">
  </head>
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
                                               <h1><span>Payment</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
                                               <h4>Record Book</h4>
                                           </div>
                                         </div>
                                       </div>

                                       <div class="setting">

                                      </div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                  <div class="x_content">


                        <div class="row">

                          <div class="col-md-12 col-sm-12 ">

                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                      <div class="card-box table-responsive">
                                        <!-- <p class="text-muted font-13 m-b-30">
                                          <form>
                                              <button type="text" class="btn btn-add btn-sm"><a href="new_sales.php" style="color:#ffffff;">Add New Sales</a></button>
                                          </form>
                                        </p> -->

                              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Sale Date</th>
                                    <th>Project</th>
                                    <th>Unit</th>
                                    <th>Customer</th>
                                    <th>Selling Price (LKR)</th>
                                    <th>Paid (LKR)</th>
                                    <th>Balance (LKR)</th>
                                    <th>Due Date</th>
                                    <th>View</th>
                                  </tr>
                                </thead>


                                <tbody>
                                  <?php
        $sql = 'SELECT * FROM sales
            JOIN project ON project.project_id = sales.project_id
            JOIN project_units ON project_units.unit_id = sales.unit_id
            JOIN customer ON customer.Customer_id = sales.Customer_id';

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $sale_id = $row['sale_id'];
            $sale_date = $row['sale_date'];
            $project_name = $row['project_name'];
            $unit_Name = $row['unit_Name'];
            $C_namewinitials = $row['C_namewinitials'];
            $selling_price = isset($row['selling_price']) ? number_format($row['selling_price'], 2) : '0.00';

            // Calculate total paid amount using a subquery
            $payment_query = "SELECT COALESCE(SUM(paid_amount), 0) AS payment_amount FROM payments WHERE sale_id = $sale_id";
            $payment_result = mysqli_query($conn, $payment_query);
            $payment_row = mysqli_fetch_array($payment_result);
            $totalPaid = isset($payment_row['payment_amount']) ? number_format($payment_row['payment_amount'], 2) : '0.00';

            // Calculate balance
            $balance = number_format($row['selling_price'] - $payment_row['payment_amount'], 2);

            $earliest_unpaid_due_date = ''; // Initialize the variable

            // Fetch the earliest unpaid due date
            $sql_due_dates = "SELECT MIN(due_date) AS earliest_due_date
                              FROM payment_plan
                              WHERE sale_id = $sale_id
                              AND amount > (SELECT COALESCE(SUM(paid_amount), 0) FROM payments WHERE sale_id = $sale_id)";
            $result_due_dates = mysqli_query($conn, $sql_due_dates);
            $row_due_date = mysqli_fetch_assoc($result_due_dates);
            if ($row_due_date && $row_due_date['earliest_due_date']) {
                $earliest_unpaid_due_date = $row_due_date['earliest_due_date'];
            }



						// Define classes based on due date comparison
            $due_date_class = '';
            if ($earliest_unpaid_due_date !== '') {
                $due_date_timestamp = strtotime($earliest_unpaid_due_date);
                $current_date = strtotime(date('Y-m-d'));

                if ($due_date_timestamp < $current_date) {
                    $due_date_class = 'text-danger'; // Red color for past due date
                } elseif ($due_date_timestamp == $current_date) {
                    $due_date_class = 'text-info'; // Blue color for current due date
                } else {
                    $due_date_class = 'text-success'; // Green color for future due date
                }
            }

            ?>
                                  <tr>
                                    <td><?php echo $sale_date; ?></td>
                  <td><?php echo $project_name; ?></td>
                  <td><?php echo $unit_Name; ?></td>
                  <td><?php echo $C_namewinitials; ?></td>
                  <td align="right" ><?php echo $selling_price; ?></td>
                  <td align="right" ><?php echo $totalPaid; ?></td>
                  <td align="right" ><?php echo $balance; ?></td>
                  <td class="<?php echo $due_date_class; ?>"><b><?php echo $earliest_unpaid_due_date !== '' ? date('Y-m-d', strtotime($earliest_unpaid_due_date)) : ''; ?></b></td>

                 <td><a href="addpayment.php?sale_id=<?php echo $row['sale_id']; ?>"><button type="button" class="btn btn-sm btn-add btn-font">Add Payment</button></a></td>
                                  </tr>
                              <?php } ?>
                                </tbody>
                                <tfoot>
        <tr>
            <th>Sale ID</th>
            <th>Project</th>
            <th>Unit</th>
            <th>Customer</th>
            <th>Selling Price (LKR)</th>
            <th>Paid (LKR)</th>
            <th>Balance (LKR)</th>
            <th>Due Date</th>
            <th>View</th>
        </tr>
    </tfoot>
                              </table>
                            </div>
                          </div>
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

        <!-- Datatables -->
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
    <!-- iCheck -->
    <script src="assets/vendors/iCheck/icheck.min.js"></script>
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

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>



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
