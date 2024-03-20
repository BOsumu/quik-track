<?php
if(isset($_GET['sale_id'])){
    $sale_id = $_GET['sale_id'];
    $select_sale = "SELECT * FROM sales WHERE sale_id ='$sale_id'";
    $run_query = mysqli_query($conn, $select_sale);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $sale_id = $row_post['sale_id'];
                $Customer_id = $row_post['Customer_id'];
                $Customer_idS = $row_post['Customer_idS'];
                $project_id = $row_post['project_id'];
                $unit_id = $row_post['unit_id'];
                $sale_date = $row_post['sale_date'];
                $sale_unit_price = $row_post['sale_unit_price'];
                $sale_unit_discount_price = $row_post['sale_unit_discount_price'];
                $sale_unit_discount_price_presentage = $row_post['sale_unit_discount_price_presentage'];
                $selling_price = $row_post['selling_price'];
                $sale_crate_bate = $row_post['sale_crate_bate'];
                $sale_crate_by = $row_post['sale_crate_by'];

            }
        } else {
            echo "No results found.";
        }
    } else {
        // Query execution error
        echo "Query error: " . mysqli_error($conn);
    }

////////
// $sale_id = $_GET['sale_id'];
//
// $select_payment_plan_detail = "SELECT * FROM payment_plan_detail WHERE sale_id ='$sale_id'";
// $run_query = mysqli_query($conn, $select_payment_plan_detail);
//
// if ($run_query) {
//     // Check if any rows were returned
//     if (mysqli_num_rows($run_query) > 0) {
//         while ($row_post = mysqli_fetch_array($run_query)) {
//             $plan_id = $row_post['plan_id'];
//             $sale_id = $row_post['sale_id'];
//             $reservation_fee = $row_post['reservation_fee'];
//             $downpayment = $row_post['downpayment'];
//             $downpaymentdue = $row_post['downpaymentdue'];
//
//
//         }
//     } else {
//         echo "No results found.";
//     }
// } else {
//     // Query execution error
//     echo "Query error: " . mysqli_error($conn);
// }

}

?>
