<?php
if(isset($_GET['receipt_id'])){
    $payment_id = $_GET['receipt_id'];
    $select_payments = "SELECT * FROM payments WHERE payment_id ='$payment_id'";
    $run_query = mysqli_query($conn, $select_payments);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $payment_id = $row_post['payment_id'];
                $sale_id = $row_post['sale_id'];
                $paid_amount = $row_post['paid_amount'];
                $pay_discription = $row_post['pay_discription'];
                $pay_dates = $row_post['pay_date'];
                $pay_sheetno = $row_post['pay_sheetno'];
                $payment_methord = $row_post['payment_methord'];
                $payment_discription = $row_post['payment_discription'];
                $payment_add_by = $row_post['payment_add_by'];
                $payment_crate_bate = $row_post['payment_crate_bate'];

            }
        } else {
            echo "No results found.";
        }
    } else {
        // Query execution error
        echo "Query error: " . mysqli_error($conn);
    }





}

?>
