<div class="gcc-slider position-relative">
    <div class="owl-carousel owl-theme home-slider">
        <?php 
            $slidergroup = get_field('#homeslider'); 

            $sliders = $slidergroup['sliders']; 
            foreach($sliders as $items): ?>
                <div class="card d-flex position-relative align-items-end rounded-0 border-0">
                    
                    <!-- Image slider  -->
                    <img class="img-slider" src="<?php echo $items['slider_imae']; ?>">
                    
                    <div class="container h-100 d-flex align-items-end text-white">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider-content-div position-relative">
                                    <h4><?php echo $items['slider_title']; ?></h4>
                                    <p class="text-justify"><?php echo $items['slider_content']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
    </div>

    <div class="slider-cta-buttons">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-md-4">
                    <ul class="list-unstyled m-0 p-0 d-flex text-uppercase">
                        <li><a href="<?php echo home_url('about-us'); ?>" class="btn rounded-0 border-0 text-center bg-light w-100">About Us</a></li>
                        <li><a href="<?php echo home_url('donate-now'); ?>" class="btn rounded-0 border-0 text-center primary-bg-color w-100 text-white">Donate Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>