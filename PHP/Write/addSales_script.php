<?php
if(isset($_POST['add_sales'])){
  // Validate and sanitize user inputs
  $Customer_id = mysqli_real_escape_string($conn, $_POST['Customer_id']);
  $Customer_idS = mysqli_real_escape_string($conn, $_POST['Customer_idS']);
  $project_id = mysqli_real_escape_string($conn, $_POST['project_id']);
  $unit_id = mysqli_real_escape_string($conn, $_POST['unit_id']);
  $sale_date_str = mysqli_real_escape_string($conn, $_POST['sale_date']);

  $sale_date = new DateTime($sale_date_str);
  $formatted_sale_date = $sale_date->format('Y-m-d');

  $sale_unit_price = (float) str_replace(',', '', $_POST['sale_unit_price']);
  $sale_unit_discount_price = mysqli_real_escape_string($conn, $_POST['sale_unit_discount_price']);
  $sale_unit_discount_price_presentage = mysqli_real_escape_string($conn, $_POST['sale_unit_discount_price_presentage']);
  $selling_price = (float) str_replace(',', '', $_POST['selling_price']);
  $sale_crate_bate = mysqli_real_escape_string($conn, $_POST['sale_crate_bate']); // Treat it as a string
  $sale_crate_by = mysqli_real_escape_string($conn, $_POST['sale_crate_by']);
  $sale_by = mysqli_real_escape_string($conn, $_POST['sale_by']);

  // if ($Customer_id == '') {
  //      echo "<script>alert('Fill all fields')</script>";
  //      echo "<script>window.open('new_sales.php','_self')</script>";
  //      exit();
  if ($Customer_id == '') {
      $_SESSION['alert_message'] = 'Fill all fields.';
      $_SESSION['alert_type'] = 'danger';
      header("Location: new_sales.php");
      exit();
   } else {
       // Use prepared statement to insert data securely
       $insert_new_sales = "INSERT INTO sales (Customer_id, Customer_idS, project_id, unit_id, sale_date, sale_unit_price, sale_unit_discount_price, sale_unit_discount_price_presentage, selling_price, sale_crate_bate, sale_by, sale_crate_by)
       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $insert_new_sales)) {
           echo "SQL error";
           exit();
       } else {
           mysqli_stmt_bind_param($stmt, "iiiisdddssss", $Customer_id, $Customer_idS, $project_id, $unit_id, $formatted_sale_date, $sale_unit_price, $sale_unit_discount_price, $sale_unit_discount_price_presentage, $selling_price, $sale_crate_bate, $sale_by, $sale_crate_by);
           mysqli_stmt_execute($stmt);

           // Get the sale_id that was auto-generated in the sales table
           $sale_id = mysqli_insert_id($conn);

           // Now update the unit_status in project_units table
           $update_unit_status = "UPDATE project_units SET unit_status = '1' WHERE unit_id = ?";
           $stmt2 = mysqli_stmt_init($conn);
           if (mysqli_stmt_prepare($stmt2, $update_unit_status)) {
               mysqli_stmt_bind_param($stmt2, "i", $unit_id);
               mysqli_stmt_execute($stmt2);
           }

           // Redirect to payment_plan.php with sale_id as a parameter

            echo "<script>window.open('payment_plan.php?sale_id=$sale_id','_self')</script>";
           exit();
       }
   }
}


?>
