<?php

$select_admin = "SELECT * FROM user  WHERE U_id ='$session_id'";
$run_query = mysqli_query($conn,$select_admin);
while ($row_post = mysqli_fetch_array($run_query)){
  $U_id = $row_post ['U_id'];
  $U_Titlesession = $row_post ['U_Title'];
  $U_FNamesession = $row_post ['U_FName'];
  $U_LNamesession = $row_post ['U_LName'];
  $U_Email = $row_post ['U_Email'];
  $U_Contact = $row_post ['U_Contact'];
  $U_Designation = $row_post ['U_Designation'];
  $U_Typesession = $row_post ['U_Type'];
  $U_Status = $row_post ['U_Status'];
  $U_Cratedby = $row_post ['U_Cratedby'];
  $U_CratedDate = $row_post ['U_CratedDate'];
  $u_Imagesession = $row_post ['u_Image'];

}

?>

<body class="nav-md" >
  <div class="container body">
    <div class="main_container">


      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">

        <div class="col-md-2" style="background: #2A3F54;">
          <div class="navbar nav_title">
            <a href="dashboard.php" class="site_title"><img src="assets/images/favicon-logo.png" class="logo-icon" alt="logo icon">&nbsp;Quik Track</a>
            <!-- <a href="index.php" class="site_title"><img src="assets/images/companylogo.png" class="logo-icon" alt="logo icon"> <span>Sales Desk</span></a> -->
          </div>
        </div>

        <div class="col-md-8">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation"><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true">&nbsp;</i>Dashboard</a>
            </li>
            <li role="presentation" class="dropdown">
              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                          <i class="fa fa-dollar" aria-hidden="true">&nbsp;</i>Sales
                          <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="new_sales.php">Add New Sales</a>
                          <a class="dropdown-item" href="sales.php">Sales List</a>
                        </div>
            </li>

            <li role="presentation"><a href="payments.php"><i class="fa fa-money" aria-hidden="true">&nbsp;</i>Payments</a>
            </li>
            <li role="presentation" class="dropdown">
              <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                          <i class="fa fa-bank" aria-hidden="true">&nbsp;</i>Property
                          <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="company.php">Company</a>
                          <a class="dropdown-item" href="project.php">Project</a>
                        </div>
            </li>
            <li role="presentation"><a href="customer.php"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Customer</a>
            </li>
            <li role="presentation"><a href="system-users.php"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>User Management</a>
            </li>
            <li role="presentation" class="dropdown">
              <a id="drop9" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                          <i class="fa fa-pie-chart" aria-hidden="true">&nbsp;</i>Report
                          <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="sales_collection.php">Collections & Installment Sheet</a>
                        </div>
            </li>
          </ul>

        </div>
            <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open">

                <a href="javascript:;" class="d-flex align-items-center user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">

                  <div class="user-infor" style="padding-right: 15px;">
                    <span class="user-name mb-0">Hi ! <?php echo $U_FNamesession;?></span>
                    <?php
                      if ($U_Typesession == '0') {
                        echo '<p class="designattion mb-0">Super Admin</p>';
                      }elseif ($U_Typesession == '1') {
                        echo '<p class="designattion mb-0">Admin</p>';
                      }elseif ($U_Typesession == '2') {
                          echo '<p class="designattion mb-0">Sales Admin</p>';
                      }else {
                          echo '<p class="designattion mb-0">Sales Person</p>';
                      }
                     ?>
                   </div>
                     <img src="assets/images/user.png" alt="">
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item"  href="javascript:;" style="text-align: left;">Change Password</a>
                  <a class="dropdown-item"  href="include/logout.php"><i class="fa fa-sign-out pull-right" style="border:none;"></i> Log Out</a>
                </div>
              </li>

            </ul>



          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <script>
    function toggleMenu() {
        var menu = document.querySelector('.menu');
        menu.classList.toggle('active');
    }
</script>
