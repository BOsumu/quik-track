<?php
if(isset($_POST['u_Update'])){

  $U_idn = $_POST['U_idn'];
  $U_Title = $_POST['U_Title'];
  $U_FName = $_POST['U_FName'];
  $U_LName = $_POST['U_LName'];
  $U_Email = $_POST['U_Email'];
  $U_Contact = $_POST['U_Contact'];
  $U_Designation = $_POST['U_Designation'];
  $U_Type = $_POST['U_Type'];
  $U_Status = $_POST['U_Status'];
  $U_id = $_POST['U_id'];

  if ($U_idn == '') {
    echo "<script>alert('somthing went wrong!')</script>";
  } else {


    $update_user = "UPDATE user SET U_Title='$U_Title', U_FName='$U_FName', U_LName='$U_LName', U_Email='$U_Email', U_Contact='$U_Contact', U_Designation='$U_Designation', U_Type='$U_Type', U_Status='$U_Status' WHERE U_id='$U_idn'";

    $insertactivity = "INSERT INTO activity_log (U_id, activity)
    VALUES ('$U_id', 'Update User - User ID ($U_idn)')";

    $run_update = mysqli_query($conn, $update_user);
    $run_update2 = mysqli_query($conn, $insertactivity);
    echo "<script>window.open('system-users.php','_self')</script>";



    mysqli_close($conn);
  }
}
?>
