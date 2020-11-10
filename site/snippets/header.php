<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js gt-ie9 ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->
<html class="no-js gt-ie9" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- #DNS prefetching -->
    <!-- http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers -->
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//use.typekit.net">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <!-- #Asset Prefetching -->
    <!-- Fetch and Download Assets before requested by the user  -->
    <!-- http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/#section:resource-prefetching -->
    <link rel="prefetch" href="">
    <!-- #Page Prefetching -->
    <!-- http://calendar.perfplanet.com/2012/speed-up-your-site-using-prefetching -->
    <link rel="prefetch" href="index.html">
  


  
  <title>Twin Dragon Lodge</title>
  <meta name="description" content="<?= $site->description()->html() ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <!-- http://mathiasbynens.be/notes/rel-shortcut-icon -->
    <!-- http://mathiasbynens.be/notes/touch-icons -->
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
  

  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600|Merriweather:300" rel="stylesheet">
    <!-- Modernizer, cause some browsers suck -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <?= css('assets/css/index.css') ?>
  <?php echo css('assets/js/jquery.modal.css') ?>

</head>

<?php if ($page->isHomePage()): ?>
  <body id="home">
  <?php else: ?>
    <body id="<?= $page->title() ?>">
<?php endif ?>

<body>

<!-- Add your site or application here -->
    <!-- Brand -->
    <header class="header">
        <div class="brand">
            
            <h1>TWINDRAGON-LODGE<span>Zentrum für angewandtes Schamanisches Wissen / True Human Energy</span></h1>
             <?php snippet('menu') ?>
        </div>
        


        <!-- <div id="toggle-nav"><span class="icon-bars"></span>Menü</div> -->
        
         
 




  
