<?php ob_start();?>
<?php include 'include/dbConnection.php';?>
<?php include 'include/session.php';?>
<?php
$result = mysqli_query($conn, "select U_id from user where U_id='$session_id'")or die('Error In Session');
$row = mysqli_fetch_array($result);
?>

<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <!-- SIDE LIST -->
        <?php include 'include/sidelist_cal.php';?>
        <!--/ SIDE LIST -->

        <!-- RIGHT LIST -->
        <div class="col-sm-10 mail_view">
            <div class="mail_heading row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1 class="breadcrums"><span>Sales</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
                        <h4>Record Book</h4>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="backbtn"><a href="dashboard.php"> </a></div>
                <button class="btn-u btn-u-orange" name="printall" id="printall" ><i class="icon-printer"></i> Print All</button>
                <div class="subtext"><h2>Add New Sales</h2></div>
                <div class="clear"></div>
            </div>

            <div class="">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#sale" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#payment_plan" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="sale" role="tabpanel" aria-labelledby="home-tab">
                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.
                                </div>
                                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="profile-tab">
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip
                                </div>
                                <div class="tab-pane fade" id="payment_plan" role="tabpanel" aria-labelledby="contact-tab">
                                    xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="assets/vendors/nprogress/nprogress.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="assets/build/js/custom.min.js"></script>
        <script src="assets/vendors/validation/jquery.validate.min.js"></script>
        <script src="assets/vendors/validation/validation-script.js"></script>

        <script>
        function printall() {
var tabs =  ["sale", "payment", "payment_plan"];

var printNext = function(i) {
  i = i || 0;
  if (i >= pages.length) {
    return;
  }

  var wdw = window.open(tabs[i], 'print');
  wdw.onload = function() {
    wdw.print();

    wdw.close();
    setTimeout(function() {
      printNext(++i);
    }, 100);

  }
};

printNext();
}
        </script>
    </div>
</div>
</body>
</html>
