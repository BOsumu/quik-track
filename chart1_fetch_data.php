<?php
// Include the database connection file
include 'include/dbConnection.php';

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data for all months
$sql1 = "SELECT MONTH(sale_date) AS sale_month, SUM(selling_price) AS total_sales_revenue FROM sales GROUP BY MONTH(sale_date)";
$result1 = mysqli_query($conn, $sql1);

$monthlySalesRevenue = array();
while ($row1 = mysqli_fetch_assoc($result1)) {
    $monthlySalesRevenue[$row1['sale_month']] = $row1['total_sales_revenue'];
}

$sql2 = "SELECT MONTH(pay_date) AS pay_month, SUM(paid_amount) AS total_collection FROM payments GROUP BY MONTH(pay_date)";
$result2 = mysqli_query($conn, $sql2);

$monthlyCollection = array();
while ($row2 = mysqli_fetch_assoc($result2)) {
    $monthlyCollection[$row2['pay_month']] = $row2['total_collection'];
}

// Prepare data for chart
$data = array();
$labels = array();

for ($month = 1; $month <= 12; $month++) {
    $monthSalesRevenue = isset($monthlySalesRevenue[$month]) ? $monthlySalesRevenue[$month] : 0;
    $monthCollection = isset($monthlyCollection[$month]) ? $monthlyCollection[$month] : 0;

    
    $data[] = array(
        'month' => $month, // Add month property for reference
        'totalSalesRevenue' => $monthSalesRevenue,
        'totalCollection' => $monthCollection
    );
}

// Encode data to JSON format
$jsonData = json_encode($data);

// Close the MySQL database connection
mysqli_close($conn);

// Send JSON data to JavaScript chart
echo $jsonData;
