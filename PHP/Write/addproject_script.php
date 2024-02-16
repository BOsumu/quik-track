<?php
if(isset($_POST['add_Project'])){
  $company_id = $_POST['company_id'];
  $project_name = $_POST['project_name'];
  $project_location = $_POST['project_location'];
  $project_description = $_POST['project_description'];
  $project_createby = $_POST['project_createby'];
  $project_createdate = $_POST['project_createdate'];



  if($company_id == ''){
    echo "<script>alert('Fill all fields')</script>";
    echo "<script>window.open('project.php','_self')</script>";
    exit();
  }
  else {
    // Check if the email already exists
    $check_project_query = "SELECT * FROM project  WHERE project_name = '$project_name'";
    $run_project_query = mysqli_query($conn, $check_project_query);
    $project_rows = mysqli_num_rows($run_project_query);

    if ($project_rows > 0) {
      echo "<script>alert('Project Name already exists')</script>";
      echo "<script>window.open('project.php','_self')</script>";
      exit();
    }
    else {



        $insert_new_project = "INSERT INTO project (project_name, project_location, project_description, project_status, project_createby, project_createdate, company_id)
        VALUES ('$project_name', '$project_location', '$project_description', '0', '$project_createby', '$project_createdate', '$company_id')";

        $run_query = mysqli_query($conn, $insert_new_project);
        echo "<script>window.open('project.php','_self')</script>";
    }
  }
}
?>
