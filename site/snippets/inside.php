<?php

$articles = $page->children()->visible();







?>



<section>

  <?php foreach($articles as $article): ?>

    <article class="article index teaser">
      
          <!-- von mir -->

          <div class="item item-1 l-center">
                
                <section class="content right">
                    <h2><?= $article->title_col1()->html() ?></h2>
                    <p><?= $article->beschreibung()->kirbytext() ?></p>
                <blockquote><p><?= $article->testimonial()->kirbytext() ?></p></blockquote>
                
                
                
                </section>
                
            </div>
            <div class="item item-2 imgCont"><?php snippet('coverimage', $article) ?></div>
            <!-- -->

            

            

            

          </article>

  <?php endforeach ?>

