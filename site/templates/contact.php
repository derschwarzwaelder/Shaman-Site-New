<?php snippet('header') ?>

 <section class="get-in-touch">
   <div class="inner">
  
   
   <section>
                    <h2><?= $page->title_col1()->html() ?></h2>
                    <p><?= $page->beschreibung()->kirbytext() ?></p>
                <blockquote><p><?= $page->testimonial()->kirbytext() ?></p></blockquote>
                
                
                
                </section>

    

    <form class="contact-form row" method="post" >

      <?php if($alert): ?>
      <div class="alert">
        <ul>
          <?php foreach($alert as $message): ?>
          <li><?php echo html($message) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      <?php endif ?>

      <div class="field form-field col x-50">
        <label class="label" for="vorname">Vorname <abbr title="required">*</abbr></label>
        <input class="input-text js-input" type="text" id="vorname" name="vorname">
      </div>
      
      <div class="field form-field col x-50">
        <label class="label" for="name">Nachname <abbr title="required">*</abbr></label>
        <input class="input-text js-input" type="text" id="name" name="name">
      </div>
      
      <div class="field form-field col x-50">
        <label class="label" for="email">Email <abbr title="required">*</abbr></label>
        <input class="input-text js-input" type="email" id="email" name="email" required>
      </div>

      



      

      <div class="field form-field col x-50">
        <label class="label" for="telefon">Telefonnummer <abbr title="required">*</abbr></label>
        <input class="input-text js-input" type="text" id="telefon" name="telefon">
      </div>


      <div class="field form-field col x-100">
        <label class="label" for="text">Text <abbr title="required">*</abbr></label>
        <input id="text" name="text" class="input-text" required></input>
      </div>

      <input class="submit-btn" type="submit" name="submit" value="Absenden">

    </form>
  </section>

  </main>

<?php snippet('footer') ?>