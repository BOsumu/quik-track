<?php
if(isset($_GET['view_user'])){
    $U_id = $_GET['view_user'];
    $select_admin = "SELECT * FROM user WHERE U_id ='$U_id'";
    $run_query = mysqli_query($conn, $select_admin);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $U_idn = $row_post['U_id'];
                $U_Title = $row_post['U_Title'];
                $U_FName = $row_post['U_FName'];
                $U_LName = $row_post['U_LName'];
                $U_Email = $row_post['U_Email'];
                $U_Contact = $row_post['U_Contact'];
                $U_Designation = $row_post['U_Designation'];
                $U_Type = $row_post['U_Type'];
                $U_Status = $row_post['U_Status'];
                $U_Cratedby = $row_post['U_Cratedby'];
                $U_CratedDate = $row_post['U_CratedDate'];

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
