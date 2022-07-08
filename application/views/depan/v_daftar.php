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
                        <p>
                            <?php echo $this->session->userdata('pesan') ?>
                        </p>

                    </div>

                    <form class="appoinment-form" method="POST" action="<?php echo base_url('depan/aksidaftar') ?>">
                        <div class="form-group col-md-12">
                            <label for="">Nama Lengkap</label>
                            <input name="nama_pelamar" id="your_name" class="form-control" placeholder="Nama Lengkap" type="text" required="" data-msg="This field is required.">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">No Telepon /HP</label>
                            <input name="nohp_pelamar" id="your_name" class="form-control" placeholder="No Telepon / HP" type="text" required="" data-msg="This field is required.">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Alamat Lengkap</label>
                            <input name="alamat_pelamar" id="your_email" class="form-control" placeholder="Alamat Lengkap" type="text" required="" data-msg="This field is required.">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Username</label>
                            <input name="username_pelamar" id="your_phone" class="form-control" placeholder="Phone" type="text" required="" value="<?php echo $this->Mglobal->kode_otomatis('kd_pelamar', 'tbl_pelamar', 'PEL') ?>" data-msg="This field is required." readonly>
                            <input name="kd_pelamar" id="your_phone" class="form-control" placeholder="Phone" type="hidden" required="" value="<?php echo $this->Mglobal->kode_otomatis('kd_pelamar', 'tbl_pelamar', 'PEL') ?>" data-msg="This field is required." readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Password</label>
                            <input name="password_pelamar" id="your_email" class="form-control" placeholder="Password Anda" type="password" required="" data-msg="This field is required.">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                            <!-- <button id="btn_submit" class="btn btn-lg btn-theme btn-theme-invert btn-info" type="submit">DAFTAR</button> -->
                            <button id="btn_submit" class="btn btn-lg btn-info" type="submit">DAFTAR</button>
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