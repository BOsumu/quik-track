<?php

if (isset($_GET['getFilterValues'])) {

  $month=$_GET['formMonth'];
  $year=$_GET['formYear'];
  $selectedCompany=$_GET['formSelectedCompany'];
  $SelectedProject=$_GET['formSelectedProject'];
  $SalesPerson=$_GET['formSalesPersonSelect'];

  $dataArray = array();
  $totalsprice = 0;
  $totalCollection = 0;
  $totaltobeCollection = 0;
  $totalthismCollection  = 0;

  $whereConditions = array();

if ($month !== "Months") {
    $whereConditions[] = "MONTH(sale_date) = '$month'";
}

if ($year !== "Year") {
    $whereConditions[] = "YEAR(sale_date) = '$year'";
}

if ($selectedCompany !== "Select Company") {
    $whereConditions[] = "project.company_id = '$selectedCompany'";
}

if ($SelectedProject !== "Select Project") {
    $whereConditions[] = "sales.project_id = '$SelectedProject'";
}

if ($SalesPerson !== "Select Sales Person") {
    $whereConditions[] = "sale_crate_by = '$SalesPerson'";
}

$whereClause = (count($whereConditions) > 0) ? "WHERE " . implode(" AND ", $whereConditions) : "";

$sql = "SELECT * FROM sales
        JOIN project ON project.project_id = sales.project_id
        JOIN project_units ON project_units.unit_id = sales.unit_id
        JOIN customer ON customer.Customer_id = sales.Customer_id
        $whereClause";

  $filteredResults = mysqli_query($conn, $sql);

  if ($filteredResults) {
    for ($i=0; $i<mysqli_num_rows($filteredResults); $i++) {
      $row=mysqli_fetch_assoc($filteredResults);
      $dataArray[$i] = array();
      $sale_id = $row['sale_id'];
      $sale_date = $row['sale_date'];
      $project_name = $row['project_name'];
      $unit_Name = $row['unit_Name'];
      $C_namewinitials = $row['C_namewinitials'];
      $selling_price = isset($row['selling_price']) ? number_format($row['selling_price'], 2) : '0.00';

      $has_payment_plan_data = false;
       $payment_plan_query = "SELECT * FROM payment_plan WHERE sale_id = $sale_id";
       $payment_plan_result = mysqli_query($conn, $payment_plan_query);
       if (mysqli_num_rows($payment_plan_result) > 0) {
           $has_payment_plan_data = true;
       }

      $currentYear = date('Y');
      $currentMonth = date('m');

      $payment_query = "SELECT COALESCE(SUM(paid_amount), 0) AS payment_amount FROM payments WHERE sale_id = $sale_id  AND (YEAR(pay_date) < $currentYear OR (YEAR(pay_date) = $currentYear AND MONTH(pay_date) < $currentMonth))";
      $payment_result = mysqli_query($conn, $payment_query);
      $payment_row = mysqli_fetch_array($payment_result);
      $totalPaid = isset($payment_row['payment_amount']) ? number_format($payment_row['payment_amount'], 2) : '0.00';

      $monthpayment_query = "SELECT COALESCE(SUM(amount), 0) AS thismonth_payment FROM payment_plan WHERE sale_id = $sale_id AND YEAR(due_date) = $currentYear AND MONTH(due_date) = $currentMonth";
      $payment_result2 = mysqli_query($conn, $monthpayment_query);
      $payment_row2 = mysqli_fetch_array($payment_result2);
      $thismonthtotalPaid = isset($payment_row2['thismonth_payment']) ? number_format($payment_row2['thismonth_payment'], 2) : '0.00';

      // Calculate balance
      $balance = number_format($row['selling_price'] - $payment_row['payment_amount'], 2);

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
        $totalsprice += $row['selling_price'];
        /// Total Collection Till Last Month
        $totalCollection += $payment_row['payment_amount'];
        /// To be collecte
        $totaltobeCollection += $row['selling_price'] - $payment_row['payment_amount'];
        /// This month Collection
        $totalthismCollection += $payment_row2['thismonth_payment'];

      $dataArray[$i] = array(


        'sale_id' => $sale_id,
        'sale_date' => $sale_date,
        'project_name' => $project_name,
        'unit_Name' => $unit_Name,
        'C_namewinitials' => $C_namewinitials,
        'selling_price' => $selling_price,
        'totalPaid' => $totalPaid, //Total Collection
        'balance' => $balance, // To be collect
        'thismonthtotalPaid' => $thismonthtotalPaid, // This month collection

            'due_dates' => function() use ($due_dates) {
                $output = '';
                if (!empty($due_dates)) {
                    foreach ($due_dates as $due_date) {
                        $output .= $due_date . "<br>";
                    }
                } else {
                    $output = "N/A";
                }
                return $output;
            }

      );
    }
  }
} else {
  echo "<script>alert('not pass the submit condition')</script>";
}
?>
