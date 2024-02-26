<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result=mysqli_query($conn, "select U_id from user  where U_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);?>
<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>
<!DOCTYPE html>
<html lang="en">



  <body class="nav-md">
    <div class="container body">
      <div class="main_container">


        <!-- page content -->
        <div class="right_col" role="main" style="margin-left: 0px;min-height:auto;">
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
           <!-- RIGHT SIDE -->
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
                        <div class="subtext"><h2>Add New Customer</h2></div>
                      <div class="clear"></div>
                   </div>

                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Customer NIC & Passport</h2>
                                  <div class="clearfix"></div>
                                </div>
                               <div class="x_content">
                                   <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                                       <div class="form-group row">
                                         <label class="control-label col-md-2 col-sm-3 ">NIC Number:</label>
                                         <div class="col-md-5 col-sm-9 ">
                                           <input type="text" class="form-control" id="input1" placeholder="NIC" name="C_NIC" onkeyup="checkNIC(this.value)" >
                                            <div id="nicValidationResult"></div>
                                         </div>
                                       </div>

                                       <div class="form-group row">
                                             <label class="control-label col-md-2 col-sm-3 ">Passport :</label>
                                               <div class="col-md-5 col-sm-9 ">
                                                     <input type="text" class="form-control" id="Passport" placeholder="Passport"  name="C_Passport" onkeyup="checkPassport(this.value)">
        										                         <div id="passportValidationResult"></div>
                                               </div>
                                      </div>
                                      <div class="form-group row">
                                      <div class="col-md-5 col-sm-9 ">
                                          <div id="validationResult" class="text-danger"></div>
                                      </div>
                                    </div>
                                      <div class="ln_solid"></div>

                                      <div class="item form-group">
                                        <input type="hidden" value="<?php echo $session_id;?>" name="C_Cratedby">
                                            <?php
                                            date_default_timezone_set('Asia/Colombo');
                                            $C_date = date("Y/m/d"); ?>
                                            <input type="hidden" value="<?php echo $C_date;?>" name="C_CratedDate">
                                          <div class="col-md-6 col-sm-6  left-align">
                                              <button type="submit" class="btn btn-login btn-sm" name="add_Customer">Next</button>
                                            <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                          </div>
                                      </div>
                                    </form>
                                 </div>
                               </div>
                            </div>
                          </div>
                         </div>
<!-- //RIGHT SIDE -->

          </div>
        </div>

        	<?php include_once 'PHP/Write/addcustomer_script.php'; ?>
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

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>


	<script>
		$(document).ready(function() {
		  var table = $('#example2').DataTable( {
			buttons: ['excel', 'pdf', 'print'],
			lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
		  });

		  table.buttons().container()
			.appendTo('#example2_wrapper .col-md-6:eq(0)')
			.addClass('btn-container'); // Add a class to the buttons container
		});
	  </script>

	  <style>
		/* Add custom styling for the space between buttons and length menu */
		.btn-container {
		  margin-top: 10px; /* Adjust this value as needed for the desired spacing */
		}
	  </style>

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
        // Get the input elements
        const fullNameInput = document.getElementById("fullname");
        const initialsInput = document.getElementById("nInitials");

        // Add an event listener to the full name input
        fullNameInput.addEventListener("input", function () {
            const fullName = fullNameInput.value;
            const initials = getInitials(fullName);
            initialsInput.value = initials;
        });

        // Function to generate initials from full name
        function getInitials(fullName) {
            const names = fullName.split(" ");
            const firstName = names[0];
            const lastName = names[names.length - 1];
            const middleNames = names.slice(1, -1);
            const middleInitials = middleNames.map(name => name.charAt(0));
            return `${firstName.charAt(0)}.${middleInitials.join(".")}. ${lastName}`;
        }
    </script>

<script>
var nicInput = document.getElementById('input1');
var validationResult = document.getElementById('validationResult');

nicInput.addEventListener('input', function() {
	var oldNICPattern = /^\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[vVxX])$/;
	var newNICPattern = /^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))[0]\d?\d{4}$/;

	if (oldNICPattern.test(nicInput.value) || newNICPattern.test(nicInput.value)) {
			validationResult.textContent = 'NIC is valid';
			validationResult.style.color = 'green';
	} else {
			validationResult.textContent = 'NIC is not valid';
			validationResult.style.color = 'red';
	}
});
</script>

<script>
        const form = document.getElementById("myForm");

        form.addEventListener("submit", function(event) {
            const nicValue = document.getElementById("input1").value;
            const passportValue = document.getElementById("Passport").value;

            if (!nicValue && !passportValue) {
                event.preventDefault(); // Prevent form submission
                const validationResult = document.getElementById("validationResult");
                validationResult.innerText = "Please fill in at least one field (NIC or Passport).";
            }
        });
    </script>
	<!--app JS-->
  </body>
</html>
