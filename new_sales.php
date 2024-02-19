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

                          <a href="#step-1">
                            <span class="step_no step-active">1</span>
                            <span class="step_descr centered-text">
                                            <strong>Add New Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr centered-text">
                                              <strong>Create Payment Plan</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr centered-text">
                                              <strong>View Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <!-- <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr centered-text">
                                              Step 4<br />
                                              <small>Step 4 description</small>
                                          </span>
                          </a>
                        </li> -->
                      </ul>
                      <div>
                        <form class="form-horizontal form-label-left">


                                                                       <div class="form-group row">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Select First Owner :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <select class="form-control">
                                                                             <option>SELECT</option>
                                                                             <option>Option one</option>
                                                                             <option>Option two</option>
                                                                             <option>Option three</option>
                                                                             <option>Option four</option>
                                                                           </select>
                                                                         </div>
                                                                       </div>


                                                                          <div class="form-group row">
                                                                            <label class="control-label col-md-2 col-sm-3 ">Select Second Owner :</label>
                                                                            <div class="col-md-5 col-sm-9 ">
                                                                              <select class="form-control">
                                                                                <option>SELECT</option>
                                                                                <option>Option one</option>
                                                                                <option>Option two</option>
                                                                                <option>Option three</option>
                                                                                <option>Option four</option>
                                                                              </select>
                                                                            </div>
                                                                          </div>

                                                                          <div class="form-group row">
                                                                            <label class="control-label col-md-2 col-sm-3 ">Select Project :</label>
                                                                            <div class="col-md-5 col-sm-9 ">
                                                                              <select class="form-control">
                                                                                <option>SELECT</option>
                                                                                <option>Option one</option>
                                                                                <option>Option two</option>
                                                                                <option>Option three</option>
                                                                                <option>Option four</option>
                                                                              </select>
                                                                            </div>
                                                                          </div>

                                                                          <div class="form-group row">
                                                                            <label class="control-label col-md-2 col-sm-3 ">Select Project Unit :</label>
                                                                            <div class="col-md-5 col-sm-9 ">
                                                                              <select class="form-control">
                                                                                <option>SELECT</option>
                                                                                <option>Option one</option>
                                                                                <option>Option two</option>
                                                                                <option>Option three</option>
                                                                                <option>Option four</option>
                                                                              </select>
                                                                            </div>
                                                                          </div>




                                                                       <div class="form-group row ">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Sale Date :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                            <input id="#" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                                         </div>
                                                                       </div>


                                                                       <div class="form-group row ">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Unite Price(LKR) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                            <div class="input-group mb-3">
                                                                               <div class="input-group-prepend">
                                                                               <span class="input-group-text" id="basic-addon1">LKR</span>
                                                                               </div>
                                                                               <input type="text" class="form-control" aria-describedby="basic-addon1">
                                                                             </div>
                                                                        </div>
                                                                      </div>

                                                                       <div class="form-group row">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Discount(LKR) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text" id="basic-addon1">LKR</span>
                                                                              </div>
                                                                              <input type="text" class="form-control" aria-describedby="basic-addon1">
                                                                            </div>
                                                                         </div>
                                                                       </div>

                                                                       <div class="form-group row">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Discount(%) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text" id="basic-addon1">&nbsp;&nbsp;%&nbsp;&nbsp;</span>
                                                                              </div>
                                                                              <input type="text" class="form-control" aria-describedby="basic-addon1">
                                                                            </div>
                                                                         </div>
                                                                       </div>
                                                                       <div class="form-group row">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Selling Price(LKR) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text" id="basic-addon1">LKR</span>
                                                                              </div>
                                                                              <input type="text" class="form-control" aria-describedby="basic-addon1">
                                                                            </div>
                                                                         </div>
                                                                       </div>
                                                                       <div class="form-group row">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Sales Person :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <select class="form-control">
                                                                             <option>SELECT</option>
                                                                             <option>Option one</option>
                                                                             <option>Option two</option>
                                                                             <option>Option three</option>
                                                                             <option>Option four</option>
                                                                           </select>
                                                                         </div>
                                                                       </div>

                                                                       <div class="ln_solid"></div>
                                                                       <div class="item form-group">
                                                                         <div class="col-md-6 col-sm-6 offset-md-3 left-align">
                                                                           <button type="submit" class="btn btn-login"><a href="payment_plan.php">Next :Create Payment Plan</a></button>
                                                                           <button class="btn btn-gray" type="reset">Reset</button>
                                                                         </div>
                                                                       </div>


                        </form>

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
