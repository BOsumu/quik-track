<?php
if (isset($_POST['add_payment'])) {
      $pay_date = $_POST['pay_date'];
      $pay_discription = $_POST['pay_discription'];
      $paid_amount = $_POST['paid_amount'];
      $payment_methord = $_POST['payment_methord'];
      $payment_discription = $_POST['payment_discription'];
      $pay_sheetno = $_POST['pay_sheetno'];
      $payment_add_by = $_POST['payment_add_by'];
      $payment_crate_bate = $_POST['payment_crate_bate'];
      $sale_id = $_POST['sale_id'];

      if($pay_discription ==''){
        echo "<script>alert('Fill all fields')</script>";
        echo "<script>window.open('addpayment.php?sale_id=$sale_id','_self')</script>";
        exit();
      }else {

        $select_paymentplan = "SELECT * FROM payment_plan   WHERE sale_id ='$sale_id' AND installment = '$pay_discription'";
        $run_query = mysqli_query($conn,$select_paymentplan);
        while ($row_post = mysqli_fetch_array($run_query)){

            $amount  = $row_post ['amount'];
            $installment = $row_post['installment'];

        }

        $result1 = mysqli_query($conn, "SELECT SUM(paid_amount) AS total_paid_amount FROM payments WHERE sale_id = $sale_id AND pay_discription = $pay_discription");

        if ($result1) {
            $row = mysqli_fetch_assoc($result1);
            $payidamount = $row['total_paid_amount'] ?? 0; // Use the null coalescing operator to set to 0 if NULL
        } else {
            // Handle the case where the query fails
            $payidamount = 0; // Set to 0 if there are no records in payments
        }



        if($amount < $paid_amount){
          echo "<script>alert('Installemnt Amount is more than with payment plan')</script>";
          echo "<script>window.open('addpayment.php?sale_id=$sale_id','_self')</script>";
          exit();
        }elseif($payidamount == $amount) {
          echo "<script>alert('This installemnt allrady paid')</script>";
          echo "<script>window.open('addpayment.php?sale_id=$sale_id','_self')</script>";
          exit();

        }else {

          $insert_payment = "INSERT INTO payments (sale_id, paid_amount, pay_discription, pay_date, pay_sheetno, payment_methord, payment_discription, payment_add_by, payment_crate_bate)
          VALUES ('$sale_id', '$paid_amount', '$pay_discription', '$pay_date', '$pay_sheetno', '$payment_methord', '$payment_discription', '$payment_add_by', '$payment_crate_bate')";

          $run_query = mysqli_query($conn, $insert_payment);
          $payment_id = mysqli_insert_id($conn);
          echo "<script>window.open('receipt.php?receipt_id=$payment_id','_self')</script>";

        }

      }




}
?>
