<?php snippet('header') ?>


<div class="hero-image"><?php snippet('coverimage', $page) ?><div class="hero-txtCont"><div class="hero-txt"><h2><?= $page->title_hero()->html() ?></h2></div>





<!-- Einbau 26.10.18 -->

<!-- <button class="ctaBtn" id="trigger-overlay" type="button">Rolfing auf einen Blick</button> -->
<!-- <a href="#ex1" rel="modal:open">Open Modal</a> -->
<!-- <a href="faq" rel="modal:open">open</a> -->
</div>
</div>
<!-- Abfrage ob ein Termin erstellt wurde - ja,lade das Snippet Termine -->
<?php if ($page->builder()->isNotEmpty()): ?>

<?php endif ?>

</div>
</header>
<div id="main">
  <?php snippet('inside') ?>
    
    <?php snippet('footer') ?>

</div>

  

