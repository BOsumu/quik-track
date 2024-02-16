<?php
if (isset($_POST['instalmentPplan'])) {
    // Retrieve data from the form
    $sellingPrice = floatval($_POST['selling_price']);
    $reservationFee = floatval($_POST['reservation_fee']);
    $downpayment = floatval($_POST['downpayment']);
    $numInstallments = intval($_POST['num_installments']);
    $installmentPeriod = intval($_POST['installment_period']);
    $downpaymentDueDate = $_POST['downpaymentdue'];
    $saleID = intval($_POST['sale_id']);
    $Created_by = $_POST['Created_by'];

    // Assuming you have already established the database connection as $conn

    // Calculate installment amount
    $installmentAmount = ($sellingPrice - $downpayment - $reservationFee) / $numInstallments;

    // Create an array to store payment plan details
    $paymentPlan = [];

    // Retrieve reservation fee due date from sales table
    $reservationFeeDueDate = getReservationFeeDueDateFromSales($conn, $saleID);

    // New function to generate a unique reference number
    function generateReferenceNumber($conn) {
            $query = "SELECT MAX(Ref_No) as max_ref FROM payment_plan";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $maxRef = $row['max_ref'];
            if (empty($maxRef) || $maxRef < 1000) {
                return 1000;
            }
            return $maxRef + 1;
        }


  // Insert the payment plan data into the payment_plan table with unique reference numbers
  $referenceNumber = generateReferenceNumber($conn);


  // Create the first installment for the reservation fee
  $paymentPlan[] = [
      'sale_id' => $saleID,
      'installment' => 'Reservation Fee',
      'amount' => $reservationFee,
      'due_date' => $reservationFeeDueDate,
      'Created_by' => $Created_by,
  ];

  // Create the second installment for the downpayment

  $paymentPlan[] = [
      'sale_id' => $saleID,
      'installment' => 'Downpayment',
      'amount' => $downpayment,
      'due_date' => $downpaymentDueDate,
      'Created_by' => $Created_by,
  ];

  function getOrdinal($number) {
      $lastDigit = $number % 10;
      $lastTwoDigits = $number % 100;

      if ($lastTwoDigits >= 11 && $lastTwoDigits <= 13) {
          return $number . 'th Installment';
      } else {
          switch ($lastDigit) {
              case 1:
                  return $number . 'st Installment';
              case 2:
                  return $number . 'nd Installment';
              case 3:
                  return $number . 'rd Installment';
              default:
                  return $number . 'th Installment';
          }
      }
  }

  $installmentCounter = 1; // Start with the third installment

  for ($i = 1; $i <= $numInstallments; $i++) {
      $dueDate = date('Y-m-d', strtotime("+$i month", strtotime($downpaymentDueDate))); // Use $i to increment by months
      $ordinalInstallment = getOrdinal($installmentCounter);
      $paymentPlan[] = [
          'sale_id' => $saleID,
          'installment' => $ordinalInstallment,
          'amount' => $installmentAmount,
          'due_date' => $dueDate,
          'Created_by' => $Created_by,
      ];

      $installmentCounter++; // Increment the installment counter for the next installment

  }


  // Insert the payment plan data into the payment_plan table
  foreach ($paymentPlan as $plan) {
      $saleID = $plan['sale_id'];
      $installment = $plan['installment'];
      $amount = $plan['amount'];
      $dueDate = $plan['due_date'];

      $sql = "INSERT INTO payment_plan (sale_id, installment, amount, due_date,Created_by, Ref_No) VALUES ('$saleID', '$installment', '$amount', '$dueDate', '$Created_by','$referenceNumber')";

      if ($conn->query($sql) !== TRUE) {
          echo "Error inserting into payment_plan: " . $conn->error;
          $conn->close();
          exit;
      }else {

          echo "<script>window.open('view_paymentplan.php?sale_id=$saleID','_self')</script>";
      }
  }

    // Redirect to view_paymentplan.php


    // Close the database connection
    //$conn->close();
}

// Function to retrieve reservation fee due date from sales table
function getReservationFeeDueDateFromSales($conn, $saleID) {
    // You should implement this function to query your database and fetch the due date.
    // Replace the following line with your database query logic.
    $query = "SELECT sale_date FROM sales WHERE sale_id = '$saleID'";
    // Execute the query and fetch the due date.
    $result = $conn->query($query);

    if ($result === false) {
        die("Error in query: " . $conn->error);
    }

    $row = $result->fetch_assoc();
    $dueDate = $row['sale_date'];

    return $dueDate;
}
?>
