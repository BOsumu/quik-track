<?php ob_start();?>
<?php include 'include/dbConnection.php'; ?>
<?php include 'include/session.php';?>
 <?php include 'include/header.php';?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/developer/css/style2.css" type="text/css"/>
      <script src="assets/developer/js/jquery.min2.js"></script>
 <?php include 'include/nav_bar.php';?>





         <!-- page content -->
           <div class="right_col" role="main">

             <div class="col-md-12 con_view">

               <div class="clearfix"></div>
               <div>

             <div class="row">
               <div class="col-md-5 col-sm-5">
                 <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                   <div class="tile-stats">
                     <?php
                     $count_Total_Units = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM project_units")); ?>
                     <h2>Total Project Units</h2>
                     <div class="count"><?php echo $count_Total_Units[0];?></div>
                   </div>
                 </div>
                 <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                   <div class="tile-stats">
                     <?php

                     $Total_Sold_Units = mysqli_query($conn, "SELECT COUNT(*) FROM project_units WHERE unit_status ='1'");
                            if ($Total_Sold_Units) {
                            $Total_Sold_Unitss = mysqli_fetch_array($Total_Sold_Units);
                      ?>
                     <h2>Total Sold Units</h2>
                     <div class="count"><?php echo number_format($Total_Sold_Unitss[0]); ?></div>
                     <?php  } else { echo "Error executing the query: " . mysqli_error($conn); }?>
                   </div>
                 </div>
                 <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                   <div class="tile-stats">
                     <?php
                        $cmonth3 = date("d");
                        $result = mysqli_query($conn, "SELECT SUM(paid_amount) FROM payments WHERE MONTH(pay_date) = $cmonth3");
                        if ($result) {
                            $count_Permanent_Collections = mysqli_fetch_array($result);
                    ?>

                     <h2>Today Collection</h2>

                     <div class="count"><?php echo number_format($count_Permanent_Collections[0], 2); ?></div>
                     <?php
                         } else {
                             echo "Error executing the query: " . mysqli_error($conn);
                         }
                     ?>
                   </div>
                 </div>

              </div>
              <div class="col-md-7 col-sm-7">
                <div class="row">
                  <div class="input-group-front">
                    <p style="margin-bottom:0px;">The system records indicat  <strong style="color:#b91515;">  49 Unprocessed Sale Records </strong> as for the date 2024-24-12
                      <button class="btn btn-danger btn-sm">Read inside</button>
                    </p>
                  </div>
                </div>

                <!-- SEARCH SALES TEST  -->

                <!-- ========================================================================================================================== -->
                <style>
       .select2-container .select2-selection--single {
           height: 34px !important;
       }
       .select2-container--default .select2-selection--single {
           border: 1px solid #ccc !important;
           border-radius: 0px !important;
       }
       input, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 5px;
    box-sizing: border-box;
}
   </style>
                <form action="submit_page.php" method="POST">
                                <div class="form-group row">
                                  <link href="assets/developer/css/select2.min.css" rel="stylesheet" />
                                   <script src="assets/developer/js/select2.min.js"></script>
                                      <div class="input-group" style="border: 1px solid #ced4da;padding:5px 10px;background: linear-gradient(to right, #d2d3d3, #ffffff);">
                											<div class="col-md-9 col-sm-9 ">
                												<select class="form-control select2">
                                          <option value="3">Search for Customer Sales</option>
                                                                                       <!-- Remove Disabled Customer -->
                                                      <option value="3">
                                                          <column>W.G.R.Rajadurai</column>
                                                          <column>&nbsp; ( Lot 143 @ Central Park - Landed House )</column>
                                                      </option>

                                                                       <!-- Remove Disabled Customer -->
                                                      <option value="4">
                                                          <column>T.K.G.U.Kumara</column>
                                                          <column>&nbsp; ( Lot 144 @ Central Park - Landed House )</column>
                                                      </option>

                                                                       <!-- Remove Disabled Customer -->
                                                      <option value="5">
                                                          <column>L.M.P.Dharmaratne</column>
                                                          <column>&nbsp; ( Lot 145 @ Central Park - Landed House )</column>
                                                      </option>

                                                                       <!-- Remove Disabled Customer -->
                                                      <option value="6">
                                                          <column>S.I.Abeysiriwardena</column>
                                                          <column>&nbsp; ( Lot 146 @ Central Park - Landed House )</column>
                                                      </option>

                                                                       <!-- Remove Disabled Customer -->
                                                      <option value="7">
                                                          <column>S.S.Sivashankar</column>
                                                          <column>&nbsp; ( Lot 147  @ Central Park - Landed House )</column>
                                                      </option>
                												</select>
                											</div>
                										</div>
                                    <script>
                    $('.select2').select2();
                </script>
                                  </div>
                                  <button type="submit">Submit</button>
                              </form>
                <!-- ============================================================================================================================================= -->

            <!-- SEARCH SALES TEST  -->

             </div>

             </div>


           <div class="row">
             <div class="col-md-5 col-sm-5">
               <div class="col-md-12 col-sm-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Pie Graph</h2>
                     <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                       </li>

                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                       </li>
                     </ul>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">

                     <div id="echart_pie" style="height:350px;"></div>

                   </div>
                 </div>
               </div>

               <div class="col-md-12 col-sm-12">

                   <div class="x_panel">
                     <div class="x_title" style="font-size:16px;">
                       <h2>Sales summary from all the current projects</h2>
                       <h2>Total Sales for- <?php echo date("Y"); ?></h2>

                       <div class="clearfix"></div>
                     </div>
                     <div class="x_content">

                       <div id="echart_bar_horizontal" style="height:370px;"></div>

                       <ul class="stats-overview">
                         <li>
                           <span class="name"> Estimated budget </span>
                           <span class="value text-success"> 2300 </span>
                         </li>
                         <li>
                           <span class="name"> Total amount spent </span>
                           <span class="value text-success"> 2000 </span>
                         </li>
                         <li class="hidden-phone">
                           <span class="name"> Estimated project duration </span>
                           <span class="value text-success"> 20 </span>
                         </li>
                       </ul>

                     </div>
                   </div>

               </div>


             </div>


             <div class="col-md-7 col-sm-7 ">



               <div class="row">

                 <div class="col-md-12 col-sm-12  ">
                   <div class="x_panel">
                     <div class="x_title">
                       <h2>Basic Tables <small>basic table subtitle</small></h2>
                       <ul class="nav navbar-right panel_toolbox">
                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                         </li>

                         <li><a class="close-link"><i class="fa fa-close"></i></a>
                         </li>
                       </ul>
                       <div class="clearfix"></div>
                     </div>
                     <div class="x_content">

                       <table class="table">
                         <thead>
                           <tr>
                             <th>#</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Username</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th scope="row">1</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                           </tr>
                           <tr>
                             <th scope="row">2</th>
                             <td>Jacob</td>
                             <td>Thornton</td>
                             <td>@fat</td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Larry</td>
                             <td>the Bird</td>
                             <td>@twitter</td>
                           </tr>
                           <tr>
                             <th scope="row">1</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                           </tr>
                           <tr>
                             <th scope="row">2</th>
                             <td>Jacob</td>
                             <td>Thornton</td>
                             <td>@fat</td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Larry</td>
                             <td>the Bird</td>
                             <td>@twitter</td>
                           </tr>
                         </tbody>
                       </table>

                     </div>
                   </div>
                 </div>

               </div>
               <div class="row">
                 <div class="col-md-12 col-sm-12  ">
                   <div class="x_panel">
                     <div class="x_title">
                       <h2>Basic Tables <small>basic table subtitle</small></h2>
                       <ul class="nav navbar-right panel_toolbox">
                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                         </li>

                         <li><a class="close-link"><i class="fa fa-close"></i></a>
                         </li>
                       </ul>
                       <div class="clearfix"></div>
                     </div>
                     <div class="x_content">

                       <table class="table">
                         <thead>
                           <tr>
                             <th>#</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Username</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th scope="row">1</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                           </tr>
                           <tr>
                             <th scope="row">2</th>
                             <td>Jacob</td>
                             <td>Thornton</td>
                             <td>@fat</td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Larry</td>
                             <td>the Bird</td>
                             <td>@twitter</td>
                           </tr>
                           <tr>
                             <th scope="row">1</th>
                             <td>Mark</td>
                             <td>Otto</td>
                             <td>@mdo</td>
                           </tr>
                           <tr>
                             <th scope="row">2</th>
                             <td>Jacob</td>
                             <td>Thornton</td>
                             <td>@fat</td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Larry</td>
                             <td>the Bird</td>
                             <td>@twitter</td>
                           </tr>
                           <tr>
                             <th scope="row">3</th>
                             <td>Larry</td>
                             <td>the Bird</td>
                             <td>@twitter</td>
                           </tr>
                         </tbody>
                       </table>

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
         <!-- /page content -->
         <!-- /footer content -->
         <footer style="margin-left: 0px;">
           <div class="pull-right" style="margin-left: 0px;">
              © 2023 - <script> document.write(new Date().getFullYear())</script> All right reserved. Quik Track for Blue Ocean Group Of Companies &amp; Kelsey Developments PLC, made with ❤️ by <a href="javascript:;" class="fw-medium">Blue Ocean IT</a>
           </div>
           <div class="clearfix"></div>
         </footer>
         <!-- /footer content -->

         <!-- jQuery -->
         <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
         <!-- Bootstrap -->
         <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
         <!-- FastClick -->
         <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
         <!-- NProgress -->
         <script src="assets/vendors/nprogress/nprogress.js"></script>
         <!-- Chart.js -->
         <script src="assets/vendors/Chart.js/dist/Chart.min.js"></script>
         <!-- gauge.js -->
         <script src="assets/vendors/gauge.js/dist/gauge.min.js"></script>
         <!-- bootstrap-progressbar -->
         <script src="assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
         <!-- iCheck -->
         <script src="assets/vendors/iCheck/icheck.min.js"></script>
         <!-- Skycons -->
         <script src="assets/vendors/skycons/skycons.js"></script>
         <!-- Flot -->
         <script src="assets/vendors/Flot/jquery.flot.js"></script>
         <script src="assets/vendors/Flot/jquery.flot.pie.js"></script>
         <script src="assets/vendors/Flot/jquery.flot.time.js"></script>
         <script src="assets/vendors/Flot/jquery.flot.stack.js"></script>
         <script src="assets/vendors/Flot/jquery.flot.resize.js"></script>
         <!-- Flot plugins -->
         <script src="assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
         <script src="assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
         <script src="assets/vendors/flot.curvedlines/curvedLines.js"></script>
         <!-- DateJS -->
         <script src="assets/vendors/DateJS/build/date.js"></script>
         <!-- JQVMap -->
         <script src="assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
         <script src="assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
         <script src="assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
         <!-- bootstrap-daterangepicker -->
         <script src="assets/vendors/moment/min/moment.min.js"></script>
         <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

         <!-- Custom Theme Scripts -->
         <script src="assets/build/js/custom.min.js"></script>
         <!-- ECharts -->
         <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
         <script src="assets/vendors/echarts/map/js/world.js"></script>

         <!-- jQuery Smart Wizard -->
         <script src="assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
         <!-- Custom Theme Scripts -->
         <script src="assets/build/js/custom.min.js"></script>
