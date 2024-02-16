<?php
if(isset($_GET['view_project'])){
    $project_id = $_GET['view_project'];
    $select_company = "SELECT * FROM project WHERE project_id ='$project_id'";
    $run_query = mysqli_query($conn, $select_company);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $project_id = $row_post['project_id'];
                $project_name = $row_post['project_name'];
                $project_location = $row_post['project_location'];
                $project_description = $row_post['project_description'];
                $project_status = $row_post['project_status'];
                $project_createby = $row_post['project_createby'];
                $project_createdate = $row_post['project_createdate'];
                $company_id = $row_post['company_id'];

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
