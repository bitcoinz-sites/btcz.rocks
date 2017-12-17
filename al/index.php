<?php $t = require __DIR__ . '/../translations/al.php'; ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28037043-7"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-28037043-7');
        </script>
        <meta charset="utf-8">
        <title>Liria Juaj Financiare  - BitcoinZ</title>
        <meta name="description" content="BitcoinZ is a new type of payment calculation. Choose your coin" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:image" content="/img/logo.png">
        <!--Favicon-->
        <link rel="icon" href="/favicon.ico">
        <!--Libs css-->
        <link rel="stylesheet" href="/css/stylelibs.css">
        <!--Main css-->
        <link rel="stylesheet" data-style="styles" href="/css/stylemain.css">
    </head>

    <body class="dark-load">
        <header id="top-nav" class="top-nav page-header">
            <div class="container">
                <a href="/" class="logo smooth-scroll">
                    <img src="/img/logo.png" alt="logo" class="logo-white">
                    <img src="/img/logo.png" alt="logo" class="logo-dark">
                </a>
                <nav class="top-menu">
                    <ul class="sf-menu">
                        <li><a href="/en/">Home</a></li>
                        <li><a href="<?php echo $t['community-paper-link']; ?>" target="_blank"><?php echo $t['Community Paper']; ?></a>
                        <li><a href="#benefist" class="smooth-scroll">Benefits</a></li>
                        <li><a href="#exchange" class="smooth-scroll">Exchange</a></li>
                        <li><a href="#wallets" class="smooth-scroll">Wallets</a></li>
                        <li>
                            <a href="#" class="smooth-scroll">Pools</a>
                            <ul>
                                <?php include_once '../pools.php'; ?>
                                <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more on the forum bitcointalk</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="smooth-scroll">Explorer</a>
                            <ul>
                                <?php include_once '../explorer.php'; ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="smooth-scroll">Social</a>
                            <ul>
                                <?php include_once '../social.php'; ?>
                            </ul>
                        </li>
                        <!--<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">ANN</a></li>-->
                        <li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Lang</a>
                        <ul class="sub-menu">
                            <?php include_once '../lang.php'; ?>
                        </ul>
                    </li>
                </nav>

<!-- Start mobile menu-->
<!-- Start toggle menu--><a href="#" class="toggle-mnu"><span></span></a>
<div id="mobile-menu">
<div class="inner-wrap">
<nav>
<ul class="nav_menu"><br><br><br>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Language</a>
<ul class="sub-menu"><br><br>
<?php
include_once '../langmobile.php';
?>
</ul></li>
<li><a href="<?php echo $t['community-paper-link']; ?>"><?php echo $t['Community Paper']; ?></a></li>
<li><a href="#benefist" class="smooth-scroll">Benefits</a></li>
<li><a href="#exchange" class="smooth-scroll">Exchange</a></li>
<li><a href="#wallets" class="smooth-scroll">Wallets</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Pools</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Explorer</a>
<ul class="sub-menu"><br>
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Social</a>
<ul class="sub-menu"><br>
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">FORUM bitcointalk </a>
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
<div class="heading-title-big"><br><?= $t["It's your coin"]; ?><br><span><?= $t['BitcoinZ: The true Bitcoin 2.0']; ?></span></div>
<div class="description-slide"><?= $t['Welcome to the decentralization']; ?></div>
<div class="buttons-section"><a href="<?php echo $t['community-paper-link']; ?>" target="_blank" class="btn dark-btn large-btn"><?php echo $t['Community Paper']; ?></a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank"><?= $t['Read More']; ?></a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2>About the <span>coin</span></h2>
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
<h3><?= $t['Important']; ?> <span><?= $t['details']; ?></span></h3>
<p>- Ruajeni kuleten tuaj ne shume vende<br>- Vlerat e medha te monedhave te kuletave ne adresa anonyme<br>- Mos i jepni / dërgoni askujt çelësat tuaj privatë. Çelësi privat është e vetmja gjë që ju nevojitet për të zotëruar adresen e monedhës tuaj . Nëse jepni ose dërgoni dikë, çelësin tuaj privat e konsideroni atë si një flamur të kuq dhe shpejt lëvizni monedhat tuaja në adresë tjetër</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3><?= $t['BitcoinZ is']; ?> <span><?= $t['Bitcoin 2.0:']; ?></span></h3>
<p>- Bitcoin technology<br>- Transaksionet anonime (zK-SNARKs privatesi) - Bitcoin ka të gjitha transaksionet në dispozicion të publikut.<br>- minierat e decentralizuara të GPU (minierat e ASIC janë të ndaluara, hardforks për të parandaluar minierat ASIC janë të lejuara)<br>- Zhvillimi i Decentralizuar / Të gjithë kontribuesit janë vullnetarë<br>- Blloqe të mëdha -> lloqe janë të ngjashme me BCC/BCH</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>Komuniteti <span>aktiv</span></h3>
<p>Komuniteti ynë është aktiv dhe ne jemi gjithnjë në zhvillim. <br>YJu mund të na ndiqni në rrjetet shoqërore, në forum, si dhe slack</p>
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
<h4>Max Supply</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algorithm</h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Fast transactions</h4>
<p>BTCZ = 2MB every 2.5 mins ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Circulating Supply</h4>
<p>12500 coins every 2.5 minutes.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Qëllimi ynë është që të hartojmë të gjithë softuerët më të mirë e të lirë në treg që të mund të përdorim në BitcoinZ.</span></h2>
<p>Immutable params:</p>
</div>
<p>- furnizimi maximal </p>
<p>- inflationi </p>
<p>- vetëm Algo POW - ne mund të ndryshojëme  algjo Equihash në algo POW të tjera  për të parandaluar minatorët ASIC </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algo: Equihash (gjithmonë minierat e GPU-së - ne promovojmë decentralizimin në miniera) </li>
<li>Furnizimi Maximal 21B coins </li>
<li>Furnizimi i pranishem: 12500 coins every 2.5 minutes</li>
<li>Madhësia e tanishme e bllokut është e ngjashme me BCC / BCH (BTC = 2MB çdo 2.5 minuta ~ BCC / BCH = 8MB çdo 10 min)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Softueri më i sigurt është i përfshirë në bitcoins-pod / bitcoins linux client.</span></h2>
<p>Programet e ndjeshme të të dhënave si kuletat duhet të ofrojnë kodin falas me kod të hapur dhe 256 në lëshimet e tyre për të qenë në gjendje të rishikojnë kuletat e tyre nga ekipe të tjera / pods. Nuk rekomandohet të përdoret ndonjë portofol që nuk është shqyrtuar nga ekipi tjetër. </p>
</div>
<p>Softueri pa asnjë konfirmim duhet të trajtohet si flamur i kuq dhe nuk përdoret.</p>
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
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">View forum<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
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
<h2>PSE BITCOINZ ?</h2>
<div class="small-desd">JEMI RRJETI PLOTESISHTE I DECENTRALIZUAR</div>
<p>Këtu janë disa avantazhe</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONIMITETI</h3>
<p>Të gjitha transaksionet janë plotësisht anonime..</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>MBËSHTETJE PËR PLATFORMA TË NDRYSHME</h3>
<p>Kuleta jonë është i përputhshëm me linux, windows, ios dhe android. Dhe ne gjithmonë punojmë në përmirësime.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>Community</h3>
<p>Ne dëgjojmë komunitetin tonë të dashur, kështu që ne mund të arrijmë.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>RRITJA AKTIVE E ÇMIMEVE</h3>
<p>BitcoinZ fokusohet në rritjen organike.</p>
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
<h2>Exchanges</h2>
<p>Blej ose shesni monedhat tuaja BitcoinZ</p>
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
<h2>Download <span>wallet</span></h2>
<p>Linux, Windows and mobile wallets</p>
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
<!--Section PSE ZGJEDHIM BITCOINS-->
<?php
include_once '../roadmap.php';
?>
<section class="section-choose-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>Why choose <span>BitcoinZ</span></h2>
<div class="small-desd">KETU JANE DISA  <span> ARSYJE</span></div>
<p>KUJDES. Gjithmonë kujtohuni për metat dhe mbani çelësat e rezervimit në një vend të sigurt!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>MINIERA E DECENTRALIZUAR</h3>
<p>Si një minator ju nuk duhet të përdorni pishinat më të mëdha për të ndjekur parimet kryesore.<br>
Equihash algorithm.<br>
Decentalized Exchanges</p>
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
<h3>No <span>Pre-mine</span></h3>
<p>Pure coin. PA  pre-mine</p>
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
<h3>BitcoinZ is  <span>Bitcoin 2.0:</span></h3>
<p>- 21 billion coins - Të gjitha në botë mund të kenë së paku një BTCZ</p>
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
<h3>Active <span>community</span></h3>
<p>Komuniteti ynë po zhvillohet në mënyrë aktive dhe po rritet çdo ditë.	</p>
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
<h3>Anonymous  <span>transactions</span></h3>
<p>TRANSAKSIONE ANONIME. Pra, nuk duhet të shqetësoheni për anonimitetin	</p>
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
<h3>Android and iOS <span>wallet</span></h3>
<p>Përdorni BitcoinZ monedha në smartphone</p>
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
<h3>rritja  <span>natyrale</span></h3>
<p>Monedha juaj do të rritet dhe zhvillohet në mënyrë të natyrshme</p>
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
<h3>zhvillim i  <span>dezentalizuar</span></h3>
<p>Të gjitha shkëmbimet janë të lejuara. Më të mirat janë decentralizuar. Ne plan për të zbatuar shkëmbimin plotësisht të decentralizuar XCAT.</p>
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
<h3>Only POW and <span>no POS</span></h3>
<p>Monedha llogaritet vetëm për minierat POW dhe nuk do të ndryshohet kurrë në POS</p>
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
<div class="item-carousel"><a href="https://slack.bitcoinz.global/" target="_blank"><img src="/img/partner3.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank"><img src="/img/partner4.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://discordapp.com/invite/u3dkbFs" target="_blank"><img src="/img/disc.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.facebook.com/BTCZCommunity/" target="_blank"><img src="/img/face.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank"><img src="/img/tel.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://twitter.com/BitcoinZTeam" target="_blank"><img src="/img/twit.png" alt="logo"></a></div>
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
<p>© 2017 BitcoinZ Community. All rights reserved.</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">BENEFITS</a></li>
<li><a href="#exchange" class="smooth-scroll">Exchange</a></li>
<li><a href="#wallets" class="smooth-scroll">Wallets</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">FORUM bitcointalk</a></li>
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
