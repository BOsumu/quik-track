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
	<title>Project Units | Quick Track Admin - Kelsey Developments PLC</title>
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
					<div class="breadcrumb-title pe-3">Project Units</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Project Units Managemnt</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<?php include_once 'PHP/Read/view-project-script.php'; ?>




				<div class="row">
					<div class="col-sm-12">
						<h6 class="mb-0 text-uppercase"><?php echo $project_name;?> - Units Manage</h6>
					</div>

				</div>

				<hr/>

				<div class="card">
					<div class="card-body">

						<ul class="nav nav-pills mb-3" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-unite font-18 me-1'></i>
												</div>
												<div class="tab-title">Add Individually</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-icon"><i class='bx bx-unite font-18 me-1'></i>
												</div>
												<div class="tab-title">Upload Bulk</div>
											</div>
										</a>
									</li>

								</ul>

								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="primary-pills-home" role="tabpanel">
										<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
											<div class="col-md-6">
										<label for="input1" class="form-label">Unit Name</label>
										<input type="text" class="form-control" id="bsValidation1" placeholder="Unit Name" required name="unit_Name">
										<div class="invalid-feedback">Please Enter a Unit.</div>
									</div>



									<div class="col-md-6">
										<label for="input1" class="form-label">Description</label>
										<input type="text" class="form-control" id="" placeholder="Description" name="unit_Description">
									</div>



									<div class="col-md-6">
						        <label for="input1" class="form-label">Price</label>
										<input type="number" class="form-control" id="PriceInput" placeholder="price" oninput="convertToWords()" required name="unit_Price">
										<div class="invalid-feedback">Please Enter a Price.</div>
						    		<br/>
										<h6 class="text-danger" id="PriceWords"></h6>

    						</div>

									<div class="col-md-6">
										<label for="input1" class="form-label">Size</label>
										<div class="input-group">
											<input type="text" class="form-control" id="bsValidation3" placeholder="Unit Size in SQ.FT." required name="unit_Size">
											<label class="input-group-text" for="inputGroupSelect02">SQ.FT.</label>
											<div class="invalid-feedback">Please Enter a Unit Size.</div>
										</div>

									</div>

									<!-- <div class="col-md-4">
							        <label for="input1" class="form-label">No of Beadrooms</label>
											<input type="number" class="form-control" id="PriceInput" placeholder="Beadrooms" oninput="convertToWords()" name="unit_Beadrooms" required>
							    		<br/>
											<div class="invalid-feedback">Please Enter a No of Beadrooms.</div>
											<h6 class="text-danger" id="PriceWords"></h6>

	    						</div>

									<div class="col-md-4">
											<label for="input1" class="form-label">No of Bathroom</label>
											<input type="number" class="form-control" id="PriceInput" placeholder="Bathroom" oninput="convertToWords()" name="unit_Bathroom" required>
											<br/>
											<div class="invalid-feedback">Please Enter a No of Bathroom.</div>
											<h6 class="text-danger" id="PriceWords"></h6>

									</div>

									<div class="col-md-4">
											<label for="input1" class="form-label">Floor Level</label>
											<input type="number" class="form-control" id="PriceInput" placeholder="Floor Level" oninput="convertToWords()" name="unit_FloorLevel" required>
											<br/>
											<div class="invalid-feedback">Please Enter a Floor Level.</div>
											<h6 class="text-danger" id="PriceWords"></h6>

									</div> -->







									<input type="hidden" value="<?php echo $project_id;?>" name="project_id"/>
									<input type="hidden" value="<?php echo $company_id;?>" name="company_id"/>
									<input type="hidden" value="<?php echo $session_id;?>" name="unit_createby"/>
									<?php date_default_timezone_set('Asia/Colombo'); $C_date = date("Y/m/d"); ?>
									<input type="hidden" value="<?php echo $C_date;?>" name="unit_createdate"/>

									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-success px-4" name="add_unit">Add Unit</button>
											<button type="reset" class="btn btn-light px-4">Reset</button>
										</div>
									</div>


										</form>
									</div>
									<div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
										<div class="col-md-12">
											<div class="d-md-flex d-grid align-items-center gap-3">
										<a href="assets/templates/unit_upload_format.csv"><button  class="btn btn-info px-5"><i class='bx bx-cloud-download mr-1' download></i>Downloads CSV Format</button></a>
									</div>
									</div>
									<br/>
										<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>

											<div class="mb-3">
												<label for="formFile" class="form-label">Upload CSV flile</label>
												<input class="form-control" type="file" id="bsValidation3" accept=".csv" required name="filename">
												<div class="invalid-feedback">Please Add CSV File.</div>

											</div>

											<input type="hidden" value="<?php echo $project_id;?>" name="project_id"/>
											<input type="hidden" value="<?php echo $company_id;?>" name="company_id"/>
											<input type="hidden" value="<?php echo $session_id;?>" name="unit_createby"/>
											<?php date_default_timezone_set('Asia/Colombo'); $C_date = date("Y/m/d"); ?>
											<input type="hidden" value="<?php echo $C_date;?>" name="unit_createdate"/>

											<div class="col-md-12">
												<div class="d-md-flex d-grid align-items-center gap-3">
													<button type="submit" class="btn btn-success px-4" name="add_unit_bulk">Upload Unit</button>



												</div>
											</div>
											</form>


									</div>

								</div>
								<br/>
								<?php include 'PHP/Write/addproject_unit_script.php';?>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Unit Name</th>
                    <th>Description</th>
										<th>Size</th>
                    <th>Price</th>
                    <th>Status</th>
                		<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                  <?php
																	$sql = "SELECT * FROM  project_units WHERE project_id = '$project_id' AND Unit_delete !='1'";

                                   $result = mysqli_query($conn,$sql);
                                   $i = 1;
                                   while($row = mysqli_fetch_array($result))
                                     {
                                  ?>

                                  <tr>

                                          <td><?php echo $row['unit_Name'];?></td>
                                          <td><?php echo $row['unit_Description']; ?></td>
																					<td><?php echo $row['unit_Size']; ?> SQ.FT.</td>
																					<td><?php echo $row['unit_Price']; ?> LKR</td>
																					<?php
	                                          if ($row['unit_status']=='0') {
	                                              echo '<td><span class="badge bg-success">Unsold</span></td>';
	                                          }else {
	                                            echo '<td><span class="badge bg-danger">Sold</span></td>';
	                                          }
	                                          ?>

                                          <td><a href="view-unit.php?view_unit=<?php echo $row['unit_id']; ?>"><button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">View & Edit</button></a></td>

                                      </tr>

                                        <?php $i++; } ?>



                                </tbody>

								<tfoot>
									<tr>
										<th>Project</th>
                    <th>Company</th>
										<th>Location</th>
                    <th>Units</th>
                    <th>Status</th>
                		<th>Action</th>
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

		<?php //include_once 'PHP/Write/addproject_script.php'; ?>


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


	<script>
			function convertToWords() {
					// Get the input element
					const inputElement = document.getElementById("PriceInput");

					// Get the value entered by the user
					const inputValue = parseInt(inputElement.value);

					// Define an array of words for numbers
					const words = [
							"",
							"One",
							"Two",
							"Three",
							"Four",
							"Five",
							"Six",
							"Seven",
							"Eight",
							"Nine",
							"ten",
							"Eleven",
							"Twelve",
							"Thirteen",
							"Fourteen",
							"Fifteen",
							"Sixteen",
							"Seventeen",
							"Eighteen",
							"Nineteen"
					];

					// Define an array of tens
					const tens = [
							"",
							"",
							"Twenty",
							"Thirty",
							"Forty",
							"Fifty",
							"Sixty",
							"Seventy",
							"Eighty",
							"Ninety"
					];

					// Function to convert a number less than 1000 to words
					function convertLessThanOneThousand(number) {
							if (number === 0) {
									return "";
							} else if (number < 20) {
									return words[number];
							} else if (number < 100) {
									const ten = Math.floor(number / 10);
									const remainder = number % 10;
									return tens[ten] + " " + words[remainder];
							} else {
									const hundred = Math.floor(number / 100);
									const remainder = number % 100;
									return words[hundred] + " Hundred " + convertLessThanOneThousand(remainder);
							}
					}

					// Function to convert a number to words
					function convertToWords(number) {
							if (number === 0) {
									return "Zero";
							} else {
									const billion = Math.floor(number / 1000000000);
									const million = Math.floor((number % 1000000000) / 1000000);
									const thousand = Math.floor((number % 1000000) / 1000);
									const remainder = number % 1000;
									let result = "";

									if (billion > 0) {
											result += convertLessThanOneThousand(billion) + " Billion ";
									}

									if (million > 0) {
											result += convertLessThanOneThousand(million) + " Million ";lo
									}

									if (thousand > 0) {
											result += convertLessThanOneThousand(thousand) + " Thousand ";
									}

									if (remainder > 0) {
											result += convertLessThanOneThousand(remainder);
									}

									return result.trim();
							}
					}

					// Convert the input value to words and display it
					const priceWords = convertToWords(inputValue);
					const priceWordsElement = document.getElementById("PriceWords");
					priceWordsElement.textContent = priceWords;
			}
	</script>





	<!--app JS-->
	<script src="assets/js/app.js"></script>


</body>
</html>
