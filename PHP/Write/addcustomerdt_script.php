<?php
if(isset($_POST['add_Customerdt'])){
    $C_Title  = $_POST['C_Title'];
    $C_fullname  = $_POST['C_fullname'];
    $C_namewinitials  = $_POST['C_namewinitials'];
    $C_Occupation  = $_POST['C_Occupation'];
    $C_berth  = $_POST['C_berth'];
    $C_Gender  = $_POST['C_Gender'];
    $C_Country  = $_POST['C_Country'];
    $C_Address  = $_POST['C_Address'];
    $C_AddressP  = $_POST['C_AddressP'];
    $C_Phone  = $_POST['C_Phone'];
    $C_LandNo  = $_POST['C_LandNo'];
    $C_Email  = $_POST['C_Email'];
    $C_CompanyName  = $_POST['C_CompanyName'];
    $C_AddressCS  = $_POST['C_AddressCS'];
    $Customer_id  = $_POST['Customer_id'];

    if ($Customer_id == '') {
      echo "<script>alert('Somthing went wrong')</script>";
      echo "<script>window.open('add_customer_details.php?view_customer=$Customer_id','_self')</script>";
      exit();
    }else {
      $update_customer = "UPDATE customer SET C_Title='$C_Title', C_fullname='$C_fullname', C_namewinitials='$C_namewinitials',
      C_Occupation='$C_Occupation', C_berth='$C_berth', C_Gender='$C_Gender', C_Country='$C_Country', C_Address='$C_Address', C_AddressP='$C_AddressP',
      C_Phone='$C_Phone', C_LandNo='$C_LandNo', C_Email='$C_Email', C_CompanyName='$C_CompanyName', C_AddressCS='$C_AddressCS' WHERE Customer_id='$Customer_id'";

      $run_update = mysqli_query($conn, $update_customer);

      if ($run_update) {
        echo "<script>window.open('customer.php','_self')</script>";
      } else {
      echo "Error: " . mysqli_error($conn);
      }

      mysqli_close($conn);
    }



}
?>
