<div class="container jobs">
    <div class="row job-heading">
        <div class="col-md-3">
            <p>Job Title</p>
        </div>
        <div class="col-md-7">
           <p>Description</p> 
        </div>
        <div class="col">
            <p>Deadline</p>
        </div>
    </div>

    <div class="job-listings">
    <?php 

$careers = array(
    'post_type'         => 'jobs', 
    'posts_per_page'    =>  -1
); 

$loop = new wp_query($careers);

$i = 0; 

while($loop->have_posts()): $loop->the_post(); 

    $i++; 

    $applicationdeadline = get_field('#careers'); 

    ?>
        <div class="row aos-init aos-animate" data-aos="fade-in" data-aos-delay="<?php echo $i; ?>00">
            <div class="col-md-3">
                <i class="ion ion-ios-briefcase"></i>
                <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            </div>
            <div class="col-md-7">
                <div class="job-desc">
                    <?php echo wp_trim_words(get_the_content(), '35'); ?>
                </div>
            </div>
            <div class="col">
                <span class="badge badge-info rounded-0">
                    <?php 
                        if($applicationdeadline): 
                            echo $applicationdeadline['application_deadline']; 
                        else: 
                            //
                        endif; 
                    ?>
                </span>
                
            </div>
        </div> 
    <?php 
endwhile;

wp_reset_postdata(); 

?>
    </div>
        
    </div>
</div>
