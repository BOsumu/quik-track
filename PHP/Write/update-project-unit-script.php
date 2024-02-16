<?php
if(isset($_POST['P_Update'])){

  $unit_id = $_POST['unit_id'];
  $unit_Name = $_POST['unit_Name'];
  $unit_Description = $_POST['unit_Description'];
  $unit_Size = $_POST['unit_Size'];
  $unit_Price = $_POST['unit_Price'];
  $unit_status = $_POST['unit_status'];


  if ($unit_id == '') {
    echo "<script>alert('somthing went wrong!')</script>";
  } else {


    $update_projects_units = "UPDATE  project_units SET unit_Name='$unit_Name', unit_Description='$unit_Description', unit_Size='$unit_Size', unit_Price='$unit_Price', unit_status='$unit_status'  WHERE unit_id='$unit_id'";

    $run_update = mysqli_query($conn, $update_projects_units);

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


if(isset($_POST['U_Delete'])) {
  $unit_id = $_POST['unit_id'];

  if ($unit_id == '') {
    echo "<script>alert('Something went wrong!')</script>";
  } else {
    $update_projects_units_delete = "UPDATE project_units SET Unit_delete='1' WHERE unit_id='$unit_id'";
    $run_update = mysqli_query($conn, $update_projects_units_delete);

    if ($run_update) {
      echo "
      <script>
        swal({
          title: 'Are you sure?',
          text: 'Once deleted, you will not be able to recover this Unit!',
          icon: 'warning',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal('Poof! Your Unit has been deleted!', {
              icon: 'success',
            }).then(() => {
              window.open('project.php', '_self');
            });
          } else {
            swal('Your Unit is safe!');
          }
        });
      </script>";
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
