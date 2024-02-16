<?php
if(isset($_GET['view_customer'])){
    $Customer_id = $_GET['view_customer'];
    $select_admin = "SELECT * FROM customer WHERE Customer_id ='$Customer_id'";
    $run_query = mysqli_query($conn, $select_admin);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $Customer_id = $row_post['Customer_id'];
                $C_Title = $row_post['C_Title'];
                $C_fullname = $row_post['C_fullname'];
                $C_namewinitials = $row_post['C_namewinitials'];
                $C_Occupation = $row_post['C_Occupation'];
                $C_NIC = $row_post['C_NIC'];
                $C_Passport = $row_post['C_Passport'];
                $C_berth = $row_post['C_berth'];
                $C_Gender = $row_post['C_Gender'];
                $C_Address = $row_post['C_Address'];
                $C_AddressP = $row_post['C_AddressP'];
                $C_Country = $row_post['C_Country'];
                $C_Phone = $row_post['C_Phone'];
                $C_LandNo = $row_post['C_LandNo'];
                $C_Email = $row_post['C_Email'];
                $C_CompanyName = $row_post['C_CompanyName'];
                $C_AddressCS = $row_post['C_AddressCS'];
                $C_Cratedby = $row_post['C_Cratedby'];
                $C_CratedDate = $row_post['C_CratedDate'];
                $C_status = $row_post['C_status'];

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
