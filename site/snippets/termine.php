<div class="dateCont">
<h2><?= $page->title_termine()->html() ?></h2>

<div class="grid">


<?php foreach($page->builder()->toStructure() as $section): ?>
  <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
<?php endforeach ?></div>
<a href="kontakt" class="ctaBtn">Anmelden</a>
</div>
