<footer id=kontakt class"brand">

<div class="footermenu">
          
<h1>TWINDRAGON-LODGE<span>Zentrum für angewandtes Schamanisches Wissen / True Human Energy</span></h1>    
           
<!-- Menu   -->
<ul>
<?php foreach($pages->visible() as $item): ?>
  <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
    <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
  </li>
<?php endforeach ?>

<!-- */ Impressum & Datenschutz anzeigen*/ -->
<li class="menu-item"> <?php

// selective items

$items = $pages->find('impressum', 'datenschutz');

if($items and $items->count()):

?>
<nav>

  <?php foreach($items as $item): ?>
  <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
  <?php endforeach ?>


<?php endif ?>
</ul>




      </div>
     

 
  </footer>
<!-- Jquery Script -->
<?php echo js('assets/js/jquery.js'); ?>
<!-- Modal Window -->
<?php echo js('assets/js/jquery.modal.min.js'); ?>
<!-- Collapse Element (inside FAQ)-->
<?php echo js('assets/js/jquery.collapse.js'); ?>
<!-- Toggle Nav-->
<?php echo js('assets/js/my.js'); ?>

</body>
</html>