<!DOCTYPE html>
<html lang="vi" class="no-js">
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
<title>Tự do tài chính của bạn - BitcoinZ</title>
<meta name="description" content="BitcoinZ là một loại tính toán thanh toán mới. Chọn đồng xu của bạn" />
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
<li><a href="/media/Community_Paper_Final.pdf">Giấy cộng đồng</a>
<li><a href="#benefist" class="smooth-scroll">Lợi ích</a></li>
<li><a href="#exchange" class="smooth-scroll">Trao đổi, giao dịch</a></li>
<li><a href="#wallets" class="smooth-scroll">Ví</a></li>
<li><a href="#" class="smooth-scroll">Hồ bơi</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Và nhiều hơn nữa trên diễn đàn bitcointalk</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">nhà thám hiểm</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">Xã hội</a>
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
<li><a href="/media/Community_Paper_Final.pdf">Giấy cộng đồng</a></li>
<li><a href="#benefist" class="smooth-scroll">Lợi ích</a></li>
<li><a href="#exchange" class="smooth-scroll">Trao đổi, giao dịch</a></li>
<li><a href="#wallets" class="smooth-scroll">Ví</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Hồ bơi</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Và hơn thế nữa...</a></li>
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
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Diễn đàn bitcointalk</a>
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
<div class="heading-title-big"><br>Đó là đồng xu của bạn <br><span>BitcoinZ: True Bitcoin 2.0</span></div>
<div class="description-slide">Chào mừng đến với việc phân quyền</div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">Giấy cộng đồng</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">ĐỌC THÊM</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
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
<h2>Về đồng <span>xu</span></h2>
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
<h3><span>Chi tiết quan trọng</span></h3>
<p>
- Sao lưu ví của bạn ở nhiều địa điểm<br>
- Lưu trữ số tiền lớn trong ví tiền lạnh ở các địa chỉ nặc danh<br>
- Không cho / gửi bất cứ ai chìa khóa cá nhân của bạn. Khóa cá nhân cần được bảo đảm. Bạn có thể phục hồi ví của bạn. Nếu bạn đưa ra hoặc gửi cho bất cứ ai chìa khóa cá nhân của bạn hãy coi nó như một lá cờ đỏ và nhanh chóng chuyển tiền của bạn sang địa chỉ khác</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ là <span>Bitcoin 2.0:</span></h3>
<p>- Công nghệ Bitcoin<br>
	- Các giao dịch vô danh (zk-SNARKs) - Bitcoin có tất cả các giao dịch công khai.<br>
	- phân cấp GPU khai thác mỏ (ASIC thợ mỏ bị cấm, hardforks để ngăn chặn ASIC thợ mỏ được cho phép)<br>
	- Phát triển phi tập trung / Tất cả các cộng tác viên là tình nguyện viên<br>
	- Các khối lớn -> các khối tương tự như BCC / BCH</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>Cộng đồng  <span>hoạt động</span></h3>
<p>Cộng đồng của chúng tôi hoạt động và chúng tôi luôn phát triển. <br>
Bạn có thể theo dõi chúng tôi trong mạng xã hội, trên diễn đàn, cũng như Slack</p>
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
<h2>Lợi ích <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Cung cấp tối đa</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Thuật toán</h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Giao dịch nhanh</h4>
<p>BTCZ = 2MB mỗi 2,5 phút ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Cung cấp tuần hoàn</h4>
<p>12500 xu mỗi 2,5 phút.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Mục tiêu của chúng tôi là chuyển tất cả các phần mềm miễn phí tốt nhất trên thị <span>trường để có thể sử dụng trong BitcoinZ.</span></h2>
<p>Params không thay đổi:</p>
</div>
<p>- cung cấp tối đa </p>
<p>- lạm phát </p>
<p>- chỉ có POW algo - chúng ta có thể thay đổi Equihash algo cho các POW khác algo để ngăn chặn ASIC thợ mỏ </p>
<p>- các tính năng mới được phép cải thiện khả năng sử dụng / khả năng mở rộng nhưng chúng tôi sẽ không bao giờ thay đổi lịch sử (trường hợp ETH / ETC) </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algo: Equihash (luôn luôn khai thác GPU - chúng tôi thúc đẩy phân cấp trong khai thác mỏ) </li>
<li>Cung cấp tối đa 21B đồng tiền </li>
<li>Nguồn cung hiện tại: 12500 xu mỗi 2,5 phút</li>
<li>Kích cỡ khối hiện tại tương tự như BCC / BCH (BTC = 2MB mỗi 2,5 phút ~ BCC / BCH = 8MB mỗi 10 phút)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Phần mềm an toàn nhất được bao gồm trong máy khách <span>linux bitcoinz-pod / bitcoinz.</span></h2>
<p>Các chương trình dữ liệu nhạy cảm như ví cần cung cấp mã nguồn mở miễn phí và sha256 cho các bản phát hành của họ để có thể xem lại ví của họ bằng các nhóm / nhóm khác. Không nên sử dụng bất kỳ chiếc ví nào chưa được nhóm khác xem xét.
</p>
</div>
<p>Phần mềm mà không có bất kỳ xác nhận nào nên được coi là cờ đỏ và không được sử dụng.</p>
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
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">Xem diễn đàn<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
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
<h2>Tại sao BitcoinZ ?</h2>
<div class="small-desd">Chúng tôi là một mạng lưới phân cấp hoàn toàn</div>
<p>Dưới đây là một số lợi thế</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>Ẩn danh</h3>
<p>Tất cả các giao dịch hoàn toàn ẩn danh.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>Hỗ trợ cho các nền tảng khác nhau</h3>
<p>Ví của chúng tôi tương thích với Linux, Windows, iOS và Android.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>cộng đồng</h3>
<p>Chúng tôi lắng nghe cộng đồng thân yêu của chúng tôi, để chúng tôi có thể thành công.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>Tăng giá thành</h3>
<p>BitcoinZ tập trung vào tăng trưởng hữu cơ.</p>
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
<h2>Giao dịch</h2>
<p>Mua hoặc bán đồng tiền của bạn BitcoinZ</p>
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
<h2>Tải xuống  <span>ví</span></h2>
<p>Linux, Windows và ví điện thoại di động</p>
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
<h2>Tại sao chọn <span>BitcoinZ</span></h2>
<div class="small-desd">Dưới đây là một  <span> vài lý do</span></div>
<p>CẢNH BÁO. Luôn nhớ về những cạm bẫy và giữ chìa khóa sao lưu của bạn ở một nơi an toàn!
</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>Khai thác phi tập trung</h3>
<p>Là một người khai thác mỏ, bạn không nên sử dụng các hồ bơi lớn nhất để làm theo các nguyên tắc chính.<br>
Dễ dàng để tôi<br>
Thuật toán Equihash.<br>
Giao dịch phi tập trung</p>
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
<h3>Không <span> tiền mỏ</span></h3>
<p>Đồng xu tinh khiết. Không có tiền</p>
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
<h3>BitcoinZ là  <span>Bitcoin 2.0:</span></h3>
<p>- 21 tỷ đồng tiền - Tất cả mọi người trên thế giới có thể có ít nhất một BTCZ</p>
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
<h3>Cộng đồng <span>hoạt động</span></h3>
<p>Cộng đồng của chúng tôi đang tích cực phát triển và phát triển mỗi ngày.</p>
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
<h3>Giao dịch <span>vô danh</span></h3>
<p>Tất cả giao dịch vẫn chưa xác định. Vì vậy, bạn không phải lo lắng về ẩn danh</p>
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
<h3><span>Ví dụ Android và iOS</span></h3>
<p>Sử dụng đồng xu bitcoinz trong điện thoại thông minh của bạn</p>
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
<h3>Tăng trưởng <span> tự nhiên</span></h3>
<p>Đồng xu của bạn sẽ phát triển và phát triển một cách tự nhiên</p>
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
<h3>Phát triển phi  <span> tập trung</span></h3>
<p>Tất cả các trao đổi được cho phép. Những điều tốt nhất được phân quyền. Chúng tôi dự định thực hiện trao đổi XCAT theo phân cấp hoàn toàn.</p>
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
<h3>Chỉ có POW và không  <span>có POS</span></h3>
<p>Đồng xu chỉ được tính cho việc khai thác mỏ vùng núi lửa, và sẽ không bao giờ được thay đổi thành POS</p>
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
<p>© 2017 BitcoinZ Cộng đồng. Tất cả các quyền được bảo lưu.</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">LỢI ÍCH</a></li>
<li><a href="#exchange" class="smooth-scroll">Trao đổi, giao dịch</a></li>
<li><a href="#wallets" class="smooth-scroll">Ví</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Diễn đàn bitcointalk</a></li>
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