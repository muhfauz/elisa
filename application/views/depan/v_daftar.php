<section class="page-header">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">


                <h3>
                    <?php echo $judul ?>
                </h3>

                <p class="page-breadcrumb">
                    <a href="<?php echo base_url('depan') ?>">Home</a> / <?php echo $judul ?>
                </p>


            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->

<!--  SECTION APPOINTMENT   05-->

<section class="section-content-block section-secondary-bg section-curve-white-overlary" data-bg_opacity="0.95" data-bg_color="#fafafa">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                <div class="appointment-form-wrapper light-layout clearfix">

                    <div class="appointment-form-heading text-left">
                        <h2 class="form-title">
                            Request A Booking
                        </h2>

                        <p>
                            <?php echo $kalimat ?>
                        </p>

                    </div>

                    <form class="appoinment-form">
                        <div class="form-group col-md-12">
                            <input name="nama_pelamar" id="your_name" class="form-control" placeholder="Nama Lengkap" type="text" required="" data-msg="This field is required.">
                        </div>
                        <div class="form-group col-md-12">
                            <input name="alamat_pelamar" id="your_email" class="form-control" placeholder="Alamat Lengkap" type="text" required="" data-msg="This field is required.">
                        </div>
                        <div class="form-group col-md-12">
                            <input name="username_pelamar" id="your_phone" class="form-control" placeholder="Phone" type="text" required="" value="<?php echo $this->Mglobal->kode_otomatis('kd_pelamar', 'tbl_pelamar', 'KANDIDAT') ?>" data-msg="This field is required.">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..." required="" data-msg="This field is required."></textarea>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                            <button id="btn_submit" class="btn btn-lg btn-theme btn-theme-invert" type="submit">Get Appointment</button>
                        </div>

                    </form>

                </div> <!-- end .appointment-form-wrapper  -->

            </div> <!--  end .col-lg-6 -->

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs hidden-md">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        <h4 class="heading-alt-style text-capitalize text-dark-color">General Questions</h4>
                    </div> <!-- end .col-sm-10  -->

                </div>

                <div class="faq-layout" id="accordion">

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What Maintenance Should I be doing and when?</a>
                            </p>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Talk to your veterinarian about how to care for your older pet and be prepared for possible age-related health issues. Senior pets require increased attention, including more frequent visits to the veterinarian, possible changes in diet, and in some cases alterations to their home environment.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How do I know when my car needs a tune up?</a>
                            </p>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Talk to your veterinarian about how to care for your older pet and be prepared for possible age-related health issues. Senior pets require increased attention, including more frequent visits to the veterinarian, possible changes in diet, and in some cases alterations to their home environment.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How should I prepare my car for a road trip?</a>
                            </p>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Talk to your veterinarian about how to care for your older pet and be prepared for possible age-related health issues. Senior pets require increased attention, including more frequent visits to the veterinarian, possible changes in diet, and in some cases alterations to their home environment.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What Maintenance Should I be doing and when?</a>
                            </p>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How do I know when my car needs a tune up?</a>
                            </p>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                Talk to your veterinarian about how to care for your older pet and be prepared for possible age-related health issues. Senior pets require increased attention, including more frequent visits to the veterinarian, possible changes in diet, and in some cases alterations to their home environment.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">How should I prepare my car for a road trip?</a>
                            </p>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                Talk to your veterinarian about how to care for your older pet and be prepared for possible age-related health issues. Senior pets require increased attention, including more frequent visits to the veterinarian, possible changes in diet, and in some cases alterations to their home environment.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">What Maintenance Should I be doing and when?</a>
                            </p>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default faq-box">
                        <div class="panel-heading">
                            <p class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">How do I know when my car needs a tune up?</a>
                            </p>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                                Talk to your veterinarian about how to care for your older pet and be prepared for possible age-related health issues. Senior pets require increased attention, including more frequent visits to the veterinarian, possible changes in diet, and in some cases alterations to their home environment.
                            </div>
                        </div>
                    </div>

                </div> <!-- end .col-md-6  -->

            </div>

        </div> <!--  end .row  -->

    </div> <!--  end .container -->

</section> <!--  end .appointment-section  -->

<!-- SECTION TESTIMONIAL  03 -->

<section class="section-content-block section-curve-secondary-overlary ">

    <div class="container">
        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h4 class="heading-alt-style text-capitalize text-dark-color">Customers Testimonials</h4>
                <span class="heading-separator heading-separator-horizontal"></span>
                <h2 class="subheading-alt-style">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis posuere
                    <br />
                    volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat.
                </h2>
            </div> <!-- end .col-sm-12  -->

        </div>
    </div>

    <div class="container theme-custom-box-shadow section-secondary-bg">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12">

                <div class="testimonial-container owl-carousel text-left" data-items="1">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="testimony-layout-1 transparent-bg">

                            <p class="testimony-text">
                                Always friendly, honest service. Comparable prices and good advice. I appreciate the ride to work too and delivered to my work the same day it broke down.
                                Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne.
                            </p>

                            <div class="testimony-info">
                                <img class="img-responsive" src="images/user_2.jpg" alt="Client Image" />
                                <h4>Brandon Munson </h4>
                                <h6>CTO, Fulcrum Design</h6>
                            </div>
                        </div> <!-- end .testimony-layout-1  -->

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="testimony-layout-1 transparent-bg">
                            <p class="testimony-text">
                                Always friendly, honest service. Comparable prices and good advice. I appreciate the ride to work too and delivered to my work the same day it broke down.
                                Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne.
                            </p>
                            <img class="img-responsive" src="images/user_3.jpg" alt="Client Image" />
                            <div class="testimony-info">
                                <h4>Sunnybrook Church </h4>
                                <h6 class="bq-author-info">CEO, HW Tech Inc</h6>
                            </div>
                        </div> <!-- end .testimony-layout-1  -->

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="testimony-layout-1 transparent-bg">
                            <p class="testimony-text">
                                Always friendly, honest service. Comparable prices and good advice. I appreciate the ride to work too and delivered to my work the same day it broke down.
                                Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne.
                            </p>
                            <img class="img-responsive" src="images/user_1.jpg" alt="Client Image" />
                            <div class="testimony-info">
                                <h4>Sunnybrook Church </h4>
                                <h6 class="bq-author-info">CEO, HW Tech Inc</h6>
                            </div>
                        </div> <!-- end .testimony-layout-1  -->

                    </div>

                </div> <!-- end .testimonial-container  -->

            </div>

            <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                <figure>
                    <img src="images/testimony_feat_img.jpg" alt="" class="db" />
                </figure>
            </div>

        </div>



    </div> <!-- end .container  -->

</section>


<!--  SECTION NEWSLETTER 01 -->

<section class="section-content-block section-secondary-bg">

    <div class="container">

        <div class="container">
            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h4 class="heading-alt-style text-capitalize text-dark-color">Stay Up To Date</h4>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <h2 class="subheading-alt-style">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis posuere
                        <br />
                        volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat.
                    </h2>
                </div> <!-- end .col-sm-12  -->

            </div>
        </div>

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="horizontal-newsletter">
                    <form id="mc-form" class="mc-form fix" action="#">
                        <div class="news-subscription">
                            <input id="mc-email" name="EMAIL" placeholder="Email Address..." type="email">
                            <button id="mc-submit" type="submit"> Submit</button>
                        </div>
                    </form>
                </div> <!--  end .footer-widget  -->
            </div> <!--  end .col-md-3 col-sm-6 -->

        </div> <!--  end .row -->

    </div> <!--  end .container -->
</section> <!--  end .newsletter section-->