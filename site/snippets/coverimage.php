<?php if($image = $item->coverimage()->toFile()): ?>
 
    <img src="<?= $image->url() ?>" alt="" />
  
<?php endif ?>
