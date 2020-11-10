<div class="faqCont">
<h1 class="faq_headline"><?= $page->title_faq()->html() ?></h2>
<div class="flex wide">

<?php foreach($page->builder()->toStructure() as $section): ?>
  <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
<?php endforeach ?>
</div>
</div>
<!-- Spezielle Footer mit dem Collabse Script -->
 <?php snippet('footer_faq') ?>
