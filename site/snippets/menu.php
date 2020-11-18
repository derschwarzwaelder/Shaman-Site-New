
<nav class="navigation site-nav menu column" role="navigation">
  
    <?php foreach($pages->visible() as $item): ?>
    
      <a class="menu-item <?= r($item->isOpen(), ' is-active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    
    <?php endforeach ?>
    
  
</nav>