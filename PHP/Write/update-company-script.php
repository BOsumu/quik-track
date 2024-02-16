<?php
if(isset($_POST['c_Update'])){

  $company_id = $_POST['company_id'];
  $company_name = $_POST['company_name'];
  $company_description = $_POST['company_description'];
  $company_address = $_POST['company_address'];
  $company_status = $_POST['company_status'];


  if ($company_id == '') {
    echo "<script>alert('somthing went wrong!')</script>";
  } else {


    $update_companies = "UPDATE companies SET company_name='$company_name', company_description='$company_description', company_address='$company_address', company_status='$company_status' WHERE company_id='$company_id'";

    $run_update = mysqli_query($conn, $update_companies);

    if ($run_update) {
      echo "<script>window.open('company.php','_self')</script>";
    } else {
      echo "<script>
        Swal.fire('Oops...',
        'Something went wrong! Please try again!',
        'error')
      </script>";
    }

    mysqli_close($conn);
  }
}
?>
