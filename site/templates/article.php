<?php snippet('header') ?>

  <main class="main" role="main">
    
    <article class="teaser">
            <!-- Text -->
<div class="item item-1 l-center">
                <div class="svgCont r-img">
    <object class="rsvg" data="img/rolfing.svg" type="image/svg+xml"></object></div>
                <section class="content right">
                    <h2><?= $page->title_col1()->html() ?></h2>
                    <p><?= $page->beschreibung()->kirbytext() ?></p>
                <blockquote><p><?= $page->testimonial()->kirbytext() ?></p></blockquote>
                
                
                
                </section>
                
            </div>
        <!-- Bild -->
            <div class="item item-2 imgCont"><?php snippet('coverimage', $page) ?></div>
        </article>
    
    
    
  </main>

<?php snippet('footer') ?>