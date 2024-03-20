
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
                           $totalthismCollection  = 0;
                           $sql = 'SELECT * FROM companies c';

                           $result = mysqli_query($conn, $sql);
                           $c = 1;

                           while ($row = mysqli_fetch_array($result)) {

                               ?>
                                   <p class="sidelist">
                                       <span><?php echo $row['company_name']; ?></span>
                                       <br><strong class="text-danger"></strong>
                                       <br><strong class="text-success"></strong>
                                       <br><strong class="text-info"></strong>
                                       <hr class="sidebarhr">
                                   </p>
                               <?php
                               $c++;
                                   }
                                     ?>

                    </div>
                  </div>

             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

               <div class="mail_list" style="border:none;">
                       <div class="right">
                         <?php
                         $totalthismsprice = 0;
                         $totaldueCollection = 0;
                         $totalthismCollection  = 0;

                         $p = 1;
   // Get the list of project names from the project table
   $project_query = "SELECT DISTINCT project_name, project_id FROM project WHERE project_status = 0";
   $project_result = mysqli_query($conn, $project_query);

    // Initialize $p outside the loop

   while ($project_row = mysqli_fetch_array($project_result)) {
       $project_name = $project_row['project_name'];
       $project_id = $project_row['project_id'];

       // Get the current month and year
       $currentMonth = date('m');
       $currentYear = date('Y');

       // Calculate the total selling price for each project
       $sql = "SELECT *, SUM(selling_price) AS total_selling_price
               FROM sales s
               JOIN project p ON p.project_id = s.project_id
               JOIN project_units pu ON pu.unit_id = s.unit_id
               JOIN customer c ON c.Customer_id = s.Customer_id
               WHERE p.project_id = $project_id
               AND YEAR(s.sale_date) = $currentYear
               AND MONTH(s.sale_date) = $currentMonth";

       $result = mysqli_query($conn, $sql);
       $selling_row = mysqli_fetch_array($result);
       $total_selling_price = isset($selling_row['total_selling_price']) ? number_format($selling_row['total_selling_price'], 2) : '0.00';

       // Retrieve the sale_id from the current row
       $sale_id = isset($selling_row['sale_id']) ? $selling_row['sale_id'] : 0;

       // Additional payment-related code
       $has_payment_plan_data = false;
       $payment_plan_query = "SELECT * FROM payment_plan WHERE sale_id = $sale_id";
       $payment_plan_result = mysqli_query($conn, $payment_plan_query);
       if (mysqli_num_rows($payment_plan_result) > 0) {
           $has_payment_plan_data = true;
       }

       $currentYear = date('Y');
       $currentMonth = date('m');

       $payment_query = "SELECT COALESCE(SUM(paid_amount), 0) AS payment_amount FROM payments WHERE sale_id = $sale_id AND (YEAR(pay_date) < $currentYear OR (YEAR(pay_date) = $currentYear AND MONTH(pay_date) < $currentMonth))";
       $payment_result = mysqli_query($conn, $payment_query);
       $payment_row = mysqli_fetch_array($payment_result);
       $totalPaid = isset($payment_row['payment_amount']) ? number_format($payment_row['payment_amount'], 2) : '0.00';

       $monthpayment_query = "SELECT COALESCE(SUM(amount), 0) AS thismonth_payment FROM payment_plan WHERE sale_id = $sale_id AND YEAR(due_date) = $currentYear AND MONTH(due_date) = $currentMonth";
       $payment_result2 = mysqli_query($conn, $monthpayment_query);
       $payment_row2 = mysqli_fetch_array($payment_result2);
       $thismonthtotalPaid = isset($payment_row2['thismonth_payment']) ? number_format($payment_row2['thismonth_payment'], 2) : '0.00';

       // Calculate balance
       $balance = number_format($selling_row['total_selling_price'] - $payment_row['payment_amount'], 2);

       $sql_due_dates = "SELECT due_date
         FROM payment_plan
         WHERE sale_id = $sale_id
         AND YEAR(due_date) = $currentYear
         AND MONTH(due_date) = $currentMonth";
         $result_due_dates = mysqli_query($conn, $sql_due_dates);

         // Fetch all due dates for the current month and year
         $due_dates = array();
         while ($row_due_date = mysqli_fetch_assoc($result_due_dates)) {
             $due_dates[] = $row_due_date['due_date'];
         }

         /// total selling amount
         $totalthismsprice += $selling_row['total_selling_price'];
         /// To be collecte
         $totaldueCollection += $selling_row['total_selling_price'] - $payment_row['payment_amount'];
         /// This month Collection
         $totalthismCollection += $payment_row2['thismonth_payment'];

       ?>
       <p class="sidelist">
           <span><?php echo $project_name; ?></span>
           <br><strong class="text-danger"><?php echo  $totalthismsprice; ?></strong>
           <br><strong class="text-success"><?php echo $totalthismCollection; ?></strong>
           <br><strong class="text-info"><?php echo $totaldueCollection; ?></strong>
           <hr class="sidebarhr">
       </p>
       <?php
       $p++;
   }
   ?>
                       </div>
                     </div>


             </div>

           </div>
         </div>


          </div>

            <!--/ SIDE  LIST -->
