<?php
if(isset($_GET['view_unit'])){
    $unit_id = $_GET['view_unit'];
    $select_project_units = "SELECT * FROM project_units WHERE unit_id ='$unit_id'";
    $run_query = mysqli_query($conn, $select_project_units);

    if ($run_query) {
        // Check if any rows were returned
        if (mysqli_num_rows($run_query) > 0) {
            while ($row_post = mysqli_fetch_array($run_query)) {
                $unit_id = $row_post['unit_id'];
                $unit_Name = $row_post['unit_Name'];
                $unit_Description = $row_post['unit_Description'];
                $unit_Price = $row_post['unit_Price'];
                $unit_Size = $row_post['unit_Size'];
                $company_id = $row_post['company_id'];
                $project_id = $row_post['project_id'];
                $unit_status = $row_post['unit_status'];
                $unit_createby = $row_post['unit_createby'];
                $unit_createdate = $row_post['unit_createdate'];

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
