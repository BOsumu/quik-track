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

            <!-- <div class="page-title">
              <div class="title_left">
                <h3>Inbox Design <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">

                  <!-- <div class="x_title">
                    <h2>Inbox Design<small>User Mail</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> -->
                  <div class="x_content">
                    <div class="row">
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

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-10 mail_view">
                        <div class="inbox-body">

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

                         <div class="sale-form">
                                     <div class="col-md-12 ">
                                         <div class="x_content">
                                           <br />






                                           <form class="form-horizontal form-label-left">
<!--

                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Select</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <select class="form-control" id="dynamic_select">
                                                   <option>Choose option</option>
                                                   <option>Option one</option>
                                                   <option>Option two</option>
                                                   <option>Option three</option>
                                                   <option>Option four</option>
                                                 </select>
                                               </div>
                                             </div> -->

                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Select First Owner</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <select class="form-control">
                                                   <option>Choose option</option>
                                                   <option>Option one</option>
                                                   <option>Option two</option>
                                                   <option>Option three</option>
                                                   <option>Option four</option>
                                                 </select>
                                               </div>
                                             </div>


                                                <div class="form-group row">
                                                  <label class="control-label col-md-3 col-sm-3 ">Select Second Owner</label>
                                                  <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control">
                                                      <option>Choose option</option>
                                                      <option>Option one</option>
                                                      <option>Option two</option>
                                                      <option>Option three</option>
                                                      <option>Option four</option>
                                                    </select>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label class="control-label col-md-3 col-sm-3 ">Select Project</label>
                                                  <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control">
                                                      <option>Choose option</option>
                                                      <option>Option one</option>
                                                      <option>Option two</option>
                                                      <option>Option three</option>
                                                      <option>Option four</option>
                                                    </select>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label class="control-label col-md-3 col-sm-3 ">Select Project Unit</label>
                                                  <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control">
                                                      <option>Choose option</option>
                                                      <option>Option one</option>
                                                      <option>Option two</option>
                                                      <option>Option three</option>
                                                      <option>Option four</option>
                                                    </select>
                                                  </div>
                                                </div>

                                             <div class="form-group row ">
                                               <label class="control-label col-md-3 col-sm-3 ">Sale Date</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                	<input id="#" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                               </div>
                                             </div>


                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Unite Price(LKR)</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="number" class="form-control"  placeholder="Unite Price(LKR)">
                                               </div>
                                             </div>

                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Discount(LKR)</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="number" class="form-control" placeholder="Discount(LKR)">
                                               </div>
                                             </div>

                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Discount(%)</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="number" class="form-control"  placeholder="Discount(%)">
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Selling Price(LKR)</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="number" class="form-control" placeholder="Selling Price(LKR)">
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Sales Person</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <select class="form-control">
                                                   <option>Choose option</option>
                                                   <option>Option one</option>
                                                   <option>Option two</option>
                                                   <option>Option three</option>
                                                   <option>Option four</option>
                                                 </select>
                                               </div>
                                             </div>


                                             <div class="ln_solid"></div>
                                             <div class="form-group">
                                               <div class="col-md-9 col-sm-9">

                                                 <button type="submit" class="btn btn-login">Submit New Sales</button>
                                               </div>
                                             </div>

                                           </form>
                                         </div>

                                  </div>
                             </div>
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

<?php include 'include/footer.php';?>
