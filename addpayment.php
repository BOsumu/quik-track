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

                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div >
                      <h2 class="StepTitle">Add Payment</h2>
                      <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="x_panel">

                            <h2><strong>Customer Details</strong></h2>


                          <div class="x_content">

                            <table class="table">

                              <tbody>
                                <tr>
                                  <td>Customer :</td>
                                </tr>

                                <tr>
                                  <td>Contact :</td>
                                </tr>
                                <tr>
                                  <td>NIC/Passport :</td>
                                </tr>
                                <tr>
                                  <td>Address :</td>
                                </tr>
                                <tr>
                                  <td>Email :</td>
                                </tr>


                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6">
                        <div class="x_panel">

                            <h2><strong>Sales Details</strong></h2>


                          <div class="x_content">

                            <table class="table">

                              <tbody>
                                <tr>
                                  <td>Project :</td>
                                </tr>
                                <tr>
                                  <td>Unit :</td>
                                </tr>
                                <tr>
                                  <td>Unit Price :</td>
                                </tr>
                                <tr>
                                  <td>Discount :</td>
                                </tr>
                                <tr>
                                  <td>Selling Price :</td>
                                </tr>


                              </tbody>
                            </table>



                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Add Payments</h2>

                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <br />
                            <form class="form-label-left input_mask">
                              <div class="row">

                                  <div class='col-sm-6'>
                                    Payment Date
                                    <div class="form-group">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input class="form-control" placeholder="dd-mm-yyyy" type="text"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">

                                        </div>
                                    </div>
                                  </div>

                                  <div class='col-sm-6'>
                                      Select Installments
                                      <div class="form-group">
                                          <div class='input-group date' id='myDatepicker2'>
                                            <select id="heard" class="form-control">
                    													<option value="">Choose..</option>
                    													<option value="press">Press</option>
                    													<option value="net">Internet</option>
                    													<option value="mouth">Word of mouth</option>
                    												</select>
                                          </div>
                                      </div>
                                  </div>

                                   <div class='col-sm-3'>
                                      Pay Amount
                                      <div class="form-group">
                                          <div class='input-group date' id='myDatepicker3'>
                                              <input type="text" id="fullname" class="form-control" name="fullname" />
                                          </div>
                                      </div>
                                  </div>

                                  <div class='col-sm-3'>
                                      Pay Method
                                      <div class="form-group">
                                          <div class='input-group date' id='myDatepicker2'>
                                            <select id="heard" class="form-control">
                                              <option value="">Choose..</option>
                                              <option value="press">Press</option>
                                              <option value="net">Internet</option>
                                              <option value="mouth">Word of mouth</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>

                                   <div class='col-sm-3'>
                                      Pay Method Remarks
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker6'>
                                              <input type="text" id="fullname" class="form-control" name="fullname" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class='col-sm-3'>
                                      Sheet No
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker7'>
                                              <input type="text" id="fullname" class="form-control" name="fullname" />
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">

                                     <button type="submit" class="btn btn-add btn-sm">Add Payments</button>
                                     <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                  </div>

                              </div>


                            </form>
                          </div>
                        </div>



                      </div>
                    </div>
                    <!-- End SmartWizard Content -->

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
