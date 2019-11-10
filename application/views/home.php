<?php include "template/header.php"; ?>

<?php if($this->session->flashdata('msg')): ?>
    <div class="card notification">
        <div class="card-body pl-5">
            <p style="color:rgb(200,200,200);"><?php echo $this->session->flashdata('msg'); ?></p>
        </div>
    </div>
<?php endif; ?>

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

    <!-- about_area _start  -->
    <div class="about_area">
        <div class="opacity_icon d-none d-lg-block">
            <i class="flaticon-balance"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                
                    <div class="single_about_info text-center">
                        <a href="<?php echo base_url(); ?>lawyer">
                        <div class="about_thumb">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <h3>This Month's Finest<br>
                            - John "Kitten" Rawless -</h3>
                        </a>
                        <p>Won the mega case of orange kitten murder. <br> 
                        This case brings him to the top wanted lawyer for <br>
                        cat-related cases. Good job, Rawless!</p>
                        <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <div class="image_hover">
                                <div class="hover_inner">
                                    <h2>93%</h2>
                                    <span>Success Case</span>
                                </div>
                            </div>
                        </div>
                        <h3>About Lawyer Justice</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="total_cases">
                            <div class="single_cases">
                                <h4>879</h4>
                                <p>Total Cases</p>
                            </div>
                            <div class="single_cases">
                                <h4>787</h4>
                                <p>Case Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area _end -->

    <!-- practice_area_start -->
    <div class="practice_area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <h3>Case Area</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">

                <?php foreach ($fields as $field): ?>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="<?php echo $field->photo; ?>" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3><?php echo $field->name; ?></h3>
                                <p><?php echo $field->description; ?></p>
                                <a href="<?php echo base_url() . 'cases/' . substr($field->name,0, -4); ?>" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <!-- practice_area_end -->

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


    
    <div class="appointment_area" id="#appointment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="img/appointment/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <form action="<?php echo base_url() . 'appointment/make'; ?>" method="post">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" name="name" placeholder="Your Name" value="<?php echo set_value('name'); ?>">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="email" name="email" placeholder="Your Email" value="<?php echo set_value('email'); ?>">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" name="phone" placeholder="Phone no." value="<?php echo set_value('phone'); ?>">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <input id="datepicker" name="date" placeholder="Appointment date" value="<?php echo set_value('date'); ?>">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea placeholder="Message" name="message" value="<?php echo set_value('message'); ?>"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5 " type="submit" >Submit</button>
                                        </div>
                                    </div>
                                </div>
        
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include "template/footer.php"; ?>