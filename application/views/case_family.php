<?php include "template/header.php"; ?>

<!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>High Quality Law <br>
                                    Advice and Support</h3>
                                <p>Leading Polish Lawyer in your city</p>
                                <a href="<?php echo base_url(); ?>about" class="boxed-btn4 ">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- practice_area_start -->
    <div class="practice_area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <h3>Family Case</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                
                <?php foreach ($cases as $case): ?>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="<?php echo $case->photo; ?>" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3><?php echo $case->title; ?></h3>
                                <p><?php echo $case->description; ?></p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <!-- practice_area_end -->

<?php include "template/footer.php"; ?>