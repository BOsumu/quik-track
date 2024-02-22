<?php
// Include your database connection code here
include('include/dbConnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the project_id parameter is set in the POST request
    if (isset($_POST['project_id'])) {
        // Sanitize the input
        $project_id = mysqli_real_escape_string($conn, $_POST['project_id']);

        // Query to fetch project units based on the selected project
        $query = "SELECT unit_id, unit_Name, unit_Price FROM project_units WHERE project_id = '$project_id' AND unit_status = '0'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $projectUnits = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $projectUnits[] = $row;
            }

            // Close the database connection
            mysqli_close($conn);

            // Return the project units with unit Name and unit Price as a JSON response
            echo json_encode($projectUnits);
        } else {
            // Handle database query error
            echo json_encode(array('error' => 'Database query error: ' . mysqli_error($conn)));
        }
    } else {
        // Handle missing or invalid project_id parameter in POST request
        echo json_encode(array('error' => 'Invalid POST parameter'));
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the project_id parameter is set in the GET request
    if (isset($_GET['project_id'])) {
        // Sanitize the input
        $project_id = mysqli_real_escape_string($conn, $_GET['project_id']);

        // Query to fetch project units based on the selected project
        $query = "SELECT unit_id, unit_Name, unit_Price FROM project_units WHERE project_id = '$project_id' AND unit_status = '0'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $projectUnits = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $projectUnits[] = $row;
            }

            // Close the database connection
            mysqli_close($conn);

            // Return the project units with unit Name and unit Price as a JSON response
            echo json_encode($projectUnits);
        } else {
            // Handle database query error
            echo json_encode(array('error' => 'Database query error: ' . mysqli_error($conn)));
        }
    } else {
        // Handle missing or invalid project_id parameter in GET request
        echo json_encode(array('error' => 'Invalid GET parameter'));
    }
} else {
    // Handle unsupported request method
    echo json_encode(array('error' => 'Unsupported request method'));
}
?>
