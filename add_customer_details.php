  <?php include 'include/header.php';?>
<?php include 'include/nav_bar.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

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
           <!-- RIGHT LIST -->
            <div class="col-sm-10 mail_view">

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
                                           <div class="subtext"><h2>Add New Sales</h2></div>
                                          <div class="clear"></div>
                                      </div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Customer Details</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">


                                                                   <div class="form-group row">
                                                                     <label class="control-label col-md-2 col-sm-3 ">Full Name:</label>
                                                                     <div class="col-md-2 col-sm-9 ">
                                                                       <select class="form-control">
                                                                         <option>Choose.</option>
                                                                         <option value="Mr.">Mr.</option>
                                                     										 <option value="Mrs.">Mrs.</option>
                                                     										 <option value="Miss.">Miss.</option>
                                                     										 <option value="Ms.">Ms.</option>
                                                     										 <option value="Dr.">Dr.</option>
                                                                       </select>
                                                                     </div>
                                                                     <div class="col-md-5 col-sm-9 ">
                                                                      	<input type="text" id="first-name" required="required" class="form-control ">
                                                                     </div>
                                                                   </div>


                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Name with initial :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                	<input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Occupation:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                      <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">NIC :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                  <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Passport:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Date of Birth :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                  <input id="#" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Gender:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="form-control">
                                                                            <option>Choose.</option>
                                                                            <option value="mail_heading.">mail_heading.</option>
                                                                            <option value="Female.">Female.</option>

                                                                          </select>
                                                                        </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Country:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                          <select class="select2_single form-control" tabindex="-1">
                                                                            <option selected disabled value>Choose...</option>
                                                														<option value="Sri Lanka">Sri Lanka</option>
                                                														<option value="Afghanistan">Afghanistan</option>
                                                														<option value="Albania">Albania</option>
                                                														<option value="Algeria">Algeria</option>
                                                														<option value="Andorra">Andorra</option>
                                                														<option value="Angola">Angola</option>
                                                														<option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                														<option value="Argentina">Argentina</option>
                                                														<option value="Armenia">Armenia</option>
                                                														<option value="Australia">Australia</option>
                                                														<option value="Austria">Austria</option>
                                                														<option value="Azerbaijan">Azerbaijan</option>
                                                														<option value="Bahamas">Bahamas</option>
                                                														<option value="Bahrain">Bahrain</option>
                                                														<option value="Bangladesh">Bangladesh</option>
                                                														<option value="Barbados">Barbados</option>
                                                														<option value="Belarus">Belarus</option>
                                                														<option value="Belgium">Belgium</option>
                                                														<option value="Belize">Belize</option>
                                                														<option value="Benin">Benin</option>
                                                														<option value="Bhutan">Bhutan</option>
                                                														<option value="Bolivia">Bolivia</option>
                                                														<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                														<option value="Botswana">Botswana</option>
                                                														<option value="Brazil">Brazil</option>
                                                														<option value="Brunei">Brunei</option>
                                                														<option value="Bulgaria">Bulgaria</option>
                                                														<option value="Burkina Faso">Burkina Faso</option>
                                                														<option value="Burundi">Burundi</option>
                                                														<option value="Cabo Verde">Cabo Verde</option>
                                                														<option value="Cambodia">Cambodia</option>
                                                														<option value="Cameroon">Cameroon</option>
                                                														<option value="Canada">Canada</option>
                                                														<option value="Central African Republic">Central African Republic</option>
                                                														<option value="Chad">Chad</option>
                                                														<option value="Chile">Chile</option>
                                                														<option value="China">China</option>
                                                														<option value="Colombia">Colombia</option>
                                                														<option value="Comoros">Comoros</option>
                                                														<option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                                                														<option value="Congo (Kinshasa)">Congo (Kinshasa)</option>
                                                														<option value="Costa Rica">Costa Rica</option>
                                                														<option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                														<option value="Croatia">Croatia</option>
                                                														<option value="Cuba">Cuba</option>
                                                														<option value="Cyprus">Cyprus</option>
                                                														<option value="Czech Republic">Czech Republic</option>
                                                														<option value="Denmark">Denmark</option>
                                                														<option value="Djibouti">Djibouti</option>
                                                														<option value="Dominica">Dominica</option>
                                                														<option value="Dominican Republic">Dominican Republic</option>
                                                														<option value="Ecuador">Ecuador</option>
                                                														<option value="Egypt">Egypt</option>
                                                														<option value="El Salvador">El Salvador</option>
                                                														<option value="Equatorial Guinea">Equatorial Guinea</option>
                                                														<option value="Eritrea">Eritrea</option>
                                                														<option value="Estonia">Estonia</option>
                                                														<option value="Eswatini">Eswatini</option>
                                                														<option value="Ethiopia">Ethiopia</option>
                                                														<option value="Fiji">Fiji</option>
                                                														<option value="Finland">Finland</option>
                                                														<option value="France">France</option>
                                                														<option value="Gabon">Gabon</option>
                                                														<option value="Gambia">Gambia</option>
                                                														<option value="Georgia">Georgia</option>
                                                														<option value="Germany">Germany</option>
                                                														<option value="Ghana">Ghana</option>
                                                														<option value="Greece">Greece</option>
                                                														<option value="Grenada">Grenada</option>
                                                														<option value="Guatemala">Guatemala</option>
                                                														<option value="Guinea">Guinea</option>
                                                														<option value="Guinea-Bissau">Guinea-Bissau</option>
                                                														<option value="Guyana">Guyana</option>
                                                														<option value="Haiti">Haiti</option>
                                                														<option value="Holy See">Holy See</option>
                                                														<option value="Honduras">Honduras</option>
                                                														<option value="Hungary">Hungary</option>
                                                														<option value="Iceland">Iceland</option>
                                                														<option value="India">India</option>
                                                														<option value="Indonesia">Indonesia</option>
                                                														<option value="Iran">Iran</option>
                                                														<option value="Iraq">Iraq</option>
                                                														<option value="Ireland">Ireland</option>
                                                														<option value="Israel">Israel</option>
                                                														<option value="Italy">Italy</option>
                                                														<option value="Jamaica">Jamaica</option>
                                                														<option value="Japan">Japan</option>
                                                														<option value="Jordan">Jordan</option>
                                                														<option value="Kazakhstan">Kazakhstan</option>
                                                														<option value="Kenya">Kenya</option>
                                                														<option value="Kiribati">Kiribati</option>
                                                														<option value="Korea, North">Korea, North</option>
                                                														<option value="Korea, South">Korea, South</option>
                                                														<option value="Kosovo">Kosovo</option>
                                                														<option value="Kuwait">Kuwait</option>
                                                														<option value="Kyrgyzstan">Kyrgyzstan</option>
                                                														<option value="Laos">Laos</option>
                                                														<option value="Latvia">Latvia</option>
                                                														<option value="Lebanon">Lebanon</option>
                                                														<option value="Lesotho">Lesotho</option>
                                                														<option value="Liberia">Liberia</option>
                                                														<option value="Libya">Libya</option>
                                                														<option value="Liechtenstein">Liechtenstein</option>
                                                														<option value="Lithuania">Lithuania</option>
                                                														<option value="Luxembourg">Luxembourg</option>
                                                														<option value="Madagascar">Madagascar</option>
                                                														<option value="Malawi">Malawi</option>
                                                														<option value="Malaysia">Malaysia</option>
                                                														<option value="Maldives">Maldives</option>
                                                														<option value="Mali">Mali</option>
                                                														<option value="Malta">Malta</option>
                                                														<option value="Marshall Islands">Marshall Islands</option>
                                                														<option value="Mauritania">Mauritania</option>
                                                														<option value="Mauritius">Mauritius</option>
                                                														<option value="Mexico">Mexico</option>
                                                														<option value="Micronesia">Micronesia</option>
                                                														<option value="Moldova">Moldova</option>
                                                														<option value="Monaco">Monaco</option>
                                                														<option value="Mongolia">Mongolia</option>
                                                														<option value="Montenegro">Montenegro</option>
                                                														<option value="Morocco">Morocco</option>
                                                														<option value="Mozambique">Mozambique</option>
                                                														<option value="Namibia">Namibia</option>
                                                														<option value="Nauru">Nauru</option>
                                                														<option value="Nepal">Nepal</option>
                                                														<option value="Netherlands">Netherlands</option>
                                                														<option value="New Zealand">New Zealand</option>
                                                														<option value="Nicaragua">Nicaragua</option>
                                                														<option value="Niger">Niger</option>
                                                														<option value="Nigeria">Nigeria</option>
                                                														<option value="North Macedonia">North Macedonia</option>
                                                														<option value="Norway">Norway</option>
                                                														<option value="Oman">Oman</option>
                                                														<option value="Pakistan">Pakistan</option>
                                                														<option value="Palau">Palau</option>
                                                														<option value="Palestine State">Palestine State</option>
                                                														<option value="Panama">Panama</option>
                                                														<option value="Papua New Guinea">Papua New Guinea</option>
                                                														<option value="Paraguay">Paraguay</option>
                                                														<option value="Peru">Peru</option>
                                                														<option value="Philippines">Philippines</option>
                                                														<option value="Poland">Poland</option>
                                                														<option value="Portugal">Portugal</option>
                                                														<option value="Qatar">Qatar</option>
                                                														<option value="Romania">Romania</option>
                                                														<option value="Russia">Russia</option>
                                                														<option value="Rwanda">Rwanda</option>
                                                														<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                														<option value="Saint Lucia">Saint Lucia</option>
                                                														<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                														<option value="Samoa">Samoa</option>
                                                														<option value="San Marino">San Marino</option>
                                                														<option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                														<option value="Saudi Arabia">Saudi Arabia</option>
                                                														<option value="Senegal">Senegal</option>
                                                														<option value="Serbia">Serbia</option>
                                                														<option value="Seychelles">Seychelles</option>
                                                														<option value="Sierra Leone">Sierra Leone</option>
                                                														<option value="Singapore">Singapore</option>
                                                														<option value="Slovakia">Slovakia</option>
                                                														<option value="Slovenia">Slovenia</option>
                                                														<option value="Solomon Islands">Solomon Islands</option>
                                                														<option value="Somalia">Somalia</option>
                                                														<option value="South Africa">South Africa</option>
                                                														<option value="South Sudan">South Sudan</option>
                                                														<option value="Spain">Spain</option>

                                                														<option value="Sudan">Sudan</option>
                                                														<option value="Suriname">Suriname</option>
                                                														<option value="Sweden">Sweden</option>
                                                														<option value="Switzerland">Switzerland</option>
                                                														<option value="Syria">Syria</option>
                                                														<option value="Taiwan">Taiwan</option>
                                                														<option value="Tajikistan">Tajikistan</option>
                                                														<option value="Tanzania">Tanzania</option>
                                                														<option value="Thailand">Thailand</option>
                                                														<option value="Timor-Leste">Timor-Leste</option>
                                                														<option value="Togo">Togo</option>
                                                														<option value="Tonga">Tonga</option>
                                                														<option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                														<option value="Tunisia">Tunisia</option>
                                                														<option value="Turkey">Turkey</option>
                                                														<option value="Turkmenistan">Turkmenistan</option>
                                                														<option value="Tuvalu">Tuvalu</option>
                                                														<option value="Uganda">Uganda</option>
                                                														<option value="Ukraine">Ukraine</option>
                                                														<option value="United Arab Emirates">United Arab Emirates</option>
                                                														<option value="United Kingdom">United Kingdom</option>
                                                														<option value="United States of America">United States of America</option>
                                                														<option value="Uruguay">Uruguay</option>
                                                														<option value="Uzbekistan">Uzbekistan</option>
                                                														<option value="Vanuatu">Vanuatu</option>
                                                														<option value="Venezuela">Venezuela</option>
                                                														<option value="Vietnam">Vietnam</option>
                                                														<option value="Yemen">Yemen</option>
                                                														<option value="Zambia">Zambia</option>
                                                														<option value="Zimbabwe">Zimbabwe</option>
                                                														</select>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                        <label class="control-label1 col-md-12 col-sm-12 ">Post Details</label>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Address :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                           <textarea required="required" name='message' rows="2" cols="50"></textarea>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Postal Address :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                           <textarea required="required" name='message' rows="2" cols="50"></textarea>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                        <label class="control-label1 col-md-12 col-sm-12 ">Contact Details</label>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Mobile:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Land No:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Email:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                  <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                        <label class="control-label1 col-md-12 col-sm-12 ">Company Details</label>
                                                                      </div>

                                                                      <div class="form-group row">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Company Name:</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                    <input type="text" id="first-name" required="required" class="form-control ">
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group row ">
                                                                        <label class="control-label col-md-2 col-sm-3 ">Company Address :</label>
                                                                        <div class="col-md-5 col-sm-9 ">
                                                                           <textarea required="required" name='message' rows="2" cols="50"></textarea>
                                                                        </div>
                                                                      </div>


                                                                   <div class="ln_solid"></div>
                                                                   <div class="item form-group">
                                                                     <div class="col-md-6 col-sm-6  left-align">
                                                                       <button type="submit" class="btn btn-add btn-sm"><a href="payment_plan.php">Add Customer</a></button>
                                                                       <button class="btn btn-gray btn-sm" type="reset">Reset</button>
                                                                     </div>
                                                                   </div>


                    </form>
                  </div>
                </div>
            </div>
          </div>
           <!-- / RIGHT LIST -->
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer class="pull-right">
            <p class="mb-0">© 2023 - <script> document.write(new Date().getFullYear())</script>2024 All right reserved. Quik Track for Blue Ocean Group Of Companies &amp; Kelsey Developments PLC, made with ❤️ by <a href="javascript:;" class="fw-medium">Blue Ocean IT</a></p>
        </footer>
        <!-- /footer content -->
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
    <!-- jQuery Smart Wizard -->
    <!-- <script src="assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> -->
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>


  </body>
</html>
