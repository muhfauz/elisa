<!-- Category Section Start -->
<section class="categories-section pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Choose Your Category</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
        </div>
        <div class="row">
            <?php foreach ($bidang as $b) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='<?php echo $b->css_bidang ?>'></i>
                            <h3><?php echo $b->nama_bidang ?></h3>
                            <p>301 open position</p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Category Section End -->