
<?php snippet('header') ?>

<div class="hero-image"><?php if($image = $page->images()->find($page->coverimagemain())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?><div class="hero-txtCont"><div class="hero-txt"><h2><?= $page->title_hero()->html() ?></h2><p class="hero-subtxt"><?= $page->beschreibung_hero()->kirbytext() ?></p></div>



</div>
<!-- Einbau 26.10.18 -->

<!-- <button class="ctaBtn" id="trigger-overlay" type="button">Rolfing auf einen Blick</button> -->
<!-- <a href="#ex1" rel="modal:open">Open Modal</a> -->

</div>
    </header>
<div id="main">
  
    <article class="teaser">
            <!-- Text -->
<div class="item item-1 l-center">
                <!-- <div class="svgCont r-img">
    <object class="rsvg" data="assets/images/rolfing.svg" type="image/svg+xml"></object></div> -->
                <section class="content right">
                    <h2><?= $page->title_col1()->html() ?></h2>
                    <p><?= $page->beschreibung()->kirbytext() ?></p>
                <blockquote><p><?= $page->testimonial()->kirbytext() ?></p></blockquote>
                
                
                
                </section>
                <!-- <a class="ctaBtn" href="rolfing.php">mehr erfahren</a> -->
            </div>
        <!-- Bild -->
            <div class="item item-2 imgCont"><?php if($image = $page->images()->find($page->coverimage())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>    

<article class="teaser">
           
            <div class="l-center item item-1">
                
                <section class="content left">
                    <h2><?= $page->title_col2()->html() ?></h2>
                    <p><?= $page->beschreibung2()->kirbytext() ?></p>
                    <blockquote><p><?= $page->testimonial2()->kirbytext() ?></p></blockquote>
                    
                </section>
            <!-- <a class="ctaBtn" href="yogamonks.php">mehr erfahren</a> -->
            </div>
        
            <!-- Bild -->
            <div class="item item-2 imgCont left"><?php if($image = $page->images()->find($page->coverimage2())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>

<article class="teaser">
            
            
           
            <div class="item item-1 l-center">
                
                <section class="content right">
                    <h2><?= $page->title_col3()->html() ?></h2>
                    <p><?= $page->beschreibung3()->kirbytext() ?></p>
                    <blockquote><p><?= $page->testimonial3()->kirbytext() ?></p></blockquote>
                </section>
            <!-- <a class="ctaBtn href="Aufstellung_Beratung.php">mehr erfahren</a> -->
            </div>
            <div class="item item-2 imgCont"><?php if($image = $page->images()->find($page->coverimage3())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>

<article class="teaser">
           
            <div class="l-center item item-1">
                
                <section class="content left">
                    <h2><?= $page->title_col4()->html() ?></h2>
                    <p><?= $page->beschreibung4()->kirbytext() ?></p>
                    <blockquote><p><?= $page->testimonial4()->kirbytext() ?></p></blockquote>
                    
                </section>
            <!-- <a class="ctaBtn" href="yogamonks.php">mehr erfahren</a> -->
            </div>
        
            <!-- Bild -->
            <div class="item item-2 imgCont left"><?php if($image = $page->images()->find($page->coverimage4())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>

    

<?php snippet('footer') ?>

</div>