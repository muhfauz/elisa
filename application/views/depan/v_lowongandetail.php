<?php foreach ($lowongan as $l) : ?>
    <!-- INNER PAGE WRAPPER
			============================================= -->
    <div class="inner-page-wrapper">




        <!-- BREADCRUMB
				============================================= -->
        <div id="breadcrumb" class="division">
            <div class="container">
                <div class="row">

                    <!-- BREADCRUMB NAV -->
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="teachers-list.html">All Teachers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">David Smith</li>
                            </ol>
                        </nav>
                    </div>

                </div> <!-- End row -->
            </div> <!-- End container -->
        </div> <!-- END BREADCRUMB -->




        <!-- TEAM-3
				============================================= -->
        <section id="team-3" class="pt-100 team-section division">
            <div class="container">
                <div class="row">


                    <!-- TEACHER PHOTO -->
                    <div class="col-md-4">
                        <div class="team-3-photo text-center">

                            <!-- Teacher Photo -->
                            <div class="t-3-photo mb-25">
                                <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#editdata<?php echo $l->kd_lowongan ?>">
                                    <img class="img-fluid" src="<?php echo base_url('website/images/lowongan/') . $l->gambar_lowongan ?>" alt="team-member-foto">
                                </a>

                            </div>

                            <!-- Social Icons -->
                            <div class="tm-3-social clearfix">
                                <ul class="text-center clearfix">
                                    <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                            <!-- Links -->
                            <div class="t-3-links">
                                <a href="#" class="btn btn-md btn-tra-grey rose-hover">Website</a>
                                <a href="mailto:yourdomain@mail.com" class="btn btn-md btn-tra-grey rose-hover">hello@yourdomain.com</a>
                            </div>

                        </div>
                    </div> <!-- END TEACHER PHOTO -->


                    <!-- TEACHER DATA -->
                    <div class="col-md-8">
                        <div class="team-3-txt pc-45">

                            <!-- Name -->
                            <h3 class="h3-xs">Lowongan Kerja <?php echo $l->nama_lowongan ?></h3>
                            <span><?php echo $l->nama_perush ?></span>

                            <!-- Data -->
                            <p class="teacher-data">14,622 Total Students &bull; 9 Courses &bull; 4.63 Rating (738 Reviews)</p>

                            <!-- Small Title -->
                            <h5 class="h5-xl mt-40">About Me</h5>

                            <!-- Text -->
                            <p>Aliqum mullam blandit tempor sapien gravida donec ipsum porta justo. Velna vitae auctor
                                congue magna nihil impedit ligula risus. Mauris donec ociis magnis sapien sagittis sapien sem
                                congue tempor gravida donec an enim ipsum porta justo integer odio velna a purus efficitur ipsum
                                primis in cubilia laoreet
                            </p>

                            <!-- List -->
                            <ul class="txt-list mb-15">

                                <li>Maecenas gravida porttitor nunc tempor laoreet turpis
                                </li>

                                <li>Integer congue magna at pretium purus pretium ligula at rutrum risus luctus dolor auctor
                                    ipsum blandit purus aliqum mullam blandit tempor
                                </li>

                                <li>Risus at congue etiam aliquam sapien egestas posuere gravida</li>

                                <li>Porttitor nunc, quis vehicula magna luctus tempor laoreet</li>

                                <li>Magna at pretium purus pretium ligula at rutrum risus luctus dolor auctor ipsum blandit
                                    purus aliqum mullam blandit tempor
                                </li>

                            </ul>

                            <!-- Text -->
                            <p>Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque laoreet turpis urna
                                augue, viverra a augue eget, dictum tempor magnis. Pulvinar consectetur and placerat imperdiet
                                dui varius viverr ac massa lorem fusce
                            </p>

                        </div>
                    </div> <!-- END TEACHER DATA -->


                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END TEAM-3 -->




        <!-- COURSES-3
				============================================= -->
        <section id="courses-3" class="pt-80 pb-60 courses-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-40">
                            <h5 class="h5-xl">My Courses (9)</h5>
                        </div>
                    </div>
                </div>


                <!-- COURSES HOLDER -->
                <!-- <div class="row courses-grid"> -->
                <div class="owl-carousel owl-theme owl-loaded courses-carousel">
                    <?php foreach ($lowonganall as $la) : ?>


                        <div class="cbox-1">
                            <a href="<?php echo base_url('depan/post/') . $la->kdurl_lowongan ?>">

                                <!-- Image -->
                                <img class="img-fluid" src="<?php echo base_url('website/images/lowongan/') . $la->gambar_lowongan ?>" alt="course-preview" />

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










                </div> <!-- END COURSES HOLDER -->
            </div> <!-- End container -->
        </section> <!-- END COURSES-3 -->




        <!-- PAGE PAGINATION
				============================================= -->
        <div class="page-pagination division">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a> </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </nav>

                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div> <!-- END PAGE PAGINATION -->




        <!-- BANNER-5
				============================================= -->
        <section id="banner-5" class="bg-whitesmoke wide-60 banner-section division">
            <div class="container">
                <div class="row">


                    <!-- BANNER TEXT -->
                    <div class="col-md-6">
                        <div class="banner-5-txt">

                            <!-- Icon -->
                            <img src="images/image-04.png" alt="banner-icon" />

                            <!-- Text -->
                            <div class="b5-txt">

                                <!-- Title -->
                                <h4 class="h4-xs">Become a Teacher</h4>

                                <!-- Text -->
                                <p>Feugiat primis ligula a risus auctor egestas an augue mauri and viverra tortor iaculis an
                                    eugiat viverra
                                </p>

                                <!-- Button -->
                                <a href="become-a-teacher.html" class="btn btn-rose tra-black-hover">Find Out More</a>

                            </div>

                        </div>
                    </div> <!-- END BANNER TEXT -->


                    <!-- BANNER TEXT -->
                    <div class="col-md-6">
                        <div class="banner-5-txt">

                            <!-- Icon -->
                            <img src="images/image-05.png" alt="banner-icon" />

                            <!-- Text -->
                            <div class="b5-txt">

                                <!-- Title -->
                                <h4 class="h4-xs">eTreeks for Business</h4>

                                <!-- Text -->
                                <p>Feugiat primis ligula a risus auctor egestas an augue mauri and viverra tortor iaculis an
                                    eugiat viverra
                                </p>

                                <!-- Button -->
                                <a href="courses-list.html" class="btn btn-rose tra-black-hover">Find Out More</a>

                            </div>

                        </div>
                    </div> <!-- END BANNER TEXT -->


                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END BANNER-5 -->

    <?php endforeach; ?>

    <!-- Modal -->
    <?php foreach ($lowongan as $a) : ?>


        <div class="modal fade" id="editdata<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-aqua">
                        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('admin/master/bagian/aksieditbagian') ?>" method="post">

                            <div class="form-group">

                                <img class="img-fluid" src="<?php echo base_url('website/images/lowongan/') . $a->gambar_lowongan ?>" alt="">

                            </div>


                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button> -->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>