<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>

<!doctype html>
<html lang="en" >
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
		<link rel="icon" href="assets/images/favicon.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Sales | Quick Track Admin - Kelsey Developments PLC</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include 'include/main_navi.php';?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include 'include/topnavi.php';?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Overdue Payments</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Overdue Payment Managemnt</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-sm-6">
						<h6 class="mb-0 text-uppercase">Overdue Payment List</h6>
					</div>

				</div>

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
							    <thead>
							        <tr>
							            <th>Project</th>
							            <th>Unit</th>
							            <th>Customer</th>
							            <th>Installment</th>
							            <th>Total Amount</th>
							            <th>Due Amount</th>
							            <th>Due Date(LKR)</th>
							            <th>Status</th>
							        </tr>
							    </thead>
							    <tbody>
							        <?php
							        // Get the current date
							        $currentDate = date('Y-m-d');

							        // Query to get overdue installments and related sales details
							        $sql = "SELECT pp.*, s.sale_date, p.project_name, pu.unit_Name, c.C_namewinitials, s.selling_price,
							                COALESCE(SUM(paid_amount), 0) AS total_paid
							                FROM payment_plan pp
							                LEFT JOIN sales s ON pp.sale_id = s.sale_id
							                LEFT JOIN project p ON s.project_id = p.project_id
							                LEFT JOIN project_units pu ON s.unit_id = pu.unit_id
							                LEFT JOIN customer c ON s.Customer_id = c.Customer_id
							                LEFT JOIN payments pmt ON pp.sale_id = pmt.sale_id AND pp.installment = pmt.pay_discription
							                GROUP BY pp.plan_id";

							        $result = $conn->query($sql);

							        if ($result->num_rows > 0) {
							            $overdueInstallments = 0;

							            // Loop through each installment
							            while ($row = $result->fetch_assoc()) {
							                $projectName = $row['project_name'];
							                $unitName = $row['unit_Name'];
							                $customerName = $row['C_namewinitials'];
							                $installmentName = $row['installment'];
							                $totalInstallmentAmount = $row['amount'];
							                $dueDate = $row['due_date'];
							                $totalPaid = $row['total_paid'];

							                // Calculate the due amount
							                $dueAmount = $totalInstallmentAmount - $totalPaid;

							                // Check if the installment is overdue
							                if ($dueDate < $currentDate && $dueAmount > 0) {
							                    $overdueInstallments++;

							                    // Display overdue installment details within table rows
							                    ?>
							                    <tr>
							                        <td><?php echo $projectName; ?></td>
							                        <td><?php echo $unitName; ?></td>
							                        <td><?php echo $customerName; ?></td>
							                        <td><?php echo $installmentName; ?></td>
							                        <td align="right"><?php echo number_format($totalInstallmentAmount, 2); ?></td>
							                        <td align="right"><?php echo number_format($dueAmount, 2); ?></td>
							                        <td align="right"><?php echo $dueDate; ?></td>
							                        <td><a href="addpayment.php?sale_id=<?php echo $row['sale_id']; ?>"><button type="button" class="btn btn-sm btn-success">Add Payment</button></a></td>
							                    </tr>
							                    <?php
							                }
							            }
							        } else {
							            // No installments found
							            echo '<tr><td colspan="8">No overdue installments found.</td></tr>';
							        }
							        ?>
							    </tbody>
							    <tfoot>
							        <tr>
							            <th>Project</th>
							            <th>Unit</th>
							            <th>Customer</th>
							            <th>Installment</th>
							            <th>Total Amount</th>
							            <th>Due Amount</th>
							            <th>Due Date(LKR)</th>
							            <th>Status</th>
							        </tr>
							    </tfoot>
							</table>





						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<?php include 'include/footer.php';?>
	</div>
	<!--end wrapper-->

	<!-- Modal -->




	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="assets/plugins/validation/jquery.validate.min.js"></script>
	<script src="assets/plugins/validation/validation-script.js"></script>

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



	<!--app JS-->
	<script src="assets/js/app.js"></script>


</body>
</html>
