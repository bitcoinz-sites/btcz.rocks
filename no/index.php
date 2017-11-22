<!DOCTYPE html>
<html lang="no" class="no-js">
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
<title>Din Finansielle Frihet - BitcoinZ</title>
<meta name="description" content="BitcoinZ er en ny type betalingsberegning. Velg din mynt" />
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
<li><a href="/media/Community_Paper_Final.pdf">INFORMASJON TIL NETTSAMFUNN</a>
<li><a href="#benefist" class="smooth-scroll">FORDELER </a></li>
<li><a href="#exchange" class="smooth-scroll">BØRS</a></li>
<li><a href="#wallets" class="smooth-scroll">LOMMEBØKER</a></li>
<li><a href="#" class="smooth-scroll">MINING POOLS</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Og mer forum bitcointalk</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">STATISTIKK</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">SOSIAL</a>
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
<li><a href="/media/Community_Paper_Final.pdf">INFORMASJON TIL NETTSAMFUNN</a></li>
<li><a href="#benefist" class="smooth-scroll">FORDELER </a></li>
<li><a href="#exchange" class="smooth-scroll">BØRS</a></li>
<li><a href="#wallets" class="smooth-scroll">LOMMEBØKER  </a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">MINING POOLS</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Og mer...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">STATISTIKK</a>
<ul class="sub-menu"><br>
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">SOSIAL </a>
<ul class="sub-menu"><br>
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
<div class="heading-title-big"><br>Det er din mynt<br><span>BitcoinZ: Det sanne Bitcoin 2.0</span></div>
<div class="description-slide">Velkommen til desentralisering. BitcoinZ. </div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">INFORMASJON TIL NETTSAMFUNN</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">Les mer</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2>OM <span>MYNT </span></h2>
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
<h3>VIKTIG <span>INFORMASJON</span></h3>
<p>- ha flere kopier av lommebøker og lagre de på flere forskjellige steder.<br>- behold store mengder av mynter i «cold- wallet», på anonymer kontoer. Det viktigste er at du sikrer din wallet bra.<br>- Ikke del med andre de private tilgangene/nøklene du har. Det er eneste ting du trenger for å ha egen konto. Dersom du har delt uten vilje din tilgang/nøkkel med noen andre, straks overfør mynter til andre dine kontoer.</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ ER <span>Bitcoin 2.0:</span></h3>
<p>- Bitcoin teknologi<br>- Anonym transaksjoner (zk-SNARKs privacy) – Bitcoin har alle transaksjoner offentlig tilgjengelig. <br>- Desentralisert GPU graving (ASIC gravere er utestengt. Det er for å beskytte seg mot ASIC gravere. Det er mulighet til deling). <br>- Desentralisert utviklingen / Alle bidragsytere er frivillige.<br>- - Store blokker -> størelsen til blokker er like BCC / BCH </p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>AKTIV  <span>NETTSAMFUNN </span></h3>
<p>Vårt samfunn er aktiv og vi er alltid i utvikling. <br>Du kan følge oss opp på sosiale nettverk, forum og på  “Slack”</p>
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
<h2>FORDELER <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Maks mengde av mynt</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algoritme</h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Raske transaksjoner</h4>
<p>BTCZ = 2 MB hvert 2. minutt ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Sirkulerende forsyning</h4>
<p>12500 mynter hvert 2,5 minutt.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Vårt mål er å samle de beste og gratis programvarer <span>i markedet som kan brukes med BitcoinZ.</span></h2>
<p>Uforanderlig parameter: </p>
</div>
<p>- maks mengde av mynt </p>
<p>- inflasjon </p>
<p>- bare POW algoritme nå. Det kan skje endringer i fremtiden, slik at Equihash algoritme skal endres til en annen POW algoritmen. Det gjøres for sikkerhetsskyld mot ASIC gravere.</p>
<p>- Nye funksjoner kan forbedre bruken / skalerbarheten, men vi vil aldri endre historien (ETH / ETC-saken) </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algoritme: Equihash (alltid GPU graving - vi arbeider for desentralisert graving)</li>
<li>Maks mengde av mynter som er 21 milliarder </li>
<li>Nåværende tilbud: 12500 mynter hver 2.5 minute</li>
<li>Nåværende mengde av blokk ligner i BCC/BCH (BTCZ = 2MB hver 2.5 min ~ BCC/BCH = 8MB hver 10 min)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Den mest beskyttet programvare er inkludert i<span>Bitcoinz-pod/bitcoinz linux kunde. </span></h2>
<p>Disse viktige programvarene som lommebøkene, bør skaffe en gratis og åpen kode og sha256 som gir et overblikk over sine lommebøker til andre lag. Det anbefales ikke å bruke lommebøker som ikke ble sjekket av andre lag.  </p>
</div>
<p>Programvare uten noe bekreftelse bør ikke brukes og anses som en viktig signal mot å bruke programvaren.</p>
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
<h2>HVORFOR BitcoinZ ?</h2>
<div class="small-desd">VI ER ET FULLSTENDIG DESENTRALISERT NETTVERK.</div>
<p>Her er noen fordeler</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONIMITET</h3>
<p>Alle transaksjoner er fullstendig anonyme.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>TEKNISK STØTTE FOR ULIKE PLATTFORMER </h3>
<p>Vår lommebok fungerer i ulike operativsystemer blant annet linux, windows, ios og android. Vi jobber hyppig med forbedringer.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>NETTSAMFUNN</h3>
<p>Vi tar hensyn til vårt nettsamfunn, på grunn av at vi tror på at det er nøkkel til å lykkes. </p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>AKTIV VEKST I PRISEN</h3>
<p>BitcoinZ fokus på organisk vekst.</p>
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
<h2>BØRS</h2>
<p>Kjøpe eller selge BitcoinZ mynter</p>
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
<h2><span>Last ned lommeboken</span></h2>
<p>Linux, Windows og mobil lommebøker</p>
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
<h2>HVORFOR VELGER UT <span>BitcoinZ</span></h2>
<div class="small-desd">HER ER FLERE <span> GRUNNER</span></div>
<p>ADVARSEL. Du må passe godt på alle tilgangene/nøklene til lommebøker. Behold “backup” nøklene på et trygg sted!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>DESENTRALISERT  GRAVING</h3>
<p>Hovedprinsippet er ikke å bruke de største “mining pools”. <br>
Enkel graving.<br>
Equihash algoritme.<br>
Desentralisert børs.</p>
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
<h3>INGEN <span>PRE-GRAVING</span></h3>
<p>Ublandet mynt. Ingen pre-graving</p>
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
<h3>BitcoinZ ER <span>Bitcoin 2.0:</span></h3>
<p>- 21 milliarder mynter - Hvis myntene skal dele på alle befolkninger i verden, kan en person ha minst én BTCZ.</p>
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
<h3>AKTIV <span>NETTSAMFUNN</span></h3>
<p>Vårt samfunn vokser seg daglig og er i høy utviklingsprosess.</p>
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
<h3>ANONYME <span>TRANSAKSJONER</span></h3>
<p>Alle transaksjoner er anonymer. Dere trenger ikke å bry dere på anonymitet.</p>
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
<h3>Android OG iOS <span>LOMMEBOK </span></h3>
<p>Dere har mulighet til å bruke bitcoinz mynter på deres mobiltelefoner.</p>
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
<h3>NATURLIG <span>VEKST</span></h3>
<p>Mynt vokser seg og forbedres på et naturlig måte, daglig.</p>
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
<h3>DESENTRALISERT <span>UTVIKLING</span></h3>
<p>Alle kryptovalutaer i børs er tillate. Desentralisert valuta er det aller beste. Vi planlegger å innføre en fullstendig desentralisert XCAT kryptovalutabørs.</p>
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
<h3>BARE POW <span>IKKE POS</span></h3>
<p>Denne valutaen/mynten er beregnet bare for graving av POW, og aldri blir skiftet til POS.</p>
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
<p>© 2017 BitcoinZ Nettsamfunn.  Alle rettigheter forbeholdt. </p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">FORDELER</a></li>
<li><a href="#exchange" class="smooth-scroll">BØRS</a></li>
<li><a href="#wallets" class="smooth-scroll">LOMMEBØKER </a></li>
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