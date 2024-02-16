<?php
if(isset($_POST['P_Update'])){

  $project_id = $_POST['project_id'];
  $company_id = $_POST['company_id'];
  $project_name = $_POST['project_name'];
  $project_location = $_POST['project_location'];
  $project_description = $_POST['project_description'];
  $project_status = $_POST['project_status'];


  if ($company_id == '') {
    echo "<script>alert('somthing went wrong!')</script>";
  } else {


    $update_projects = "UPDATE  project SET project_name='$project_name', project_location='$project_location', project_description='$project_description', project_status='$project_status', company_id='$company_id'  WHERE project_id='$project_id'";

    $run_update = mysqli_query($conn, $update_projects);

    if ($run_update) {
      echo "<script>window.open('project.php','_self')</script>";
    } else {
      echo "<script>
        Swal.fire('Oops...',
        'Something went wrong! Please try again!',
        'error')
      </script>";
    }

    mysqli_close($conn);
  }
}
?>
