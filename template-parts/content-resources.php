<ul class="list-group list-group-flush resources">
    <?php 
        $downloads = array(
            'post_type'     =>  'downloads'
        ); 

        $loop = new WP_QUERY($downloads);
        
        while($loop->have_posts()): $loop->the_post(); 
            $resource_download = get_field('resource_download'); 

            if($resource_download): 
                ?>  
                    <li class="list-group-item">
                        <a target="_blank" href="<?php echo $resource_download['file_download']; ?>">
                            <div class="card rounded-0 border-0">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="div">
                                        <i class="flaticon-pdf-1"></i>&nbsp;<span class="text-dark"><?php echo $resource_download['file_name']; ?></span>
                                    </div>

                                    <div class="date-resource-posted small">
                                        <?php echo get_the_date(); ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </li>
                <?php 
            else: 
                echo "no downloads available yet."; 
            endif; 
        endwhile; 

        wp_reset_postdata(); 
    ?>
</ul>