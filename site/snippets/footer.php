<footer id=kontakt>

<div class="footermenu">
  


          
   <div>        
<!-- Menu   -->
<nav>

<?php foreach($pages->visible() as $item): ?>
  
    <a class="<?= r($item->isOpen(), ' is-active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
  
<?php endforeach ?>

<!-- */ Impressum & Datenschutz anzeigen*/ -->
 <?php

// selective items

$items = $pages->find('impressum', 'datenschutz');

if($items and $items->count()):

?>





  <?php foreach($items as $item): ?>
  <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
  <?php endforeach ?>


<?php endif ?>
</nav>
</div>
<div>

<h1>TWINDRAGON-LODGE<span>Zentrum für angewandtes Schamanisches Wissen / True Human Energy</span></h1>
</div>


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