<?php
if (isset($_POST['add_Customer'])) {
    $C_NIC = isset($_POST['C_NIC']) ? $_POST['C_NIC'] : '';
    $C_Passport = isset($_POST['C_Passport']) ? $_POST['C_Passport'] : '';
    $C_Cratedby = $_POST['C_Cratedby'];
    $C_CratedDate = $_POST['C_CratedDate'];

    // Check if NIC or Passport already exists separately
    $existing_customer_by_nic = $existing_customer_by_passport = false;

    if (!empty($C_NIC)) {
        $sql_nic = "SELECT * FROM customer WHERE C_NIC = '$C_NIC'";
        $result_nic = $conn->query($sql_nic);

        if ($result_nic->num_rows > 0) {
            $existing_customer_by_nic = true;
        }
    }

    if (!empty($C_Passport)) {
        $sql_passport = "SELECT * FROM customer WHERE C_Passport = '$C_Passport'";
        $result_passport = $conn->query($sql_passport);

        if ($result_passport->num_rows > 0) {
            $existing_customer_by_passport = true;
        }
    }

    // Perform the insertion based on the conditions
    if (!$existing_customer_by_nic && !$existing_customer_by_passport) {
      $insert_query = "INSERT INTO customer (
  C_Title, C_fullname, C_namewinitials, C_Occupation, C_NIC, C_Passport,
  C_berth, C_Gender, C_Address, C_AddressP, C_Country, C_Phone, C_LandNo,
  C_Email, C_CompanyName, C_AddressCS, C_Cratedby, C_CratedDate, C_status
) VALUES (
  '', '', '', '', '$C_NIC', '$C_Passport',
  '', '', '', '', '', '', '',
  '', '', '', '$C_Cratedby', '$C_CratedDate', '0'
)";


        if ($conn->query($insert_query) === TRUE) {
            $customer_id = $conn->insert_id;

            $insertactivity = "INSERT INTO activity_log (U_id, activity)
            VALUES ('$C_Cratedby', 'Add New Customer - $C_NIC / C_Passport')";

            $run_query2 = mysqli_query($conn, $insertactivity);

            echo "<script>window.open('add_customer_details.php?view_customer=$customer_id','_self')</script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    } else {
        echo "Customer with the provided NIC and/or Passport already exists!";
    }


}

?>
