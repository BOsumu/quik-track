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
									<br />
                         <div class="sale-form">
                                     <div class="col-md-12 ">
                                         <div class="x_content">

                                           <form class="form-label-left input_mask" method="get" id="filterForm" action="filter-collection-script.php" enctype="multipart/form-data">

                                                           <div class="col-md-1 col-sm-12  form-group-report-filter">
                                                             <span class="search-title">Search by </span>
                                                           </div>

                                                            <div class="col-md-1 col-sm-12  form-group-report-filter">
                                                              <select id="formMonth" class="form-control report" name="formMonth" onchange="monthFilter()" >
                                                                   <option value="">SELECT</option>
                                                                   <?php
                                                                       $selected_month = date('m'); //current month
                                                                       for ($i_month = 1; $i_month <12; $i_month++) {
                                                                           $selected = $selected_month == $i_month ? ' selected' : '';
                                                                           echo '<option value="'.$i_month.'"'.$selected.'>'. date('F', mktime(0,0,0,$i_month)).'</option>'."\n";
                                                                       }
                                                                   ?>
                                                                   </select>

                                                                   <script>
                                                                    function monthFilter() {
                                                                      var getMonth=document.getElementById("formMonth").value;
                                                                      console.log(getMonth);

                                                                    }
                                                                  </script>
                                                            </div>

                                                            <div class="col-md-1 col-sm-12  form-group-report-filter">
                                                            <select id="formYear" class="form-control report" name="formYear">
                                                                   <option value="">SELECT</option>
                                                               <?php
                                                               $default_year = date('Y');
                                                               $starting_year = 2010;
                                                               $ending_year = 2035;

                                                                   for ($year = $starting_year; $year < $ending_year; $year++) {
                                                                     $selected = ($year == $default_year) ? ' selected="selected"' : '';
                                                                         echo '<option value="' . $year . '"' . $selected . '>' . $year . '</option>'."\n";
                                                                   }
                                                               ?>
                                                               </select>
                                                            </div>
                                                            <div class="col-md-3 col-sm-12  form-group-report-filter">
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


                                                            <div class="col-md-3 col-sm-12  form-group-report-filter">
                                                              <select id="project-select" class="form-control report" name="formSelectedProject">
                                                                 <option selected>Select Project</option>

                                                             </select>
                                                            </div>

                                                            <div class="col-md-2 col-sm-12  form-group-report-filter">
                                                              <select id="sales-person-select" class="form-control report" name="formSalesPerson">
                                                                 <option selected>Select Sales Person</option>
                                                               <?php
                                                                  $result = mysqli_query($conn, "SELECT * FROM user WHERE U_Status = '0'" );
                                                                  while ($row = mysqli_fetch_array($result)) {
                                                                ?>
                                                                <option value="<?php echo $row["U_id"];?>"> <?php echo $row["U_FName"];?> <?php echo $row["U_LName"];?></option>
                                                                <?php }?>
                                                             </select>

                                                            </div>


                                                            <div class="col-md-1 col-sm-12  form-group-report-filter">
                                                              <button type="button" onclick="submitFormAndNavigate()" class="btn btn-filter btn-sm">Filter</button>
                                                            </div>
                                          </form>


                                           <script>
                                           function submitFormAndNavigate() {
                                           var formMonth=document.getElementById('formMonth').value;
                                           var formYear=document.getElementById('formYear').value;
                                           var formCompanySelect=document.getElementById('company-select').value;
                                           var formProjectSelect=document.getElementById('project-select').value;
                                           var formSalesPersonSelect=document.getElementById('sales-person-select').value;
                                           console.log(formMonth);

                                           var filterForm = document.getElementById('filterForm');
                                           filterForm.name="getFilterValues";
                                           filterForm.submit();

                                           window.location.href = 'filterSalesCollection.php?getFilterValues=true&formMonth=' + formMonth+'&formYear='+formYear+'&formSelectedCompany='+formCompanySelect+'&formSelectedProject='+formProjectSelect+'&formSalesPersonSelect='+formSalesPersonSelect;
                                           }
                                           </script>

<form method="post" enctype="multipart/form-data">
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
                                                 <th class="column-title">This Month Collection </th>
                                                 <th class="column-title">This month Due Date </th>
                                               </tr>
                                             </thead>
                                               <?php include 'PHP/Read/filter-collection-script.php'; ?>
                                               <?php include 'PHP/Read/filter-collection-script.php'; ?>
                                               <?php
                                                foreach ($dataArray as $row) { ?>
                                                  <tr>
                                                    <td><?php echo $row['sale_date']; ?></td>
                                                    <td><?php echo $row['project_name']; ?></td>
                                                    <td><?php echo $row['unit_Name']; ?></td>
                                                    <td><?php echo $row['C_namewinitials']; ?></td>
                                                    <td align="right"><?php echo $row['selling_price']; ?></td>
                          													<td align="right"><?php echo $row['totalPaid']; ?></td>
                          													<td align="right"><?php echo $row['balance']; ?></td>
                          													<td align="right"><?php echo $row['thismonthtotalPaid']; ?></td>
                          													<td align="right"><?php echo $row['due_dates'](); ?></td>
                                                  </tr>
                                          <?php } ?>

                                               <thead>
                                                 <tr class="headings record-underline">
                          												 <td></td>
                          												 <td></td>
                          												 <td></td>
                          												 <td></td>
                          												 <td  align="right" class="column-title"><?php echo number_format($totalsprice, 2);?></td>
                          												 <td  align="right" class="column-title"><?php echo number_format($totalCollection, 2);?></td>
                          												 <td  align="right" class="column-title"><?php echo number_format($totaltobeCollection, 2);?></td>
                          												 <td  align="right" class="column-title"><?php echo number_format($totalthismCollection, 2);?></td>
                          												 <td></td>
                          											 </tr>


                          										 </thead>
                                               <tfoot>
                                                 <tr class="headings">

                                                   <th class="column-title">Sale Date </th>
                                                   <th class="column-title">Project </th>
                                                   <th class="column-title">Unit</th>
                                                   <th class="column-title">Customer</th>
                                                   <th class="column-title">Selling Price(LKR) </th>
                                                   <th class="column-title">Total Collection(LKR) Till Last Month</th>
                                                   <th class="column-title">To be collect </th>
                                                   <th class="column-title">This Month Collection </th>
                                                   <th class="column-title">This month Due Date </th>


                                                 </tr>
                                               </tfoot>
                          									 </table>

                                           </div>




</from>
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

<?php include 'include/footer.php';?>

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

		<!-- <script>
			fuction monthFilter() {
				var getMonth=document.getElementById("month").value;
				console.log(getMonth);
			}
		</script> -->
