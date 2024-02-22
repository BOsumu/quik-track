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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
					<div class="breadcrumb-title pe-3">Sales</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Sales Managemnt</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-sm-6">
						<h6 class="mb-0 text-uppercase">Sales List</h6>
					</div>

				</div>
<?php include 'PHP/Read/view-payment-plan.php';?>
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
	                <div class="text-end">
	                    <button type="button" class="btn btn-dark" id="pdf-button" onclick="printDiv()"><i class="fa fa-file-pdf-o"></i> Print</button>
	                </div>
	                <hr />
	            </div>
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

								<hr/>

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
								<td style="width:10%; border:1px solid !important; background-color: #000 !important; color:#fff !important;">#</td>
								<td style="width: 40%; border:1px solid !important;background-color: #000 !important; color:#fff !important;">Description</td>
								<td style="width: 25%; border:1px solid !important; background-color: #000 !important; color:#fff !important;">Due Date</td>
								<td style="width: 25%; border:1px solid !important; background-color: #000 !important; color:#fff !important;">Amount(LKR)</td>
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
								<td style="width: 20%; border:1px solid !important; background-color: #000 !important; color:#fff !important; border-color: #000 !important; " align="right"><b><?php echo number_format($selling_price, 2); ?></b></td>
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
	            </div>
	        </div>
	    </div>
	</div>






			</div>
		</div>



		<!--end page wrapper -->
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



	<!--app JS-->
	<script src="assets/js/app.js"></script>



</body>
</html>
