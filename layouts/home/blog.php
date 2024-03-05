<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
            <h1 class="mb-5">Latest Blogs</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php $id = 1; ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo ($ROOT . '/assets/img/package-1.jpg') ?>" alt="">
                    </div>
                    <div class="text-justify p-4">
                        <h3 class="mb-0">Lorem ipsum dolor sit.</h3>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                        <div class="d-flex justify-content-start mb-2">
                            <a href="<?php echo ($ROOT . '/layouts/blog/details?id=' . $id) ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo ($ROOT . '/assets/img/package-1.jpg') ?>" alt="">
                    </div>
                    <div class="text-justify p-4">
                        <h3 class="mb-0">Lorem ipsum dolor sit.</h3>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                        <div class="d-flex justify-content-start mb-2">
                            <a href="<?php echo ($ROOT . '/layouts/blog/details?id=' . $id) ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo ($ROOT . '/assets/img/package-1.jpg') ?>" alt="">
                    </div>
                    <div class="text-justify p-4">
                        <h3 class="mb-0">Lorem ipsum dolor sit.</h3>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                        <div class="d-flex justify-content-start mb-2">
                            <a href="<?php echo ($ROOT . '/layouts/blog/details?id=' . $id) ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="<?php echo ($ROOT . '/layouts/blog') ?>"><button class="btn btn-primary">Explore More</button></a>
        </div>
    </div>
</div>