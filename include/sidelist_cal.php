
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
$sql = 'SELECT * FROM companies';
$result = mysqli_query($conn, $sql);
$i = 1;

while ($row = mysqli_fetch_array($result)) {
    $company_id = $row['company_id'];
    $company_name = $row['company_name'];

    // Total payment query for the current company
    $company_totalpayment_query = "SELECT c.company_id, c.company_name, p.project_id, p.project_name, EXTRACT(MONTH FROM py.pay_date) AS payment_month, SUM(py.paid_amount) AS company_total_paid_amount
                                   FROM company c
                                   JOIN project p ON c.company_id = p.company_id
                                   JOIN sales s ON p.project_id = s.project_id
                                   JOIN payments py ON s.sale_id = py.sale_id
                                   WHERE c.company_id = $company_id
                                   GROUP BY c.company_id, c.company_name, p.project_id, p.project_name, EXTRACT(MONTH FROM py.pay_date)
                                   ORDER BY c.company_id, p.project_id, payment_month";
    $company_totalpayment_result = mysqli_query($conn, $company_totalpayment_query);

    // Fetch the total paid amount for the current company
    $company_total_paid_amount = 0.00; // Default value
    if ($company_totalpayment_result) {
        $company_totalpayment_row = mysqli_fetch_array($company_totalpayment_result);
        $company_total_paid_amount = isset($company_totalpayment_row['company_total_paid_amount']) ? number_format($company_totalpayment_row['company_total_paid_amount'], 2) : '0.00';
    }

    // Get the monthly total revenue of each company from sale using selling_price and sale_crate_bate
    $company_total_revenue_query = "SELECT c.company_id, c.company_name, EXTRACT(MONTH FROM s.sale_crate_bate) AS sale_month, SUM(s.selling_price) AS company_monthly_total_revenue
        FROM company c
        JOIN project p ON c.company_id = p.company_id
        JOIN sales s ON p.project_id = s.project_id
        WHERE c.company_id = $company_id
        GROUP BY c.company_id, c.company_name, EXTRACT(MONTH FROM s.sale_crate_bate)
        ORDER BY c.company_id, sale_month";
    $company_total_revenue_result = mysqli_query($conn, $company_total_revenue_query);
    $company_monthly_total_revenue = 0.00; // Default value
    if ($company_total_revenue_result) {
        $company_total_revenue_row = mysqli_fetch_array($company_total_revenue_result);
        $company_monthly_total_revenue = isset($company_total_revenue_row['company_monthly_total_revenue']) ? number_format($company_total_revenue_row['company_monthly_total_revenue'], 2) : '0.00';
    }

    // Get the monthly total revenue of each company from sale using selling_price and sale_crate_bate
    $company_collection_query = "SELECT c.company_id, c.company_name, EXTRACT(MONTH FROM pp.due_date) AS sale_month, SUM(pt.paid_amount) AS company_monthly_collection
        FROM company c
        JOIN project p ON c.company_id = p.company_id
        JOIN sales s ON p.project_id = s.project_id
        JOIN payment pt ON s.sale_id = pt.sale_id
        JOIN payment_plan pp ON s.sale_id = pp.sale_id
        WHERE c.company_id = $company_id
        GROUP BY c.company_id, c.company_name, EXTRACT(MONTH FROM pp.due_date)
        ORDER BY c.company_id, sale_month";
    $company_collection_result = mysqli_query($conn, $company_collection_query);
    $company_monthly_collection = 0.00; // Default value
    if ($company_collection_result) {
        $company_collection_row = mysqli_fetch_array($company_collection_result);
        $company_monthly_collection = isset($company_collection_row['company_monthly_collection']) ? number_format($company_collection_row['company_monthly_collection'], 2) : '0.00';
    }
    // Output the company information and total paid amount
    $due_collection = number_format($company_total_paid_amount - $company_monthly_collection, 2);

    ?>
    <p class="sidelist">
         <span><?php echo $company_name; ?></span>
         <br><strong class="text-danger">
             <?php echo $company_total_paid_amount; ?>
         </strong>
         <br><strong class="text-success"><?php echo $company_monthly_total_revenue ?></strong>
         <br><strong class="text-info"> <?php echo $due_collection ?> </strong>
         <hr class="sidebarhr">
     </p>
    <?php
    $i++;
}
?>

                    </div>
                  </div>

             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

               <div class="mail_list" style="border:none;">
                       <div class="right">
                         <?php
                              $sql = 'SELECT * FROM project p';

                              $result = mysqli_query($conn, $sql);
                              $p = 1;

                              while ($row = mysqli_fetch_array($result)) {
                              $project_id = $row['project_id'];

                                   //Get the monthly tatol paid_amount from payment using paid_amount and pay_date
                                     $totalpayment_query = "SELECT MONTH(pm.pay_date) AS month, YEAR(pm.pay_date) AS year, SUM(pm.paid_amount) AS total_paid_amount
                                                            FROM payments pm
                                                            JOIN sales s ON s.sale_id = pm.sale_id
                                                            WHERE s.project_id = '$project_id'
                                                            GROUP BY MONTH(pm.pay_date), YEAR(pm.pay_date)
                                                            ORDER BY YEAR(pm.pay_date), MONTH(pm.pay_date)";
                                     $totalpayment_result = mysqli_query($conn, $totalpayment_query);
                                     $totalpayment_row = mysqli_fetch_array($totalpayment_result);
                                     $totalpayment = isset($totalpayment_row['total_paid_amount']) ? number_format($totalpayment_row['total_paid_amount'], 2) : '0.00';

                                     //Get the monthly total revenue of each project from sale using selling_price and sale_crate_bate
                                     $totalrevenue_query = "SELECT MONTH(s.sale_date) AS month, YEAR(s.sale_date) AS year, SUM(s.selling_price * s.sale_crate_bate) AS total_revenue
                                                            FROM sales s
                                                            WHERE s.project_id = '$project_id'
                                                            GROUP BY MONTH(s.sale_date), YEAR(s.sale_date)
                                                            ORDER BY YEAR(s.sale_date), MONTH(s.sale_date)";
                                    $totalrevenue_result = mysqli_query($conn, $totalrevenue_query);
                                    $totalrevenue_row = mysqli_fetch_array($totalrevenue_result);
                                    $totalrevenue = isset($totalrevenue_row['total_revenue']) ? number_format($totalrevenue_row['total_revenue'], 2) : '0.00';

                                    //GEt the monthly paid amount from payment using paid_amount and due_date
                                    // $monthly_paid_query = "SELECT MONTH(pp.due_date) AS month, YEAR(pp.due_date) AS year, SUM(p.paid_amount) AS monthly_paid_amount
                                    //                           FROM payments p
                                    //                           JOIN payment_plan pp ON p.payment_id = pp.payment_id
                                    //                           JOIN sales s ON p.sale_id = s.sale_id
                                    //                           WHERE s.project_id = '$project_id'
                                    //                           GROUP BY MONTH(pp.due_date), YEAR(pp.due_date)
                                    //                           ORDER BY YEAR(pp.due_date), MONTH(pp.due_date)";
                                    //    $monthly_paid_result = mysqli_query($conn, $monthly_paid_query);
                                    //    $monthly_paid_row = mysqli_fetch_array($monthly_paid_result);
                                    //    $monthly_paid_amount = isset($monthly_paid_row['monthly_paid_amount']) ? number_format($monthly_paid_row['monthly_paid_amount'], 2) : '0.00';


                                  ?>
                                      <p class="sidelist">
                                          <span><?php echo $row['project_name']; ?></span>
                                          <br><strong class="text-danger"><?php echo $totalpayment ?></strong>
                                          <br><strong class="text-success">1232665454</strong>
                                          <br><strong class="text-info"><?php echo $totalrevenue ?></strong>
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
