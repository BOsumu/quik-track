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

            <div class="row">
              <div class="col-md-12">

                  <div class="x_content">
                    <div class="row">


                      <!-- CONTENT MAIL -->
                      <div class="col-sm-12 mail_view_report">
                        <div class="inbox-body">

                          <div class="mail_heading row">
                            <div class="col-sm-12 reportbar">
                                  <h2><span>Report: Collections</span></h2>

                                <div class="back" style="float:left; margin-right:5px;"><a href="#">Go To All Result</a></div>
                                <div class="print" style="float:left; margin-right:5px;"><a onclick="printContent('print_receipt','rptword')" href="#">Print Report</a></div>
                                <div class="excel"><button id="exportexcel">( or Export to Excel )</button></div>
                              </div>

                            <div class="col-md-12">
                              <div class="heading">
                                  <h1><span>Report</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">collection</h1>
                                  <h4>Sales Collection List</h4>
                              </div>
                            </div>
                          </div>

                          <div class="setting">

                         </div>

                         <div class="sale-form">
                                     <div class="col-md-12 ">
                                         <div class="x_content">
                                           <br />

                                                               <div class="table-responsive">
                                                                 <table class="table table-striped jambo_table bulk_action">
                                                                   <thead>
                                                                     <tr class="headings">

                                                                       <th class="column-title">Sale Date </th>
                                                                       <th class="column-title">Project </th>
                                                                       <th class="column-title">Unit</th>
                                                                       <th class="column-title">Customer</th>
                                                                       <th class="column-title">Selling Price(LKR) </th>
                                                                       <th class="column-title">Total Collection(LKR) Till Last Month</th>
                                                                       <th class="column-title">To be collect </th>
                                                                       <th class="column-title">Bill to Name </th>
                                                                       <th class="column-title">This Month Collection </th>
                                                                       <th class="column-title">This month Due Date </th>

                                                                       </th>
                                                                       <th class="bulk-actions" colspan="7">
                                                                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                                       </th>
                                                                     </tr>
                                                                   </thead>

                                                                   <tbody>
                                                                     <tr class="even pointer">

                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="odd pointer">

                                                                       <td class=" ">121000039</td>
                                                                       <td class=" ">May 23, 2014 11:30:12 PM</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                                                                       </td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="even pointer">

                                                                       <td class=" ">121000038</td>
                                                                       <td class=" ">May 24, 2014 10:55:33 PM</td>
                                                                       <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                                                                       </td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                                       <td class=" ">John Blank L</td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="odd pointer">

                                                                       <td class=" ">121000037</td>
                                                                       <td class=" ">May 24, 2014 10:52:44 PM</td>
                                                                       <td class=" ">121000204</td>
                                                                       <td class=" ">Mike Smith</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="even pointer">

                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 24, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="odd pointer">

                                                                       <td class=" ">121000039</td>
                                                                       <td class=" ">May 26, 2014 11:30:12 PM</td>
                                                                       <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                                                                       </td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                                       <td class=" ">John Blank L</td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="even pointer">

                                                                       <td class=" ">121000038</td>
                                                                       <td class=" ">May 26, 2014 10:55:33 PM</td>
                                                                       <td class=" ">121000203</td>
                                                                       <td class=" ">Mike Smith</td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="odd pointer">

                                                                       <td class=" ">121000037</td>
                                                                       <td class=" ">May 26, 2014 10:52:44 PM</td>
                                                                       <td class=" ">121000204</td>
                                                                       <td class=" ">Mike Smith</td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>

                                                                       </td>
                                                                     </tr>

                                                                     <tr class="even pointer">

                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 27, 2014 11:47:56 PM </td>
                                                                       <td class=" ">121000210</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">121000210</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>

                                                                       </td>
                                                                     </tr>
                                                                     <tr class="odd pointer">

                                                                       <td class=" ">121000039</td>
                                                                       <td class=" ">May 28, 2014 11:30:12 PM</td>
                                                                       <td class=" ">121000208</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">121000210</td>
                                                                       <td class=" ">John Blank L</td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">Paid</td>
                                                                       <td class=" ">121000040</td>
                                                                       <td class=" ">May 23, 2014 11:47:56 PM </td>

                                                                       </td>
                                                                     </tr>
                                                                   </tbody>
                                                                   <tfooter>
                                                                     <tr class="headings">

                                                                       <th class="column-title">Sale Date </th>
                                                                       <th class="column-title">Project </th>
                                                                       <th class="column-title">Unit</th>
                                                                       <th class="column-title">Customer</th>
                                                                       <th class="column-title">Selling Price(LKR) </th>
                                                                       <th class="column-title">Total Collection(LKR) Till Last Month</th>
                                                                       <th class="column-title">To be collect </th>
                                                                       <th class="column-title">Bill to Name </th>
                                                                       <th class="column-title">This Month Collection </th>
                                                                       <th class="column-title">This month Due Date </th>

                                                                       </th>
                                                                       <th class="bulk-actions" colspan="7">
                                                                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                                       </th>
                                                                     </tr>
                                                                   </tfooter>
                                                                 </table>
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
