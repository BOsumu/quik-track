<?php
// Include your database connection code here
include('include/dbConnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the company_id parameter is set in the POST request
    if (isset($_POST['company_id'])) {
        // Sanitize the input
        $company_id = mysqli_real_escape_string($conn, $_POST['company_id']);

        // Query to fetch projects based on the selected company
        $query = "SELECT project_id, project_name FROM project WHERE company_id = '$company_id' AND project_status = '0'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $projects = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $projects[] = $row;
            }

            // Close the database connection
            mysqli_close($conn);

            // Return the projects as a JSON response
            echo json_encode($projects);
        } else {
            // Handle database query error
            echo json_encode(array('error' => 'Database query error: ' . mysqli_error($conn)));
        }
    } else {
        // Handle missing or invalid company_id parameter in POST request
        echo json_encode(array('error' => 'Invalid POST parameter'));
    }
} else {
    // Handle unsupported request method
    echo json_encode(array('error' => 'Unsupported request method'));
}
?>
