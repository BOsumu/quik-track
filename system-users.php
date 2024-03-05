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

    <title>System Users List | Quick Track Admin - Kelsey Developments PLC</title>

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
                                               <h1><span>Customer</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
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
                                        <p class="text-muted font-13 m-b-30">
                                          <form >

                                              <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Company</button>
                                          </form>
                                        </p>

                              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Desig</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                  </tr>
                                </thead>


                                <tbody>
                                  <?php
                   $sql = 'SELECT * FROM  user';
                   $result = mysqli_query($conn,$sql);
                   $i = 1;
                   while($row = mysqli_fetch_array($result))
                     {
                  ?>

                                  <tr>
                                    <td><?php echo $row['U_Title'];echo $row['U_FName']; echo '&nbsp';  echo $row['U_LName']; ?></td>
                        <td><?php echo $row['U_Email']; ?></td>
                        <td><?php echo $row['U_Contact']; ?></td>
                        <td><?php echo $row['U_Designation']; ?></td>
                        <?php if ($row['U_Type']=='0') {
                          echo '<td><span class="badge badge-danger  shadow-sm w-100">Super Admin</span>';
                        }elseif($row['U_Type']=='1') {
                          echo '<td><span class="badge badge-info  shadow-sm w-100">Admin</span></td>';
                        }elseif($row['U_Type']=='2') {
                          echo '<td><span class="badge badge-primary shadow-sm w-100"> Sales Admin</span></td>';
                        }else {
                            echo '<td><span class="badge badge-warning  shadow-sm w-100"> Sales Person</span></td>';

                        }

                        if ($row['U_Status']=='0') {
                            echo '<td><span class="badge bg-success  shadow-sm w-100">Active</span></td>';
                        }else {
                          echo '<td><span class="badge bg-danger  shadow-sm w-100">Deactivate</span></td>';
                        }
                        ?>

                        <td><a href="View-System-user.php?view_user=<?php echo $row['U_id']; ?>"><button type="button" class="btn btn-sm btn-edit">View & Edit</button></a></td>

                    </tr>
                      <?php $i++; } ?>

<tfoot>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Desig</th>
    <th>Type</th>
    <th>Status</th>
    <th>Action</th>

  </tr>

</tfoot>

                                </tbody>
                              </table>



                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                      <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add System User</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">



                                                        <form id="demo-form" data-parsley-validate method="post" enctype="multipart/form-data">

                                                          <div class='col-sm-2'>
                                                            Title
                                                              <div class="form-group">
                                                                  <div class='input-group date' id='myDatepicker2'>
                                                                  	<select id="bsValidation9" class="form-control" name="U_Title" required>
                                                                      <option value="">Choose..</option>
                                                                      <option value="Mr.">Mr.</option>
                                                                      <option value="Mrs.">Mrs.</option>
                                                                      <option value="Miss.">Miss.</option>
                                                                      <option value="Ms.">Ms.</option>
                                                                      <option value="Dr.">Dr.</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                    Please select.
                  </div>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <div class='col-sm-5'>
                                                            First Name
                                                            <div class="form-group">
                                                                <div class='input-group date' id='myDatepicker2'>
                                                                  <input type="text" class="form-control" id="bsValidation3" placeholder="First Name" name="U_FName" required>
										                                              <div class="invalid-feedback">Please Type First Name.</div>

                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class='col-sm-5'>
                                                            Last Name
                                                            <div class="form-group">
                                                                <div class='input-group date' id='myDatepicker2'>
                                                                  <input type="text" class="form-control" id="bsValidation4" placeholder="Last Name" name="U_LName" required>
  										                                            <div class="invalid-feedback">Please Type First Name.</div>
                                                                </div>
                                                            </div>
                                                          </div>


                                                          <div class='col-sm-6'>
                                                            Email
                                                            <div class="form-group">
                                                                <div class='input-group date' id='myDatepicker2'>
                                                                  <input type="email" class="form-control" id="bsValidation4" placeholder="Email" name="U_Email" required>
										                                              <div class="invalid-feedback">Please provide a valid email.</div>

                                                                </div>
                                                            </div>
                                                          </div>

                                                          <div class='col-sm-6'>
                                                            Contact No
                                                            <div class="form-group">
                                                                <div class='input-group date' id='myDatepicker2'>
                                                                  <input type="number" class="form-control" id="bsValidation4" placeholder="Contact No" name="U_Contact" required>
  									                                             	<div class="invalid-feedback">Please Type Contact Number.</div>

                                                                </div>
                                                            </div>
                                                          </div>


                                                          <div class='col-sm-6'>
                                                            Designation
                                                            <div class="form-group">
                                                                <div class='input-group date' id='myDatepicker2'>
                                                                  <input type="text" class="form-control" id="bsValidation4" placeholder="Designation" name="U_Designation" required>
  									                                             	<div class="invalid-feedback">Please Type Designation.</div>
                                                                </div>
                                                            </div>
                                                          </div>

                                                          <div class='col-sm-6'>
                                                              User Type
                                                              <div class="form-group">
                                                                  <div class='input-group date' id='myDatepicker2'>
                                                                    <select id="bsValidation9" class="form-control" name="U_Type" required>
  										                                               	<option selected disabled value>Choose.</option>
  										                                               	<option value="0">Super Admin</option>
                                                                       <option value="1">Admin</option>
                                                                       <option value="2">Sales Admin</option>
                                                                       <option value="3">Sales Person</option>
  									                                               	</select>
  									                                               	<div class="invalid-feedback">
  										                                               	Please select.
  									                                               	</div>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                           <div class='col-sm-6'>
                                                              Password
                                                              <div class="form-group">
                                                                  <div class='input-group date' id='myDatepicker3'>
                                                                    <input type="password" class="form-control" id="password" onkeyup='check()' placeholder="Enter Password" required>
                  <div class="invalid-feedback">
                    Please Type a password.
                  </div>
                                                                  </div>
                                                              </div>
                                                          </div>



                                                           <div class='col-sm-6'>
                                                              Re Enter Password
                                                              <div class="form-group">
                                                                  <div class='input-group date' id='datetimepicker6'>

                                                                    <input type="password" class="form-control" id="checkPassword" onkeyup='check()' placeholder="Re-Enter Password" name="U_Password" required>
                  <div class="invalid-feedback">
                    Please Re Enter Password.
                  </div>
                                                                  </div>
                                                              </div>
                                                          </div>



                                                      </div>
                                                      <div class="modal-footer">
                                                        <input type="hidden" value="<?php echo $session_id;?>" name="U_Cratedby">
            <?php
            date_default_timezone_set('Asia/Colombo');
            $C_date = date("Y/m/d"); ?>
						<input type="hidden" value="<?php echo $C_date;?>" name="U_CratedDate">

						<button type="submit" class="btn btn-add btn-sm" name="add_user">Add User</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

                                                      </div>
                                                    </form>

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

              </div>
            </div>
          </div>
          		<?php include_once 'PHP/Write/addsystemuser_script.php'; ?>
           <!-- / RIGHT LIST -->
          </div>
        </div>
        <!-- /page content -->

        <!-- Datatables -->
        <!-- footer content -->
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
    var check = function() {
        var password = document.getElementById('password').value;
        var checkPassword = document.getElementById('checkPassword').value;
        var passwordLength = password.length;
        var validCharacters = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,15}$/;

        if (passwordLength < 8 || passwordLength > 15) {
            document.getElementById('alertPassword').style.color = '#EE2B39';
            document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-exclamation-triangle"></i> Password must be between 8 and 15 characters long!</span>';
        } else if (!validCharacters.test(password)) {
            document.getElementById('alertPassword').style.color = '#EE2B39';
            document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-exclamation-triangle"></i> Password must contain at least one lowercase letter, one uppercase letter, one number, and one symbol!</span>';
        } else if (password !== checkPassword) {
            document.getElementById('alertPassword').style.color = '#EE2B39';
            document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-exclamation-triangle"></i> Passwords do not match!</span>';
        } else {
            document.getElementById('alertPassword').style.color = '#8CC63E';
            document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-check-circle"></i> Password is a match!</span>';
        }
    }
</script>



  </body>
  </html>
