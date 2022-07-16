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

<!-- SINGLE SERVICE PAGE -->

<section class="section-content-block">

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-sm-12">

                <div class="widget site-sidebar">

                    <h2 class="widget-title">Cara Mendaftar</h2>

                    <div class="text-widget text-left">
                        <div class="faq-layout margin-top-16" id="accordion">
                            <?php foreach ($faq as $f) : ?>

                                <div class="panel panel-default faq-box">
                                    <div class="panel-heading">
                                        <p class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $f->tanya_faq ?></a>
                                        </p>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php echo $f->jawab_faq ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>


                    </div>

                </div> <!--  end .widget -->

            </div> <!-- end .col-sm-4  -->


            <div class="col-sm-8">
                <?php foreach ($visi as $t) : ?>

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="single-service margin-bottom-24">
                                <a href="#" title="Service">
                                    <!-- <img src="<?php echo base_url('gambar/') . $t->gambar_tentang ?>" alt="service" /> -->
                                </a>
                            </div> <!--  end articles -->

                            <div class="single-service-content">
                                <h2 class="block-heading-title text-capitalize"><?php echo $t->judul_visimisi ?></h2>
                                <hr />

                                <?php echo $t->isi_visimisi ?>

                            </div>



                        </div>

                    </div> <!-- end .container  -->
                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section> <!--  end .section-our-team -->

<!--  SECTION SERVICE 03 -->