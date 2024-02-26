<?php
if(isset($_POST['add_Company'])){

  $company_name = $_POST['company_name'];
  $company_description = $_POST['company_description'];
  $company_address = $_POST['company_address'];
  $company_createby = $_POST['company_createby'];
  $company_createdate = $_POST['company_createdate'];


  if($company_name == ''){
    echo "<script>alert('Fill all fields')</script>";
    echo "<script>window.open('company.php','_self')</script>";
    exit();
  }
  else {
    // Check if the email already exists
    $check_companies_query = "SELECT * FROM companies WHERE company_name = '$company_name'";
    $run_companies_query = mysqli_query($conn, $check_companies_query);
    $companies_rows = mysqli_num_rows($run_companies_query);

    if ($companies_rows > 0) {
      echo "<script>alert('Company Name already exists')</script>";
      echo "<script>window.open('company.php','_self')</script>";
      exit();
    }
    else {



        $insert_new_companies = "INSERT INTO companies (company_name, company_description, company_address, company_createby, company_createdate, company_status)
        VALUES ('$company_name', '$company_description', '$company_address', '$company_createby', '$company_createdate', '0')";

        $run_query = mysqli_query($conn, $insert_new_companies);
        echo "<script>window.open('company.php','_self')</script>";
    }
  }
}
?>
