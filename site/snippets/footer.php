  <footer id=kontakt>
   <section class="SiteFooter__wrapper">     

<nav class="SiteFooterSitemap">

  <div class="SiteFooterSitemap__social column">
    <ul>
  <li>Michael Kallina Ph.D.</li>
 
<li>Heilpraktiker & Heilpraktiker fuer Psychotherapie</li>
<li>Rolfing & Rolfing Movement</li>
<li>Yoga-Professional (YogaMonks)</li>
<li>Cranial & Visceral Osteopathie</li>
<li>Systemic Constellations (DGfS)</li>
<li>Reiki Master & Shamanic Healing</li>
</ul>

 

<ul>


  <li><h4>Praxisadresse in Deutschland</h4></li>
  <li>Naturheilpraxis Hans Michael Kallina</li> 
<li>Gebelsbergstr. 68</li> 
<li>70199 Stuttgart</li>
<li>Mobil: 0163 3 22 03 70</li>
<li>Festnetz: 07192 91 80 160</li>
<li>Email: info@kallina.co</li>


  
</ul>



  
   </div>  



    <div class="column">
      <ul class=" footer-grid">
    

    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
  <?php endforeach ?>
  


    
 
  

  </ul>
    </div>
<div class="column">
  <ul>
    <?php

// selective items

$items = $pages->find('impressum', 'datenschutz');

if($items and $items->count()):

?>
<nav>
  
    <?php foreach($items as $item): ?>
    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
  

<?php endif ?>



  </ul>
</div>

</nav>






        
  


<!--<div class="adress"><ul>
  <li>Michael Kallina</li>
  <li>Praxisadresse</li>
  <li>Musterstraße 15</li>
  <li>Stuttgart</li>
  <li>Tel. 0711/1676376387</li>
</ul></div>
</div>-->
</section>
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