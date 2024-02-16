<?php

// Check if the form is submitted
if (isset($_POST['Milestoneplansubmit'])) {
    // Get the sale_id, sale_date, Created_by, and selling_price from the form
    $sale_id = $_POST['sale_id'];
    $sale_date = $_POST['sale_date'];
    $created_by = $_POST['Created_by'];
    $selling_price = $_POST['selling_price'];

    // Get the arrays of form fields if they exist
    $installments = isset($_POST['installment']) ? $_POST['installment'] : array();
    $amounts = isset($_POST['amount']) ? $_POST['amount'] : array();
    $due_dates = isset($_POST['due_date']) ? $_POST['due_date'] : array();

    // Calculate the total amount from the $amounts array
    $total_amount = array_sum($amounts);

    // Check if the total amount matches the selling price
    if ($total_amount != $selling_price) {

        echo "<script>window.alert('Total amount does not match the selling price. Adjusting the total amount.')</script>";
        $total_amount = $selling_price;
        echo "<script>window.open('payment_plan.php?sale_id=$sale_id','_self')</script>";
    }else {


    // Loop through the arrays to insert data into the database
    $numRows = count($installments); // Get the number of rows

    for ($i = 0; $i < $numRows; $i++) {
        // Prepare and execute the SQL INSERT statement
        $installment = mysqli_real_escape_string($conn, $installments[$i]);
        $amount = mysqli_real_escape_string($conn, $amounts[$i]);
        $due_date = mysqli_real_escape_string($conn, $due_dates[$i]);

        $sql = "INSERT INTO payment_plan (Ref_No, sale_id, installment, amount, due_date, Created_by)
                VALUES ('$sale_id-$i', '$sale_id', '$installment', '$amount', '$due_date', '$created_by')";

        if (mysqli_query($conn, $sql)) {
              echo "<script>window.open('view_paymentplan.php?sale_id=$sale_id','_self')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    }
}

// Close the database connection
mysqli_close($conn);
?>
