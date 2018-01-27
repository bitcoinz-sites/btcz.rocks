<?php $t = require __DIR__ . '/../translations/en.php'; ?>
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
        <title>Your Financial Freedom - BitcoinZ</title>
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
                        <li><a href="<?php echo $t['community-paper-link']; ?>" target="_blank"><?php echo $t[' تواصل اجتماعي ورقة']; ?></a>
                        <li><a href="#benefist" class="smooth-scroll">فائدة</a></li>
                        <li><a href="#exchange" class="smooth-scroll"></a>تبادل</li>
                        <li><a href="#wallets" class="smooth-scroll">محافظ</a></li>
                        <li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank">أدلة</a></li>
                        <li>
                            <a href="#" class="smooth-scroll">برك</a>
                            <ul>
                                <?php include_once '../pools.php'; ?>
                                <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">-منتدى</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="smooth-scroll">Explorer</a>
                            <ul>
                                <?php include_once '../explorer.php'; ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="smooth-scroll">اجتماعي</a>
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
<li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank">Guides</a></li>
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
<div class="heading-title-big"><br>It's your coin <br><span>BitcoinZ: The True Bitcoin 2.0</span></div>
<div class="description-slide">Welcome to the decentralization</div>
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
<h2>تفاصيل هامة</span></h2>
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
<h3>تفاصيل هامة </span></h3>
<p>- محفظتك في العديد من المواقع احفظ -<br>-خزن كميه كبيره من القطع النقدي في عنوان غير معروف في محفظتك -<br>- لا تعطي/ او ترس مفتاحك الخاص الى احد .المفتاح الخاص هو كل ما تحتاج لحصول العنوان المخزن فيه النقود في حال المفتاح الى احد
بلغط اسرع وانقل النقود الى عنوان اخر اعطيت</p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ انه<span>Bitcoin 2.0:</span></h3>
<p>- بيتكوين لديه جميع المعاملات<br>- ( زك-سناركس الخصوصية) المعاملات المجهولة -.<br>- متاح الى جميع التعدين اللامركزي غبو (يتم حظر عمال المناجم أسيك، ويسمح للأعمال الصلبة لمنع عمال المناجم أسيك)-<br> </p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>مجتمع نشط: <span>مجتمع نشط:</span></h3>
<p>مجتمعنا نشط ونحن نطور دائما - <br>يمكنك متابعتنا في الشبكات الاجتماعية، على المنتدى، وكذلك سلاك -</p>
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
<h2> هدفنا هو ميناء كل أفضل البرمجيات الحرة في السوق لتكون قادرة على استخدامها في بيتكوينز -</span></h2>
<p>معلمات غير قابلة للتغيير -:</p>
</div>
<p>- اعل العرض -</p>
<p>- التضخم - </p>
<p>- إيبو ألغو - قد نغير إكيهاش ألغو لغيرهم من أسو ألغو لمنع أسيك مينرسنلاتيون</p>
<p>- يسمح الميزات الجديدة لتحسين الاستخدام / التدرجية، ولكننا لن تغير التاريخ (إيث / إتك حالة - </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>إيبو ألغو - قد نغير إكيهاش ألغو لغيرهم من أسو ألغو لمنع أسيك مينرسنلاتيون -</li>
<li>إيبو ألغو - قد نغير إكيهاش ألغو لغيرهم من أسو ألغو لمنع أسيك مينرسنلاتيون</li>
<li>يسمح الميزات الجديدة لتحسين الاستخدام / التدرجية، ولكننا لن تغير التاريخ (إيث / إتك حالة</li>
<li>حجم كتلة الحالي يشبه بسك / بش (بتز = 2MB كل 2.5 دقيقة ~ بسك / بش = 8MB كل 10 دقيقة)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>تم تضمين البرنامج الأكثر أمانا في بيتسوانز-بود / بيتسوانز لينكس العميل -</span></h2>
<p>وينبغي أن توفر برامج البيانات الحساسة مثل محافظ توفير شفرة مفتوحة المصدر الحرة و sha256 إلى الإصدارات الخاصة بهم لتكون
قادرة على مراجعة محافظهم من قبل فرق أخرى / القرون. لا ينصح باستخدام أي محفظة لم يتم مراجعتها من قبل فريق آخر.</p>
</div>
<p>تم تضمين البرنامج الأكثر أمانا في بيتسوانز-بود / بيتسوانز لينكس العميل -</p>
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
<h2>لماذا بيتسوينز ؟؟؟</h2>
<div class="small-desd">نحن شبكة ديسكراليزد تماما</div>
<p>وهنا بعض المزايا</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>إخفاء الاسم -</h3>
<p>جميع المعاملات مجهولة تماما -</p>
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
<h3>دعم في اكثر مجال حسباي</h3>
<p>محفظتنا متوافق مع لينكس، ويندوز، دائرة الرقابة الداخلية والروبوت. ونحن نعمل دائما على التحسينات -</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>تواصل اجتماعي</h3>
<p>شراء أو بيع القطع النقدية الخاصة بك بيتكوينز</p>
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
<p>شراء أو بيع القطع النقدية الخاصة بك بيتكوينز</p>
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
<h2>لماذا تختار بيتكوينز<span>BitcoinZ</span></h2>
<div class="small-desd">لدينا هنا بعض الأسباب -<span> reasons</span></div>
<p>تحذير. تذكر دائما عن المزالق والحفاظ على مفاتيح النسخ الاحتياطي الخاص بك في مكان آمن -</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>Decentralized mining</h3>
<p>As a miner you should not use the biggest pools to follow main principles.<br>
اللا مركزيه في البحس عن النقود<br>
السهوله في البحس عنه.<br>
 التبادلات اللامركزية</p>
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
<p> عدم وجود العمله قبل تنقيب عنه</p>
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
<p>مليار قطعة نقدية - كل شيء في العالم يمكن أن يكون واحد على الأقل بتزز 21</p>
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
<h3>مجتمع مفتاعل ويحب العمله<span>community</span></h3>
<p>مجتمعنا يتطور بنشاط وينمو كل يوم	</p>
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
<h3> سريه  <span>معاملات</span></h3>
<p>ولا تزال جميع المعاملات مجهولة المصدر. لذلك لم يكن لديك ما يدعو للقلق عدم الكشف عن هويته</p>
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
<h3>محفظه على اندرويه وابل ستور<span>wallet</span></h3>
<p>يمكن استخدمه بتكونز في الهواتف الزكيه</p>
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
<h3> طبيعي <span>نموا</span></h3>
<p>العمله سوف تنموا و تتطور بشكل طبيعي</p>
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
<h3> اللامركزية  <span>التنمية</span></h3>
<p>جميع التبادلات مسموح بها. وأفضلها لامركزية. ونحن نخطط لتنفيذ اللامركزية بالكامل تبادل زكات</p>
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
<p>سوف يتم احتسام العمله وتنقب عنه في برنماج وبس وليس اخر</p>
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
<li><a href="#benefist" class="smooth-scroll">اجتماعي</a></li>
<li><a href="#exchange" class="smooth-scroll">اجتماعي</a></li>
<li><a href="#wallets" class="smooth-scroll">اجتماعي</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">اجتماعي</a></li>
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
