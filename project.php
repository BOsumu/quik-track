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
                                               <h1><span>Projects</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
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
                                          <form>

                                              <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Project</button>
                                          </form>
                                        </p>

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



                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                      <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add Project</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                          <div class="field item form-group">
                                                              <label class="col-form-label col-md-3 col-sm-3  label-align">Comapany<span class="required">*</span></label>
                                                              <div class="col-md-6 col-sm-6">
                                                                <select id="bsValidation9" class="form-control" required="required" name="company_id">
											<option selected disabled value>...</option>
											<?php
												$result = mysqli_query($conn, "SELECT * FROM companies WHERE company_status = '0'" );
												while ($row = mysqli_fetch_array($result)) {
											?>
								      <option value="<?php echo $row["company_id"];?>"> <?php echo $row["company_name"];?></option>
							  			<?php }?>
										</select>
										<div class="invalid-feedback">
										   Please select a Company.
										</div>
                                                                </div>
                                                          </div>
                                                          <div class="field item form-group">
                                                              <label class="col-form-label col-md-3 col-sm-3  label-align">Project Name<span class="required">*</span></label>
                                                              <div class="col-md-6 col-sm-6">
                                                                  <input type="text" class="form-control" id="bsValidation4" placeholder="Project Name" name="project_name" required='required' data-validate-length-range="8,20" /></div>

                                                           <div class="invalid-feedback">Please provide a Project Name.</div>
                                                          </div>
                                                          <div class="field item form-group">
                                                              <label class="col-form-label col-md-3 col-sm-3  label-align">Location<span class="required">*</span></label>
                                                              <div class="col-md-6 col-sm-6">
                                                                  <input class="form-control" type="text"  id="bsValidation4" placeholder="Location" name="project_location" required='required' data-validate-length-range="8,20" /></div>
                                                                  	<div class="invalid-feedback">Please Type Location.</div>
                                                          </div>

                                                          <div class="field item form-group">
                                                              <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required">*</span></label>
                                                              <div class="col-md-6 col-sm-6">
                                                                  <textarea required="required" name='message' rows="4" cols="50" id="bsValidation13" placeholder="Description ..." name="project_description"></textarea>
                                                                  <div class="invalid-feedback">
                                                                Please enter Description.
                                                                </div>
                                                                </div>
                                                          </div>



                                                      </div>
                                                      <div class="modal-footer">
                                                        <input type="hidden" value="<?php echo $session_id;?>" name="project_createby">
                                                        <?php
                                                        date_default_timezone_set('Asia/Colombo');
                                                        $C_date = date("Y/m/d"); ?>

                                                        <input type="hidden" value="<?php echo $C_date;?>" name="project_createdate">

                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-add btn-sm" name="add_Project">Add Project</button>
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
           <!-- / RIGHT LIST -->
           		<?php include_once 'PHP/Write/addproject_script.php'; ?>
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
