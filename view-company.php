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
                                          <div class="backbtn"><a href="dashboard.php"> </a></div>
                                           <div class="subtext"><h2>Add New Sales</h2></div>
                                          <div class="clear"></div>
                                      </div>
                                  <?php include_once 'PHP/Read/view-company-script.php'; ?>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $company_name;?></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">


                                                                   <div class="form-group row">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Campany Name:</label>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" id="input35" required="required" value="<?php echo $company_name;?>" name="company_name"class="form-control ">
                                                                     </div>
                                                                   </div>


                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Company Description :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                	<input type="text" id="input36" required="required"  value="<?php echo $company_description;?>" name="company_description" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Address :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                      <textarea class="form-control" required="required" id="bsValidation13" placeholder="Address ..."  required name="company_address" rows="4" cols="50"><?php echo $company_address; ?></textarea>
                                                                        </div>
                                                                      </div>

                                                                      <?php
                                                                        if ($company_status == '0') {
                                                                          $U_StatusD = 'Active';
                                                                        }else {
                                                                          $U_StatusD = 'Deactivate';
                                                                        }
                                                                        ?>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Company Status :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="form-control" id="input39" name="company_status" required>
  												                                                      	<option value="<?php echo $U_Status; ?>"><?php echo $U_StatusD;?></option>
  				                                                                        <option value="0">Active</option>
  				                                                                        <option value="1">Deactivate</option>
  									                                                      	  </select>
                                                                        </div>
                                                                      </div>




                                                                   <div class="form-group row ">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Create Date :</label>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" class="form-control" disabled="disabled"  id="input38" placeholder="Created Date" value="<?php echo $company_createdate;?>">
                                                                     </div>
                                                                   </div>


									<?php

                    $select_crateby = "SELECT * FROM user  WHERE U_id ='$company_createby'";
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

                                                                           	<input type="text" class="form-control" disabled="disabled"id="input38" placeholder="Created by" value="<?php echo $U_FName;?> <?php echo $U_LName; ?>">
                                                                         </div>
                                                                    </div>


	                                                               <input type="hidden" value="<?php echo $company_id;?>" name="company_id">

                                                                   <div class="ln_solid"></div>
                                                                   <div class="item form-group">
                                                                     <div class="col-md-6 col-sm-6  left-align">
                                                                       <?php
                                                                        if ($U_Typesession == '0' || $U_Typesession == '1' ) {
                                                                          echo '<button type="submit" class="btn btn-edit btn-sm" name="c_Update">Update</button>';
                                                                        }else {
                         // code...
                                                                        }

                                                                        ?>

                                                                       <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                                                     </div>
                                                                   </div>


                    </form>
                  </div>
                </div>
            </div>
          </div>
           <!-- / RIGHT LIST -->
          </div>
        </div>
        <!-- /page content -->
        			<?php include_once 'PHP/Write/update-company-script.php'; ?>

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
