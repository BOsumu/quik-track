<?php

  if (isset($_GET['getFilterValues'])) {

    $selectedCompany=$_GET['formSelectedCompany'];
    $SelectedProject=$_GET['formSelectedProject'];


    $dataArray = array();

    $whereConditions = array();

  if ($selectedCompany !== "SelectCompany") {
      $whereConditions[] = "project_units.company_id = '$selectedCompany'";
  }

  if ($SelectedProject !== "SelectProject") {
      $whereConditions[] = "project_units.project_id = '$SelectedProject'";
  }

  $whereClause = (count($whereConditions) > 0) ? "WHERE " . implode(" AND ", $whereConditions) : "";

  $sql =   "SELECT * , COUNT(project_units.unit_id) AS total_units ,SUM(project_units.unit_Price) AS total_price
            FROM project_units
            JOIN project ON project.project_id = project_units.project_id
            JOIN companies ON companies.company_id = project.company_id
            $whereClause
            GROUP BY companies.company_name, project.project_name";

    $filteredResults = mysqli_query($conn, $sql);

    if ($filteredResults) {
      for ($i=0; $i<mysqli_num_rows($filteredResults); $i++) {
        $row=mysqli_fetch_assoc($filteredResults);
        $dataArray[$i] = array();

        $project_id = $row['project_id'];
        $total_stocks_value = $row['total_price'];
        $company_name = $row['company_name'];
        $project_name = $row['project_name'];
        $total_units = $row['total_units'];

        $getAvailableStocks = mysqli_query($conn, "SELECT COUNT(project_units.unit_id) AS available_stocks_count, SUM(project_units.unit_Price) AS total_available_price FROM project_units WHERE unit_status = 0 AND project_id = '$project_id'");
        $getAvailableStocksCount = mysqli_fetch_assoc($getAvailableStocks);
        $available_stocks_count = $getAvailableStocksCount['available_stocks_count'];
        $available_stocks_value = $getAvailableStocksCount['total_available_price'];

        $getSoldStocks = mysqli_query($conn, "SELECT COUNT(project_units.unit_id) AS sold_stocks_count, SUM(project_units.unit_Price) AS total_sold_price FROM project_units WHERE unit_status = 1 AND project_id = '$project_id'");
        $getSoldStocksCount = mysqli_fetch_assoc($getSoldStocks);
        $Sold_stocks_count = $getSoldStocksCount['sold_stocks_count'];
        $Sold_stocks_value = $getSoldStocksCount['total_sold_price'];


        $dataArray[$i] = array(
          'project_id' => $project_id,
          'total_stocks_value' => $total_stocks_value,
          'company_name' => $company_name,
          'project_name' => $project_name,
          'total_units' => $total_units,
          'total_stocks_value' => $total_stocks_value,
          'available_stocks_count' => $available_stocks_count,
          'available_stocks_value' => $available_stocks_value,
          'Sold_stocks_count' => $Sold_stocks_count,
          'Sold_stocks_value' => $Sold_stocks_value
        );

      }
    }
  } else {
    echo "<script>alert('not pass the submit condition')</script>";
  }
?>
