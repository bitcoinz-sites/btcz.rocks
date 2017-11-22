<!DOCTYPE html>
<html lang="fr" class="no-js">
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
<title>Votre liberté financière - BitcoinZ</title>
<meta name="description" content="BitcoinZ est un nouveau type de calcul de paiement. Choisissez votre pièce" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:image" content="path/to/image.jpg">
<!--Favicon-->
<link rel="icon" href="/favicon.ico">
<!--Libs css-->
<link rel="stylesheet" href="/css/stylelibs.css">
<!--Main css-->
<link rel="stylesheet" data-style="styles" href="/css/stylemain.css">
</head>
<body class="dark-load">
<header id="top-nav" class="top-nav page-header">
<div class="container"><a href="/" class="logo smooth-scroll"><img src="/img/logo.png" alt="logo" class="logo-white"><img src="/img/logo.png" alt="logo" class="logo-dark"></a>
<nav class="top-menu">
<ul class="sf-menu">
<!--Menu default-->
<li><a href="/media/Community_Paper_Final.pdf">PAPIER COMMUNAUTAIRE</a>
<li><a href="#benefist" class="smooth-scroll">AVANTAGES</a></li>
<li><a href="#exchange" class="smooth-scroll">ECHANGES</a></li>
<li><a href="#wallets" class="smooth-scroll">PORTE-MONNAIE</a></li>
<li><a href="#" class="smooth-scroll">Pools</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more on the forum bitcointalk</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">EXPLORATEUR</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">RESEAUX SOCIAUX</a>
<ul>
<?php
include_once '../social.php';
?>
</ul> 
<!--<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">ANN</a></li>-->
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
<li><a href="/media/Community_Paper_Final.pdf">PAPIER COMMUNAUTAIRE</a></li>
<li><a href="#benefist" class="smooth-scroll">AVANTAGES</a></li>
<li><a href="#exchange" class="smooth-scroll">Exchange</a></li>
<li><a href="#wallets" class="smooth-scroll">PORTE-MONNAIE</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Pools</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">EXPLORATEUR</a>
<ul class="sub-menu">
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">RESEAUX SOCIAUX</a>
<ul class="sub-menu">
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Forum bitcointalk</a>
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
<div class="heading-title-big"><br>c'est votre monnaie <br><span>BitcoinZ: Le vrai Bitcoin 2.0</span></div>
<div class="description-slide">Bienvenue Dans l'univers de la Cryptomonnaie Decentralisée. BitcoinZ.</div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">PAPIER COMMUNAUTAIRE</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">En Savoir Plus</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2><span>A PROPOS</span></h2>
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
<h3>DETAILS <span>IMPORTANTS</span></h3>
<p>- Sauvegardez Votre Porte Monnaie Dans Divers Endroits<br>- stocker Une Grande quantité de monnaie dans un porte-monnaie froid avec Des adresses anonymes<br>- Ne jamais divulguer en donnant ou envayant votre cle privée. La cle privée est le seul moyen pour preserver votre adresse. si vous envoyez ou donnez à quiconque votre clé privée, considerez celà tel un red flag, qui deplacera rapidement votre monnaie à une autre adresse.</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ EST <span>Bitcoin 2.0:</span></h3>
<p>- Technologie Bitcoin<br>- Les Transactions sont Anonymes (zk-SNARKs est renommée pour sa confidentialité)- Bitcoin a toutes les transactions visibles publiquement.<br>- GPU mining Decentralsé (ASIC miners sont bannis, hardforks pour prévenir le minage ASIC sont autorisés)<br>- Développement décentralisé / Tous les contributeurs sont des bénévoles<br>- Blocs de grande capacité- les blocs sont similaires à ceux du BCC / BCH</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>COMMUNAUTÉ <span>ACTIVE</span></h3>
<p>Notre communauté est active et nous sommes constement en développement<br>Vous pouvez nous suivre sur les réseaux sociaux, sur le forum, ainsi que sur Slack</p>
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
<h2>Benefits <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Quantité maximale</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algo</h4>
<p>Equilhash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Transactions rapides</h4>
<p>BTCZ = 2 Mo toutes les 2,5 minutes</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Alimentation en circulation</h4>
<p>12500 pièces de monnaie toutes les 2,5 minutes.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Notre but est de vous apporter le meilleur des logiciels libres qur le marché afin de pouvoir utiliser  <span>BitcoinZ dans les meilleurs conditions.</span></h2>
<p>Paramètres immuables:</p>
</div>
<p>- Quantité maximale </p>
<p>- l'inflation </p>
<p>- POW algo uniquement - nous pouvons changer l'algo Equilhash par un autre algo afin de prevenir les ASIC miners.</p>
<p>-de nouvelles fonctionnalités sont permises pour améliorer l'utilisation / l'évolutivité, mais nous ne changerons jamais l'historique (le meme cas pour ETH/ETC)</p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algo:Equilhash (toujours via le minage GPU - nous favorisons la décentralisation du mining</li>
<li>Quantité Maximale(max supply) :21 milliards de pièces</li>
<li>Quantité Actuelle: 12500 toutes les 2.5 minutes</li>
<li>La capacité du bloc est similaire à celle du BCC/BCH (BTZ= 2MB toutes les 2.5 min ~ BCC/BCH = 8MB toutes les 10 minute)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Le logiciel le plus sécurisé est inclus dans le client <span>bitcoinz-pod / bitcoinz linux.</span></h2>
<p>Les programmes de données sensibles comme les porte-monnaie devraient fournir du code source libre et sha256 à leurs versions pour pouvoir passer en revue leurs porte-monnaie par d'autres team / pods. Il n'est pas recommandé d'utiliser un portefeuille qui n'a pas été examiné par autre team. </p>
</div>
<p>Le logiciel sans aucune confirmation doit être traité comme un red flag et non utilisé.</p>
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
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">Forum<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
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
<h2>POURQUOI BitcoinZ ?</h2>
<div class="small-desd">NOUS SOMMES UN RÉSEAU ENTIÈREMENT DÉCENTRALISÉ</div>
<p>Voici quelques avantages</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONYMAT</h3>
<p>Toutes les transactions sont complètement anonymes.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>SUPPORT POUR DIFFÉRENTES PLATES-FORMES</h3>
<p>Notre porte-monnaie est compatible avec linux, windows, ios et android. Et nous travaillons toujours sur les améliorations</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>COMMUNAUTÉ</h3>
<p>Nous sommes à l'ecoute de notre chère communauté, afin que nous puissions réussir.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>CROISSANCE ACTIVE DES PRIX</h3>
<p>BitcoinZ se concentre sur la croissance organique.</p>
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
<h2>ECHANGES</h2>
<p>Acheter ou Vendre vos pièces BitcoinZ</p>
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
<h2>Télécharger <span>PORTE-MONNAIE</span></h2>
<p>Linux, Windows et portefeuilles mobiles</p>
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
<h2>POURQUOI CHOISI <span>BitcoinZ</span></h2>
<div class="small-desd">VOICI QUELQUES  <span> RAISONS</span></div>
<p>ATTENTION. Rappelez-vous toujours des pièges et gardez vos clés de sauvegarde dans un endroit sûr!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>Mining Decentralsé</h3>
<p>En tant que mineur, vous ne devriez pas utiliser les plus grands bassins pour suivre les grands principes.<br>
Facile à mine<br>
Algorithme équihash.<br>
Échanges décentralisés</p>
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
<h3>PAS DE <span>PRÉ-MINAGE</span></h3>
<p>Pièce pure. Pas de pré-minage</p>
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
<h3>BitcoinZ EST <span>Bitcoin 2.0:</span></h3>
<p>- 21 Milliards de piece - Tout le monde peut avoir en sa possession un BTCZ minimum</p>
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
<h3>COMMUNAUTÉ <span>ACTIVE</span></h3>
<p>Notre communauté se développe et grandit chaque jour.</p>
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
<h3>TRANSACTIONS <span>ANONYMES</span></h3>
<p>Toutes les transactions restent anonymes. Donc, vous n'avez pas à vous soucier de l'anonymat</p>
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
<h3>PORTE-MONNAIE ANDROID ET IOS </h3>
<p>Utilisez des pièces de monnaie bitcoinz dans vos smartphones</p>
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
<h3>CROISSANCE <span>NATURELLE</span></h3>
<p>Votre pièce de monnaie va grandir et se développer de manière naturelle	</p>
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
<h3>DEVELOPPEMENT  <span>DECENTRALISE</span></h3>
<p>Tous les échanges sont autorisés. Les meilleurs sont décentralisés. Nous prévoyons de mettre en œuvre un échange XCAT entièrement décentralisé</p>
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
<h3>POW UNIQUEMENT ET <span>PAS DE POS</span></h3>
<p>La pièce de monnaie est calculée uniquement pour le minage en POW et ne sera jamais remplacée par le POS</p>
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
<p>© 2017 BitcoinZ Communauté. Tous droits réservés</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">AVANTAGES</a></li>
<li><a href="#exchange" class="smooth-scroll">ECHANGES</a></li>
<li><a href="#wallets" class="smooth-scroll">PORTE-MONNAIE</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Forum bitcointalk</a></li>
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