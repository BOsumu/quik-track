<?php
if(isset($_POST['add_user'])){
  $U_Title = $_POST['U_Title'];
  $U_FName = $_POST['U_FName'];
  $U_LName = $_POST['U_LName'];
  $U_Email = $_POST['U_Email'];
  $U_Contact = $_POST['U_Contact'];
  $U_Designation = $_POST['U_Designation'];
  $U_Type = $_POST['U_Type'];
  $U_Password = $_POST['U_Password'];
  $U_Cratedby = $_POST['U_Cratedby'];
  $U_CratedDate = $_POST['U_CratedDate'];

  if($U_Title == '' || $U_FName == '' || $U_Email == '' || $U_Contact == '' || $U_Designation == '' || $U_Type == '' || $U_Password == ''){
    echo "<script>alert('Fill all fields')</script>";
    echo "<script>window.open('system-users.php','_self')</script>";
    exit();
  }
  else {
    // Check if the email already exists
    $check_email_query = "SELECT * FROM user WHERE U_Email = '$U_Email'";
    $run_email_query = mysqli_query($conn, $check_email_query);
    $email_rows = mysqli_num_rows($run_email_query);

    if ($email_rows > 0) {
      echo "<script>alert('Email already exists')</script>";
      echo "<script>window.open('system-users.php','_self')</script>";
      exit();
    }
    else {

      $hashed_password = password_hash($U_Password, PASSWORD_DEFAULT);

        $insert_new_user = "INSERT INTO user (U_Title, U_FName, U_LName, U_Email, U_Contact, U_Designation, U_Type, U_Password, U_Status, U_Cratedby, U_CratedDate,u_Image, pw_status)
        VALUES ('$U_Title', '$U_FName', '$U_LName', '$U_Email', '$U_Contact', '$U_Designation', '$U_Type', '$hashed_password', '0', '$U_Cratedby', '$U_CratedDate','u_Image','0')";

        $insertactivity = "INSERT INTO activity_log (U_id, activity)
        VALUES ('$U_Cratedby', 'Add New User - $U_Email')";
        $run_query = mysqli_query($conn, $insert_new_user);
        $run_query2 = mysqli_query($conn, $insertactivity);


        echo "<script>window.open('system-users.php','_self')</script>";
    }
  }
}
?>
