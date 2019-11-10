<?php include "template/header.php"; ?>

    <!-- bradcam_area_start  -->
    <div class="bradcam_area">
        <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Our fine lawyers </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    
    <!-- our_loyers-start  -->
    <div class="our_loyers">
        <div class="container">

            <?php for ($i = 0; $i < count($lawyers); $i++): ?>
            <!-- ONE Lawyer -->
            <div class="row mb-5">
               <div class="card col-xl-12 col-md-12 col-lg-12">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4">
                           <div class="single_loyers text-center">
                                 <div class="thumb" style="  width: 150px; height: 150px;">
                                    <img src="<?php echo base_url() . $lawyers[$i][0]->photo; ?>" alt="">
                                 </div>
                                 <h3><?php echo $lawyers[$i][0]->name; ?></h3>
                                 <span>Family Lawyer</span>
                                 <div class="social_links">
                                    <ul>
                                       <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                       <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                       <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                 </div>
                           </div>
                        </div>

                        <div class="col-xl-8 col-md-8 col-lg-8">
                           <?php foreach ($lawyers[$i] as $education): ?>
                           <div>
                              <h3><?php echo $education->degree; ?></h3>
                              <a class="pull-right" href="<?php echo base_url() . 'lawyer/education/' . $education->certificate; ?>">Certificate >></a>
                              <p class="card-text"><?php echo $education->university; ?>, <?php echo $education->study_field; ?> </p>
                           </div>

                           <div class="dropdown-divider"></div>
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <?php endfor; ?>

        </div>
    </div>
    <!-- our_loyers-end  -->


<?php include "template/footer.php"; ?>