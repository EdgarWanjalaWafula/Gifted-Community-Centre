<?php 

$images = get_field('footer_galler'); ?>

<div class="row">
  <?php foreach($images as $item): ?>
      <div class="col-md-3 img-thm" data-src="<?php echo $item['url']; ?>">
          <i class="icon ion-ios-search primary-gcc-color"></i>
          <img alt="<?php echo $item['url']; ?>" src="<?php echo $item['url']; ?>" />
      </div> 
  <?php endforeach; ?>
</div>



