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

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>

                          <a href="new_sales.php">
                            <span class="step_no">1</span>
                            <span class="step_descr centered-text">
                                            <strong>Add New Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="payment_plan.php">
                            <span class="step_no step-active">2</span>
                            <span class="step_descr centered-text">
                                              <strong>Create Payment Plan</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="view_sales.php">
                            <span class="step_no">3</span>
                            <span class="step_descr centered-text">
                                            <strong>View Sales</strong><br />
                                          </span>
                          </a>
                        </li>

                      </ul>
                      <div >
                        <h2 class="StepTitle">Create Payment Plane</h2>
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
                          <div class="x_content">

                            <ul class="nav nav-tabs bar_tabs tab-text" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="installment-tab" data-toggle="tab" href="#installment" role="tab" aria-controls="installment" aria-selected="true">Installment</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="milestone-tab" data-toggle="tab" href="#milestone" role="tab" aria-controls="milestone" aria-selected="false">Milestone</a>
                              </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="installment" role="tabpanel" aria-labelledby="installment-tab">
                                <form class="form-label-left input_mask">
                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Total Selling Price :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname"/>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Reservation Fee :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname" />
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Reservation Fee (%) :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname" />
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Downpayment (%) :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname"/>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Downpayment (Fixed Amount) :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname" />
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Downpayment Due Date:</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname" />
                                  </div>
                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Number of Installments :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname"/>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Installment Period (in Months) :</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname" />
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                     <div class="ln_solid"></div>
                                     <button type="submit" class="btn btn-login">Create Payment Plan</button>
                                     <button class="btn btn-gray" type="reset">Reset</button>
                                  </div>


                                </form>
                              </div>

                              <div class="tab-pane fade" id="milestone" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="post" enctype="multipart/form-data" id="myForm">
                                <div class="row" id="rowToDuplicate">
                                  <div class="col-md-4 col-sm-4">
                                     <label for="input25" class="form-label">Milestone</label>
                                     <input type="text" class="form-control" id="input51" placeholder="Milestone" name="installment[]">
                                 </div>
                                 <div class="col-md-3 col-sm-3">
                                     <label for="input25" class="form-label">Amount (LKR)</label>
                                     <input type="text" class="form-control" name="amount[]" placeholder="Amount (LKR)">

                                 </div>


                                 <div class="col-md-3 col-sm-3">
                                     <label for="input25" class="form-label">Due Date</label>
                                     <input type="date" class="form-control" id="input51" placeholder="Due Date" name="due_date[]">
                                 </div>

                                 <div class="col-md-2 col-sm-2  form-group has-feedback">
                                  <button type="button" class="btn btn-login plus-top" onclick="duplicateRow()"><i class='fa fa-plus'></i>&nbsp;Add New</button>
                                 </div>

                             </div>
                             <div id="rowContainer"></div>
                             <div class="row">
                              <input type="hidden" value="" name="selling_price">
                              <input type="hidden" id="sale_id" name="sale_id"  value="">
                              <input type="hidden" value="" name="sale_date" />
                              <input type="hidden" value="" name="Created_by"/>

                              <div class="col-md-12">

                                <br/>
                                 <div id="errorText" style="color: red;"></div> <b><div id="totalAmountMessage"></div></b>
                                 <br/>
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                  <button type="text" class="btn btn-login"><a href="view_sales.php" style="color:#ffffff;">Submit</a></button>
                                  <button class="btn btn-gray" type="reset">Reset</button>
                                </div>
                              </div>
                            </div>
                            </form>




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
