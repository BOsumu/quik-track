<?php
if (isset($_POST['add_unit'])) {
    $unit_Name = $_POST['unit_Name'];
    $unit_Description = $_POST['unit_Description'];
    $unit_Price = $_POST['unit_Price'];
    $unit_Size = $_POST['unit_Size'];
    // $unit_Beadrooms = $_POST['unit_Beadrooms'];
    // $unit_Bathroom = $_POST['unit_Bathroom'];
    // $unit_FloorLevel = $_POST['unit_FloorLevel'];
    $project_id = $_POST['project_id'];
    $company_id = $_POST['company_id'];
    $unit_createby = $_POST['unit_createby'];
    $unit_createdate = $_POST['unit_createdate'];

    if ($project_id == '') {
        echo "<script>alert('Fill all fields')</script>";
        echo "<script>window.open('units.php?view_project=$project_id','_self')</script>";
        exit();
    } else {
        // Check if a unit with the same name exists in the same project
        $check_unit_query = "SELECT * FROM project_units WHERE unit_Name = '$unit_Name' AND project_id = '$project_id'";
        $check_unit_result = mysqli_query($conn, $check_unit_query);

        if (mysqli_num_rows($check_unit_result) > 0) {


            // You can also display an error message if you do not want to update the existing unit.
            echo '<div class="alert alert-danger alert-dismissible " role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                  <h6>Unit Name</h6>
                  <div>Unit with name <strong>'. $unit_Name .'</strong> already exists in this project.</div>
  						   	</div>';

        } else {
            // Insert the new unit
            $insert_new_project_unit = "INSERT INTO project_units (unit_Name, unit_Description, unit_Size, unit_Price, company_id, project_id, unit_status, unit_createby, unit_createdate, Unit_delete)
            VALUES ('$unit_Name', '$unit_Description', '$unit_Size', '$unit_Price', '$company_id', '$project_id', '0', '$unit_createby', '$unit_createdate', '0')";

            $run_query = mysqli_query($conn, $insert_new_project_unit);

            if ( $run_query) {
              echo'unit insert';
            }else {
                echo "Error inserting unit with name '$unit_Name': " . mysqli_error($conn);
            }
            //echo "<script>window.open('units.php?view_project=$project_id','_self')</script>";
        }
    }
}



if (isset($_POST['add_unit_bulk'])) {
    $project_id = $_POST['project_id'];
    $company_id = $_POST['company_id'];
    $unit_createby = $_POST['unit_createby'];
    $unit_createdate = $_POST['unit_createdate'];

    // CSV File Upload
    $handle = fopen($_FILES['filename']['tmp_name'], "r");
    $headers = fgetcsv($handle, 1000, ",");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $unit_Name = $data[0];
        $unit_Description = $data[1];
        $unit_Size = $data[2];
        $unit_Price = $data[3];

        // Check if a unit with the same name exists in the same project
        $check_unit_query = "SELECT * FROM project_units WHERE unit_Name = '$unit_Name' AND project_id = '$project_id'";
        $check_unit_result = mysqli_query($conn, $check_unit_query);

        if (mysqli_num_rows($check_unit_result) > 0) {


            // You can also display a message or log that the unit already exists.

          echo '<div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                <h6>Unit Name</h6>
                <div>Unit with name <strong>'. $unit_Name .'</strong> already exists in this project.</div>
                </div><br>';
        } else {
            // Insert the new unit
            $insert_new_units = "INSERT INTO project_units (unit_Name, unit_Description, unit_Size, unit_Price, company_id, project_id, unit_status, unit_createby, unit_createdate, Unit_delete)
            VALUES ('$unit_Name', '$unit_Description', '$unit_Size', '$unit_Price', '$company_id', '$project_id', '0', '$unit_createby', '$unit_createdate','')";

            $run_posts = mysqli_query($conn, $insert_new_units);

            if ($run_posts) {
                //echo "Unit with name '$unit_Name' inserted successfully.<br>";
            } else {
                echo "Error inserting unit with name '$unit_Name'.<br>";
            }
        }
    }
    fclose($handle);
}

?>
