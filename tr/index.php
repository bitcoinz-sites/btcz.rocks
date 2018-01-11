<!DOCTYPE html>
<html lang="tr" class="no-js">
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
<title>Mali Özgürlüğünüz - BitcoinZ</title>
<meta name="description" content="BitcoinZ, yeni bir ödeme hesaplama türüdür. Paranı seç" />
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
<li><a href="/media/Community_Paper_Final.pdf">Topluluk Kağıdı</a>
<li><a href="#benefist" class="smooth-scroll">Yararları</a></li>
<li><a href="#exchange" class="smooth-scroll">Değiş Tokuş</a></li>
<li><a href="#wallets" class="smooth-scroll">Cüzdan</a></li>
<li><a href="#" class="smooth-scroll">Havuzlar</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Daha Fazlası...</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">Kâşif</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">Sosyal</a>
<ul>
<?php
include_once '../social.php';
?>
</ul> 
<!--<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">ANN</a></li>-->
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Dil</a>
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
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Dil</a>
<ul class="sub-menu"><br>
<?php
include_once '../langmobile.php';
?>
</ul></li>
<li><a href="/media/Community_Paper_Final.pdf">Topluluk Kağıdı</a></li>
<li><a href="#benefist" class="smooth-scroll">Yararları</a></li>
<li><a href="#exchange" class="smooth-scroll">Değiş Tokuş</a></li>
<li><a href="#wallets" class="smooth-scroll">Cüzdan</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Havuzlar</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Daha Fazlası...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Kâşif</a>
<ul class="sub-menu"><br>
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Sosyal</a>
<ul class="sub-menu"><br>
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Bitcointalk Forumu</a>
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
<div class="heading-title-big"><br>YENİ PARANIZ<br><span>BITCOINZ: GERÇEK BITCON 2.0</span></div>
<div class="description-slide">Merkezsiz paraya hoşgeldiniz!</div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">Topluluk Kağıdı</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">DAHA FAZLA OKU</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2>PARA <span>HAKKINDA</span></h2>
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
<h3>ÖNEMLİ  <span>BİLGİLER</span></h3>
<p>
- Cüzdanınızı birçok yere yedekleyin.<br>
- Büyük miktarları birden fazla cüzdana bölün.<br>
- Kimseye özel anahtarlarınızı vermeyin / göndermeyin! Özel anahtarınız ile cüzdanınıza direk erişilebilir ve işlem yapılabilir.<br>
- Başkasının özel anahtarınızı görebileceğini düşündüğünüz durumlarda hesabınızda bulunan tüm bitcoinzlerinizi güvenli bir cüzdana ivedilik ile taşıyınız.
</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3> <span>BITCOINZ, BITCOIN 2.0:</span></h3>
<p>
  - Bitcoin teknolojisi<br>
  - Anonim işlemler (zk-SNARK'ların gizliliği)<br>
  - Bitcoin, tüm işlemlerin halka açık olduğunu gösterir.<br>
  - Merkezi olmayan GPU madenciliği ( ASIC ile kazım yapılmasına izin vermemektedir. )<br>
  - Bu projeye tüm katkıda bulunanlar gönüllüdür. Projenin sahibi yoktur.<br>
  - Daha büyük bloklar -> Bloklar BCC / BCH'ye benzer.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>ETKİLİ <span>TOPLUM</span></h3>
<p>Topluluğumuz aktif ve biz her zaman gelişiyoruz. <br>Bizi sosyal ağlarda, forumda ve slack'te takip edebilirsiniz.</p>
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
<h2>BITCOINZ'NİN <span>YARARLARI</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Maksimum Miktar</h4>
<p>21.000.000.000 BTCZ</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algoritma</h4>
<p>Equihash</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Hızlı işlemler</h4>
<p>2,5 dakikada bir ~2MB</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Dolaşımlı Arz</h4>
<p>2.5 dakikada bir 12500 BTCZ dağıtılır</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Amacımız, BitcoinZ'de kullanmak için piyasadaki en iyi <span>ücretsiz yazılımların hepsini bağlamaktır.</span></h2>
<p>Değişmez Değerler:</p>
</div>
  <p>- Maksimum Adet </p>
  <p>- Enflasyon </p>
  <p>- Sadece POW ( iş kanıtı ) algoritması</p>
  <p>- Geçmiş asla değiştirilmez</p>
</div>
<div class="col-md-5 col-md-push-1">
  <div class="head-service small-head text-left">
    <p>Değişebilir Değerler:</p>
  </div>
  <p>- ASIC ile kazmayı engelleme amacıyla POW algoritmaları arasında geçiş yapılabilir.</p>
  <ul class="list">
    <li>Algoritma: Equihash ( Her zaman GPU madenciliği - Merkezsiz madenciliği destekliyoruz. ) </li>
    <li>Toplamda maksimum 21 milyar adet BTCZ üretilebilir. </li>
    <li>Şuanda her 2,5 dakikada 12500 BTCZ dağıtılmaktadır.</li>
    <li>Blok boyutu BCC / BCH ile benzeşir. (BTCZ = 2,5 dakikada bir 2MB, BCC / BCH = 10 dakikada bir 8MB'tır. )</li>
  </ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>En güvenli yazılım <span>bitcoinz-pod / bitcoinz linux istemcisine dahildir.</span></h2>
<p>M-cüzdanlar gibi hassas veri programları, ücretsiz açık kaynak kodunu ve diğer takımlar / bölmeler tarafından cüzdanlarını inceleyebilmek için bültenlerine sha256 sağlamalıdır. Diğer ekip tarafından gözden geçirilmemiş herhangi bir cüzdan kullanılmamalıdır.
 </p>
</div>
<p>Herhangi bir teyit olmaksızın yazılımlar kırmızı bayrak olarak değerlendirilmeli ve kullanılmamalıdır.</p>
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
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">FORUM <i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
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
<h2>NEDEN BITCOINZ?</h2>
<div class="small-desd">TAMAMEN DAĞITIK ÇALIŞAN BİR AĞIZ</div>
<p>İşte Bazı Avantajları:</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONİM KİMLİK</h3>
<p>Tüm işlemler tamamen anonimdir.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>FARKLI PLATFORMLARA DESTEK</h3>
<p>Cüzdanımız Linux, Windows, Ios ve Android ile uyumludur/p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>TOPLULUK</h3>
<p>Topluluğumuz her fikri ve düşünceyi saygıyla dinlemektedir. Başarımızın anahtarı budur.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>AKTİF FİYAT GELİŞİMİ</h3>
<p>BitcoinZ tamamen organik büyümeye odaklıdır.</p>
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
<h2>BORSALAR</h2>
<p>BitcoinZ Alışı ve Satışı Yapabileceğiniz Bazı Yerler:</p>
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
<h2>CÜZDANI <span>İNDİRİN</span></h2>
<p>Linux, Windows ve Mobil Cüzdan</p>
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
include_once './roadmap.php';
?>
<section class="section-choose-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>NEDEN BITCONZ'Yİ <span>SEÇMELİSİNİZ?</span></h2>
<div class="small-desd">İŞTE BİR KAÇ <span>NEDEN</span></div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>DAĞITIK MADENCİLİK</h3>
<p>
Madenci olarak en büyük havuzları kullanmak zorunda değilsiniz.<br>
Kazması kolaydır.<br>
Equihash algoritması.<br>
Bağımsız transferler
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
<h3>ÖNCEDEN <span>KAZILMAMIŞTIR</span></h3>
<p>Tamamen sıfırdan üretilmiştir. Önceden kazım yapılmamıştır.</p>
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
<h3><span>BITCOINZ, BITCOIN 2.0'dir:</span></h3>
<p>- 21 milyar adet - Dünyadaki herkes bir BTCZ'ye sahip olabilir.</p>
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
<h3>AKTİF <span>TOPLULUK</span></h3>
<p>Topluluğumuz her geçen gün aktif olarak gelişiyor ve büyüyor.</p>
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
<h3>ANONİM <span>İŞLEMLER</span></h3>
<p>Tüm işlemler anonim kalır. Dolayısıyla, anonimlik hakkında endişelenmenize gerek yoktur.</p>
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
<h3>ANDROID VE IOS <span>CÜZDANI</span></h3>
<p>Akıllı telefonlarınızda da BitcoinZ'lerinizi saklayabilirsiniz.</p>
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
<h3>ORGANİK <span>BÜYÜME</span></h3>
<p>Doğal şekilde büyümekte ve değer kazanmaktadır.</p>
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
<h3>MERKEZSİZ <span>GELİŞTİRME</span></h3>
<p>Hangi borsalara girileceğini topluluk belirler ve topluluk katılımı ile belirlenen borsalarda yer alınması sağlanır.</p>
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
<h3>SADECE POW VE <span>ASLA POS OLMAYACAK</span></h3>
<p>Sadece POW ( iş kanıtı ) ile çalışmaktadır ve asla POS ( destek kanıtı ) ile çalışmayacaktır.</p>
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
<p>© 2017 BitcoinZ Topluluğu. Her hakkı saklıdır.</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">YARARLARI</a></li>
<li><a href="#exchange" class="smooth-scroll">BORSALAR</a></li>
<li><a href="#wallets" class="smooth-scroll">CÜZDANLAR</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Bitcontalk Konusu</a></li>
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
