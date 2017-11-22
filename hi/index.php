<!DOCTYPE html>
<html lang="hi" class="no-js">
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
<title>आपकी वित्तीय स्वतंत्रता - बिटकॉक्सिन</title>
<meta name="description" content="बिटकॉइनजेड एक भुगतान प्रकार की नई प्रकार है। अपना सिक्का चुनें" />
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
<li><a href="/media/Community_Paper_Final.pdf">समुदाय काग़ज़ </a>
<li><a href="#benefist" class="smooth-scroll">लाभ</a></li>
<li><a href="#exchange" class="smooth-scroll">विनिमय</a></li>
<li><a href="#wallets" class="smooth-scroll">बटुआ (पर्स - Purse)</a></li>
<li><a href="#" class="smooth-scroll">पूल</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">मंच (Forum bitcointalk - फोरम)</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">एक्सप्लोरर</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">सामाजिक</a>
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
<li><a href="/media/Community_Paper_Final.pdf">समुदाय काग़ज़ </a></li>
<li><a href="#benefist" class="smooth-scroll">लाभ</a></li>
<li><a href="#exchange" class="smooth-scroll">विनिमय</a></li>
<li><a href="#wallets" class="smooth-scroll">बटुआ (पर्स - Purse)</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">पूल</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">एक्सप्लोरर</a>
<ul class="sub-menu"><br>
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">सामाजिक</a>
<ul class="sub-menu"><br>
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">मंच (Forum - फोरम)</a>
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
<div class="heading-title-big"><br>यह आपका सिक्का है <br><span>बिटकोइनजेड: सच विटकोइन 2.0
</span></div>
<div class="description-slide">- विकेंद्रीकरण में आपका स्वागत है. बिटकॉइनज़ि.</div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">समुदाय काग़ज़ </a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">अधिक पढ़ें </a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2><span>सिक्का के बारे में</span></h2>
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
<h3>महत्वपूर्ण  <span>विवरण</span></h3>
<p>- कई स्थानों में बैकअप करे अपना बटुआ<br>- गुमनाम पतों पर बड़ी मात्रा में सिक्कों को ठंड़े बटुए मे रखे<br>- किसी को भी अपनी निजी कुंजी नहीं भेजे / ना हि दे.यदि आप किसी को अपनी निजी कुंजी देते हैं या भेजते हैं तो कृपया अपने सिक्कों को दूसरे पते पर भेज दे, क्योंकि निजी कुंजी के साथ कोई भी बटुए तक पहुंच सकते हैं</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3><span>बिटकॉइनज़ि है बिटकॉइन २.०:</span></h3>
<p>- बिटकॉइन प्रौद्योगिकी (Technology टैकनोलजी)<br>
	- गुमनाम लेनदेन (zk-SNARKs गुप्तता एकांतता) – बिटकॉइन के सभी लेनदेन सार्वजनिक रूप से उपलब्ध हैं.<br>
	- विकेन्द्रीकृत GPU खनन (ASIC खनिकों पर प्रतिबंध लगा दिया गया है)<br>
	- विकेन्द्रीकृत विकास / सभी योगदानकर्ता स्वयंसेवकों हैं<br>
	- बड़े ब्लॉक. BCC/BCH के समान ब्लॉक</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3><span>सक्रिय समुदाय</span></h3>
<p>हमारी समुदाय हमेशा सक्रिय है और हम हमेशा विकासशील हैं <br>
आप हमें सामाजिक नेटवर्क, फोरम पर, साथ ही साथ स्लैक (Slack) पर अनुसरण कर सकते हैं</p>
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
<h2>लाभ <span>बिटकॉइनज़ि</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>अधिकतम आपूर्ति</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>कलन विधि</h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>फास्ट लेनदेन</h4>
<p>बीटीसीजेड = 2 एमबी हर 2.5 मिनट ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>परिचालित आपूर्ति</h4>
<p>12500 सिक्के प्रत्येक 2.5 मिनट.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>हमारा लक्ष्य बिटकॉइनजेड में उपयोग करने में सक्षम होने के लिए <span>बाजार के सभी बेहतरीन सॉफ्टवेयर को बदलना है .</span></h2>
<p>अपरिवर्तनीय पैरामीटर:</p>
</div>
<p>- अधिकतम आपूर्ति </p>
<p>- मुद्रास्फीति </p>
<p>- केवल पाओ एल्गो (POW Algo) - हम ASIC खनिकों को रोकने के लिए अन्य पाओ एल्गो (POW Algo) को Equihash Algo को बदल सकते हैं</p>
<p>- नई सुविधाओं को उपयोग में सुधार की अनुमति है/ मापनीयता, लेकिन हम इतिहास को कभी नहीं बदलेंगे (ETH/ETC का मामला) </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>अल्गो(Algo): Equihash (हमेशा GPU खनन. हम खनन में विकेंद्रीकरण को बढ़ावा देते हैं) </li>
<li>अधिकतम आपूर्ति २१ अरब सिक्के</li>
<li>वर्तमान आपूर्ति: १२५०० सिक्कों प्रत्येक २. ५ मिनट</li>
<li>वर्तमान ब्लॉक आकार BCC/BCH (BTC = २ एम बी हर २.५ मिनट ~ BCC/BCH = ८ एम बी हर १० मिनट) के समान है</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>सबसे सुरक्षित सॉफ़्टवेयर को बिटकॉइनज़ि-pod/ बिटकॉइनज़ि linux <span>क्लाइंट में शामिल किया गया है.</span></h2>
<p>संवेदनशील डेटा प्रोग्राम जैसे बटुए को मुफ्त खुला स्रोत कोड (Open source Code) प्रदान करना चाहिए और SHA256 उनके रिहाई के लिए अन्य टीमों/Pods द्वारा अपनी बटुए की समीक्षा करने में सक्षम होने के लिए. किसी भी बटुए का उपयोग करने की अनुशंसा नहीं की गई है जिसे अन्य टीम द्वारा समीक्षा नहीं की गई ह</p>
</div>
<p>बिना किसी पुष्टीकरण के सॉफ्टवेयर को जोखिम के रूप में माना जाना चाहिए और इसका उपयोग नहीं करना चाहिए।.</p>
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
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">फ़ोरम देखें<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
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
<h2>क्यूं बिटकॉइनज़ि ?</h2>
<div class="small-desd">हम पूरी तरह से विकेन्द्रीकृत नेटवर्क हैं</div>
<p>यहां कुछ फायदे हैं </p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>गुमनामी</h3>
<p>सभी लेनदेन पूरी तरह से गुमनाम होते हैं</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>अलग प्लेटफार्मों के लिए सहारा</h3>
<p>हमारा बटुए Linux, Windows, iOS, और Android के साथ संगत है और हम हमेशा सुधार पर काम करते हैं</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>समुदाय</h3>
<p>हम अपने प्रिय समुदाय की बात सुनते हैं ताकी हम सफल हो सके हैं।</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>सक्रिय मूल्य वृद्धि</h3>
<p>बिटकॉइनज़ि कार्बनिक विकास पर ध्यान केंद्रित है.</p>
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
<h2>विनिमय</h2>
<p>खरीदें या बेचें आपके बिटकॉइनज़ि </p>
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
<h2><span>वॉलेट डाउनलोड करें</span></h2>
<p>लिनक्स, विंडोज और मोबाइल पर्स</p>
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
<h2>क्यों चुनें  <span>बिटकॉइनज़ि</span></h2>
<div class="small-desd"><span> ये कुछ कारण हैं</span></div>
<p>चेतावन: हमेशा नुकसान के बारे में याद रखें और एक सुरक्षित जगह में अपनी बैकअप कुंजियां रखें!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>विकेन्द्रीकृत खनन</h3>
<p>खनिक होने के नाते आप मुख्य सिद्धांतों का पालन करने के लिए सबसे बड़े पूल का उपयोग नहीं करना चाहिए<br>
खनन करने में आसानe<br>
Equihash एल्गोरिथम<br>
विकेन्द्रीकृत विनिमय</p>
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
<h3>कोई  <span>पूर्व-खान नहीं</span></h3>
<p>शुद्ध सिक्का कोई पूर्व-खान नहीं</p>
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
<h3>बिटकॉइनज़ि है <span>बिटकॉइन २.०:</span></h3>
<p>- २१ अरब सिक्के - दुनिया में हर कोई कम से कम एक BTCZ रख सकता है</p>
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
<h3>सक्रिय  <span>समुदाय</span></h3>
<p>हमारा समुदाय हर दिन सक्रिय रूप से विकसित हो रहा है</p>
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
<h3>गुमनाम <span>लेनदेन</span></h3>
<p>सभी लेनदेन गुमनाम रहेंगे इसलिए आपको गुमनामी के बारे में चिंता करने की ज़रूरत नहीं है</p>
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
<h3>Android और iOS <span>बटुआ</span></h3>
<p>अपने स्मार्टफ़ोन में बिटकॉइनज़ि का उपयोग करें</p>
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
<h3>प्राकृतिक  <span>विकास</span></h3>
<p>आपका सिक्का एक प्राकृतिक तरीके से विकसित होगा और</p>
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
<h3>विकेन्द्रीकृत <span>विकसित</span></h3>
<p>सभी विनिमय की अनुमति है. विकेन्द्रीकृत सबसे अच्छे वाले है. हम पूरी तरह विकेन्द्रीकृत XCAT विनिमय को लागू करने की योजना बना रहे हैं।</p>
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
<h3>केवल POW  <span>और POS नहीं</span></h3>
<p>सिक्का को केवल POW खनन के लिए गणना की जाती है, और इसे POS में कभी नहीं बदला जाएगा</p>
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
<p>© 2017 BitcoinZ समुदाय. सर्वाधिकार सुरक्षित..</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">लाभ</a></li>
<li><a href="#exchange" class="smooth-scroll">विनिमय</a></li>
<li><a href="#wallets" class="smooth-scroll">बटुआ (पर्स - Purse)</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">मंच (Forum bitcointalk - फोरम)</a></li>
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