<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" href="assets/images/favicon.png" type="image/png" />

    <title>Company List | Quick Track Admin - Kelsey Developments PLC</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">

    <!-- Developer css -->
    <link href="assets/developer/css/developer.css" rel="stylesheet">
  </head>
  <?php include 'include/nav_bar.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">



            <div class="clearfix"></div>

                        <!-- /SIDE LIST -->
            <?php include 'include/sidelist_cal.php';?>
                        <!--/ SIDE  LIST -->


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
                                <!-- <div class="print" style="float:left; margin-right:5px;"><a onclick="printContent('print_receipt','rptword')" href="#">Print Report</a></div> -->
                                  <div class="print" style="float:left; margin-right:5px;"><a id="pdf-button" onclick="printDiv3('print_receipt','rptword')" href="#">Print Report</a></div>
                                  <script>
                                 function printDiv3() {
                                 var divContents = document.getElementById("reportcol&ins").outerHTML; // Include the outerHTML to get the div with its style
                                 var a = window.open('', '', 'height=1500, width=1500');
                                 a.document.write('<html>');
                                 a.document.write('<body>');
                                 a.document.write(divContents);
                                 a.document.write('</body></html>');
                                 a.document.close();
                                 a.print();
                                 }
                                 </script>
                                 <div class="excel">
                                <a id="exportexcel" onclick="exportTableToExcel('tblData', 'Report');" href="#">( or Export to Excel )</a>
                                </div>
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
									<br />
                         <div class="sale-form">
                                     <div class="col-md-12 ">
                                         <div class="x_content">
                                           <form class="form-label-left input_mask" method="get" id="filterForm" action="filter-collection-script.php" enctype="multipart/form-data">
                                                           <div class="col-md-2 col-sm-12  form-group-report">
                                                             <span class="search-title">Search by </span>
                                                           </div>



                                                            <div class="col-md-3 col-sm-12  form-group-report">
                                                              <select id="company-select" class="form-control report" name="formSelectedCompany">
                                                									<option selected>Select Company</option>
                                               									<?php
                                               									$result = mysqli_query($conn, "SELECT * FROM companies WHERE company_status = '0'");
                                               									while ($row = mysqli_fetch_array($result)) {
                                               											?>
                                               											<option value="<?php echo $row["company_id"]; ?>"> <?php echo $row["company_name"]; ?></option>
                                               									<?php } ?>
                                                							</select>
                                                            </div>


                                                            <div class="col-md-3 col-sm-12  form-group-report">
                                                              <select id="project-select" class="form-control report" name="formSelectedProject">
                                                                 <option selected>Select Project</option>

                                                             </select>
                                                            </div>




                                                            <div class="col-md-1 col-sm-12  form-group-report">
                                                              <button type="button" onclick="submitFormAndNavigate()" class="btn btn-filter btn-sm">Filter</button>
                                                            </div>
                                          </form>
                                           <br />
                                           <script>
                                             function submitFormAndNavigate() {
                                               var formMonth=document.getElementById('formMonth').value;
                                               var formYear=document.getElementById('formYear').value;
                                               var formCompanySelect=document.getElementById('company-select').value;
                                               var formProjectSelect=document.getElementById('project-select').value;
                                               var formSalesPersonSelect=document.getElementById('sales-person-select').value;
                                               console.log(formMonth);

                                               // if(formMonth == 'Months' && formYear == 'Year' && formCompanySelect == 'Select Company' && formProjectSelect == 'Select Project' && formSalesPersonSelect == 'Select Sales Person') {
                                               // } else {
                                                 var filterForm = document.getElementById('filterForm');
                                                 filterForm.name="getFilterValues";
                                                 filterForm.submit();
                                                 // window.location.href = 'filterSalesCollection.php?getFilterValues=true';
                                                 window.location.href = 'filterSalesCollection.php?getFilterValues=true&formMonth=' + formMonth+'&formYear='+formYear+'&formSelectedCompany='+formCompanySelect+'&formSelectedProject='+formProjectSelect+'&formSalesPersonSelect='+formSalesPersonSelect;
                                                 // window.location.href = 'new_page.php?getData=true';
                                                 // alert('not pass the submit condition');
                                               // }
                                             }
                                           </script>

                                                 	<div class="invoice overflow-auto" id='reportcol&ins'>
                                                    <link href="assets/build/css/receipt-css1.css" rel="stylesheet" type="text/css">
                                                    <div class="rptword">
                                                        <h1>Customer List Report</h1>
                                                        <?php
                                                         $currentDateTime = new DateTime('now');
                                                         $currentDate = $currentDateTime->format('d-m-Y');?>
                                                            <span>Blue Ocean Group of Companies - Printed Date : <?php echo $currentDate; ?></span>
                                                    </div>
                                                  </div>

                                               <div class="x_panel">
                                                    <div class="card-box table-responsive">

                                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                          <thead>
                                                            <tr>
                                                              <th>Name</th>
                                                              <th>Position</th>
                                                              <th>Office</th>
                                                              <th>Age</th>
                                                              <th>Start date</th>
                                                              <th>Salary</th>
                                                            </tr>
                                                          </thead>


                                                          <tbody>
                                                            <tr>
                                                              <td>Tiger Nixon</td>
                                                              <td>System Architect</td>
                                                              <td>Edinburgh</td>
                                                              <td>61</td>
                                                              <td>2011/04/25</td>
                                                              <td>$320,800</td>
                                                            </tr>

                                                            <tr>
                                                              <td>Brielle Williamson</td>
                                                              <td>Integration Specialist</td>
                                                              <td>New York</td>
                                                              <td>61</td>
                                                              <td>2012/12/02</td>
                                                              <td>$372,000</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Herrod Chandler</td>
                                                              <td>Sales Assistant</td>
                                                              <td>San Francisco</td>
                                                              <td>59</td>
                                                              <td>2012/08/06</td>
                                                              <td>$137,500</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Rhona Davidson</td>
                                                              <td>Integration Specialist</td>
                                                              <td>Tokyo</td>
                                                              <td>55</td>
                                                              <td>2010/10/14</td>
                                                              <td>$327,900</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Colleen Hurst</td>
                                                              <td>Javascript Developer</td>
                                                              <td>San Francisco</td>
                                                              <td>39</td>
                                                              <td>2009/09/15</td>
                                                              <td>$205,500</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Sonya Frost</td>
                                                              <td>Software Engineer</td>
                                                              <td>Edinburgh</td>
                                                              <td>23</td>
                                                              <td>2008/12/13</td>
                                                              <td>$103,600</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Jena Gaines</td>
                                                              <td>Office Manager</td>
                                                              <td>London</td>
                                                              <td>30</td>
                                                              <td>2008/12/19</td>
                                                              <td>$90,560</td>
                                                            </tr>


                                                          </tbody>
                                                        </table>
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
      </div>
        <!-- /page content -->

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
    <!-- iCheck -->
    <script src="assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
