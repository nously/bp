<?php include "template/header.php"; ?>

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_area_inner2 slider_bg_2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>Leading Polish <br> 
                                    Lawyer in your city</h3>
                                <p class="name" >- Robert</p>
                                <a href="#" class="boxed-btn4 ">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->


    <div class="description_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-2"></div>
                <div class="col-xl-8 col-md-8">
                    <h1 class="text-center">The Brief Story</h1>
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo at distinctio
                     odio voluptatibus porro obcaecati alias labore commodi eveniet, vitae asperiores 
                     est officia accusamus? Ab reiciendis dignissimos temporibus eligendi nulla?
                    </p>
                    
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo at distinctio
                     odio voluptatibus porro obcaecati alias labore commodi eveniet, vitae asperiores 
                     est officia accusamus? Ab reiciendis dignissimos temporibus eligendi nulla?
                    </p>
                    
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo at distinctio
                     odio voluptatibus porro obcaecati alias labore commodi eveniet, vitae asperiores 
                     est officia accusamus? Ab reiciendis dignissimos temporibus eligendi nulla?
                    </p>
                    
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo at distinctio
                     odio voluptatibus porro obcaecati alias labore commodi eveniet, vitae asperiores 
                     est officia accusamus? Ab reiciendis dignissimos temporibus eligendi nulla?
                    </p>
                </div>
                <div class="col-xl-2 col-md-2"></div>
            </div>
        </div>
    </div>

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


    <!-- testmonial_area_start  -->
    <div class="testmonial_area testmonial_bg_1 overlay2">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        
                        <?php foreach ($testimonials as $testimony): ?>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p><?php echo $testimony->message; ?></p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="<?php echo $testimony->photo ?>" alt="">
                                </div>
                                <span>- <?php echo $testimony->name; ?></span>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- testmonial_area_end  -->

<?php include "template/footer.php"; ?>