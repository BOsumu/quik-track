<?php
// Include the database connection file
include 'include/dbConnection.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the current year and month
$currentYear = date('Y');
$currentMonth = date('m');

// Query to get top-selling salespeople for the current month
$sql = "SELECT u.U_FName, u.U_LName, SUM(s.selling_price) AS total_sales
        FROM sales s
        JOIN user u ON s.sale_by = u.U_id
        WHERE YEAR(s.sale_date) = $currentYear
        AND MONTH(s.sale_date) = $currentMonth
        GROUP BY u.U_id
        ORDER BY total_sales DESC
        LIMIT 4"; // Limit to top 4 salespeople

$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn)); // Handle query error
}

$salespeopleData = array();
while ($row = mysqli_fetch_assoc($result)) {
    $salespersonData = array(
        'name' => $row['U_FName'] . ' ' . $row['U_LName'],
        'totalSales' => $row['total_sales']
    );
    $salespeopleData[] = $salespersonData;
}

// Encode data to JSON format
$jsonData = json_encode($salespeopleData);

// Close the MySQL database connection
mysqli_close($conn);

// Set the proper content type for JSON
header('Content-Type: application/json');
// Send JSON data to JavaScript chart
echo $jsonData;
?>
