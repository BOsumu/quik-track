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
                    <div>

    <?php include 'PHP/Read/view-sales-script.php';?>
                      <h2 class="StepTitle">Add Payment</h2>
                      <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="x_panel">

                            <h2><strong>Customer Details</strong></h2>


                          <div class="x_content">

                            <table class="table">

                              <tbody>
                                <?php
        $select_admin = "SELECT C_namewinitials, C_Phone, C_NIC, C_Passport, C_Address, C_Email FROM customer  WHERE Customer_id ='$Customer_id'";
        $run_query = mysqli_query($conn,$select_admin);
        while ($row_post = mysqli_fetch_array($run_query)){
          $C_namewinitials = $row_post ['C_namewinitials'];
          $C_NIC = $row_post ['C_NIC'];
          $C_Passport = $row_post ['C_Passport'];
          $C_Address = $row_post ['C_Address'];
          $C_Email = $row_post ['C_Email'];
          $C_Phone = $row_post ['C_Phone'];
          }
        ?>
                                <tr>
                                  <td>Customer : <?php echo $C_namewinitials;?></td>
                                </tr>

                                <tr>
                                  <td>Contact : <?php echo $C_Phone;?></td>
                                </tr>
                                <tr>
                                  <td>NIC/Passport :  <?php echo $C_NIC;?> / <?php echo $C_Passport;?></td>
                                </tr>
                                <tr>
                                  <td>Address : <?php echo $C_Address;?></td>
                                </tr>
                                <tr>
                                  <td>Email : <?php echo $C_Email;?></td>
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
                                <?php
        $select_admin = "SELECT project_name FROM project  WHERE project_id ='$project_id'";
        $run_query = mysqli_query($conn,$select_admin);
        while ($row_post = mysqli_fetch_array($run_query)){
          $project_name = $row_post ['project_name'];
          }
        ?>
        <?php
        $select_admin = "SELECT unit_Name FROM project_units   WHERE unit_id ='$unit_id'";
        $run_query = mysqli_query($conn,$select_admin);
        while ($row_post = mysqli_fetch_array($run_query)){
          $unit_Name = $row_post ['unit_Name'];
          }
        ?>
                                <tr>
                                  <td>Project :  <?php echo $project_name;?> | Unit : <?php echo $unit_Name;?></td>
                                </tr>
                                <tr>
                                  <td>Unit Price : <?php echo number_format ($sale_unit_price, 2);?></td>
                                </tr>
                                <tr>
                                  <td>discount : <?php echo number_format($sale_unit_discount_price, 2);?> | <?php echo $sale_unit_discount_price_presentage;?>%</td>
                                </tr>
                                <tr>
                                  <td>Selling Price: <b><?php echo number_format($selling_price, 2);?></b></td>
                                </tr>
                                <tr>
                                  <?php
        $sale_id = $sale_id;
        $payment_query = "SELECT SUM(paid_amount) AS payment_amount FROM payments WHERE sale_id = $sale_id";
        $payment_result = mysqli_query($conn, $payment_query);
        $payment_row = mysqli_fetch_array($payment_result);
        $numberFromDB = isset($payment_row['payment_amount']) ? $payment_row['payment_amount'] : 0;
        $formattedTotalPaid = number_format($numberFromDB, 2);

        $balance = $selling_price - $numberFromDB;
        ?>
                                  <td>Total Paid  : <span class="text-success"><b><?php echo number_format ($numberFromDB, 2); ?></b></span> | Balance : <span class="text-danger"><b><?php echo number_format($balance, 2); ?></b></span></td>
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
                                            <select class="form-control" id="project-select" data-placeholder="Choose one thing" required name="pay_discription">
            <option selected disabled value>SELECT</option>
            <?php
            // Retrieve installments and their due amounts for the specific sale_id
            $installmentQuery = "SELECT installment, amount, SUM(paid_amount) AS total_paid_amount
                                FROM payment_plan pp
                                LEFT JOIN payments p ON pp.sale_id = p.sale_id AND pp.installment = p.pay_discription
                                WHERE pp.sale_id = $sale_id
                                GROUP BY installment";

            $result = mysqli_query($conn, $installmentQuery);

            while ($row = mysqli_fetch_assoc($result)) {
                $installmentName = $row["installment"];
                $installmentDueAmount = $row["amount"] - ($row["total_paid_amount"] ?? 0);

                // Only add options for installments with due amounts greater than 0
                if ($installmentDueAmount > 0) {
                    ?>
                    <option value="<?php echo $installmentName; ?>"><?php echo $installmentName . ' - Due amount: ' . number_format($installmentDueAmount, 2); ?></option>
                <?php }
            } ?>
        </select>
                                          </div>
                                      </div>
                                  </div>

                                   <div class='col-sm-3'>
                                      Pay Amount
                                      <div class="form-group">
                                          <div class='input-group date' id='myDatepicker3'>
                                              <input type="text" class="form-control" id=""  name="paid_amount" required>
                                          </div>
                                      </div>
                                  </div>

                                  <div class='col-sm-3'>
                                      Pay Method
                                      <div class="form-group">
                                          <div class='input-group date' id='myDatepicker2'>
                                            <select class="form-control" id="project-select" data-placeholder="Choose one thing" required name="payment_methord">
															 <option selected disabled value>SELECT</option>
															<option value="Bank Transfer">Bank Transfer</option>
															<option value="Cash">Cash</option>
															<option value="Credit Card">Credit Card</option>
															<option value="Cheque">Cheque</option>
														</select>
                                          </div>
                                      </div>
                                  </div>

                                   <div class='col-sm-3'>
                                      Pay Method Remarks
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker6'>
                                               <input type="text" class="form-control" id=""   name="payment_discription" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class='col-sm-3'>
                                      Sheet No
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker7'>
                                              <input type="text" class="form-control" id="" name="pay_sheetno" required>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">

                                    <input type="hidden" value="<?php echo $session_id;?>" name="payment_add_by"/>
                        <?php
                        date_default_timezone_set('Asia/Colombo');
                        $C_date = date("d-m-Y"); // Format the date as "dd/mm/yyyy"
                        ?>

                        <input type="hidden" value="<?php echo $C_date; ?>" name="payment_crate_bate">
                        <input type="hidden" value="<?php echo $sale_id?>" name="sale_id">

                        <br/>
                        <button type="submit" class="btn btn-add btn-sm" name="add_payment">Add Payment</button>
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
          <?php include 'PHP/Write/addPayment_script.php';?>
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
	            url: "PHP/Read/fetch_project_units.php",
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






  </body>
</html>
