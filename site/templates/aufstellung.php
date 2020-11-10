<?php snippet('header_main') ?>

<div class="hero-image main"><div class="hero-txtCont"><div class="hero-txt"><h2><?= $page->title_hero()->html() ?></h2><p class="hero-subtxt"><?= $page->beschreibung_hero()->kirbytext() ?></p></div>



</div></div>
    </header>
<div id="main">
  
    <article class="teaser">
            <!-- Text -->
<div class="item item-1 l-center">
                <div class="svgCont r-img">
    <object class="rsvg" data="img/rolfing.svg" type="image/svg+xml"></object></div>
                <section class="content right">
                    <h2><?= $page->title()->html() ?></h2>
                    <p><?= $page->beschreibung()->kirbytext() ?></p>
                <blockquote><p><?= $page->testimonial()->kirbytext() ?></p></blockquote>
                
                
                
                </section>
                <a class="ctaBtn" href="rolfing.php">mehr erfahren</a>
            </div>
        <!-- Bild -->
            <div class="item item-2 imgCont"><?php if($image = $page->images()->find($page->coverimage())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>    

<article class="teaser">
           
            <div class="l-center item item-1">
                <div class="svgCont">
    <object class="rsvg" data="img/anahatha_chakra_logo.svg" type="image/svg+xml"></object></div>
                <section class="content left">
                    <h2><?= $page->title2()->html() ?></h2>
                    <p><?= $page->beschreibung2()->kirbytext() ?></p>
                    <blockquote><p><?= $page->testimonial2()->kirbytext() ?></p></blockquote>
                    
                </section>
            <a class="ctaBtn" href="yogamonks.php">mehr erfahren</a>
            </div>
        
            <!-- Bild -->
            <div class="item item-2 imgCont left"><?php if($image = $page->images()->find($page->coverimage2())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?><!-- <img src="img/inside_2.jpg"> --><?php if($image = $page->image('yoga_1.jpg')): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>

<article class="teaser">
            
            
           
            <div class="item item-1 l-center">
                <div class="svgCont">
    <object class="rsvg" data="img/sa.svg" type="image/svg+xml"></object></div>
                <section class="content right">
                    <h2><?= $page->title3()->html() ?></h2>
                    <p><?= $page->beschreibung3()->kirbytext() ?></p>
                    <blockquote><p><?= $page->testimonial3()->kirbytext() ?></p></blockquote>
                </section>
            <a class="ctaBtn href="Aufstellung_Beratung.php">mehr erfahren</a>
            </div>
            <div class="item item-2 imgCont"><?php if($image = $page->images()->find($page->coverimage3())): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?></div>
        </article>



    

<?php snippet('footer') ?>

</div>