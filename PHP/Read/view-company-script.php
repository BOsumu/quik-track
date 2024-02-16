<?php
if(isset($_GET['view_company'])){
    $company_id = $_GET['view_company'];
    $select_company = "SELECT * FROM companies WHERE company_id ='$company_id'";
    $run_query = mysqli_query($conn, $select_company);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $company_id = $row_post['company_id'];
                $company_name = $row_post['company_name'];
                $company_description = $row_post['company_description'];
                $company_address = $row_post['company_address'];
                $company_createby = $row_post['company_createby'];
                $company_createdate = $row_post['company_createdate'];
                $company_status = $row_post['company_status'];
  
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
