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
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-60">
                                <h3>Our Lawyers</h3>
                                <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
            <div class="row">
                
                <?php foreach ($lawyers as $lawyer): ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="<?php echo $lawyer->photo; ?>" class="thumb">
                        </div>
                        <h3><?php echo $lawyer->name; ?></h3>
                        <span><?php echo $lawyer->field ?></span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <!-- our_loyers-end  -->


<?php include "template/footer.php"; ?>