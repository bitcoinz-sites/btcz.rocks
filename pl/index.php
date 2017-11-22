<!DOCTYPE html>
<html lang="pl" class="no-js">
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
<title>Twoja finansowa wolność - BitcoinZ</title>
<meta name="description" content="BitcoinZ to nowy rodzaj kalkulacji płatności. Wybierz swoją monetę" />
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
<li><a href="/media/Community_Paper_Final.pdf">DOKUMENTACJA</a>
<li><a href="#benefist" class="smooth-scroll">KORZYŚCI</a></li>
<li><a href="#exchange" class="smooth-scroll">GIEŁDY</a></li>
<li><a href="#wallets" class="smooth-scroll">PORTFELE</a></li>
<li><a href="#" class="smooth-scroll">KOPALNIE</a>
<ul>
<?php
include_once '../pools.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">EKSPLORATOR BLOKÓW</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">SPOŁECZNOŚĆ </a>
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
<li><a href="/media/Community_Paper_Final.pdf">DOKUMENTACJA</a></li>
<li><a href="#benefist" class="smooth-scroll">KORZYŚCI</a></li>
<li><a href="#exchange" class="smooth-scroll">GIEŁDY</a></li>
<li><a href="#wallets" class="smooth-scroll">PORTFELE</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">KOPALNIE</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">EKSPLORATOR BLOKÓW</a>
<ul class="sub-menu">
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">SPOŁECZNOŚĆ</a>
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
<div class="heading-title-big"><br>To Twoja waluta <br><span>BitcoinZ: Prawdziwy Bitcoin 2.0</span></div>
<div class="description-slide">Doświadcz decentralizacji. BitcoinZ.</div>
<div class="buttons-section"><a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">DOKUMENTACJA</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">Przeczytaj Więcej</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2>O <span>walucie</span></h2>
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
<h3>WAŻNE <span>SZCZEGÓŁY</span></h3>
<p>- Stwórz kopie bezpieczeństwa portfela w wielu lokalizacjach<br>- Duże ilości waluty przechowuj na anonimowych adresach, w „zimnych” portfelach<br>- Nie udostępniaj nikomu swoich kluczy prywatnych. Klucz prywatny jest jedynym czego potrzebujesz do kontroli środków na danym adresie portfela. Jeżeli udostępnisz komukolwiek swój klucz prywatny, uznaj to za bezpośrednie zagrożenie dla twoich środków – niezwłocznie wyślij je na inny adres</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ TO  <span>Bitcoin 2.0:</span></h3>
<p>- Technologia Bitcoin<br>- Anonimowe transakcje (pełna prywatność - zk-SNARKs) – wszystkie transakcje w sieci Bitcoin są dostępne publicznie.<br>- zdecentralizowane wydobywanie za pomocą kart graficznych (GPU) (koparki ASIC są zakazane, dopuszcza się podział sieci (hardfork) w celu zablokowania koparek ASIC)<br>- Zdecentralizowany rozwój / Wszystkie osoby biorące udział w rozwoju sieci są wolontariuszami<br>- Duże bloki -> bloki są podobne do BCC/BCH</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>AKTYWNA <span>SPOŁECZNOŚĆ</span></h3>
<p>Nasza społeczność cechuje się wysoką aktywnością, stawiamy na ciągły rozwój. <br>Możesz nas śledzić w mediach społecznościowych, na forum oraz Slack</p>
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
<h2>KORZYŚCI <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Maksymalna podaż</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Alogrytmy </h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Szybkie transakcje</h4>
<p>BTCZ = 2MB co 2,5 minuty ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Zasilanie obiegowe</h4>
<p>12500 monety co 2,5 minuty.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Naszym celem jest integracja najlepszego  <span>darmowego oprogramowania z BitcoinZ.</span></h2>
<p>Niemodyfikowalne parametry:</p>
</div>
<p>- maksymalna podaż waluty </p>
<p>- inflacja </p>
<p>- wyłącznie alogrytmy POW – Equihash może zostać zmieniony na inny algorytm w celu zablokowania koparek ASIC </p>
<p>- w celu poprawy użyteczności / sklalowalności dopuszczalne są nowe funkcjonalności, jendak przeszłość sieci nigdy nie zostanie zmieniona (przypadek ETH/ETC)</p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algorytm: Equihash (wyłącznie kopanie za pomocą GPU – promujemy decentralizację w górnctwie kryptowalut) </li>
<li>Maksymalna podaż: 21mld BTCZ </li>
<li>Aktualna emisja: 12500 monet co każde 2.5 minuty</li>
<li>Aktualna wielkość bloku jest podobna do BCC/BCH (BTCZ – 2MB co każde 2.5min ~ BCC/BCH= 8MB co każde 10 minut)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Najlepiej zabezpieczone oprogramowanie zawarte jest w <span>kliencie bitcoinz-pod/bitcoinz linux.</span></h2>
<p>Aplikacje z wrażliwymi danymi (np. portfele) powinny zapewniać kod open-source oraz sha256 w każdej edycji, aby umożliwić weryfikację kodu przez inny zespół programistów. Nie zaleca się korzystania z portfeli, które nie zostały zweryfikowane przez niezależny zespół.</p>
</div>
<p>Niezweryfikowane oprogramowanie należy uznać za niebezpieczne i zaniechać jego użycia.</p>
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
<h2>DLACZEGO  BitcoinZ ?</h2>
<div class="small-desd">JESTEŚMY W PEŁNI ZDECENTRALIZOWANĄ SIECIĄ</div>
<p>Spójrz na zalety</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONIMOWOŚĆ</h3>
<p>Wszystkie transakcje są w pełni anonimowe.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>WSPARCIE DLA RÓŻNYCH PLATFORM</h3>
<p>Nasz portfel jest kompatybilny z systemami linux, windows, ios oraz android. Nieustannie pracujemy nad ulepszeniami</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>SPOŁECZNOŚĆ</h3>
<p>Słuchamy naszej drogiej społeczności, dlatego osiągniemy sukces.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>STAŁY WZROST CENY</h3>
<p>BitcoinZ skupia się na organicznym wzroście.</p>
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
<h2>GIEŁDY</h2>
<p>Kup lub sprzedaj swoje BitcoinZ</p>
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
<h2>Pobierz  <span>portfel</span></h2>
<p>Portmonetki Linux, Windows i mobilne</p>
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
<h2>DLACZEGO WYBRAĆ  <span>BitcoinZ</span></h2>
<div class="small-desd"><span>POZNAJ POWODY</span></div>
<p>UWAGA. Zawsze pamiętaj o potencjalnych zagrożeniach i trzymaj kopie kluczy prywatnych w bezpiecznych miejscach!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>ZDECENTRALIZOWANE KOPANIE</h3>
<p>Jako górnik powinieneś unikać największych kopalni, aby być w zgodzie z głównymi zasadami.<br>
Łatwy do wydobycia<br>
Algorytm Equihash<br>
Zdecentralizowane wymiany
</p>
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
<h3>BEZ  <span>Pre-mine</span></h3>
<p>Czysta kryptowaluta. Brak pre-mine</p>
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
<h3>BitcoinZ TO   <span>Bitcoin 2.0:</span></h3>
<p>- 21 miliardów monet – Każda osoba na świecie może posiadać przynajmniej jedno BTCZ</p>
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
<h3>AKTYWNA  <span>SPOŁECZNOŚĆ</span></h3>
<p>Nasza społeczność rozwija się każdego dnia.</p>
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
<h3>ANONIMOWE   <span>TRANSAKCJE</span></h3>
<p>Wszystkie transakcje pozostają anonimowe. Nie musisz przejmować się prywatnością.</p>
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
<h3>PORTFEL ANDROID ORAZ IOS</h3>
<p>BitcoinZ w Twoim smartfonie</p>
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
<h3>ORGANICZNY  <span>WZROST</span></h3>
<p>Twój BTCZ będzie rozwijał się w sposób organiczny</p>
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
<h3>ZDECENTRALIZOWANY   <span>ROZWÓJ</span></h3>
<p>Wszystkie giełdy są dozwolone, z których najlepsze są zdecentralizowane. Zamierzamy zaimplementować w pełni zdecentralizowaną giełdę XCAT.</p>
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
<h3>WYŁĄCZNIE POW,<span>NIGDY POS</span></h3>
<p>BitcoinZ oparty jest na POW, zmiana na POS nigdy nie nastąpi</p>
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
<p>© 2017 BitcoinZ Społeczność. Wszelkie prawa zastrzeżone.</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">KORZYŚCI</a></li>
<li><a href="#exchange" class="smooth-scroll">GIEŁDY</a></li>
<li><a href="#wallets" class="smooth-scroll">PORTFELE</a></li>
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