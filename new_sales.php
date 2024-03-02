<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>


<!-- <link href="assets/lib/select2/css/select2.min.css" rel="stylesheet"> -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <!-- /SIDE LIST -->
            <div class="col-sm-2 mail_list_column">
              <h3>Collection Summary</h3>
                    <h2 style="margin-bottom:5px;font-weight:600;">for <?php echo date('M - Y'); ?></h2>
              <p>This a summary of the present total payment collections for the above said month.</p>


                      <ul class="list-unstyled project_files">
                           <li><a href=""style="color:#000000;"><i class="fa fa-circle color-red"></i> Collection</a>
                           </li>
                           <li><a href=""style="color:#000000;"><i class="fa fa-circle color-green"></i> Due Collection</a>
                           </li>
                           <li><a href=""style="color:#000000;"><i class="fa fa-circle color-blue"></i> Total Revenue</a>
                           </li>
                         </ul>
              <!-- <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button> -->
              <!-- <a href="#">
                <div class="mail_list">
                  <div class="left">
                    <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                  </div>
                  <div class="right">
                    <h3>Dennis Mugo <small>3.00 PM</small></h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                  </div>
                </div>
              </a> -->

           <div class="x_content">

           <ul class="nav nav-tabs bar_sidetabs tab-text" id="myTab" role="tablist" style="border:none;">
             <li class="nav-item">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"style="border-color: #dee2e6 #dee2e6 #dee2e6 #dee2e6;border: 0px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;color: #000000;">By Companies</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" name="project" aria-controls="profile" aria-selected="false" style="border: 0px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;">By Project</a>
             </li>

           </ul>

           <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                  <div class="mail_list" style="border:none;">
                    <div class="right">
                      <?php
                       $sql = 'SELECT * FROM  companies';
                       $result = mysqli_query($conn,$sql);
                       $i = 1;
                       while($row = mysqli_fetch_array($result))
                         {
                      ?>
                      <p class="sidelist">
                          <span><?php echo $row['company_name'];?></span>



                          <br><strong class="text-danger">111111</strong>



                          <br><strong class="text-success">1111111</strong>
                          <br><strong class="text-info">1111111</strong>
                          <hr class="sidebarhr">
                      </p>
                    <?php $i++; } ?>
                    </div>
                  </div>

             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

               <div class="mail_list" style="border:none;">
                       <div class="right">
                         <?php
                         //  $sql = 'SELECT  p.project_id, p.project_name, MONTH(pm.pay_date) AS month, YEAR(pm.pay_date) AS year,SUM(pm.paid_amount) AS total_paid_amount
                         //          FROM project p
                         //          JOIN  sales s ON p.project_id = s.project_id
                         //          JOIN  payments pm ON s.sale_id = pm.sale_id
                         //          GROUP BY p.project_id, p.project_name,
                         //          MONTH(pm.pay_date), YEAR(pm.pay_date)
                         //          ORDER BY p.project_id, YEAR(pm.pay_date), MONTH(pm.pay_date);';
                         //
                         //
                         // $result = mysqli_query($conn,$sql);
                         //  $p = 1;
                         //  while($row = mysqli_fetch_array($result))
                         //    {

$sql = 'SELECT * FROM  project';
 $p = 1;
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {


    //Get the monthly tatol paid paid_amount
    $totalpayment_query ="SELECT  p.project_id, p.project_name, MONTH(pm.pay_date) AS month, YEAR(pm.pay_date) AS year,SUM(pm.paid_amount) AS total_paid_amount FROM project p
                          JOIN  sales s ON p.project_id = s.project_id
                          JOIN  payments pm ON s.sale_id = pm.sale_id
                          GROUP BY p.project_id, p.project_name,
                          MONTH(pm.pay_date), YEAR(pm.pay_date)
                          ORDER BY p.project_id, YEAR(pm.pay_date), MONTH(pm.pay_date);";

    $totalpayment_result = mysqli_query($conn, $totalpayment_query);
    $totalpayment_row = mysqli_fetch_array($totalpayment_result);
    $totalpayment =  isset($totalpayment_row['total_paid_amount']) ? number_format($totalpayment_row['total_paid_amount'], 2) : '0.00';

// Get the total revenu
$totalrevenu_query = "SELECT
    p.project_id,
    p.project_name,
    DATE_FORMAT(payments.pay_date, '%Y-%m') AS month,
    SUM(payments.paid_amount) AS total_paid_amount,
    SUM(sales.sale_crate_bate) AS total_selling_price
FROM
    project p
JOIN
    sales ON p.project_id = sales.project_id
LEFT JOIN
    payments ON sales.sale_id = payments.sale_id
GROUP BY
    p.project_id, month
ORDER BY
    p.project_id, month;";
$totalrevenu_result = mysqli_query($conn,$totalrevenu_query);
$totalrevenu_row = mysqli_fetch_array($totalrevenu_result);
$totalrevenu = isset($totalrevenu_row['total_revenue']) ? number_format($totalrevenu_row['total_revenue'], 2) : '0.00';

    ?>
                         <p class="sidelist">
                           <span><?php echo $row['project_name'];?></span>

                           <br><strong class="text-danger"><?php echo $totalpayment;?></strong>


                         <br><strong class="text-success"><?php $totalrevenue?></strong>
                           <br><strong class="text-info">gfgd</strong>
                             <hr class="sidebarhr">
                         </p>
                       <?php $p++; } ?>
                       </div>
                     </div>


             </div>

           </div>
         </div>


          </div>

            <!--/ SIDE  LIST -->
           <!-- RIGHT LIST -->
            <div class="col-sm-10 mail_view">

                <div class="mail_heading row">
                  <div class="col-md-12">
                   <div class="heading">
                       <h1 class="breadcrums"><span>Sales</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
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

                    <div class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>

                          <a href="#">
                            <span class="step_no step-active">1</span>
                            <span class="step_descr centered-text">
                                            <strong>Add New Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">2</span>
                            <span class="step_descr centered-text">
                                              <strong>Create Payment Plan</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
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
<!--
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                          <p class="mg-b-10">Single Select with Search</p>
                          <select class="form-control select2">
                            <option label="Choose one"></option>
                            <option value="Firefox">Firefox</option>
                            <option value="Chrome">Chrome</option>
                            <option value="Safari">Safari</option>
                            <option value="Opera">Opera</option>
                            <option value="Internet Explorer">Internet Explorer</option>
                          </select>
                        </div>-->



                        <form class="form-horizontal form-label-left" novalidate method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                               <label for="form-select" class="control-label col-md-2 col-sm-3 ">Select First Owner :</label>
                                <div class="col-md-5 col-sm-9 ">
                                  <select class="form-control" id="firstowner" required name="Customer_id" data-placeholder="Choose one thing">
                                    <option>SELECT</option>
                                    <?php
                                        $result = mysqli_query($conn, "SELECT * FROM customer WHERE C_status = '0'");
                                       while ($row = mysqli_fetch_array($result)) {
                                       ?>
                                    <option value="<?php echo $row["Customer_id"]; ?>"><?php echo $row["C_fullname"]; ?></option>
                                  <?php } ?>
                                  </select>
                                </div>
                              </div>


                          <div class="form-group row">
                            <label for="input1" class="control-label col-md-2 col-sm-3 ">Select Second Owner :</label>
                            <div class="col-md-5 col-sm-9 ">
                              <select class="form-control" id="secondowner" data-placeholder="Choose one thing" name="Customer_idS" disabled>
                                <option selected disabled value>SELECT</option>
                                <?php
                                 // Use a different variable name for the result set to avoid conflicts
                                 $resultSecondOwner = mysqli_query($conn, "SELECT * FROM customer WHERE C_status = '0'");
                                 while ($rowSecondOwner = mysqli_fetch_array($resultSecondOwner)) {
                                     ?>
                                     <option value="<?php echo $rowSecondOwner["Customer_id"]; ?>"> <?php echo $rowSecondOwner["C_fullname"]; ?></option>
                                      <?php } ?>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="inputProductDescription" class="control-label col-md-2 col-sm-3 ">Select Project :</label>
                                      <div class="col-md-5 col-sm-9 ">
                                        <select class="form-control"id="project-select" data-placeholder="Choose one thing" required name="project_id">
											                   <option selected disabled value>SELECT</option>
                                          <?php
 											                       $result = mysqli_query($conn, "SELECT * FROM project WHERE project_status = '0'");
 											                       while ($row = mysqli_fetch_array($result)) {
 											                           ?>
 											                           <option value="<?php echo $row["project_id"]; ?>"> <?php echo $row["project_name"]; ?></option>
 											                       <?php } ?>
                                        </select>
                                      </div>
                                    </div>

                                                                          <div class="form-group row">
                                                                            <label for="inputProductDescription" class="control-label col-md-2 col-sm-3 ">Select Project Unit :</label>
                                                                            <div class="col-md-5 col-sm-9 ">
                                                                              <select class="form-control"id="project-unit-select" data-placeholder="Choose one thing" required name="unit_id">
									                                                                <option selected disabled value>SELECT</option>
									                                                            </select>
                                                                            </div>
                                                                          </div>




                                                                       <div class="form-group row ">
                                                                         <label for="inputProductDescription" class="control-label col-md-2 col-sm-3 ">Sale Date :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                            <input id="" name="sale_date" required class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                                         </div>
                                                                       </div>


                                                                       <div class="form-group row ">
                                                                        <label for="inputCompareatprice" class="control-label col-md-2 col-sm-3 ">Unite Price(LKR) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                            <div class="input-group mb-3">
                                                                               <div class="input-group-prepend">
                                                                               <span class="input-group-text">LKR</span>
                                                                               </div>
                                                                               <input type="text" class="form-control" id="inputCompareatprice" placeholder="00.00" required name="sale_unit_price" readonly>
                                                                             </div>
                                                                        </div>
                                                                      </div>

                                                                       <div class="form-group row">
                                                                         <label for="inputCostPerPrice" class="control-label col-md-2 col-sm-3 ">Discount(LKR) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text">LKR</span>
                                                                              </div>
                                                                              <input type="text" class="form-control" aria-describedby="basic-addon1" id="inputDiscount" placeholder="00.00" oninput="calculateDiscount()" name="sale_unit_discount_price">
                                                                            </div>
                                                                         </div>
                                                                       </div>

                                                                       <div class="form-group row">
                                                                         <label class="control-label col-md-2 col-sm-3 ">Discount(%) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text">&nbsp;&nbsp;%&nbsp;&nbsp;</span>
                                                                              </div>
                                                                            <input type="text" class="form-control" id="inputDiscountpercentage" placeholder="00.0" readonly name="sale_unit_discount_price_presentage">
                                                                            </div>
                                                                         </div>
                                                                       </div>
                                                                       <div class="form-group row">
                                                                         <label for="inputStarPoints" class="control-label col-md-2 col-sm-3 ">Selling Price(LKR) :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <div class="input-group mb-3">
                                                                              <div class="input-group-prepend">
                                                                              <span class="input-group-text">LKR</span>
                                                                              </div>
                                                                            <input type="text" class="form-control" id="inputSellingPrice" placeholder="00.00" readonly required name="selling_price">
                                                                            </div>
                                                                         </div>
                                                                       </div>
                                                                       <div class="form-group row">
                                                                         <label for="inputStarPoints" class="control-label col-md-2 col-sm-3 ">Sales Person :</label>
                                                                         <div class="col-md-5 col-sm-9 ">
                                                                           <select class="form-control"id="single-select-field" data-placeholder="Choose one thing" required name="sale_by">
														                                                   <option selected disabled value>Select</option>
													                                                      	<?php
															                                                       $result = mysqli_query($conn, "SELECT * FROM user WHERE U_Status = '0'" );
															                                                       while ($row = mysqli_fetch_array($result)) {
													                                                       	?>
														                                                       <option value="<?php echo $row["U_id"];?>"> <?php echo $row["U_FName"];?> <?php echo $row["U_LName"];?></option>
													                                                       	<?php }?>
                                                                           </select>
                                                                         </div>
                                                                       </div>

                                                                       <input type="hidden" value="<?php echo $session_id;?>" name="sale_crate_by"/>
                                                                           <?php
                                                                           date_default_timezone_set('Asia/Colombo');
                                                                           $C_date = date("d-m-Y"); // Format the date as "dd/mm/yyyy"
                                                                           ?>

                                                                           <input type="hidden" value="<?php echo $C_date; ?>" name="sale_crate_bate">


                                                                       <div class="ln_solid"></div>
                                                                       <div class="item form-group">
                                                                         <div class="col-md-6 col-sm-6 left-align">
                                                                           <!-- <button type="submit" class="btn btn-login btn-sm"><a href="add_sales">Next :Create Payment Plan</a></button> -->
                                                                           <button type="submit" class="btn btn-login btn-sm" name="add_sales">Next</button>
                                                                           <button class="btn btn-gray btn-sm" type="reset">Reset</button>
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
            <?php include 'PHP/Write/addSales_script.php';?>
          </div>
           <!-- / RIGHT LIST -->
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer style="margin-left: 0px;">
          <div class="pull-right" style="margin-left: 0px;">
             © 2023 - <script> document.write(new Date().getFullYear())</script>2024 All right reserved. Quik Track for Blue Ocean Group Of Companies &amp; Kelsey Developments PLC, made with ❤️ by <a href="javascript:;" class="fw-medium">Blue Ocean IT</a>
          </div>
          <div class="clearfix"></div>
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
    <script src="assets/vendors/validation/jquery.validate.min.js"></script>
<script src="assets/vendors/validation/validation-script.js"></script>


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
        // Additional code for adding placeholder in search box of select2
        (function($) {
          var Defaults = $.fn.select2.amd.require('select2/defaults');

          $.extend(Defaults.defaults, {
            searchInputPlaceholder: ''
          });

          var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

          var _renderSearchDropdown = SearchDropdown.prototype.render;

          SearchDropdown.prototype.render = function(decorated) {

            // invoke parent method
            var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

            this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

            return $rendered;
          };

        })(window.jQuery);
      </script>


<script src="assets/lib/select2/js/select2.min.js"></script> -->

  </body>
</html>
