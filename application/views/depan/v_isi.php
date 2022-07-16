<!--  HOME SLIDER BLOCK  -->

<div class="slider-wrap">
    <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="true" data-autoplay="true" data-autoplaytimeout="60000" data-bg_effect="true">




        <?php foreach ($slider as $s) : ?>



            <div class="slider_item_container" data-bg_img="<?php echo base_url('assets/depan/images/') . $s->gambar_slider ?>" data-bg_color="#111111" data-bg_opacity="0.25">
                <div class="item">
                    <div class="slider-content">
                        <div class="container text-center">
                            <div class="row">
                                <div class="slider-bg" data-animation-in="fadeInLeft" data-animation-out="zoomInDown">
                                    <div class="col-sm-12 wow fadeInLeft" data-wow-duration="1s">
                                        <h2 class="margin-bottom-12">
                                            <?php echo $s->atas_slider ?> <br />
                                            <?php echo $s->tengah_slider ?>

                                        </h2>
                                        <h3 class="margin-bottom-24"> <?php echo $s->bawah_slider ?></h3>

                                        <!-- <a href="#" class="btn btn-theme btn-theme-white btn-invert">Get Started Now</a>
                                        <a href="#" class="btn btn-theme btn-square">Learn More</a> -->

                                    </div>
                                </div> <!-- end .col-sm-12  -->
                            </div> <!-- end .row  -->
                        </div><!-- end .container -->
                    </div> <!--  end .slider-content -->
                </div> <!-- end .item  -->
            </div> <!-- end .slider_item_container  -->
        <?php endforeach; ?>



    </div> <!-- end .slider_1  -->
</div> <!-- end .slider-wrap.  -->

<!--  SECTION SERVICE 03 -->

<!--  -->