<?php $t = require __DIR__ . '/../translations/jp.php'; ?>
<!DOCTYPE html>
<html lang="jp" class="no-js">
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
        <title>ビットコインZはビットコイン2.0- BitcoinZ</title>
        <meta name="description" content="BitcoinZ ビットコインZはビットコイン2.0. あなたの為のコイン" />
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
                        <li><a href="<?php echo $t['community-paper-link']; ?>" target="_blank"><?php echo $t['コミュニティペーパー']; ?></a>
                        <li><a href="#benefist" class="smooth-scroll">利点</a></li>
                        <li><a href="#exchange" class="smooth-scroll">取引所</a></li>
                        <li><a href="#wallets" class="smooth-scroll">ウォレット</a></li>
                        <li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank">フォーラム</a></li>
                        <li>
                            <a href="#" class="smooth-scroll">マイニングプール</a>
                            <ul>
                                <?php include_once '../pools.php'; ?>
                                <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">フォーラム</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="smooth-scroll">エクスプローラー</a>
                            <ul>
                                <?php include_once '../explorer.php'; ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="smooth-scroll">SN</a>
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
<li><a href="<?php echo $t['community-paper-link']; ?>"><?php echo $t['コミュニティペーパー']; ?></a></li>
<li><a href="#benefist" class="smooth-scroll">利点</a></li>
<li><a href="#exchange" class="smooth-scroll">取引所</a></li>
<li><a href="#wallets" class="smooth-scroll">ウォレット</a></li>
<li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank">マイニングプール</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">マイニングプール</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">詳しく</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll"> エクスプローラー</a>
<ul class="sub-menu"><br>
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">SN</a>
<ul class="sub-menu"><br>
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">フォーラム</a>
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
<div class="heading-title-big"><br>あなたの為のコイン <br><span>BitcoinZ: The True Bitcoin 2.0</span></div>
<div class="description-slide">「非中央集権化」にようこそ。 世界に贈るコミュニティ、ビットコインZ。</div>
<div class="buttons-section"><a href="<?php echo $t['community-paper-link']; ?>" target="_blank" class="btn dark-btn large-btn"><?php echo $t['Community Paper']; ?></a><a href="https://youtu.be/RI-V7n8amFk" target="_blank" class="btn dark-btn large-btn">Start Mining</a><a href="https://info.btcz.rocks/" class="btn dark-btn large-btn" target="_blank">Latest News</a><a href="https://btcz.fund/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>

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
<h3>重要事項 <span>details</span></h3>
<p>- たくさんの場所にウォレットのバックアップを作ってください。<br>- 多額のコインを所持するときは、匿名アドレスのコールドウォレットに置いてください。<br>- あなたの秘密鍵を誰にも教えたり送ったりしないでください。秘密鍵はあなたのアドレスにあるコインを所有するための唯一のものです。もし誰かに秘密鍵を教えたり送ったりしてしまったら、既に危険な状態にあると考えて、すぐにコインを他のアドレスに移してください。</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>ビットコインZはビットコイン2.0</span></h3>
<p>- ビットコインのテクノロジー<br>- 匿名のトランザクション(ゼロ知識証明を用いたzk-SNARKsによる匿名化) - ビットコインではすべてのトランザクションは公にされています<br>-非中央集権的なGPUマイニング (ASICを用いるマイナーは拒絶します。ASICマイナーを防ぐためのハードフォークも考慮されます)<br>- 非中央集権的な開発 / すべての貢献者はボランティアです。<br>- ビッグブロックの採用 -> ブロックに関してはビットコインキャッシュ(BCC/BCH)に類似しています。</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>Active <span>アクティブなコミュニティ</span></h3>
<p>私達のコミュニティはアクティブで、いつも開発を行っています。<br>ぜひSNSで私達をフォローし、Slackなどのフォーラムに参加してみてください。</p>
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
<!--<p>私達の目標は、市場にある全ての良質なソフトウェアをビットコインZで使えるように移植することです</p>-->
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
<h2>私達の目標は、市場にある全ての良質なソフトウェアをビットコインZで使えるように移植することです</span></h2>
<p>不変の要素：:</p>
</div>
<p>-最大供給量 </p>
<p>- 膨張していくこと</p>
<p>- PoWのみの採用  - ASICによるマイニングを防止するため、Equihashアルゴリズムから他のアルゴリズムに変更する可能性はあります。 </p>
<p>- コインの利用やスケーラビリティの改善のために新しい機能を追加することは認めますが、私達はETHとETCがフォークするきっかけになったような、歴史の改変は行いません。</p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>アルゴリズム : Equihash ( 常にGPUマイニング – 私達はマイニングの非中央集権化を推進します)</li>
<li>最大供給量  210億枚 </li>
<li>現在の供給 : 2.5分ごとに12500枚</li>
<li>現在のブロックサイズはビットコインキャッシュ(BCC/BCH)に類似 (BTCZ = 2.5分ごとに2MB ～ BCC/BCH = 10分ごとに8MB)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>最もセキュリティの高いソフトウェアは、bitcoinz-pod/bitcoinz Linux クライアントに含まれています。</span></h2>
<p>ウォレットのように、繊細なデータを扱うプログラムについては、他のチームやpodがレビューできるよう、フリーのオープンソースコードとSHA256を提供するべきです。他のチームからレビューを受けていないウォレットを使うことは推奨していません。 </p>
</div>
<p>非中央集権的なマイニング.</p>
</div>
<!--<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>なぜビットコインZなのか???</li>
<li>マイニングをする際は、最も主要で大きなマイニングプールは使わないようにしてください。</li>
<li>簡単にマイニンきます。グで</li>
<li>プレマインなし</li>
<li>プレマインのないピュアなコインです。</li>
<li>ビットコインZはビットコイン2.0 :</li>
<li>自然な成長</li>
<li>あなたのコインは、自然な道のりで成長し、発展していきます。	</li>
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
<h2>Why BitcoinZ ?</h2>
<div class="small-desd">We are a fully decentralized network</div>
<p>Here are some advantages</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>Anonymity</h3>
<p>All transactions are completely anonymous.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>Support for different platforms</h3>
<p>Our wallet is compatible with Linux, Windows, iOS and Android.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>Community</h3>
<p>We listen to our dear community, so we can succeed.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>Active price growth</h3>
<p>BitcoinZ is focused on organic growth.</p>
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
<p>Buy or sell your coins BitcoinZ</p>
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
<!--Section why chose us-->
<?php
include_once '../roadmap.php';
?>
<section class="section-choose-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>なぜビットコインZを選ぶのか？</span></h2>
<div class="small-desd">いくつかの理由があります。</div>
<p>注意　常にピットフォールに気をつけ、安全な場所に秘密鍵のバックアップを置いてください!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>非中央集権化された取引</h3>
<p>マイニングをする際は、最も主要で大きなマイニングプールは使わないようにしてください。.<br>
非中央集権的なマイニング<br>
アルゴリズム.<br>
 非中央集権的な開発</p>
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
<h3>プレマインなし</span></h3>
<p>プレマインのないピュアなコインです。</p>
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
<p>-- 210億枚のコイン - 世界中の人が少なくとも1枚のBTCZを持てる量です。</p>
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
<p>Our community is actively developing and growing every day.	</p>
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
<h3>匿名のトランザクション</span></h3>
<p>全てのトランザクションの匿名性は保たれます。匿名性について心配する必要がなくなります。</p>
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
<h3>Android, iOS 対応のウォレット</h3>
<p>あなたのスマートフォンでビットコインZを管理できます。</p>
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
<h3>自然な成長</h3>
<p>あなたのコインは、自然な道のりで成長し、発展していきます。	</p>
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
<h3>非中央集権的な開発</h3>
<p>あらゆる取引所が認められます。最も優れているのは非中央集権的な取引所だと考えます。私達は、xCATを用いた、完全に非中央集権化された取引所について計画しています。</p>
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
<h3>PoWのみ、PoSなし</h3>
<p>このコインはPoWマイニングによってのみ供給されます。今後PoSに変更されることはありません。</p>
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
