<?php
include('security.php');
//session_start();
include('header.php');

?>
      <!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<!-- <h3>Form Elements</h3> -->
						</div>

						<!-- <div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div> -->
					</div>

					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Individual SMS</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<!-- <li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li> -->
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />

									<?php
																	 if(isset($_POST['btnisms']))
										 {
											 $isms_id = $_POST['isms_id'];

											 $query = "SELECT * FROM customer_info WHERE id = '$isms_id'";
											 $query_run = mysqli_query($conn, $query);

											 $row = mysqli_fetch_assoc($query_run);

											 foreach($query_run as $row)
											 {
												 ?>

        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="code.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="isms_id" value="<?php  echo $row['id']; ?>">
          <div class="item form-group">
             <label class="col-form-label col-md-3 col-sm-3 label-align" for="customer-name">Contact Number <span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 ">
               <input type="text" name="isms_contact_number" id="isms_contact_number"  value="<?php  echo $row['contact_number']; ?>"readonly="readonly" required="required" class="form-control">
             </div>
           </div>


                               <div class="item form-group">
                                 <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Customer Name<span class="required">*</span>
                                 </label>
                                 <div class="col-md-6 col-sm-6 ">
                                   <input type="text" name="isms_customer_name"  value="<?php  echo $row['customer_name']; ?>" readonly="readonly" required="required" id="isms_customer_name" class="form-control">
                                 </div>
                               </div>


															 <div class="item form-group">
																 <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ad id<span class="required">*</span>
																 </label>
																 <div class="col-md-6 col-sm-6 ">
																	 <input type="text" name="isms_adv_id"  value="<?php  echo $row['ad_id']; ?>" readonly="readonly" required="required" id="isms_adv_id" class="form-control">
																 </div>
															 </div>

															 <div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Sender<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<?php
		                                $isms_id = $_POST['isms_id'];
		                                $query = "SELECT * FROM login ORDER BY id";
		                                $query_run = mysqli_query($conn, $query);
		                                $check_name = mysqli_num_rows($query_run) > 0;

		                                if($check_name)
		                                {
		                                    while ($row = mysqli_fetch_array($query_run))
		                                    {
		                                        ?>
		                           <input type="text" name="isms_sender"  readonly="readonly" placeholder="customer name" value="<?php  echo $row['username']; ?>" autocomplete="off" class="form-control">
		                           <?php

		                                    }
		                                }
		                                else
		                                {
		                                    echo "No Records";
		                                }

		                              ?>
																</div>
															</div>


                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Message
                      </label>
                      <div class="col-md-6 col-sm-6 ">

                        <textarea class="resizable_textarea form-control" name="isms_message" id="isms_message"  autocomplete="off"></textarea>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <input class="btn btn-primary" type="button" value="Go back" onclick="history.back()">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" name="btnisms" class="btn btn-success">Submit</button>
                      </div>
                    </div>



</form>
<?php
 }
}
 ?>


</div>
</div>
</div>
</div>

</div>
</div>
<!-- /page content -->
<!--footer -->
<?php
include('footer.php');
?>
<!-- /footer -->
