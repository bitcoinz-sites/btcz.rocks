<!DOCTYPE html>
<html lang="cz" class="no-js">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108218482-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108218482-1');
</script>
<meta charset="utf-8">
<title>BitcoinZ je vaše finanční svoboda</title>
<meta name="description" content="BitcoinZ je nový způsob výpočtu platby. Vyberte si minci" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:image" content="path/to/image.jpg">
<!--Favicon-->
<link rel="icon" href="https://bitcoinz.global/favicon.ico">
<!--Libs css-->
<link rel="stylesheet" href="/css/stylelibs.css">
<!--Main css-->
<link rel="stylesheet" data-style="styles" href="/css/stylemain.css">
</head>
<body class="dark-load">
<header id="top-nav" class="top-nav page-header">
<div class="container"><a href="/cz" class="logo smooth-scroll"><img src="/img/logo.png" alt="logo" class="logo-white"><img src="/img/logo.png" alt="logo" class="logo-dark"></a>
<nav class="top-menu">
<ul class="sf-menu">
<!--Menu default-->
<li><a href="/media/Community_Paper_Final.pdf">DOKUMENTACE</a>
<li><a href="#benefist" class="smooth-scroll">VÝHODY</a></li>
<li><a href="#exchange" class="smooth-scroll">SMĚNÁRNY</a></li>
<li><a href="p#wallets" class="smooth-scroll">PENĚŽENKY </a></li>
<li><a href="#" class="smooth-scroll">TĚŽBA</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more on the forum bitcointalk</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">PRŮZKUMNÍK</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">SOCIÁLNÍ SÍTĚ </a>
<ul>
<?php
include_once '../social.php';
?>
</ul> 
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Lang</a>
<ul class="sub-menu">
<?php
include_once '../lang.php';
?>
</ul></li>
</nav>
<!-- Start mobile menu-->
<!-- Start toggle menu--><a href="#" class="toggle-mnu"><span></span></a>
<div id="mobile-menu">
<div class="inner-wrap">
<nav>
<ul class="nav_menu"><br>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Language</a>
<ul class="sub-menu"><br>
<?php
include_once '../langmobile.php';
?>
</ul></li>
<li><a href="/media/Community_Paper_Final.pdf">DOKUMENTACE</a></li>
<li><a href="p#benefist" class="smooth-scroll">VÝHODY</a></li>
<li><a href="#exchange" class="smooth-scroll">SMĚNÁRNY</a></li>
<li><a href="#wallets" class="smooth-scroll">PENĚŽENKY </a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">TĚŽBA</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">PRŮZKUMNÍK</a>
<ul class="sub-menu">
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">- SOCIÁLNÍ SÍTĚ </a>
<ul class="sub-menu">
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">FÓRUM bitcointalk</a>
</ul>
</nav>
</div>
</div>
<!-- End mobile menu-->
</div>
</header>

<!-- Start slider section-->
<div id="top" class="slider">
<div id="preloader">
<div id="status"></div>
</div>
<div class="full-slider intro">
<!-- Start slide-->
<div data-image="/img/bgn22.jpg" class="slide bg-mask background-image full-vh">
<div class="container-slide vertical-align center head-desc">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title-big"><br>Jsou to vaše mince <br><span>BitcoinZ - Bitcoin 2.0</span></div>
<div class="description-slide">Staňte se součástí decentralizace. BitcoinZ.</div><br>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">DOKUMENTACE</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">Více</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
</div>
</div>
</div>
</div>
</div>
<div id="particles-js" class="canvas-background"></div>
</div>
</div>
<!--Contol slider-->
<div id="dots-control-full-slider" class="dots-control-carousel"></div>
<!-- Strat Control carousel-->
<div id="control-full-slider" class="prev-next-block-rotate opacity-control">
<div class="wrap-prev">
<div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
</div>
<div class="wrap-next">
<div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
</div>
</div><a href="#about" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
</div>
<!-- End slider section-->
<!-- Section about-->
<section id="about" class="about-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>O PROJEKTU</h2>
<!--<div class="small-desd">We create <span>awesome stuff</span></div>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-target"></i>
<div class="bg-icon"><i class="pe-7s-target"></i></div>
</div>
<div class="content">
<h3>DŮLEŽITÉ  <span>POZNÁMKY</span></h3>
<p>- - Zálohujte si vaší peněženku na několika místech.<br>- Velké obnosy uchovávejte v papírové peněžence na anonymní adrese<br>- Nikomu nedávejte svůj privátní klíč. Privátním klíčem je kód, který vám umožňuje přístup k vaší peněžence. Pokud se váš klíč k někomu dostane, ihned pošlete váš obnos na novou adresu a přestaňte používat tu dosavadní</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ JE <span>Bitcoin 2.0:</span></h3>
<p>- Technologie Bitcoinu<br>- Anonymní transakce (zk-SNARKs anonymita) – Bitcoin má všechny transakce volně dostupné.<br>- Decentralizovaná těžba pomocí grafických karet. (ASIC minery jsou zakázány a hardforks jako prevence proti nim povoleny.)<br>-Decentralizovaný vývoj – Všichni vývojáři jsou dobrovolníci.<br>- Velké bloky -> Jsou podobné BCC / BCH</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>AKTIVNÍ  <span>KOMUNITA</span></h3>
<p>Naše komunita je aktivní a stále vyvíjí nové věci.  <br>Můžete nás sledovat na sociálních sítích, fóru a Slacku.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--Section services-->
<section id="benefist" class="services-section background-image bg-dark-section">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title small-heading center">
<h2>VÝHODY <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Maxi dodávky</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algoritmus</h4>
<p>Equihash .</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Rychlá transakce</h4>
<p>BTCZ = 2MB každé 2.5 minuty  ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Aktuální nabídky</h4>
<p>12500 mincí každých 2,5 minuty..</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Našim cílem je dostat na trh nejlepší bezplatný  <span>software využívající BitcoinZ</span></h2>
<p>Immutable params:</p>
</div>
<p>- Maximální zásoba </p>
<p>- Inflace </p>
<p>- Pouze POW těžba. Chceme zabránit ASIC čipům. </p>
<p>- Budeme přidávat nové funkce, ale nikdy nezměníme minulost tak, jako to bylo například u ETH/ETC. </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algoritmus: Equihash (Podporujeme těžbu pomocí grafických karet a věříme v její decentralizaci.) </li>
<li>Maximální počet mincí: 21 miliard</li>
<li>Aktuální tok: 12500 mincí každých 2,5 minuty.</li>
<li>Nynější blok má podobnou velikost jako BCC / BCH (BTCZ = 2MB každé 2.5 minuty a BCC / BCH = 8MB každých 10 minut)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Nejbezpečnější software je zahrnut v <span>bitcoinz-pod/bitcoinz linuxovém klientu.</span></h2>
<p>Citlivá data programů jako jsou například peněženky, by měli mít open source kód, aby bylo možné nahlížet do jejich zdrojového kódu i ostatním vývojářům a týmům. Není doporučováno používat jakoukoli peněženku, která nebyla zkontrolována jiným a nezávislým týmem. </p>
</div>
<p>Software bez potvrzení by měl být označen za nepoužitelný.</p>
</div>
<!--<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Decentralized mining</li>
<li>Easy to mine</li>
<li>Decentalized Exchanges</li>
<li>Pure community coin</li>
<li>Always immutable - no way to change history!</li>
<li>Hardforks to improve tech & scalability are allowed but changing history is banned</li>
<li>BitcoinZ is focused on organic growth</li>
<li>and more...	</li>
</ul>
</div> -->
</div>
<!--<div id="tabs-3">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Never fall in love with an idea. They’re whores. If the the <span>job, there’s always another.</span></h2>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
</div>
<p>Tab 1 Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et . Mauris </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Rich media banners</li>
<li>Audio production</li>
<li>Photography</li>
<li>Design</li>
<li>Content creation</li>
<li>Content audit</li>
<li>Project management</li>
<li>Technical requirements</li>
<li>Testing</li>
<li>and more...	</li>
</ul>
</div>
</div>
<div id="tabs-4">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Never fall in love with an idea. If the the <span>job, there’s always another.</span></h2>
</div>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
<p>Tab 1 Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et . Mauris </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Design</li>
<li>Content creation</li>
<li>Content audit</li>
<li>Project management</li>
<li>Technical requirements</li>
<li>Rich media banners</li>
<li>Audio production</li>
<li>Photography</li>
<li>Testing</li>
<li>and more...</li>
</ul>
</div>
</div>
</div>!-->
<div class="col-md-12">
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">FÓRUM<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</section>
<!--Section how we work-->
<section class="section-how-we-work bg-white-section background-image">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>PROČ BITCOINZ? ???</h2>
<div class="small-desd">JSME PLNĚ DECENTRALIZOVANÁ SÍŤ</div>
<p>Zde je několik výhod</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONYMITA</h3>
<p>Všechny transakce jsou kompletně anonymní.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>PODPORA PRO NEJRŮZNĚJŠÍ PLATFORMY	</h3>
<p>Naše peněženka je kompatibilmí se systémy Linux, Windows, IOS a Android. Stále pracujeme na vylepšeních.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>KOMUNITA</h3>
<p>Nasloucháme naší vážené komunitě. V tom je síla úspěchu.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>RŮST HODNOTY</h3>
<p>BitcoinZ je zaměřen na organický růst hodnoty.</p>
</div>
<!-- Edn items-->
</div>
</div>
</section>
<!--Section work progress-->
<section id="exchange" class="section-work-progress background-image bg-dark-section">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="heading-title small-heading text-left">
<h2>SMĚNÁRNY</h2>
<p>Nakoupit nebo prodat BitcoinZ</p>
</div>
</div>
<?php
include_once '../exchange.php';
?>
</section>
<!--Section our some work-->
<section id="wallets" class="section-portfolio bg-white-section background-image">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title center">
<h2>Donwload <span>PENĚŽENKY </span></h2>
<p>Linux and Windows PENĚŽENKY</p>
</div>
<div class="controls-portfolio center">
<?php
include_once '../wallets.php';
?>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
</div>
</div>
</section>
</br>
</br>
</br>
</br>
<!--Section why chose us-->
<?php
include_once '../roadmap.php';
?>
<section class="section-choose-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>PROČ VYBRAT <span>BitcoinZ</span></h2>
<div class="small-desd">ZDE JE PÁR  <span> DŮVODŮ</span></div>
<p>VAROVÁNÍ. Vždy uchovávejte vaše údaje na bezpečném místě!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>DECENTRALIZOVANÁ TĚŽBA</h3>
<p>Jako těžaři bychom neměli používat největší pool. Musíme se řídit základními principy.<br>
Jednoduchá těžba<br>
Equihash algoritmus..<br>
Decentralizované směnárny.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>BITCOINZ NENÍ <span>DOPŘEDU NATĚŽEN</span></h3>
<p>Čistý zrod. Bez předtěžených mincí.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-graph1"></i>
<div class="bg-icon"><i class="pe-7s-graph1"></i></div>
</div>
<div class="content">
<h3>BitcoinZ JE  <span>Bitcoin 2.0:</span></h3>
<p>- 21 miliard mincí – Každý na světě může mít alespoň jeden BTCZ</p>
</div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-like"></i>
<div class="bg-icon"><i class="pe-7s-like"></i></div>
</div>
<div class="content">
<h3>AKTIVNÍ  <span>KOMUNITA</span></h3>
<p>Naše komunita je aktivní, vyvíjí nové věci a každým dnem roste. Připojte se k nám.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>ANONYMNÍ  <span>TRANSAKCE</span></h3>
<p>Nemusíte se ničeho bát. Všechny transakce jsou anonymní.	</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-phone"></i>
<div class="bg-icon"><i class="pe-7s-phone"></i></div>
</div>
<div class="content">
<h3PENĚŽENKA PRO <span>ANDROID A IOS </span></h3>
<p>Používejte BitcoinZ i na cestách, ve vašem smartphonu.</p>
</div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-display1"></i>
<div class="bg-icon"><i class="pe-7s-display1"></i></div>
</div>
<div class="content">
<h3>PŘIROZENÝ  <span>RŮST</span></h3>
<p>BitcoinZ se vyvíjí a roste přirozeným způsobem.	</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-link"></i>
<div class="bg-icon"><i class="pe-7s-link"></i></div>
</div>
<div class="content">
<h3>DECENTRALIZOVANÝ   <span>VÝVOJ</span></h3>
<p>Směnárna je dobrá. Decentralizovaná však ještě lepš! Plánujeme implementovat plně decentralizovanou směnárnu XCAT.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-paint"></i>
<div class="bg-icon"><i class="pe-7s-paint"></i></div>
</div>
<div class="content">
<h3>Pouze POW. <span>Né POS</span></h3>
<p>BitcoinZ je dělaný pouze pro POW těžbu a nikdy nebude změněn na POS variantu.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--Section our clients-->
<div class="our-clients">
<div class="container">
<div class="row">
<div id="clients-carousel" class="clients-carousel">
<div class="col-md-2">
<div class="item-carousel"><a href="https://github.com/bitcoinz-pod/bitcoinz" target="_blank"><img src="/img/partners-1.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank"><img src="/img/partner2.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="http://slack.bitcoinz.site/" target="_blank"><img src="/img/partner3.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank"><img src="/img/partner4.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://discordapp.com/invite/u3dkbFs" target="_blank"><img src="/img/disc.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.facebook.com/BitcoinZCommunity/" target="_blank"><img src="/img/face.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank"><img src="/img/tel.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://twitter.com/BTCZCommunity" target="_blank"><img src="/img/twit.png" alt="logo"></a></div>
</div>
</div>
</div>
</div>
<!-- Strat Control carousel-->
<div id="control-clients" class="prev-next-block-rotate">
<div class="wrap-prev">
<div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
</div>
<div class="wrap-next">
<div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
</div>
</div>
</div>

<!-- Old browsers support--><!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

<footer>
<div class="down-footer">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>© 2017 BitcoinZ Komunita BitcoinZ. Všechna práva vyhrazena..</p>
<ul class="footer-menu">
<li><a href="#">Home</a></li>
<li><a href="#benefist" class="smooth-scroll">VÝHODY</a></li>
<li><a href="#exchange" class="smooth-scroll">SMĚNÁRNY</a></li>
<li><a href="#wallets" class="smooth-scroll">PENĚŽENKY </a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">FÓRUM bitcointalk</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<!--button to top-->
<div class="top icon-down toTopFromBottom"><a href="#" class="smooth-scroll"><i class="pe-7s-angle-up"></i></a></div>
<!--end button to top-->
<!--Libs-->
<script src="/js/libs.js.pagespeed.ce.Av_NAtkm4V.js"></script>
<script src="/libs/style-customizer/style-customizer.js.pagespeed.ce.IgWtkWf8IC.js"></script>
<!--Use scripts-->
<script src="/js/common.js.pagespeed.ce.hW1NRi6zyn.js"></script>
</body>
</html>