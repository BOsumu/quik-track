<?php
// Get the NIC value from the request parameter
$nic = $_GET['nic'];

// Check if the NIC exists in the database
$query = "SELECT COUNT(*) FROM customer WHERE C_NIC = '$nic'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$exists = $row[0] > 0;

// Prepare JSON response
$response = array('exists' => $exists);
echo json_encode($response);

// Close the database connection
mysqli_close($conn);
?>
