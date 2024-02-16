<?php
if (isset($_POST['c_Update'])) {
    $Customer_id = $_POST['Customer_id'];
    $C_Title = $_POST['C_Title'];
    $C_fullname = $_POST['C_fullname'];
    $C_namewinitials = $_POST['C_namewinitials'];
    $C_Occupation = $_POST['C_Occupation'];
    $C_NIC = $_POST['C_NIC'];
    $C_Passport = $_POST['C_Passport'];
    $C_berth = $_POST['C_berth'];
    $C_Gender = $_POST['C_Gender'];
    $C_Address = $_POST['C_Address'];
    $C_AddressP = $_POST['C_AddressP'];
    $C_Country = $_POST['C_Country'];
    $C_Phone = $_POST['C_Phone'];
    $C_LandNo = $_POST['C_LandNo'];
    $C_Email = $_POST['C_Email'];
    $C_CompanyName = $_POST['C_CompanyName'];
    $C_AddressCS = $_POST['C_AddressCS'];
    $C_status = $_POST['C_status'];
    $u_id = $_POST['u_id'];


    if ($Customer_id == '') {
        echo "<script>alert('Something went wrong!')</script>";
    } else {


      // Prepare the SQL statement using placeholders
      $update_customer = "UPDATE customer SET C_Title=?, C_fullname=?, C_namewinitials=?, C_Occupation=?, C_NIC=?, C_Passport=?, C_berth=?, C_Gender=?, C_Address=?, C_AddressP=?, C_Country=?, C_Phone=?, C_LandNo=?, C_Email=?, C_CompanyName=?, C_AddressCS=?, C_status=? WHERE Customer_id=?";

      // Create a prepared statement
      $stmt = mysqli_prepare($conn, $update_customer);

      // Bind parameters with their respective values
      mysqli_stmt_bind_param($stmt, "sssssssssssssssssi", $C_Title, $C_fullname, $C_namewinitials, $C_Occupation, $C_NIC, $C_Passport, $C_berth, $C_Gender, $C_Address, $C_AddressP, $C_Country, $C_Phone, $C_LandNo, $C_Email, $C_CompanyName, $C_AddressCS, $C_status, $Customer_id);

      // Execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {

        $insertactivity = "INSERT INTO activity_log (U_id, activity)
        VALUES ('$u_id', 'Update customer - customer ID ($Customer_id)')";

        $run_query2 = mysqli_query($conn, $insertactivity);

          echo "<script>window.open('customer.php', '_self')</script>";
      } else {
          echo "<script>
              Swal.fire('Oops...',
              'Something went wrong! Please try again!',
              'error')
          </script>";
      }

      // Close the statement and connection
      mysqli_stmt_close($stmt);
      mysqli_close($conn);


    }
}
?>
