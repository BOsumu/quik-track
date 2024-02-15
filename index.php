<?php ob_start();

 include 'include/header.php';
 include 'include/nav_bar.php';
include 'include/session.php';
include 'include/dbConnection.php';
 ?>



        <!-- page content -->
          <div class="right_col" role="main">

            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                  <div class="tile-stats">

                    <h2>Total Project Units</h2>
                    <div class="count">1,105</div>
                  </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                  <div class="tile-stats">

                    <h2>Total Project Units</h2>
                    <div class="count">1,105</div>
                  </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-6">
                  <div class="tile-stats">

                    <h2>Total Project Units</h2>
                    <div class="count">1,105</div>
                  </div>
                </div>

             </div>
             <div class="col-md-7 col-sm-7">
               <div class="row">
                 <div class="input-group">
                   <p style="margin-bottom:0px;">The system records indicat  <strong style="color:#b91515;">  49 Unprocessed Sale Records </strong> as for the date 2024-24-12
                     <button class="btn btn-danger btn-sm">Read inside</button>
                   </p>
                 </div>
               </div>

               <div class="row">
                 <div class="input-group" style="border: 1px solid #ced4da;padding:5px 10px;background: linear-gradient(to right, #d2d3d3, #ffffff);">
                   <input type="text" class="form-control" placeholder="Search for..." style="border-radius: 0px;">
                   <span class="input-group-btn">
                     <button class="btn btn-default" type="button" style="border-radius:0px;margin-left:10px;background-color: #13446f;color:#ffffff"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
                   </span>
                 </div>
               </div>

            </div>

            </div>


          <div class="row">
            <div class="col-md-5 col-sm-5">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pie Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie" style="height:350px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12">

                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Horizontal Bar</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div id="echart_bar_horizontal" style="height:370px;"></div>

                    </div>
                  </div>

              </div>


            </div>


            <div class="col-md-7 col-sm-7 ">



              <div class="row">

                <div class="col-md-12 col-sm-12  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Basic Tables <small>basic table subtitle</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Basic Tables <small>basic table subtitle</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


<?php
include("include/footer.php");
 ?>
