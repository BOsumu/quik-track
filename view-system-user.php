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
                                           <div class="subtext"><h2>Edit System User</h2></div>
                                          <div class="clear"></div>
                                      </div>

<?php include_once 'PHP/Read/View-System-user-script.php'; ?>
            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $U_Title;echo $U_FName; echo '&nbsp'; echo $U_LName;?></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">



                                                                                         <div class="form-group row">
                                                                                           <label class="control-label col-md-2 col-sm-3 ">Title:</label>
                                                                                           <div class="col-md-5 col-sm-9 ">
                                                                                             <select class="form-control" id="input39" name="U_Title" required>
                                                                                              <option value="<?php echo $U_Title;?>"><?php echo $U_Title;?></option>
                                                                                              <option value="Mr.">Mr.</option>
                                                                                              <option value="Mrs.">Mrs.</option>
                                                                                              <option value="Miss.">Miss.</option>
                                                                                              <option value="Ms.">Ms.</option>
                                                                                              <option value="Dr.">Dr.</option>
                                                                                              </select>
                                                                                           </div>
                                                                                         </div>


                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">First Name:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                       	<input type="text" class="form-control" id="input35" placeholder="First Name" value="<?php echo $U_FName;?>" name="U_FName" required="required">
                                                                        </div>
                                                                      </div>

                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Last Name :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    	<input type="text" class="form-control" id="input36" placeholder="Last Name" value="<?php echo $U_LName;?>" name="U_LName" required="required">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                          <label class="control-label col-md-2 col-sm-3 ">Email Address :</label>
                                                                          <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="email" class="form-control" id="input37" placeholder="Email Address" value="<?php echo $U_Email; ?>" name="U_Email" required="required">
                                                                          </div>
                                                                        </div>


                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Contact No :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    	<input type="number" class="form-control" id="input38" placeholder="Contact No" value="<?php echo $U_Contact;?>" name="U_Contact" required="required">
                                                                        </div>
                                                                      </div>


                                                                      <div class="form-group row">
                                                                          <label class="control-label col-md-2 col-sm-3 ">Designation :</label>
                                                                          <div class="col-md-5 col-sm-9 ">
                                                                        	<input type="text" class="form-control" id="input38" placeholder="Designation" value="<?php echo $U_Designation;?>" name="U_Designation" required="required">
                                                                          </div>
                                                                        </div>


                                                                        <?php
                                                                                          if ($U_Status == '0') {
                                                                                            $U_StatusD = 'Active';
                                                                                          }else {
                                                                                            $U_StatusD = 'Deactivate';
                                                                                          }
                                                                                          ?>



                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Company Status :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="form-control" id="input39" name="U_Status" required>
  												                                                      	<option value="<?php echo $U_Status; ?>"><?php echo $U_StatusD;?></option>
  				                                                                        <option value="0">Active</option>
  				                                                                        <option value="1">Deactivate</option>
  									                                                      	  </select>
                                                                        </div>
                                                                      </div>

                                                                      <?php
                                                                       if ($U_Type == '0') {
                                                                         $U_typeD = 'Super Admin';
                                                                       }elseif($U_Type == '1') {
                                                                         $U_typeD = 'Admin';
                                                                       }elseif ($U_Type == '2') {
                                                                         $U_typeD = 'Sales Admin';
                                                                       }else {
                                                                           $U_typeD = 'Sales Person';
                                                                       }
                                                                       ?>


                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">User Type :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="form-control" id="input39" name="U_Type" required>
                                                                            <option value="<?php echo $U_Type; ?>"><?php echo $U_typeD; ?></option>
                                                                               <option value="0">Super Admin</option>
                                                                               <option value="1">Admin</option>
                                                                               <option value="2">Sales Admin</option>
                                                                               <option value="3">Sales Person</option>
                                                                              </select>
                                                                        </div>
                                                                      </div>


                                                                      <?php

                                                                           $select_crateby = "SELECT * FROM user  WHERE U_id ='$U_Cratedby'";
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

                                                                            	<input type="text" class="form-control" id="input38" placeholder="Created by" value="<?php echo $U_FName;?> <?php echo $U_LName; ?>" disabled name="U_Cratedby">
                                                                            </div>
                                                                       </div>


    <!--


                                                                   <div class="form-group row ">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Create Date :</label>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" class="form-control" disabled="disabled"  id="input38" placeholder="Created Date" value="">
                                                                     </div>
                                                                   </div>



                                                                   <div class="form-group row ">
                                                                    <label class="control-label col-md-2 col-sm-3 ">Create by :</label>
                                                                     <div class="col-md-5 col-sm-9 ">

                                                                           	<input type="text" class="form-control" disabled="disabled"id="input38" placeholder="Created by" value="<?php echo $U_FName;?> <?php echo $U_LName; ?>">
                                                                         </div>
                                                                    </div> -->


                                                                    <input type="hidden" value="<?php echo $U_idn;?>" name="U_idn">
    								                                              	<input type="hidden" value="<?php echo $session_id?>" name="U_id">

                                                                   <div class="ln_solid"></div>
                                                                   <div class="item form-group">
                                                                     <div class="col-md-6 col-sm-6  left-align">
                                                                       <?php
 											                                                 	if ($U_Typesession == '0' || $U_Typesession == '1' ) {
 												                                                   	echo '<button type="submit" class="btn btn-edit btn-sm" name="u_Update">Update</button>';
 											                                                 	}else {
 												                                              	// code...
 											                                                  	}

 											                                                    	?>
                                                                       <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                                                     </div>
                                                                   </div>


                    </form>
                    		<?php include_once 'PHP/Write/update-System-user-script.php'; ?>
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
