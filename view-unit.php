<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>

  <?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>
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
                                          <div class="backbtn"><a href="dashboard.php"> </a></div>
                                           <div class="subtext"><h2>Add New Sales</h2></div>
                                          <div class="clear"></div>
                                      </div>

<?php include_once 'PHP/Read/view-unit-script.php'; ?>
            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Unit <?php echo $unit_Name;?> in
									<?php $select_Project = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
									$run_query = mysqli_query($conn,$select_Project);
									while ($row_post = mysqli_fetch_array($run_query)){
									  $project_name = $row_post ['project_name'];

									}

									?>
									<?php echo $project_name;?> at
									<?php $select_company = "SELECT company_name FROM companies  WHERE company_id ='$company_id'";
									$run_query = mysqli_query($conn,$select_company);
									while ($row_post = mysqli_fetch_array($run_query)){
									  $company_name = $row_post ['company_name'];

									}

									?>
									<?php echo $company_name;?>


</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">


                                                                   <div class="form-group row">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Unit Name:</label>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" class="form-control" id="input35" value="<?php echo $unit_Name;?>" name="unit_Name" required="required">
                                                                     </div>
                                                                   </div>


                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Unit Description :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                        <input type="text" class="form-control" id="input35" value="<?php echo $unit_Description;?>" name="unit_Description" required="required">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                       <label for="inputCompareatprice" class="control-label col-md-2 col-sm-3 ">Price :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text">LKR</span>
                                                                              </div>
                                                                              	<input type="text" class="form-control" id="inputCompareatprice" placeholder="00.00"  value="<?php echo $unit_Price;?>" name="unit_Price"  required="required">
                                                                            </div>
                                                                       </div>
                                                                     </div>

                                                                     <div class="form-group row ">
                                                                      <label for="inputCompareatprice" class="control-label col-md-2 col-sm-3 ">Unit Size :</label>
                                                                       <div class="col-md-5 col-sm-9 ">
                                                                          <div class="input-group mb-3">
                                                                              <input type="text" class="form-control" id="bsValidation3" placeholder="Unit Size in SQ.FT." required="required" name="unit_Size" value="<?php echo $unit_Size;?>">
                                                                              <div class="input-group-append">
                                                                              <span class="input-group-text">SQ.FT.</span>
                                                                              </div>
                                                                           </div>
                                                                      </div>
                                                                    </div>

                                                                    <?php
                                                                       if ($unit_status == '0') {
                                                                         $U_StatusD = 'Unsold';
                                                                       }else {
                                                                         $U_StatusD = 'Sold';
                                                                       }
                                                                       ?>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Unit Status :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="form-control" id="input39" name="unit_status" required="required">
  												                                                      	<option value="<?php echo $unit_status; ?>"><?php echo $U_StatusD;?></option>
  				                                                                        <option value="0">Unsold</option>
  				                                                                        <option value="1">Sold</option>
  									                                                      	  </select>
                                                                        </div>
                                                                      </div>




                                                                   <div class="form-group row ">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Create Date :</label>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" class="form-control" disabled="disabled"  id="input38" placeholder="Created Date" value="<?php echo $unit_createdate;?>" disabled="disabled">
                                                                     </div>
                                                                   </div>

                                                                   <?php

                                                                   $select_crateby = "SELECT * FROM user  WHERE U_id ='$unit_createby'";
                                                                   $run_query = mysqli_query($conn,$select_crateby);
                                                                   while ($row_post = mysqli_fetch_array($run_query)){
                                                                     $U_id = $row_post ['U_id'];

                                                                     $U_FName = $row_post ['U_FName'];
                                                                     $U_LName = $row_post ['U_LName'];


                                                                   }

                                                                   ?>





                                                                   <div class="form-group row ">
                                                                    <label class="control-label col-md-2 col-sm-3 ">Create by :</label>
                                                                     <div class="col-md-5 col-sm-9 ">

                                                                           	<input type="text" class="form-control" id="input38" placeholder="Created by" value="<?php echo $U_FName;?> <?php echo $U_LName; ?>" disabled="disabled" >
                                                                         </div>
                                                                    </div>


	                                                              		<input type="hidden" value="<?php echo $unit_id;?>" name="unit_id">

                                                                   <div class="ln_solid"></div>
                                                                   <div class="item form-group">
                                                                     <div class="col-md-6 col-sm-6  left-align">
                                                                       <?php
											                                                	if ($U_Typesession == '0' || $U_Typesession == '1' ) {
												                                                	echo '<button type="submit" class="btn btn-edit btn-sm" name="P_Update">Update</button>';
												                                                	echo '<button type="submit" class="btn btn-delete btn-sm" name="U_Delete">Delete</button>';
											                                                	}else {
													// code...
										                                                	}

											                                                	?>


                                                                       <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                                                     </div>
                                                                   </div>
	<?php include_once 'PHP/Write/update-project-unit-script.php'; ?>

                    </form>
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


  </body>
</html>
