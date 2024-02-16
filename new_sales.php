<?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <!-- <div class="page-title">
              <div class="title_left">
                <h3>Inbox Design <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">

                  <!-- <div class="x_title">
                    <h2>Inbox Design<small>User Mail</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> -->
                  <div class="x_content">
                    <div class="row">
                      <!-- /SIDE LIST -->
                      <div class="col-sm-2 mail_list_column">
                        <h2>Sales Summary</h2>
                            <h3>for Feb - 2024</h3>
                        <p>This a summary of the present total payment collections for the above said month.</p>
                        <!-- <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button> -->
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                            </div>
                            <div class="right">
                              <h3>Dennis Mugo <small>3.00 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>


                      </div>
                      <!--/ SIDE  LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-10 mail_view">
                        <div class="inbox-body">

                          <div class="mail_heading row">
                            <div class="col-md-12">
                              <div class="heading">
                                  <h1><span>Customer</span><img src="assets/images/arrow.png" class="logo-icon" alt="logo icon">Summary</h1>
                                  <h4>Record Book</h4>
                              </div>
                            </div>
                          </div>

                          <div class="setting">
                             <div class="backbtn"><a href="dashboard.php"> </a></div>
                              <div class="subtext"><h2>Add New Customer</h2></div>
                             <div class="clear"></div>
                         </div>
                         <div class="sale-form">
                                     <div class="col-md-12 ">
                                         <div class="x_content">
                                           <br />
                                           <form class="form-horizontal form-label-left">

                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Select</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <select class="form-control">
                                                   <option>Choose option</option>
                                                   <option>Option one</option>
                                                   <option>Option two</option>
                                                   <option>Option three</option>
                                                   <option>Option four</option>
                                                 </select>
                                               </div>
                                             </div>

                                             <div class="searchable-dropdown">
    <select id="dropdown" class="select-dropdown">
        <option value="">Select an option</option>
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
        <!-- Add more options as needed -->
    </select>
</div>
<div class="searchable-dropdown">
    <input type="text" class="search-box" placeholder="Search...">
    <ul class="dropdown-list">
        <li>Select an option</li>
        <li>Option 1</li>
        <li>Option 2</li>
        <li>Option 3</li>
        <!-- Add more options as needed -->
    </ul>
</div>

                                             <div class="form-group row ">
                                               <label class="control-label col-md-3 col-sm-3 ">Default Input</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="text" class="form-control" placeholder="Default Input">
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Disabled Input </label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Read-Only Input</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                                               </label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <textarea class="form-control" rows="3" placeholder="Date Of Birth"></textarea>
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Password</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="password" class="form-control" value="passwordonetwo">
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">AutoComplete</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Select</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <select class="form-control">
                                                   <option>Choose option</option>
                                                   <option>Option one</option>
                                                   <option>Option two</option>
                                                   <option>Option three</option>
                                                   <option>Option four</option>
                                                 </select>
                                               </div>
                                             </div>

                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Select Multiple</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <select class="select2_multiple form-control" multiple="multiple">
                                                   <option>Choose option</option>
                                                   <option>Option one</option>
                                                   <option>Option two</option>
                                                   <option>Option three</option>
                                                   <option>Option four</option>
                                                   <option>Option five</option>
                                                   <option>Option six</option>
                                                 </select>
                                               </div>
                                             </div>

                                             <div class="control-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Input Tags</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                                                 <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
                                                 <br>
                                                 <small class="text-navy">Normal Bootstrap elements</small>
                                               </label>

                                               <div class="col-md-9 col-sm-9 ">
                                                 <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" value=""> Option one. select more than one options
                                                   </label>
                                                 </div>
                                                 <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" value=""> Option two. select more than one options
                                                   </label>
                                                 </div>
                                                 <div class="radio">
                                                   <label>
                                                     <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                                                   </label>
                                                 </div>
                                                 <div class="radio">
                                                   <label>
                                                     <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                                                   </label>
                                                 </div>
                                               </div>
                                             </div>

                                             <div class="form-group row">
                                               <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
                                                 <br>
                                                 <small class="text-navy">Normal Bootstrap elements</small>
                                               </label>

                                               <div class="col-md-9 col-sm-9 ">
                                                 <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" class="flat" checked="checked"> Checked
                                                   </label>
                                                 </div>
                                                 <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" class="flat"> Unchecked
                                                   </label>
                                                 </div>
                                                 <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" class="flat" disabled="disabled"> Disabled
                                                   </label>
                                                 </div>
                                                 <div class="checkbox">
                                                   <label>
                                                     <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
                                                   </label>
                                                 </div>
                                                 <div class="radio">
                                                   <label>
                                                     <input type="radio" class="flat" checked name="iCheck"> Checked
                                                   </label>
                                                 </div>
                                                 <div class="radio">
                                                   <label>
                                                     <input type="radio" class="flat" name="iCheck"> Unchecked
                                                   </label>
                                                 </div>
                                                 <div class="radio">
                                                   <label>
                                                     <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
                                                   </label>
                                                 </div>
                                                 <div class="radio">
                                                   <label>
                                                     <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
                                                   </label>
                                                 </div>
                                               </div>
                                             </div>
                                             <div class="form-group row">
                                               <label class="control-label col-md-3 col-sm-3 ">Switch</label>
                                               <div class="col-md-9 col-sm-9 ">
                                                 <div class="">
                                                   <label>
                                                     <input type="checkbox" class="js-switch" checked /> Checked
                                                   </label>
                                                 </div>
                                                 <div class="">
                                                   <label>
                                                     <input type="checkbox" class="js-switch" /> Unchecked
                                                   </label>
                                                 </div>
                                                 <div class="">
                                                   <label>
                                                     <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
                                                   </label>
                                                 </div>
                                                 <div class="">
                                                   <label>
                                                     <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
                                                   </label>
                                                 </div>
                                               </div>
                                             </div>


                                             <div class="ln_solid"></div>
                                             <div class="form-group">
                                               <div class="col-md-9 col-sm-9  offset-md-3">
                                                 <button type="button" class="btn btn-primary">Cancel</button>
                                                 <button type="reset" class="btn btn-primary">Reset</button>
                                                 <button type="submit" class="btn btn-success">Submit</button>
                                               </div>
                                             </div>

                                           </form>
                                         </div>

                                  </div>
                             </div>
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

<?php include 'include/footer.php';?>
