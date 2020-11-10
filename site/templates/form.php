<?php snippet('header') ?>

<header style="background-color:yellow; height: 500px" class="furz">
      <h1><?= $page->title()->html() ?></h1>      
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>    
      <hr />      
    </header>

  <section class="get-in-touch">
   <div class="inner">
   <h1 class="title">Kontakt</h1>
   <form class="contact-form row">
      <div class="form-field col x-50">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Vorname </label>
      </div>
      <div class="form-field col x-50">
         <input id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col x-100">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Nachricht</label>
  
      </div>



      <div class="form-field col x-100 align-center">
         <input class="submit-btn" type="submit" value="Absenden">
      </div>
   </form>
   </div>
</section>

<?php snippet('footer') ?>