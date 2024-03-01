<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en" >
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.png" type="image/png" />
	<!--plugins-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

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



	<title>Sales | Quik Track Admin - Kelsey Developments PLC</title>
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
					<div class="breadcrumb-title pe-3">Payment</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Payment Managemnt</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-sm-6">
						<h6 class="mb-0 text-uppercase">Add Payment</h6>
					</div>

				</div>
<?php include 'PHP/Read/view-sales-script.php';?>
				<hr/>

					<form class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Payment</h5>
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Pay Date</label>
										<div class="col-sm-9">
											<input type="date" class="form-control" id="input35" placeholder="Pay Date" required name="pay_date">
										</div>
									</div>
									<?php
									$select_customer = "SELECT * FROM customer   WHERE Customer_id ='$Customer_id'";
									$run_query = mysqli_query($conn,$select_customer);
									while ($row_post = mysqli_fetch_array($run_query)){
									  $C_namewinitials = $row_post ['C_namewinitials'];
									}
									?>
									<div class="row mb-3">
										<label for="input36" class="col-sm-3 col-form-label">Purchased Customer</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input36" placeholder="Phone No" value="<?php echo $C_namewinitials;?>" readonly>
										</div>
									</div>
									<?php
									$select_customer = "SELECT * FROM  project_units    WHERE unit_id ='$unit_id'";
									$run_query = mysqli_query($conn,$select_customer);
									while ($row_post = mysqli_fetch_array($run_query)){
									  $unit_Name = $row_post ['unit_Name'];
									}
									?>

									<?php
									$select_customer = "SELECT * FROM  project    WHERE project_id ='$project_id'";
									$run_query = mysqli_query($conn,$select_customer);
									while ($row_post = mysqli_fetch_array($run_query)){
									  $project_name = $row_post ['project_name'];
									}
									?>

									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Purchased Unit</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input37" placeholder="Purchased Unit" value="<?php echo $unit_Name;?> - <?php echo $project_name;?>" readonly>
										</div>
									</div>
									<?php
									$numberFromDB = isset($selling_price) ? $selling_price : 0;
									$formattedselling_price = number_format($numberFromDB, 2);
									?>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Selling Price (LKR)</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="<?php echo $formattedselling_price;?>" readonly>
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Total Paid (Till Now) (LKR)</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="" readonly>
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Blance (LKR)</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="" readonly>
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Pay Description</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="" required name="pay_discription">
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Pay Amount</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="" required name="paid_amount">
										</div>
									</div>

									<div class="row mb-3">
										<label for="input39" class="col-sm-3 col-form-label">Pay Mathod</label>
										<div class="col-sm-9">
											<select class="form-select" id="input39" required name="payment_methord">
												<option selected disabled value>Select</option>
												<option value="Bank Transfer">Bank Transfer</option>
												<option value="Cash">Cash</option>
												<option value="Credit Card">Credit Card</option>
												<option value="Cheque">Cheque</option>
											  </select>
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Payment Description</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="" required name="payment_discription">
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Sheet No</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input38" value="" required name="pay_sheetno">
										</div>
									</div>

									<div class="row mb-3">
										<label for="input38" class="col-sm-3 col-form-label">Next Payment Date</label>
										<div class="col-sm-9">
											<input type="date" class="form-control" id="input35" placeholder="Next Pay Date" required name="next_pay_day">
										</div>
									</div>

									<input type="hidden" value="<?php echo $sale_id;?>" name="sale_id">
									<input type="hidden" value="<?php echo $session_id;?>" name="payment_add_by">

									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-primary px-4" name="add_payment">Add Payment</button>
												<button type="button" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
							</div>
						</div>


				</div>
			</div>
		</form>
		</div>
<?php include 'PHP/Write/addPayment_script.php';?>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<?php include 'include/footer.php';?>
	</div>
	<!--end wrapper-->




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



</body>
</html>
