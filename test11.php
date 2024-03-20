<?php ob_start();?>
<?php include 'include/dbConnection.php'; ?>
<?php include 'include/session.php';?>
 <?php include 'include/header.php';?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/developer/css/style2.css" type="text/css"/>
      <script src="assets/developer/js/jquery.min2.js"></script>
 <?php include 'include/nav_bar.php';?>







<!-- ========================================================================================================================== -->

        <div id="wrapper">
            <div class="container bodywidth">
              <link rel="stylesheet" href="assets/developer/css/select2.css" type="text/css" />
              <div class="dashboard-right">
                <div class="searchbox">
		             <form action="https://esalesdesk.co/kelsey/dashboard/search" id="searchform" method="post" accept-charset="utf-8">
		           	 <select id="select_sales" name="select_sales">
                <option value="-1">Search for Customer Sales</option>
                                                             <!-- Remove Disabled Customer -->
                            <option value="3">
                                <column>W.G.R.Rajadurai</column>
                                <column>&nbsp; ( Lot 143 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="4">
                                <column>T.K.G.U.Kumara</column>
                                <column>&nbsp; ( Lot 144 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="5">
                                <column>L.M.P.Dharmaratne</column>
                                <column>&nbsp; ( Lot 145 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="6">
                                <column>S.I.Abeysiriwardena</column>
                                <column>&nbsp; ( Lot 146 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="7">
                                <column>S.S.Sivashankar</column>
                                <column>&nbsp; ( Lot 147  @ Central Park - Landed House )</column>
                            </option>

            </select>
            <input class="button" type="submit" id="submit" name="submit" value=" " />
        </form>    </div>
        <script src="assets/developer/js/select2.js"></script>
<script>
	$(document).ready(function() {
		$("#select_sales").select2();


		$("#select_sales").change(function() {
			window.location = getSiteURL() + "/search/" + $('#select_sales').val();
		});
	});

	function getSiteURL(){
		var pathArray = window.location.pathname.split( '/' );
		var site_location = pathArray[1] + "/" + pathArray[2];
		return window.location.protocol + "//" + window.location.host + "/" + site_location;
	}
</script>
</div>
</div>
</div>
<!-- ============================================================================================================================================= -->
