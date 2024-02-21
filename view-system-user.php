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

            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>-Pass the user name-</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">


                                                                   <div class="form-group row">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Title:</label>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                       <select id="heard" class="form-control">
                                                                         <option value="">Choose..</option>
                                                                         <option value="Mr.">Mr.</option>
                                                                         <option value="Mrs.">Mrs.</option>
                                                                         <option value="Miss.">Miss.</option>
                                                                         <option value="Ms.">Ms.</option>
                                                                         <option value="Dr.">Dr.</option>
                                                                       </select>
                                                                     </div>
                                                                   </div>


                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">First Name :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                	<input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Last Name :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Email Address :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Contact No :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    	<input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">User Status :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="form-control">
                                                                            <option>SELECT</option>
                                                                            <option>Active</option>
                                                                            <option>Deactive</option>
                                                                          </select>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">User Type :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select id="heard" class="form-control">
                                                  													<option value="">Choose..</option>
                                                  													<option value="Super Admin">Super Admin</option>
                                                  													<option value="Admin">Admin</option>
                                                  													<option value="Sales Admin">Sales Admin</option>
                                                                            <option value="Sales Person">Sales Person</option>
                                                  												</select>
                                                                        </div>
                                                                      </div>



                                                                   <div class="form-group row ">
                                                                    <label class="control-label col-md-2 col-sm-3 ">Create by :</label>
                                                                     <div class="col-md-5 col-sm-9 ">

                                                                           	<input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                                                         </div>
                                                                    </div>




                                                                   <div class="ln_solid"></div>
                                                                   <div class="item form-group">
                                                                     <div class="col-md-6 col-sm-6  left-align">
                                                                       <button type="submit" class="btn btn-login btn-sm"><a href="payment_plan.php">Update</a></button>
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

        <!-- footer content -->
        <footer class="pull-right">
            <p class="mb-0">© 2023 - <script> document.write(new Date().getFullYear())</script>2024 All right reserved. Quik Track for Blue Ocean Group Of Companies &amp; Kelsey Developments PLC, made with ❤️ by <a href="javascript:;" class="fw-medium">Blue Ocean IT</a></p>
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
