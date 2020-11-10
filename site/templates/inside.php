<!-- <div class="modal" id="ex1">
  <p>Thanks for clicking.  That felt good.  <br />Click <a href="#" rel="modal:close">close</a>, click the overlay, or press ESC</p>
</div> -->

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

<?php snippet('termine') ?>
<?php endif ?>

</div>
</header>
<div id="main">
  <?php snippet('inside') ?>
    
    <?php snippet('footer') ?>

</div>

  

