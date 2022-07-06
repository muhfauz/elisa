<!-- HERO BOXES-1
			============================================= -->
<section id="hboxes-1" class="hero-boxes-section division">
    <div class="container">
        <div class="hero-boxes-holder">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">

                        <!-- Text -->
                        <h4 class="h4-xl">Most Popular Courses</h4>
                        <p>Explore from 2,769 online courses in 20 categories</p>

                        <!-- Button -->
                        <div class="title-btn">
                            <a href="courses-list.html" class="btn btn-sm btn-rose tra-grey-hover">View All Courses</a>
                        </div>

                    </div>
                </div>
            </div>


            <!-- COURSE BOXES CAROUSEL -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme owl-loaded courses-carousel">

                        <!-- COURSE #1 -->
                        <?php foreach ($lowongan as $l) : ?>


                            <div class="cbox-1">
                                <a href="<?php echo base_url('depan/post/') . $l->kdurl_lowongan ?>">

                                    <!-- Image -->
                                    <img class="img-fluid" src="<?php echo base_url('website/images/lowongan/') . $l->gambar_lowongan ?>" alt="course-preview" />

                                    <!-- Text -->
                                    <div class="cbox-1-txt">

                                        <!-- Course Tags -->
                                        <p class="course-tags">
                                            <span>Languages</span>
                                            <span>English</span>
                                        </p>

                                        <!-- Course Title -->
                                        <h5 class="h5-xs">Beginner Level English - Foundations</h5>

                                        <!-- Course Rating -->
                                        <div class="course-rating clearfix">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                            <span>4.5 (26 Ratings)</span>
                                        </div>

                                        <!-- Course Price -->
                                        <span class="course-price"><span class="old-price">$149.99</span> $138.99</span>

                                    </div>

                                </a>
                            </div> <!-- END COURSE #1 -->
                        <?php endforeach; ?>




                    </div>
                </div>
            </div> <!-- END COURSES BOXES CAROUSEL -->


        </div> <!-- End hero-boxes-holder -->
    </div> <!-- End container -->
</section> <!-- End HERO BOXES-1 -->