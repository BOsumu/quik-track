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

    <title>Payment Units | Quick Track Admin - Kelsey Developments PLC</title>

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
                                               <h1><span>Project</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Units</h1>
                                               <h4>Record Book</h4>
                                           </div>
                                         </div>
                                       </div>

                                       <div class="setting">
                                         <div class="backbtn"><a href="dashboard.php"> </a></div>
                                           <div class="subtext2"><h2>Manage Units<br><span>of <strong><?php echo $project_name;?></strong></span></h2></div>
                                         <div class="clear"></div>
                                      </div>

            <div class="row">

<!-- sssssssssssssssss -->
<div class="col-md-12 col-sm-12 ">

    <div class="x_content">


      <!-- Smart Wizard -->
      <div>

	<?php include_once 'PHP/Read/view-project-script.php'; ?>
        <div class="row">

          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <!-- <div class="x_title">
                <h2>Add Payments</h2>

                <div class="clearfix"></div>
              </div> -->
              <div class="x_content">
                <br />
                <ul class="nav nav-tabs bar_tabs tab-text" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual" role="tab" aria-controls="home" aria-selected="true">Add Individually</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="bulk-tab" data-toggle="tab" href="#bulk" role="tab" aria-controls="profile" aria-selected="false">Upload Bulk</a>
                                    </li>

                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">

                                      <form class="form-label-left input_mask"  method="post" enctype="multipart/form-data">

                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                          <label for="fullname">Unit Name :</label>
                                          <input type="text" class="form-control" id="bsValidation1" placeholder="Unit Name" required name="unit_Name">
                                        		<div class="invalid-feedback">Please Enter a Unit.</div>
                                        </div>

                                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                                          <label for="fullname">Description :</label>
                                        <input type="text" class="form-control" id="" placeholder="Description" name="unit_Description">
                                        </div>


                                        <div class="col-md-4 col-sm-4  form-group has-feedback">
                                          <label for="fullname">Price :</label>
                                          <input type="number" class="form-control" id="PriceInput" placeholder="price" oninput="convertToWords()" required name="unit_Price">
                                          <div class="invalid-feedback">Please Enter a Price.</div>
                                          <br/>
                                        </div>


                                        <div class="col-md-4 col-sm-4  form-group has-feedback">
                                          <label for="fullname">Size:</label>
                                          <div class="input-group mb-3">
                                            	<input type="text" class="form-control" id="bsValidation3" placeholder="Unit Size in SQ.FT." required name="unit_Size">
                                             <span class="input-group-append">
                                             <span class="input-group-text">SQ.FT.</span>
                                             <div class="invalid-feedback">Please Enter a Unit Size.</div>
                                             </span>
                                           </div>
                                        </div>

                                        <input type="hidden" value="<?php echo $project_id;?>" name="project_id"/>
								                       	<input type="hidden" value="<?php echo $company_id;?>" name="company_id"/>
								                       	<input type="hidden" value="<?php echo $session_id;?>" name="unit_createby"/>
								                       	<?php date_default_timezone_set('Asia/Colombo'); $C_date = date("Y/m/d"); ?>
								                       	<input type="hidden" value="<?php echo $C_date;?>" name="unit_createdate"/>

                                        <div class="col-md-4 col-sm-4  form-group has-feedback" style="margin-top: 27px;">

                                           	<button type="submit" class="btn btn-add btn-sm" name="add_unit">Add Unit</button>
                                           <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                        </div>


                                      </form>
                                    </div>


                                    <div class="tab-pane fade" id="bulk" role="tabpanel" aria-labelledby="bulk-tab">
                                    </br>

                                      <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <div class="input-group mb-3">
                                           <a href="assets/templates/unit_upload_format.csv"><button  class="btn btn-login"><i class="fa fa-download" aria-hidden="true" style="color:#ffffff;"></i>&nbsp;&nbsp;Downloads CSV Format</button></a>
                                         </div>
                                      </div>

                                      <form method="post" enctype="multipart/form-data">

                                        <!-- <div class="col-md-12 col-sm-12  form-group has-feedback">
                                          <label for="formFile" class="form-label">Upload CSV flile</label>
                                              <input class="form-control" type="file" id="bsValidation3" accept=".csv" required name="filename">
                                              <div class="invalid-feedback">Please Add CSV File.</div>
                                          <br/>
                                        </div> -->

                                        <!-- <div class="col-md-12 col-sm-12 custom-file form-group">
                                          <input type="file" class="custom-file-input file-upload-default" name="filename[]" required="required" id="bsValidation3" accept=".csv">
                                          <input type="file" class="custom-file-input" name="filename" required="required" id="bsValidation3" accept=".csv">
                                          <label class="custom-file-label-upload">Click here to choose the file</label>
                                          <div class="invalid-feedback">Please Add CSV File.</div>
                                        </div> -->

                                        <div class="form-group">
                                          <input type="file" name="filename" class="file-upload-default" id="bsValidation3" accept=".csv" required="required">
                                       </div>

                                       <div class="mb-3">
											                	<label for="formFile" class="form-label">Upload CSV flile</label>
												                <input class="form-control" type="file" id="bsValidation3" accept=".csv" required="" name="filename">
												                <div class="invalid-feedback">Please Add CSV File.</div>
                                      </div>

                                        <input type="hidden" value="<?php echo $project_id;?>" name="project_id"/>
                                        <input type="hidden" value="<?php echo $company_id;?>" name="company_id"/>
                                        <input type="hidden" value="<?php echo $session_id;?>" name="unit_createby"/>
                                        <?php date_default_timezone_set('Asia/Colombo'); $C_date = date("Y/m/d"); ?>
                                        <input type="hidden" value="<?php echo $C_date;?>" name="unit_createdate"/>

                                        <div class="col-md-4 col-sm-4  form-group has-feedback" style="margin-top: 27px;">
                                          	<button type="submit" class="btn btn-login btn-sm" name="add_unit_bulk"><i class="fa fa-upload" aria-hidden="true" style="color:#ffffff;"></i>&nbsp;&nbsp;Upload Unit</button>
                                           <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                        </div>



                                      </form>
                                    </div>
                                    	<?php include 'PHP/Write/addproject_unit_script.php';?>

              </div>
            </div>

          </div>
        </div>


        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List of Units</h2>

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">

                      <!-- <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
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

                                          <td><a href="view-unit.php?view_unit=<?php echo $row['unit_id']; ?>"><button type="button" class="btn btn-sm btn-view btn-rounded waves-effect waves-light">View & Edit</button></a></td>

                          </tr>
                                    <?php $i++; } ?>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Unit Name</th>
                            <th>Description</th>
										        <th>Size</th>
                            <th>Price</th>
                            <th>Status</th>
                	        	<th>Action</th>
                          </tr>
                        </tfoot>

                      </table> -->

                      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>

                          <tr>
                            <th>Project</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Units</th>
                            <th>Status</th>
                            <th>Action</th>

                          </tr>
                        </thead>


                        <tbody>
                          <?php
                         $sql = 'SELECT * FROM  project JOIN companies ON companies.company_id = project.company_id';
                         $result = mysqli_query($conn,$sql);
                         $i = 1;
                         while($row = mysqli_fetch_array($result))
                           {
                        ?>
                          <tr>
                            <td><?php echo $row['project_name'];?></td>
                                <td><?php echo $row['company_name']; ?></td>
                                <td><?php echo $row['project_location']; ?></td>
                                <td><a href="units.php?view_project=<?php echo $row['project_id']; ?>"><button type="button" class="btn btn-sm btn-login">Manage</button></a></td>
                                <?php
                                if ($row['project_status']=='0') {
                                    echo '<td><span class="badge bg-success">Active</span></td>';
                                }else {
                                  echo '<td><span class="badge bg-danger">Inactive</span></td>';
                                }
                                ?>
                              <td>
                                  <p class="text-muted">
                                <a href="view-project.php?view_project=<?php echo $row['project_id']; ?>"><button type="button" class="btn btn-sm btn-view">View & Edit</button></a></td>
                                 </p>

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

        </div>
      </div>

      </div>
      <!-- End SmartWizard Content -->

    </div>

</div>



<!-- //sssssssssssssssssssssssssss -->
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


  </body>
  </html>
