<?php 
    $img = "" ; 
    
    if(has_post_thumbnail()){
        $img = get_the_post_thumbnail_url(); 
    } else {
        $img = wp_get_attachment_image_url('122','full'); 
    }
?>


<section class="page-title d-flex align-items-end position-relative parralax-window" data-parallax="scroll" data-image-src="<?php echo $img; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6 text-white">
                <div class="page-title-div">
                    <h1 class="animated fadeInUp delay-1s m-0">
                        <?php 

                            if(is_home()): 
                                echo "Blogs & Publications"; 
                            else:
                                echo the_title(); 
                            endif; 
                        ?>
                    </h1>
                    <span class="animated fadeIn slower delay-2s"><?php echo the_field('page_tag_line'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>