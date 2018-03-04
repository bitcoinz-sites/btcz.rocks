<?php

if (explode('?', $_SERVER['REQUEST_URI'], 2)[0] !== '/') {
    header('Location: /');
    die();
}

session_start();

$settings = include(__DIR__ . 'settings.php');

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
    <meta name="description" content="<?php L::W("META_DESCRIPTION"); ?>"/>
    <meta property="og:image" content="/logo.png">
    <link rel="icon" href="/favicon.ico">

    <title><?php L::W("MAIN_PAGE_TITLE"); ?></title>

    <link rel="stylesheet" href="<?php siteUrl(); ?>css/stylelibs.css">
    <link rel="stylesheet" data-style="styles" href="<?php siteUrl(); ?>css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.min.css">
</head>
<body>
<header id="top-nav" class="top-nav page-header">
    <div class="container">
        <a href="/" class="logo smooth-scroll">
            <img src="<?php siteUrl(); ?>img/logo.png" alt="logo" class="logo-white">
            <img src="<?php siteUrl(); ?>img/logo.png" alt="logo" class="logo-dark">
        </a>
        <nav class="top-menu">
            <ul class="sf-menu">
                <li><a href="/"><?php L::W("HOME"); ?></a></li>
                <li><a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank"><?php L::W("COMMUNITY_PAPER"); ?></a></li>
                <li><a href="#benefits" class="smooth-scroll"><?php L::W("BENEFITS"); ?></a></li>
                <li><a href="#exchange" class="smooth-scroll"><?php L::W("EXCHANGE"); ?></a></li>
                <li><a href="#wallets" class="smooth-scroll"><?php L::W("WALLETS"); ?></a></li>
                <li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank"><?php L::W("GUIDES"); ?></a></li>
                <li><a href="https://forum.btcz.rocks/t/pools-that-love-the-bitcoinz-community/51" target="_blank"><?php L::W("POOLS"); ?></a></li>
                <li>
                    <a href="#"><?php L::W("EXPLORE"); ?></a>
                    <ul>
                        <li><a href="https://explorer.btcz.rocks/" target="_blank">explorer.btcz.rocks</a></li>
                        <li><a href="https://btczexplorer.blockhub.info/" target="_blank">btczexplorer.blockhub.info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="smooth-scroll"><?php L::W("SOCIAL"); ?></a>
                    <ul>
                        <li><a href="https://www.facebook.com/BTCZCommunity/" target="_blank">Facebook</a></li>
                        <li><a href="https://slack.btcz.rocks/" target="_blank">Slack</a></li>
                        <li><a href="https://twitter.com/BitcoinZTeam" target="_blank">Twitter</a></li>
                        <li><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank">Telegram</a></li>
                        <li><a href="https://discordapp.com/invite/u3dkbFs" target="_blank">Discord</a></li>
                        <li><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">Reddit</a></li>

                        <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank"><?php L::W("BITCOINTALK_FORUM_TOPIC"); ?></a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children current-menu-item">
                    <a href="#"><?php L::W("LANG"); ?></a>
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
                            <a href="#"><?php L::W("LANG"); ?></a>
                            <ul class="sub-menu">
                                <?php
                                foreach( L::GetAvailableLanguages() as $langMeta) {
                                    echo('<li><a href="'. siteUrl('//', true) .'?lang='. $langMeta["short"] .'"><span class="flag-icon-background flag-icon-'. $langMeta["icon"] .'"></span> '. $langMeta["native"] .' ('. $langMeta["in_english"] .')</a></li>');
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank"><?php L::W("COMMUNITY_PAPER"); ?></a></li>
                        <li><a href="#benefits" class="smooth-scroll"><?php L::W("BENEFITS"); ?></a></li>
                        <li><a href="#exchange" class="smooth-scroll"><?php L::W("EXCHANGE"); ?></a></li>
                        <li><a href="#wallets" class="smooth-scroll"><?php L::W("WALLETS"); ?></a></li>
                        <li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank"><?php L::W("GUIDES"); ?></a></li>
                        <li><a href="https://forum.btcz.rocks/t/pools-that-love-the-bitcoinz-community/51" target="_blank"><?php L::W("POOLS"); ?></a></li>

                        <li class="menu-item-has-children current-menu-item">
                            <a href="#"><?php L::W("EXPLORE"); ?></a>
                            <ul class="sub-menu">
                                <li><a href="https://explorer.btcz.rocks/" target="_blank">explorer.btcz.rocks</a></li>
                                <li><a href="https://btczexplorer.blockhub.info/" target="_blank">btczexplorer.blockhub.info</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#" class="smooth-scroll"><?php L::W("SOCIAL"); ?></a>
                            <ul class="sub-menu">
                                <li><a href="https://www.facebook.com/BTCZCommunity/" target="_blank">Facebook</a></li>
                                <li><a href="https://slack.btcz.rocks/" target="_blank">Slack</a></li>
                                <li><a href="https://twitter.com/BitcoinzTeam" target="_blank">Twitter</a></li>
                                <li><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank">Telegram</a></li>
                                <li><a href="https://discordapp.com/invite/u3dkbFs" target="_blank">Discord</a></li>
                                <li><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">Reddit</a></li>
                                <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">VIEW FORUM bitcointalk</a></li>
                            </ul>
                        </li>
                        <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank"><?php L::W("BITCOINTALK_FORUM_TOPIC"); ?></a></li>
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
        <div data-image="<?php siteUrl(); ?>img/bgn22.jpg" class="slide bg-mask background-image full-vh">
            <div class="container-slide vertical-align center head-desc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-title-big"><?php L::W("IT_IS_YOUR_COIN"); ?><br><span><?php L::W("BITCOINZ_THE_TRUE_BITCOIN_2.0"); ?></span></div>
                            <div class="description-slide"><?php L::W("WELCOME_TO_DECENTRALIZATION"); ?></div>
                            <div class="buttons-section">
                                <a href="<?php L::W("COMMUNITY_PAPER_URL"); ?>" target="_blank" class="btn dark-btn large-btn"><?php L::W("COMMUNITY_PAPER"); ?></a>
                                <a href="https://youtu.be/RI-V7n8amFk" target="_blank" class="btn dark-btn large-btn"><?php L::W("START_MINING"); ?></a>
                                <a href="https://info.btcz.rocks/" class="btn dark-btn large-btn" target="_blank"><?php L::W("LATEST_NEWS"); ?></a>
                                <a href="https://btcz.fund/" class="btn dark-btn large-btn" target="_blank"><?php L::W("DONATE"); ?></a>

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
                    <h2><?php L::W("ABOUT_THE_COIN"); ?></h2>
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
                        <h3><?php L::W("IMPORTANT_DETAILS"); ?></h3>
                        <p>
                            <?php L::W("IMPORTANT_DETAILS_TEXT"); ?>
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
                        <h3><?php L::W("BITCOINZ_IS_BITCOIN_2.0"); ?></h3>
                        <p>
                            <?php L::W("BITCOINZ_IS_BITCOIN_2.0_TEXT"); ?>
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
                        <h3><?php L::W("ACTIVE_COMMUNITY"); ?></h3>
                        <p>
                            <?php L::W("ACTIVE_COMMUNITY_TEXT"); ?>
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
                    <h2><?php L::W("BENEFITS_BITCOINZ"); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tabs services-tabs">
                <ul class="services-carousel">
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-graph"></i>
                            <h4><?php L::W("MAX_SUPPLY"); ?></h4>
                            <p><?php L::W("MAX_SUPPLY_TEXT"); ?></p>
                        </a>
                    </li>
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-drop"></i>
                            <h4><?php L::W("ALGORITHM"); ?></h4>
                            <p><?php L::W("ALGORITHM_TEXT"); ?></p>
                        </a>
                    </li>
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-timer"></i>
                            <h4><?php L::W("FAST_TRANSACTIONS"); ?></h4>
                            <p><?php L::W("FAST_TRANSACTIONS_TEXT"); ?></p>
                        </a>
                    </li>
                    <li class="animated-service anim-shadow">
                        <a href="#">
                            <i class="pe-7s-map"></i>
                            <h4><?php L::W("CIRCULATING_SUPPLY"); ?></h4>
                            <p><?php L::W("CIRCULATING_SUPPLY_TEXT"); ?></p>
                        </a>
                    </li>
                </ul>
                <div id="dots-control-tabs" class="dots-control-carousel"></div>
                <!--Start tabs-->
                <div id="tabs-1">
                    <div class="col-md-6">
                        <div class="head-service small-head text-left">
                            <h2><?php L::W("OUR_GOAL"); ?></h2>
                        </div>
                        <?php L::W("OUR_GOAL_LEFT_COLUMN"); ?>
                    </div>
                    <div class="col-md-5 col-md-push-1">
                        <?php L::W("OUR_GOAL_RIGHT_COLUMN"); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="link-full">
                        <a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank"><?php L::W("VIEW_BITCOINTALK_FORUM_TOPIC"); ?><i aria-hidden="true" class="fa fa-angle-right"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="https://forum.btcz.rocks" target="_blank"><?php L::W("VIEW_FORUM"); ?><i aria-hidden="true" class="fa fa-angle-right"></i></a>
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
                    <h2><?php L::W("WHY_BITCOINZ"); ?></h2>
                    <div class="small-desd"><?php L::W("WE_ARE_FULLY_DECENTRALIZED_NETWORK"); ?></div>
                    <p><?php L::W("HERE_ARE_SOME_ADVANTAGES"); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-look"></i></div>
                </div>
                <h3><?php L::W("ANONYMITY"); ?></h3>
                <p><?php L::W("ANONYMITY_TEXT"); ?></p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-light"></i></div>
                </div>
                <h3><?php L::W("SUPPORT_FOR_DIFFERENT_PLATFORMS"); ?></h3>
                <p><?php L::W("SUPPORT_FOR_DIFFERENT_PLATFORMS_TEXT"); ?></p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
                </div>
                <h3><?php L::W("COMMUNITY"); ?></h3>
                <p><?php L::W("COMMUNITY_TEXT"); ?></p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
                </div>
                <h3><?php L::W("ACTIVE_PRICE_GROWTH"); ?></h3>
                <p><?php L::W("ACTIVE_PRICE_GROWTH_TEXT"); ?></p>
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
                    <h2><?php L::W("EXCHANGES"); ?></h2>
                    <p><?php L::W("BUY_OR_SELL_YOUR_BITCOINZ_COINS"); ?></p>
                </div>
            </div>
            <div class="col-md-5">
                <a href="https://btc-alpha.com/exchange/BTCZ_BTC/" target="_blank"><img src="<?php siteUrl(); ?>img/exchanges/btc-alpha.png" class="exch_img"></a>
            </div>
            <div class="col-md-4">
                <a href="https://stocks.exchange/trade/BTCZ/BTC" target="_blank"><img src="<?php siteUrl(); ?>img/exchanges/stocks-exchange.png" class="exch_img"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <a href="https://tradesatoshi.com/Exchange?market=BTCZ_BTC" target="_blank"><img src="<?php siteUrl(); ?>img/exchanges/tradesatoshi.png" class="exch_img"></a>
            </div>
            <div class="col-md-4">
                <a href="https://github.com/KomodoPlatform/BarterDEX/releases" target="_blank"><img src="<?php siteUrl(); ?>img/exchanges/barterdex.png" class="exch_img"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <a href="https://graviex.net/markets/btczbtc" target="_blank"><img src="<?php siteUrl(); ?>img/exchanges/graviex.png" class="exch_img"></a>
            </div>
            <div class="col-md-4">
                <a href="https://exrates.me/dashboard" target="_blank"><img src="<?php siteUrl(); ?>img/exchanges/exrates.png" class="exch_img"></a>
            </div>
        </div>
    </div>
</section>

<!--Section our some work-->
<section id="wallets" class="section-portfolio bg-white-section background-image">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title center">
                    <h2><?php L::W("DOWNLOAD_WALLET"); ?></h2>
                    <p><?php L::W("LINUX_WINDOWS_AND_MOBILE_WALLETS"); ?></p>
                </div>
                <div class="controls-portfolio center">
                    <a href="https://github.com/bitcoinz-wallets/bitcoinz-copay-wallet/releases"><img src="<?php siteUrl(); ?>img/wallets/linux.png" alt="Linux" title="Linux" class="wallets_img"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.btczcom.btcz"><img src="<?php siteUrl(); ?>img/wallets/android.png" alt="Android" title="Android" class="wallets_img"></a>
                    <a href="https://github.com/bitcoinz-wallets/bitcoinz-copay-wallet/releases"><img src="<?php siteUrl(); ?>img/wallets/osx.png" alt="Mac OS" title="MacOS" class="wallets_img"></a>
                    <a href="https://github.com/bitcoinz-pod/bitcoinz-wallet/releases"><img src="<?php siteUrl(); ?>img/wallets/windows.jpg" alt="Windows" title="Windows" class="wallets_img"></a>
                    <a href="https://github.com/bitcoinz-pod/bitcoinz"><img src="<?php siteUrl(); ?>img/wallets/github.png" alt="github" title="Github" class="wallets_img"></a>
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
                    <h2><?php L::W("ROAD_MAP"); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox1lang"><?php L::W("BTCZ_CORE_CLIENT"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox2lang"><?php L::W("BLOCK_EXPLORER"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox3lang"><?php L::W("MINING_POOLS"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox4lang"><?php L::W("GUI_WALLET_RELEASE"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox5lang"><?php L::W("IOS_AND_ANDROID_WALLETS"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox6lang"><?php L::W("COMMERCE_PLUGINS"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox7lang"><?php L::W("EXCHANGE_LISTING"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("MASQUARADE_TECHNOLOGY"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox9lang"><?php L::W("DECENTRALIZATION_PACKAGES"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("GAME_DEVELOPMENT"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-yellow"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("ZKSNARKS_FROM_MOBILE"); ?></h2>
                        </div>
                    </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-green"></div>
                        <div class="cd-timeline-content">
                            <h2 class="roadmapbox8lang"><?php L::W("PUBLIC_RELATIONS"); ?></h2>
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
                    <h2><?php L::W("WHY_CHOOSE_BITCOINZ"); ?></h2>
                    <div class="small-desd"><?php L::W("HERE_ARE_FEW_REASONS"); ?></div>
                    <p><?php L::W("HERE_ARE_FEW_REASONS_WARNING"); ?></p>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL1_ROW1_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL1_ROW1_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL2_ROW1_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL2_ROW1_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL3_ROW1_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL3_ROW1_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL1_ROW2_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL1_ROW2_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL2_ROW2_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL2_ROW2_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL3_ROW2_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL3_ROW2_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL1_ROW3_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL1_ROW3_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL2_ROW3_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL2_ROW3_TEXT"); ?>
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
                        <h3><?php L::W("WHY_CHOOSE_BITCOINZ_COL3_ROW3_HEAD"); ?></h3>
                        <p>
                            <?php L::W("WHY_CHOOSE_BITCOINZ_COL3_ROW3_TEXT"); ?>
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
                        <a href="https://github.com/bitcoinz-pod/bitcoinz" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/github.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/bitcointalk.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://slack.btcz.rocks/" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/slack.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/reddit.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://discordapp.com/invite/u3dkbFs" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/discord.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://www.facebook.com/BTCZCommunity/" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/facebook.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/telegram.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-carousel">
                        <a href="https://twitter.com/BitcoinZTeam" target="_blank">
                            <img src="<?php siteUrl(); ?>img/social/twitter.png" alt="logo">
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
                    <p>&copy; <?php echo date('Y'); ?> <?php L::W("COPYRIGHT_TEXT"); ?></p>
                    <ul class="footer-menu">
                        <li><a href="#benefits" class="smooth-scroll"><?php L::W("BENEFITS"); ?></a></li>
                        <li><a href="#exchange" class="smooth-scroll"><?php L::W("EXCHANGE"); ?></a></li>
                        <li><a href="#wallets" class="smooth-scroll"><?php L::W("WALLETS"); ?></a></li>
                        <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank"><?php L::W("BITCOINTALK_FORUM_TOPIC"); ?></a></li>
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
