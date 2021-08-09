<?php

if (explode('?', $_SERVER['REQUEST_URI'], 2)[0] !== '/') {
    header('Location: /');
    die();
}

session_start();
date_default_timezone_set('UTC');

$settings = include(__DIR__ . '/settings.php');

include(__DIR__ . '/functions.php');
include(__DIR__ . '/translation/manager.php');

if (isset($_GET["lang"]) && strlen($_GET["lang"]) > 1) {
    L::ChangeTo($_GET["lang"]);
}

L::Load();

?>
<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28037043-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            window.dataLayer.push(arguments)
        }

        gtag('js', new Date());
        gtag('config', 'UA-28037043-7');
    </script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.7/es5-shim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php L::W("BitcoinZ is the future of cryptocurrency. Welcome to decentralization."); ?>"/>
    <meta property="og:image" content="/images/logo.png">
    <link rel="icon" href="/favicon.ico">

    <title><?php L::W("Your Financial Freedom | BitcoinZ"); ?></title>

    <link rel="stylesheet" href="<?php siteUrl(); ?>css/stylelibs.css">
    <link rel="stylesheet" data-style="styles" href="<?php siteUrl(); ?>css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.min.css">
</head>
<body>
<header id="top-nav" class="top-nav page-header">
    <div class="container">
        <a href="/" class="logo smooth-scroll">
            <img src="<?php siteUrl(); ?>images/logo.png" alt="logo" class="logo-white">
            <img src="<?php siteUrl(); ?>images/logo.png" alt="logo" class="logo-dark">
        </a>
        <nav class="top-menu">
            <ul class="sf-menu">
                <li><a href="/"><?php L::W("Home"); ?></a></li>
                <li><a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank"><?php L::W("Community Paper"); ?></a></li>
                <li><a href="#benefits" class="smooth-scroll"><?php L::W("Benefits"); ?></a></li>
                <li><a href="#exchange" class="smooth-scroll"><?php L::W("Exchange"); ?></a></li>
                <li><a href="#wallets" class="smooth-scroll"><?php L::W("Wallets"); ?></a></li>
                <li><a href="https://forum.btcz.rocks/t/pools-that-love-the-bitcoinz-community/51" target="_blank"><?php L::W("Pools"); ?></a></li>
                <li>
                    <a href="#"><?php L::W("Explorer"); ?></a>
                    <ul>
                        <li><a href="https://explorer.btcz.rocks/" target="_blank">explorer.btcz.rocks</a></li>
                        <li><a href="https://btczexplorer.blockhub.info/" target="_blank">btczexplorer.blockhub.info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="smooth-scroll"><?php L::W("Social"); ?></a>
                    <ul>
						<li><a href="https://forum.btcz.rocks" target="_blank">BitcoinZ Forum</a></li>					
                        <li><a href="https://www.facebook.com/BTCZCommunity/" target="_blank">Facebook</a></li>
                        <li><a href="https://slack.btcz.rocks/" target="_blank">Slack</a></li>
                        <li><a href="https://twitter.com/BitcoinZTeam" target="_blank">Twitter</a></li>
                        <li><a href="https://t.me/bitcoinzcommunity" target="_blank">Telegram</a></li>
                        <li><a href="https://discordapp.com/invite/u3dkbFs" target="_blank">Discord</a></li>
                        <li><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">Reddit</a></li>

                        <li><a href="https://bitcointalk.org/index.php?topic=3086664.0" target="_blank"><?php L::W("Bitcointalk Forum Topic"); ?></a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children current-menu-item">
                    <a href="#"><?php L::W("Lang"); ?></a>
                    <ul class="sub-menu">
                        <?php
                            foreach( L::GetAvailableLanguages() as $langMeta) {
                                echo('<li><a href="'. siteUrl('//', true) .'?lang='. $langMeta["short"] .'"><span class="flag-icon-background flag-icon-'. $langMeta["icon"] .'"></span> '. $langMeta["native"] .' ('. $langMeta["in_english"] .')</a></li>');
                            }
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Start mobile menu-->

        <!-- Start toggle menu-->
        <a href="#" class="toggle-mnu"><span></span></a>
        <div id="mobile-menu">
            <div class="inner-wrap">
                <nav>
                    <ul class="nav_menu">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#"><?php L::W("Lang"); ?></a>
                            <ul class="sub-menu">
                                <?php
                                foreach( L::GetAvailableLanguages() as $langMeta) {
                                    echo('<li><a href="'. siteUrl('//', true) .'?lang='. $langMeta["short"] .'"><span class="flag-icon-background flag-icon-'. $langMeta["icon"] .'"></span> '. $langMeta["native"] .' ('. $langMeta["in_english"] .')</a></li>');
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank"><?php L::W("Community Paper"); ?></a></li>
                        <li><a href="#benefits" class="smooth-scroll"><?php L::W("Benefits"); ?></a></li>
                        <li><a href="#exchange" class="smooth-scroll"><?php L::W("Exchange"); ?></a></li>
                        <li><a href="#wallets" class="smooth-scroll"><?php L::W("Wallets"); ?></a></li>
                        <li><a href="https://forum.btcz.rocks/t/pools-that-love-the-bitcoinz-community/51" target="_blank"><?php L::W("Pools"); ?></a></li>

                        <li class="menu-item-has-children current-menu-item">
                            <a href="#"><?php L::W("Explorer"); ?></a>
                            <ul class="sub-menu">
                                <li><a href="https://explorer.btcz.rocks/" target="_blank">explorer.btcz.rocks</a></li>
                                <li><a href="https://btczexplorer.blockhub.info/" target="_blank">btczexplorer.blockhub.info</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#" class="smooth-scroll"><?php L::W("Social"); ?></a>
                            <ul class="sub-menu">
							    <li><a href="https://forum.btcz.rocks" target="_blank">BitcoinZ Forum</a></li>
                                <li><a href="https://www.facebook.com/BTCZCommunity/" target="_blank">Facebook</a></li>
                                <li><a href="https://slack.btcz.rocks/" target="_blank">Slack</a></li>
                                <li><a href="https://twitter.com/BitcoinzTeam" target="_blank">Twitter</a></li>
                                <li><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank">Telegram</a></li>
                                <li><a href="https://discordapp.com/invite/u3dkbFs" target="_blank">Discord</a></li>
                                <li><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">Reddit</a></li>
                                <li><a href="https://bitcointalk.org/index.php?topic=3086664.0" target="_blank"><?php L::W("View Bitcointalk Forum Topic"); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="https://bitcointalk.org/index.php?topic=3086664.0" target="_blank"><?php L::W("Bitcointalk Forum Topic"); ?></a></li>
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
        <div data-image="<?php siteUrl(); ?>images/backgrounds/mountains.jpg" class="slide bg-mask background-image full-vh">
            <div class="container-slide vertical-align center head-desc">
                <div class="container">
			<div class="row">
			    <div class="col-md-12">
                            <div class="description-slide"><h2><?php L::W("Visit our new Community website"); ?></h2>
                                <div class="buttons-section1">
                                <a href="http://getbtcz.com" target="_blank" class="btn dark-btn1 large-btn1"><?php L::W("www.getbtcz.com"); ?></a>
                                </div></div>
                                <br>
                                <br>

				 
			    <div class="heading-title-big"><?php L::W("It's Your Coin"); ?><br><span><?php L::W("BitcoinZ: The true Bitcoin 2.0"); ?></span></div>
                            <div class="description-slide"><?php L::W("Welcome to the decentralization"); ?></div>

                            <div class="buttons-section">
                                <a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank" class="btn dark-btn large-btn"><?php L::W("Community Paper"); ?></a>
                                <a href="https://youtu.be/7pBu9BeL85g" target="_blank" class="btn dark-btn large-btn"><?php L::W("Start Mining"); ?></a>
                                <a href="https://info.btcz.rocks/" class="btn dark-btn large-btn" target="_blank"><?php L::W("Latest News"); ?></a>
                                <a href="https://fund.btcz.rocks" class="btn dark-btn large-btn" target="_blank"><?php L::W("Donate"); ?></a>
                                <div class="coinmarketcap-currency-widget" data-currencyid="2041" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="true"></div>
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
    </div>
    <a href="#about" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
</div>
<!-- End slider section-->

<!-- Section about-->
<section id="about" class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2><?php L::W("About the <span>coin</span>"); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="item-about">
                    <div class="icon">
                        <i class="pe-7s-target"></i>
                        <div class="bg-icon"><i class="pe-7s-target"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Important Details"); ?></h3>
                        <p>
                            <?php L::W("- Backup your wallet in many locations<br>- Store big amount of coins in cold wallets in anonymous addresses<br>- Don't give / send anyone your private keys. Private keys needs to be secured. You can recover your wallets. If you give or send anyone your private key please consider it as a red flag and quickly move your coins to other address"); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-about">
                    <div class="icon">
                        <i class="pe-7s-help2"></i>
                        <div class="bg-icon"><i class="pe-7s-help2"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("BitcoinZ is <span>Bitcoin 2.0</span>"); ?></h3>
                        <p>
                            <?php L::W("- Bitcoin technology<br>- Anonymous transactions (zk-SNARKs privacy)<br>- Bitcoin has all transactions publicly available.<br>- decentralized GPU mining (ASIC miners are banned, hardforks to prevent ASIC miners are allowed)<br>- Decentralized development / All contributors are volunteers<br>- Big blocks -> blocks are similar to BCH"); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-about">
                    <div class="icon">
                        <i class="pe-7s-light"></i>
                        <div class="bg-icon"><i class="pe-7s-light"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Active <span>Community</span>"); ?></h3>
                        <p>
                            <?php L::W("Our community is active and we are always developing. <br>You can follow us in social networks, on the forum, as well as Slack"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section services-->
<section id="benefits" class="services-section background-image bg-dark-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-title small-heading center">
                    <h2><?php L::W("Benefits <span>BitcoinZ</span>"); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tabs services-tabs">
                <ul class="services-carousel">
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-graph"></i>
                            <h4><?php L::W("Max Supply"); ?></h4>
                            <p><?php L::W("21,000,000,000 BTCZ"); ?></p>
                        </a>
                    </li>
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-drop"></i>
                            <h4><?php L::W("Algorithm"); ?></h4>
                            <p><?php L::W("PoW"); ?></p>
                        </a>
                    </li>
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-timer"></i>
                            <h4><?php L::W("Fast Transactions"); ?></h4>
                            <p><?php L::W("2MB every 2.5 minutes"); ?></p>
                        </a>
                    </li>
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-map"></i>
                            <h4><?php L::W("Circulating Supply"); ?></h4>
                            <p><?php L::W("12,500 coins every 2.5 minutes"); ?></p>
                        </a>
                    </li>
                </ul>
                <div id="dots-control-tabs" class="dots-control-carousel"></div>
                <!--Start tabs-->
                <div id="tabs-1">
                    <div class="col-md-6">
                        <div class="head-service small-head text-left">
                            <h2><?php L::W("Our goal is to port all best free software on the market to be able to use in BitcoinZ."); ?></h2>
                        </div>
                        <?php L::W("<p>Immutable params:</p> <p>- max supply </p> <p>- inflation </p> <p>- only POW algo - we may change Zhash algo to other POW algo to prevent ASIC miners </p> <p>- new features are allowed to improve usage / scalability, but we will never change history (ETH/ETC case) </p>"); ?>
                    </div>
                    <div class="col-md-5 col-md-push-1">
                    <ul class="list"> <?php L::W("<li>Algo: Zhash (always GPU mining - we promote decentralization in mining) </li> <li>Max supply 21B coins </li> <li>Current supply: 12,500 coins every 2.5 minutes</li> <li>Current block size is similar to BCH (BTCZ = 2MB every 2.5 mins ~ BCH = 8MB every 10 min)</li> </ul>"); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="link-full">
                        <a href="https://bitcointalk.org/index.php?topic=3086664.0" target="_blank"><?php L::W("View Bitcointalk Forum Topic"); ?><i aria-hidden="true" class="fa fa-angle-right"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="https://forum.btcz.rocks" target="_blank"><?php L::W("View Forum"); ?><i aria-hidden="true" class="fa fa-angle-right"></i></a>
                    </div>
                </div>
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
                    <h2><?php L::W("Why <span>BitcoinZ?</span>"); ?></h2>
                    <div class="small-desd"><?php L::W("We are a fully decentralized network"); ?></div>
                    <p><?php L::W("Here are some advantages"); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-look"></i></div>
                </div>
                <h3><?php L::W("Anonymity"); ?></h3>
                <p><?php L::W("All transactions are completely anonymous."); ?></p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-light"></i></div>
                </div>
                <h3><?php L::W("Support for different platforms"); ?></h3>
                <p><?php L::W("Our wallet is compatible with Linux, Windows, iOS and Android."); ?></p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
                </div>
                <h3><?php L::W("Community"); ?></h3>
                <p><?php L::W("We listen to our dear community, so we can succeed."); ?></p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
                </div>
                <h3><?php L::W("Active price growth"); ?></h3>
                <p><?php L::W("BitcoinZ is focused on organic growth."); ?></p>
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
                    <h2><?php L::W("Exchanges"); ?></h2>
                    <p><?php L::W("Buy or sell your BitcoinZ coins"); ?></p>
                </div>
            </div>
            <div class="col-md-5">
            <a href="https://cratex.io/index.php?pair=BTCZ/BTC" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/cratex.png" class="exch_img"></a>
                <!-- <a href="https://exmo.me/en/trade/BTCZ_BTC" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/exmo.png" class="exch_img"></a> -->
            </div>
            <div class="col-md-4">
                <a href="https://app.stex.com/en/trade/pair/USDT/BTCZ/1D" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/stex.png" class="exch_img"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <a href="https://graviex.net/markets/btczbtc" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/graviex.png" class="exch_img"></a>
            </div>
            <div class="col-md-4">
                <a href="https://exrates.me/dashboard" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/exrates.png" class="exch_img"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <a href="https://crex24.com/exchange/BTCZ-BTC" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/crex24.png" class="exch_img"></a>
            </div>
            <div class="col-md-4">
                <a href="https://btc-alpha.com/exchange/BTCZ_BTC" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/btc-alpha.png" class="exch_img"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <a href="https://safe.trade/trading/btczbtc" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/safe-trade.png" class="exch_img"></a>
            </div>
            <div class="col-md-4">
                <!-- <a href="https://cratex.io/index.php?pair=BTCZ/BTC" target="_blank"><img src="<?php siteUrl(); ?>images/exchanges/cratex.png" class="exch_img"></a> -->
            </div>
        </div>

        <div class="heading-title small-heading center">
          <p><?php L::W("For informational purposes only. Trade at your own risk - never trade more than you can afford to lose."); ?></p>
        </div>		
    </div>
</section>

<!--Section our some work-->
<section id="wallets" class="section-portfolio bg-white-section background-image">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title center">
                    <h2><?php L::W("Download <span>Wallet</span>"); ?></h2>
                    <p><?php L::W("Linux, Windows and mobile wallets"); ?></p>
                </div>
                <div class="controls-portfolio center">
                    <a href="https://github.com/bitcoinz-wallets/bitcoinz-copay-wallet/releases"><img src="<?php siteUrl(); ?>images/wallets/linux.png" alt="Linux" title="Linux" class="wallets_images"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.btczcom.btcz"><img src="<?php siteUrl(); ?>images/wallets/android.png" alt="Android" title="Android" class="wallets_images"></a>
                    <a href="https://github.com/bitcoinz-wallets/bitcoinz-copay-wallet/releases"><img src="<?php siteUrl(); ?>images/wallets/osx.png" alt="Mac OS" title="MacOS" class="wallets_images"></a>
                    <a href="https://github.com/btcz/bitcoinz-wallet/releases"><img src="<?php siteUrl(); ?>images/wallets/windows.jpg" alt="Windows" title="Windows" class="wallets_images"></a>
                    <a href="https://github.com/btcz/bitcoinz"><img src="<?php siteUrl(); ?>images/wallets/github.png" alt="github" title="Github" class="wallets_images"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section why chose us-->

<!-- Road Map -->
<section class="section-how-we-work bg-white-section background-image" id="roadmap">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title center">
                    <h2><?php L::W("Road <span>Map</span>"); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox1lang"><?php L::W("BitcoinZ Core Client"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox2lang"><?php L::W("Block Explorer"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox3lang"><?php L::W("Mining Pools"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox4lang"><?php L::W("GUI Wallet"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox5lang"><?php L::W("iOS &amp; Android Wallet"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox6lang"><?php L::W("Commerce Plugins"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox7lang"><?php L::W("Exchange Listing"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("Masquerade Technology"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox9lang"><?php L::W("Decentralization Packages"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("Game Development"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("zk-SNARKs From Mobile"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("Public Relations"); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2><?php L::W("why choose <span>BitcoinZ</span>"); ?></h2>
                    <div class="small-desd"><?php L::W("Here are a few <span>reasons</span>"); ?></div>
                    <p><?php L::W("WARNING: Always remember about the pitfalls and keep your backup keys in a safe place!"); ?></p>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2><?php L::W("introducing <span>txtZ</span>"); ?></h2>
                    <div class="small-desd"><?php L::W("send and receive BTCZ using SMS text"); ?></div>
					<div class="txtz-wrapper">
					<ul>
						<li><?php L::W("No Install Required"); ?></li>
						<li><?php L::W("No Smartphone required"); ?></li>
						<li><?php L::W("Send BTCZ to anyone's cell phone using text messaging"); ?></li>
						<li><?php L::W("Works with any cellphone that supports SMS"); ?></li>
						<li><?php L::W("Send both Transparent and Private Z Transactions"); ?></li>
					</ul>
					</div>
                    <img src="<?php siteUrl(); ?>images/txtz-promo.jpg" style="max-width:50%" />
                    <h4><a href="https://www.youtube.com/watch?v=aeGX36c24i0&t=9m49s" target="_blank"><?php L::W("Click here to watch the TxtZ Announcement on Youtube"); ?></a></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-keypad"></i>
                        <div class="bg-icon"><i class="pe-7s-keypad"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Decentralized <span>Mining</span>"); ?></h3>
                        <p>
                            <?php L::W("As a miner you should not use the biggest pools to follow main principles.<br>Easy to mine<br>Zhash algorithm.<br>Decentralized Exchanges"); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-light"></i>
                        <div class="bg-icon"><i class="pe-7s-light"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("No <span>Pre-Mine</span>"); ?></h3>
                        <p>
                            <?php L::W("Pure coin. No pre-mine."); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-graph1"></i>
                        <div class="bg-icon"><i class="pe-7s-graph1"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("BitcoinZ is <span>Bitcoin 2.0</span>"); ?></h3>
                        <p>
                            <?php L::W("21 billion coins! Everyone in the world can have at least one BTCZ!"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-like"></i>
                        <div class="bg-icon"><i class="pe-7s-like"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Active <span>Community</span>"); ?></h3>
                        <p>
                            <?php L::W("Our community is actively developing and growing every day."); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-help2"></i>
                        <div class="bg-icon"><i class="pe-7s-help2"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Anonymous <span>Transactions</span>"); ?></h3>
                        <p>
                            <?php L::W("All transactions remain anonymous. So you do not have to worry about anonymity."); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-phone"></i>
                        <div class="bg-icon"><i class="pe-7s-phone"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Android and iOS <span>Wallet</span>"); ?></h3>
                        <p>
                            <?php L::W("You can use BitcoinZ coins in your smartphones."); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-display1"></i>
                        <div class="bg-icon"><i class="pe-7s-display1"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Natural <span>Growth</span>"); ?></h3>
                        <p>
                            <?php L::W("Your coin will grow and develop in a natural way."); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-link"></i>
                        <div class="bg-icon"><i class="pe-7s-link"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Decentralized <span>Development</span>"); ?></h3>
                        <p>
                            <?php L::W("All exchanges are allowed. The best ones are decentralized. We plan to implement fully decentralized XCAT exchange."); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Start item-->
            <div class="col-md-4">
                <div class="item-about item-choose">
                    <div class="icon">
                        <i class="pe-7s-paint"></i>
                        <div class="bg-icon"><i class="pe-7s-paint"></i></div>
                    </div>
                    <div class="content">
                        <h3><?php L::W("Only POW and <span>no POS</span>"); ?></h3>
                        <p>
                            <?php L::W("The coin is calculated only for POW mining, and will never be changed to POS"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="our-clients">
    <div class="container">
        <div class="row">
            <div id="clients-carousel" class="clients-carousel">
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://github.com/btcz/bitcoinz" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/github.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://bitcointalk.org/index.php?topic=3086664.0" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/bitcointalk.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://slack.btcz.rocks/" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/slack.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/reddit.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://discordapp.com/invite/u3dkbFs" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/discord.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://www.facebook.com/BTCZCommunity/" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/facebook.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/telegram.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://twitter.com/BitcoinZTeam" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/twitter.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://forum.btcz.rocks" target="_blank">
                            <img src="<?php siteUrl(); ?>images/social/discourse.png" alt="logo">
                        </a>
                    </div>
                </div>				
			</div>
        </div>
    </div>

    <div id="control-clients" class="prev-next-block-rotate">
        <div class="wrap-prev">
            <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
        </div>
        <div class="wrap-next">
            <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
        </div>
    </div>
</div>

<footer>
    <div class="down-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; <?php echo date('Y'); ?> <?php L::W("BitcoinZ Community. All rights reserved."); ?></p>
                    <ul class="footer-menu">
                        <li><a href="#benefits" class="smooth-scroll"><?php L::W("Benefits"); ?></a></li>
                        <li><a href="#exchange" class="smooth-scroll"><?php L::W("Exchange"); ?></a></li>
                        <li><a href="#wallets" class="smooth-scroll"><?php L::W("Wallets"); ?></a></li>
                        <li><a href="https://bitcointalk.org/index.php?topic=3086664.0" class="smooth-scroll" target="_blank"><?php L::W("Bitcointalk Forum Topic"); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="top icon-down to-top-from-bottom"><a href="#" class="smooth-scroll"><i class="pe-7s-angle-up"></i></a></div>

<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php siteUrl(); ?>js/libs.js.pagespeed.ce.Av_NAtkm4V.js"></script>
<script type="text/javascript" src="<?php siteUrl(); ?>js/common.js.pagespeed.ce.hW1NRi6zyn.js"></script>
</body>
</html>
