
            <!-- /SIDE LIST -->
            <div class="col-sm-2 mail_list_column">
              <h3>Collection Summary</h3>
                    <h2 style="margin-bottom:5px;font-weight:600;">for <?php echo date('M - Y'); ?></h2>
              <p>This a summary of the present total payment collections for the above said month.</p>


                      <ul class="list-unstyled project_files">
                           <li><a href=""style="color:#000000;"><i class="fa fa-circle color-red"></i> Collection</a>
                           </li>
                           <li><a href=""style="color:#000000;"><i class="fa fa-circle color-green"></i> Due Collection</a>
                           </li>
                           <li><a href=""style="color:#000000;"><i class="fa fa-circle color-blue"></i> Total Revenue</a>
                           </li>
                         </ul>

           <div class="x_content">

           <ul class="nav nav-tabs bar_sidetabs tab-text" id="myTab" role="tablist" style="border:none;">
             <li class="nav-item">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"style="border-color: #dee2e6 #dee2e6 #dee2e6 #dee2e6;border: 0px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;color: #000000;">By Companies</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" name="project" aria-controls="profile" aria-selected="false" style="border: 0px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;">By Project</a>
             </li>

           </ul>

           <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                  <div class="mail_list" style="border:none;">
                    <div class="right">
                      <?php
                           $sql = 'SELECT * FROM companies c';

                           $result = mysqli_query($conn, $sql);
                           $c = 1;

                           while ($row = mysqli_fetch_array($result)) {

                               ?>
                                   <p class="sidelist">
                                       <span><?php echo $row['company_name']; ?></span>
                                       <br><strong class="text-danger"></strong>
                                       <br><strong class="text-success"></strong>
                                       <br><strong class="text-info"></strong>
                                       <hr class="sidebarhr">
                                   </p>
                               <?php
                               $c++;
                                   }
                                     ?>

                    </div>
                  </div>

             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

               <div class="mail_list" style="border:none;">
                       <div class="right">
                         <?php
                              $sql = 'SELECT * FROM project p';

                              $result = mysqli_query($conn, $sql);
                              $p = 1;

                              while ($row = mysqli_fetch_array($result)) {

                                  ?>
                                      <p class="sidelist">
                                          <span><?php echo $row['project_name']; ?></span>
                                          <br><strong class="text-danger"></strong>
                                          <br><strong class="text-success"></strong>
                                          <br><strong class="text-info"></strong>
                                          <hr class="sidebarhr">
                                      </p>
                                  <?php
                                  $p++;
                                      }
                                        ?>


                       </div>
                     </div>


             </div>

           </div>
         </div>


          </div>

            <!--/ SIDE  LIST -->
