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

                                     					var formCompanySelect=document.getElementById('company-select').value;
                                     					var formProjectSelect=document.getElementById('project-select').value;
                                     					console.log(formCompanySelect);

                                     					// if(formMonth == 'Months' && formYear == 'Year' && formCompanySelect == 'Select Company' && formProjectSelect == 'Select Project' && formSalesPersonSelect == 'Select Sales Person') {
                                     					// } else {
                                     						var filterForm = document.getElementById('filterForm');
                                     						filterForm.name="getFilterValues";
                                     						filterForm.submit();
                                     						// window.location.href = 'filterSalesCollection.php?getFilterValues=true';
                                     						window.location.href = 'filterStockReport.php?getFilterValues=true&formSelectedCompany='+formCompanySelect+'&formSelectedProject='+formProjectSelect;
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

                                                        <table id="datatable-buttons" class="table table-striped jambo_table bulk_action" style="width:100%">
                                                          <thead>
                                                            <tr class="headings">
                                                              <th class="column-title rhead">Company </th>
                                                              <th class="column-title rhead">Project </th>
                                                              <th class="column-title rhead">Total Stock (Units)</th>
                                                              <th class="column-title rhead">Available Stock (Units) </th>
                                                              <th class="column-title rhead">Sold Stock (Units) </th>
                                                            </tr>
                                                          </thead>
<?php include_once 'PHP/Read/filter-stockreport-script.php'; ?>

                                                          <tbody>
                                                            <?php
                                                            foreach ($dataArray as $row) { ?>

                                                            <tr>
                                                              <td><?php echo $row['company_name']; ?></td>
                                                              <td><?php echo $row['project_name']; ?></td>
                                                                <td>
                                                                  <?php echo $row['total_units']; ?> - <?php echo number_format($row['total_stocks_value'],2); ?></td>
                                                                <td><?php echo $row['available_stocks_count']; ?> - <?php echo number_format($row['available_stocks_value'],2); ?></td>
                                                                <td><?php echo $row['Sold_stocks_count']; ?> - <?php echo number_format($row['Sold_stocks_value'],2); ?></td>

                                                            </tr>
                                                            <?php
                              									        }


                              								        ?>
                                                            <thead>
                                                              <tr class="headings">
                                                                <th class="column-title rhead">Company </th>
                                                                <th class="column-title rhead">Project </th>
                                                                <th class="column-title rhead">Total Stock (Units)</th>
                                                                <th class="column-title rhead">Available Stock (Units) </th>
                                                                <th class="column-title rhead">Sold Stock (Units) </th>
                                                              </tr>
                                                            </thead>



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

    <script>
      document.addEventListener("DOMContentLoaded", function () {
          // Get references to the two dropdowns and the input field
          const companySelect = document.getElementById("company-select");
          const projectSelect = document.getElementById("project-select");

          // Event listener for the company dropdown
          companySelect.addEventListener("change", function () {
              // Clear the project dropdown
              projectSelect.innerHTML = '<option selected >Select Project</option>';

              // Get the selected company ID
              const selectedCompanyId = companySelect.value;

              // Fetch projects related to the selected company using AJAX
              if (selectedCompanyId !== "Company") {
                  fetchProjects(selectedCompanyId);
              }
          });

          // Function to fetch projects using AJAX
          function fetchProjects(companyId) {
              $.ajax({
                  url: "fetch_projects.php",
                  type: "POST",
                  data: { company_id: companyId },
                  dataType: "json",
                  success: function (data) {
                      if (data && data.length > 0) {
                          // Append project options to the dropdown
                          data.forEach(function (project) {
                              const option = document.createElement("option");
                              option.value = project.project_id;
                              option.textContent = project.project_name;
                              projectSelect.appendChild(option);
                          });
                      } else {
                          // Handle the case where no data is returned
                          console.log("No projects found for the selected company.");
                      }
                  },
                  error: function (xhr, status, error) {
                      // Handle AJAX errors
                      console.error("AJAX error:", status, error);
                  }
              });
          }
      });
  </script>




    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/plugins/validation/jquery.validate.min.js"></script>
    <script src="assets/plugins/validation/validation-script.js"></script>

    <script>
        // Add an event listener to the First Owner dropdown
        $('#firstowner').on('change', function () {
            // Enable the Second Owner dropdown
            $('#secondowner').prop('disabled', false);

            // Get the selected value
            var selectedValue = $(this).val();

            // Disable the option in the Second Owner dropdown with the same value
            $('#secondowner option[value="' + selectedValue + '"]').prop('disabled', true);

            // If the previously selected option in Second Owner is not selected in First Owner anymore, enable it
            if ($(this).data('prevValue')) {
                $('#secondowner option[value="' + $(this).data('prevValue') + '"]').prop('disabled', false);
            }

            // Store the current selected value for future reference
            $(this).data('prevValue', selectedValue);
        });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the two dropdowns and the input field
        const projectSelect = document.getElementById("project-select");
        const projectUnitSelect = document.getElementById("project-unit-select");
        const inputCompareatprice = document.getElementById("inputCompareatprice");

        // Event listener for the project dropdown
        projectSelect.addEventListener("change", function () {
            // Clear the project unit dropdown and unit price field
            projectUnitSelect.innerHTML = '<option selected disabled value>Select</option>';
            inputCompareatprice.value = "";

            // Get the selected project ID
            const selectedProjectId = projectSelect.value;

            // Fetch project units related to the selected project using AJAX
            if (selectedProjectId !== "Select") {
                fetchProjectUnits(selectedProjectId);
            }
        });

        // Event listener for the project unit dropdown
        projectUnitSelect.addEventListener("change", function () {
            // Get the selected unit object (including unit_Name and unit_Price)
            const selectedUnit = projectUnitSelect.options[projectUnitSelect.selectedIndex];

            // Set the unit Name and unit Price in the input field
            inputCompareatprice.value = selectedUnit.getAttribute("data-unit-price");
        });

        // Function to fetch project units using AJAX
        function fetchProjectUnits(projectId) {
            $.ajax({
                url: "fetch_project_units.php",
                type: "POST",
                data: { project_id: projectId }, // Corrected parameter name
                dataType: "json", // Specify JSON dataType
                success: function (data) {
                    if (data && data.length > 0) { // Check if data is valid and not empty
                        // Append project unit options to the dropdown
                        data.forEach(function (unit) {
                            const option = document.createElement("option");
                            option.value = unit.unit_id;
                            option.textContent = unit.unit_Name;
                            option.setAttribute("data-unit-price", unit.unit_Price); // Store unit_Price as data attribute
                            projectUnitSelect.appendChild(option);
                        });
                    } else {
                        // Handle the case where no data is returned
                        console.log("No project units found for the selected project.");
                    }
                },
                error: function (xhr, status, error) {
                    // Handle AJAX errors, e.g., network issues or server errors
                    console.error("AJAX error:", status, error);
                }
            });
        }
    });






  </script>



      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
          })
        })()
    </script>

    <script>
          function calculateDiscount() {
              // Get the values entered by the user and remove commas
              const unitPrice = parseFloat(document.getElementById("inputCompareatprice").value.replace(/,/g, ''));
              const discountLKR = parseFloat(document.getElementById("inputDiscount").value);

              // Calculate the discount percentage with one decimal place
              const discountPercentage = ((discountLKR / unitPrice) * 100).toFixed(1);

              // Calculate the selling price
              const sellingPrice = (unitPrice - discountLKR).toFixed(2);

              // Update the "Discount (%)" and "Selling Price (LKR)" fields
              document.getElementById("inputDiscountpercentage").value = discountPercentage;
              document.getElementById("inputSellingPrice").value = sellingPrice;
          }
      </script>


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
