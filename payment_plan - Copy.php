<?php ob_start();?>
<?php include 'include/dbConnection.php';
?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
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

                    <div class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>

                          <a href="#">
                            <span class="step_no">1</span>
                            <span class="step_descr centered-text">
                                            <strong>Add New Sales</strong><br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no step-active">2</span>
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

                                    <td>Customer : </td>


                                  </tr>

                                  <tr>
                                    <td>Contact : </td>
                                  </tr>
                                  <tr>
                                    <td>NIC/Passport :  </td>
                                  </tr>
                                  <tr>
                                    <td>Address : </td>
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
                                       <td>project:</td>
                                  </tr>
                                  <tr>
                                    <td>Unit : </td>
                                  </tr>
                                  <tr>
                                    <td>Unit Price :  LKR</td>
                                  </tr>
                                  <tr>
                                    <td>Discount :  LKR | </td>
                                  </tr>
                                  <tr>
                                    <td>Selling Price : LKR</td>
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
                                  	<input type="text" class="form-control" id="selling_price" name="selling_price" min="1" step="0.01" required value="" readonly>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Reservation Fee :</label>
                                    	<input type="text" class="form-control"  id="reservation_fee" name="reservation_fee" min="0" step="0.01" onchange="calculateReservationFeePercentage()">
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Reservation Fee (%) :</label>
                                  <input type="text" class="form-control" id="reservation_fee_percentage" name="reservation_fee_percentage" min="0" step="0.01" readonly>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Downpayment (%) :</label>
                                  	<input type="text" class="form-control" id="downpayment_percentage" name="downpayment_percentage" min="0" step="0.01" onchange="calculateDownpaymentAmount()">
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Downpayment (Fixed Amount) :</label>
                                  	<input type="text" class="form-control" id="downpayment" name="downpayment" min="0" step="0.01" readonly>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Downpayment Due Date:</label>
                                  	<input type="date" class="form-control" id="downpaymentdue" name="downpaymentdue" required>
                                  </div>
                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Number of Installments :</label>
                                    	<input type="number" class="form-control" id="num_installments" name="num_installments" min="1" required>
                                  </div>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <label for="fullname">Installment Period (in Months) :</label>
                                  	<input type="number" class="form-control"  id="installment_period" name="installment_period" min="1" required>
                                  </div>
                                  <input type="hidden" id="sale_id" name="sale_id" required value="">
                  <input type="hidden" value="" name="sale_date" required/>
                  <input type="hidden" value="" name="Created_by" required/>

                                  <div class="col-md-4 col-sm-4  form-group has-feedback" style="margin-top: 27px;">

                                     <button type="submit" class="btn btn-login" name="instalmentPplan">Crate Payment Plan</button>
                                     <button class="btn btn-gray" type="reset">Reset</button>
                                  </div>


                                </form>


                              </div>


                              <div class="tab-pane fade" id="milestone" role="tabpanel" aria-labelledby="profile-tab">

                                <form method="post" enctype="multipart/form-data" id="myForm">
                                <div class="row" id="rowToDuplicate">
                                  <div class="col-md-4 col-sm-4">
                                     <label for="input25" class="form-label">Milestone</label>
                                      <input type="text" class="form-control" id="input51" placeholder="Milestone" required name="installment[]">
                                 </div>
                                 <div class="col-md-3 col-sm-3">
                                     <label for="input25" class="form-label">Amount (LKR)</label>
                                     <input type="text" class="form-control" name="amount[]" placeholder="Amount (LKR)" required>

                                 </div>


                                 <div class="col-md-3 col-sm-3">
                                     <label for="input25" class="form-label">Due Date</label>
                                     <input type="date" class="form-control" id="input51" placeholder="Due Date" required name="due_date[]">
                                 </div>

                                 <div class="col-md-2 col-sm-2  form-group has-feedback">
                                  <button type="button" class="btn btn-login plus-top" onclick="duplicateRow()"><i class='fa fa-plus'></i>&nbsp;Add New</button>
                                 </div>

                             </div>
                             <div id="rowContainer"></div>
                             <div class="row">
                               <input type="hidden" value="" name="selling_price">
  									           <input type="hidden" id="sale_id" name="sale_id" required value="">
  									           <input type="hidden" value="" name="sale_date" required/>
  									           <input type="hidden" value="" name="Created_by" required/>

                              <div class="col-md-12">

                                <br/>
                                 <div id="errorText" style="color: red;"></div> <b><div id="totalAmountMessage"></div></b>
                                 <br/>
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                  <button type="text" class="btn btn-login" name="Milestoneplansubmit" id="submitButton"><a href="view_sales.php" style="color:#ffffff;">Submit</a></button>
                                  <button class="btn btn-gray" type="reset">Reset</button>
                                </div>
                              </div>
                            </div>
                            </form>
                            <h6 class="mb-0 text-danger"></h6>




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

        		<script>
        			function duplicateRow() {
        					// Clone the row with the specified id
        					var rowToDuplicate = document.querySelector('#rowToDuplicate').cloneNode(true);

        					// Clear input values in the cloned row
        					var inputElements = rowToDuplicate.querySelectorAll('input');
        					for (var i = 0; i < inputElements.length; i++) {
        							inputElements[i].value = "";
        					}

        					// Add margin class to the cloned row
        					rowToDuplicate.classList.add('mt-2');

        					// Append the cloned row to the parent container
        					document.querySelector('#rowContainer').appendChild(rowToDuplicate);

        					// Add a delete button to the cloned row
        					var deleteButton = document.createElement('button');
        					deleteButton.textContent = 'Delete';
        					deleteButton.className = 'btn btn-danger mt-4';
        					deleteButton.onclick = function() {
        							document.querySelector('#rowContainer').removeChild(rowToDuplicate);
        					};
        					rowToDuplicate.querySelector('.col-sm-2').appendChild(deleteButton);
        			}
        </script>

        <script>
        // Replace this with your actual selling_price
        const selling_price = <?php echo $selling_price; ?>;

        const form = document.getElementById("myForm");
        const amountInputs = form.querySelectorAll('input[name="amount[]"]');
        const submitButton = document.getElementById("submitButton");
        const totalAmount = document.createElement("div");
        const errorText = document.getElementById("errorText");

        form.appendChild(totalAmount);

        // Function to calculate the sum of entered values and display error message and total amount
        function calculateTotal() {
          let sum = 0;
          const amountInputs = document.querySelectorAll('input[name="amount[]"]');

          amountInputs.forEach((input) => {
            if (input.value) {
              sum += parseFloat(input.value);
            }
          });

          // Check if the sum equals the selling_price
          if (sum === selling_price) {
            submitButton.disabled = false;
            errorText.textContent = ""; // Clear any previous error message
          } else {
            submitButton.disabled = true;
            errorText.textContent = "Total amount does not match the selling price. Adjusting the total amount.";
          }

          // Display the total amount message in a different location
          const totalAmountMessage = document.getElementById("totalAmountMessage");
          totalAmountMessage.textContent = `Total Amount: ${sum} LKR`;
        }

        // Attach a single event listener to the form to handle all dynamic rows
        form.addEventListener("input", calculateTotal);

        // Initially, disable the submit button
        submitButton.disabled = true;

        // Calculate the total initially
        calculateTotal();




        </script>


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