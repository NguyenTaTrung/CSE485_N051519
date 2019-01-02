<!DOCTYPE html>
<html lang="vi" class="vnw-home">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <title>Tuyển dụng, tìm việc làm nhanh mới nhất  | Recuiting Online</title>
    <link rel="stylesheet" type="text/css" href="css/demo3.css">
    <script type="text/javascript" src="js/plugins.js"></script>
</head>
<body >
<div data-role="page">
        <!-- Header -->
            <header>
            <nav class="navbar horizontal-navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand hidden-xs" href="">
                            <img class="" src="images/img_tdo.png" alt="" title="" height="57px">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="hidden-xs">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="">Việc Làm</a>
                            </li>
                            <li>
                                <a href="">Nhà tuyển dụng</a>
                            </li>
                            <li>
                                <a target="_blank" href="">Tư Vấn</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="clickable" id="dangnhap" rel="nofollow" onclick="globalLogInModal.showModal();">Đăng Nhập</a>
                            </li>
                            <li>
                                <a class="clickable" id="dangky" rel="nofollow" onclick="globalRegistrationModal.showModal();">Đăng Ký</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <!--tẩt cả ngành nghề địa điểm-->
                    <div class="visible-xs mobile-nav">
                        <ul>
                            <li>
                                <a class="menu-toggler"><i class="fa fa-lg fa-bars"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Splitter Menu -->
        <div class="splitter global__splitter-menu" hidden>
            <div class="splitter-side">
                <ul class="menu">
                    <li class="secondary-level-menu">
                        <ul>
                            <li>
                                <a class="clickable" id="dangnhap" rel="nofollow" onclick="globalLogInModal.showModal();">
                                    <span>Đăng Nhập</span>
                                </a>
                            </li>
                            <li>
                                <a class="clickable" id="dangky" rel="nofollow" onclick="globalRegistrationModal.showModal();">
                                    <span>Đăng Ký</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--tẩt cả ngành nghề địa điểm-->
            <div class="splitter-overlay"></div>
        </div>
        <!-- End Splitter Menu -->
        
<div class="main-wrapper home">
        <!-- Search Widget -->
    <div id="search-widget-wrapper" class="relative">
    <!-- Hero Banner -->
    <div class="hero-carousel hero-carousel_loaded" data-jcarousel="true">
        <div class="hero-banner-list" style="transition-duration: 0s; transition-property: all; transform: none; top: 0px; transition-timing-function: ease;">
            
            <div class="hero-banner-item" style="width: auto; background-size: cover; background-image: url(images/b_104252.jpg); opacity: 1;">
                <img src="images/b_104252.jpg" alt="" class="img-responsive" style="opacity: 0;">
            </div>

            <div class="hero-banner-item" style="width: auto; background-size: cover; background-image: url(images/banner_104722.jpg); opacity: 1;">
                <img src="images/banner_104722.jpg" alt="" class="img-responsive" style="opacity: 0;">
            </div>
                            
            <div class="hero-banner-item" style="width: auto; background-size: cover; background-image: url(images/banner_101879.jpg); opacity: 1;">
                <img src="images/banner_101879.jpg" alt="" class="img-responsive" style="opacity: 0;">
            </div>
        </div>
    </div>
    <p class="hero-carousel__pagination" data-jcarouselpagination="true">
            <a href="" class="dot">1</a>
            <a href="" class="dot">2</a>
            <a href="" class="dot">3</a>
        </p>
        <script>
                var slideIndexx = 0;
                showSlidess();
                
                function showSlidess() {
                    var j;
                    var slidess = document.getElementsByClassName("hero-banner-item");
                    var dotss = document.getElementsByClassName("dot");
                    for (j = 0; j < slidess.length; j++) {
                       slidess[j].style.display = "none";  
                    }
                    slideIndexx++;
                    if (slideIndexx > slidess.length) {slideIndexx = 1}    
                    for (j = 0; j < dotss.length; j++) {
                        dotss[j].className = dotss[j].className.replace(" active", "");
                    }
                    slidess[slideIndexx-1].style.display = "block";  
                    dotss[slideIndexx-1].className += " active";
                    setTimeout(showSlidess, 5000); // Đổi ảnh trong 5 seconds
                }
                </script>
    <!--/ Hero Banner -->
    <div class="container search-widget-container">
        <div id="search-widget" class="collapse in search-widget col-sm-11">
            <h1>Tìm Công Việc Mơ Ước. <br class="visible-xs"><strong>Nâng Bước Thành Công!</strong></h1>
            <div class="stylized-tab search-tabs clearfix search-form">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Jobs -->
                    <div role="tabpanel" class="tab-pane tab-job active" id="home">
                        <form class="form-inline form-adjacent form-checkbox-advanced" method="POST" name="search" onSubmit="return submitBlockSearchForm()" id="frm_block_quick_search"
                              method="get">
                            <div class="search-group">
                                <div class="form-group col-sm-3 category-search no-padding">
                                    <div class="border-text-box">
                                        <select data-search-input-placeholder="Tìm kiếm ngành nghề" data-placeholder="All categories" class="select-category"
                                                id="cateListMainSearch" name="industry[]">
<option value="-1">Tất cả ngành nghề</option>
<option >Công nghệ thông tin</option>
<option >Kế Toán</option>
<option >Partime</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group location-search col-sm-3 no-padding">
                                    <div class="border-text-box">
                                        <select class="select-location" data-search-input-placeholder="Tìm kiếm địa điểm" id="locationMainSearch"
                                                name="location[]"
                                                data-placeholder="Select location">
<option value="-1">Tất cả địa điểm</option>
<option >Hồ Chí Minh</option>
<option >Hà Nội</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 text-center no-padding">
                                    <button type="button" class="btn btn-primary btn-search-all" id="tk">
                                        Tìm Việc
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/ Jobs -->
                </div>
            </div>
            <div id="conten"></div>
        </div>
    </div>
</div>

 <div id="vnw-home" class="home-new">
    <!--Ads-->
    <section class="bnrs container home__featured-companies">
    <section class="home__top-management-jobs container">
        <h1 class="text-center"><span>Các Kênh Việc Làm Của Chúng Tôi</span></h1>
        <div>
            <div class="row channel-content">
                                    <div class="col-sm-4 channel">
                        <div class="bg-channel tmj-channel"></div>
                        <div class="overlay"></div>
                        <div class="content tmj-content">
                            <img src="images/channel-icon-tmj.png"/>
                            <div class="channel-label">Việc Làm Cấp Quản Lý</div>
                            <div class="number-jobs">2165 Việc Làm</div>
                            <a target="_blank" href="capquanly.php" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                                                    <div class="col-sm-4 channel">
                        <div class="bg-channel it-channel"></div>
                        <div class="overlay"></div>
                        <div class="content it-content">
                            <img src="images/channel-icon-it.png"/>
                            <div class="channel-label">Việc Làm Ngành IT</div>
                            <div class="number-jobs">1360 Công Việc</div>
                            <a target="_blank" href="it.php" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                                                    <div class="col-sm-4 channel">
                        <div class="bg-channel intern-channel"></div>
                        <div class="overlay"></div>
                        <div class="content intern-content">
                            <img src="images/channel-icon-intern.png"/>
                            <div class="channel-label">Mới Tốt Nghiệp</div>
                            <div class="number-jobs">692 Việc Làm</div>
                            <a target="_blank" href="ratruong.php" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                            </div>
        </div>
    </section>
    <!--Top Jobs & Featured Employers-->
    <!-- Jobs You Will Love -->
<section class="feature container home__jobs-you-will-love">
    <h1 class="text-center">Việc Làm Bạn Sẽ Thích</h1>
    <div class="tabs-container">
        <div class="tab-content">
            <!-- Top Jobs -->
            <div class="tab-pane tab-job active" id="topJobs">
                                                <div class="panel-content">
                    <!-- Carousel -->
                    <div class="job-carousels">
                        <div class="job-page">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Job -->
                                    <div class="job hot-job row">
                                        <div class="col-xs-2 col-logo">
                                            <!-- Logo -->
                                            <div class="logo-box">
                                                <a data-item-id="1037723" href=""
                                                   target="_blank" title="Việc làm - Software QA Engineer (Web Tester, Qa, QC) - Cybozu Vietnam Co., Ltd - Hồ Ch&iacute; Minh">
                                                <img class="img-responsive logo" id="topjob-logo-1037723"
                                                         src="images/cybozu.jpg"
                                                         alt="Software QA Engineer (Web Tester, Qa, QC)">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 col-content">
                                            <!-- Job Description-->
                                            <a data-item-id="1037723" href="" target="_blank" title="Việc làm - Software QA Engineer (Web Tester, Qa, QC) - Cybozu Vietnam Co., Ltd - Hồ Ch&iacute; Minh">
                                                <p class="title text-clip job-title">
                                                    Software QA Engineer (Web Tester, Qa, QC)                                                
                                                </p>
                                                <div class="text-gray-light text-light company-info">
                                                    <span class="company text-clip text-uppercase">
                                                        Cybozu Vietnam Co., Ltd
                                                    </span>
                                                    <span class="hidden-xs">-</span>
                                                    <span class="location hidden-xs">Hồ Chí Minh</span>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="hot-job-badge">Hot</span>
                                    </div>
                                    <!-- End Job -->
                                </div>
                                <div class="col-md-6">
                                        <!-- Job -->
                                        <div class="job hot-job row">
                                            <div class="col-xs-2 col-logo">
                                                <!-- Logo -->
                                                <div class="logo-box">
                                                    <a data-item-id="1040385" href=""
                                                       target="_blank" title="Job - PHP Developer - Junior / Senior (L&agrave;m Việc Tại H&agrave; Nội) - Yumeshin Vietnam - Bac Ninh, Ha Noi, Hung Yen">
                                                        <img class="img-responsive logo" id="topjob-logo-1040385"
                                                             src="images/10712790.png"
                                                             alt="PHP Developer - Junior / Senior (Làm Việc Tại Hà Nội)">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-10 col-content" >
                                                <!-- Job Description-->
                                                <a data-item-id="1040385" href="" target="_blank" title="Job - PHP Developer - Junior / Senior (L&agrave;m Việc Tại H&agrave; Nội) - Yumeshin Vietnam - Bac Ninh, Ha Noi, Hung Yen">
                                                    <p class="title text-clip job-title" >
                                                        PHP Developer - Junior / Senior (Làm Việc Tại Hà Nội)</p>
                                                    <div class="text-gray-light text-light company-info">
                                            <span class="company text-clip text-uppercase">
                                                Yumeshin Vietnam</span>
                                                        <span class="hidden-xs">-</span>
                                                        <span class="location hidden-xs">Bac Ninh, Ha Noi, Hung Yen</span>
                                                    </div>
                                                </a>
                                            </div>
                                                <span class="hot-job-badge">Hot</span>
                                        </div>
                                        <!-- End Job -->
                                    </div>
                            
                            </div>
                        </div>
                                                                      
                        <div class="job-page">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Job -->
                                    <div class="job  row">
                                        <div class="col-xs-2 col-logo">
                                            <!-- Logo -->
                                            <div class="logo-box">
                                                <a data-item-id="1041711" href=""
                                                   target="_blank" title="Việc làm - Fresher Tester - VietnamWorks - Hồ Ch&iacute; Minh">
                                                <img class="img-responsive logo" id="topjob-logo-1041711"
                                                         src="images/logo_102945.png"
                                                         alt="Fresher Tester">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 col-content">
                                            <!-- Job Description-->
                                            <a data-item-id="1041711" href="" target="_blank" title="Việc làm - Fresher Tester - VietnamWorks - Hồ Ch&iacute; Minh">
                                                <p class="title text-clip job-title">
                                                    Fresher Tester</p>
                                                <div class="text-gray-light text-light company-info">
                                                    <span class="company text-clip text-uppercase">
                                                        VietnamWorks</span>
                                                    <span class="hidden-xs">-</span>
                                                    <span class="location hidden-xs">Hồ Chí Minh</span>
                                                </div>
                                            </a>
                                        </div>
                                            <span class="hot-job-badge">Hot</span>
                                    </div>
                                    <!-- End Job -->
                                </div>
                                   
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel -->
                </div>
            </div>
            <!--/ Top Jobs -->
        </div>
    </div>
</section>

<section class="home__other-employers animated fadeIn">
    <h1 class="text-center">Các Nhà Tuyển Dụng Hàng Đầu</h1>
    <div class="container">
        <div class="row logo-list">
            <div class="logo col-xs-4 col-md-2">
                <a class="box flex-center-xy" href="" target="_blank">
                    <img class="img-responsive" src="images/logo_102945.png" alt="Logo">
                </a>
            </div>       
            
            <div class="logo col-xs-4 col-md-2">
                <a class="box flex-center-xy" href="" target="_blank">
                    <img class="img-responsive" src="images/5.Uniprime_104617.png" alt="Logo">
                </a>
            </div>       
            
            <div class="logo col-xs-4 col-md-2">
                <a class="box flex-center-xy" href="" target="_blank">
                    <img class="img-responsive" src="images/88x43-Green_104721.jpg" alt="Logo">
                </a>
            </div>       
            
            <div class="logo col-xs-4 col-md-2">
                <a class="box flex-center-xy" href="" target="_blank">
                    <img class="img-responsive" src="images/FETOMEC_104604.jpg" alt="Logo">
                </a>
            </div>       
            
            <div class="logo col-xs-4 col-md-2">
                <a class="box flex-center-xy" href="" target="_blank">
                    <img class="img-responsive" src="images/logo_104713.png" alt="Logo">
                </a>
            </div>       
            
            <div class="logo col-xs-4 col-md-2">
                <a class="box flex-center-xy" href="" target="_blank">
                    <img class="img-responsive" src="images/88x43-Land_104664.jpg" alt="Logo">
                </a>
            </div>             
                   
            </div>  
    </div>
</section>

</div>
<!-- Popup move up banner -->
</div>
<!-- End move up banner -->

 <script type="text/javascript">
    $(document).on('click', '.top-banner .close', function () {
        var adata = {
            "type": "close_promo_banner"
        };
        $.ajax({
            type: "POST", url: "/header_ajax.php",
            data: adata,
            dataType: "html",
            success: function (data) {
                $('.top-banner').slideUp();
            }
        });
    });
    var GRAVITY_TIME_OUT = '<p>Connection timeout. Please refresh the page.</p>';
    var HOME_AB_TESTING = 'B';
</script>
<script type="text/javascript">
    $(function() {
        VNW_GA.initHomePage('B');
    });
</script>

<div class="modal fade global__registration-modal" data-current-url="" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content step-1">
            <div class="modal-body">
                <!-- Step 1 Head -->
                <div class="step-1 animated fadeIn">
                    <button type="button" class="close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-center m-t-none modal-heading">Đăng Ký Thành Viên</div>
                </div>
                <!-- Step 1 & 2 Registration Form -->
<?php
	// Kết nối database, lấy dữ liệu chung
	include('includes/general.php');
?>
                <form class="awe-check" autocomplete="off" id="formJoin1" method="POST" onsubmit="return false;">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tên</label>
                                <input name="firstName" type="text" class="form-control first-name" id="firstName">
                                <div class="help-text text-danger error__required-field animated fadeIn" hidden>Vui lòng nhập tên.
                                    </div>
                                <div class="help-text text-danger error__firstName_invalid-field animated fadeIn" hidden>Tên không hợp lệ.
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Họ</label>
                                <input name="lastName" type="text" class="form-control last-name" id="lastName">
                                <div class="help-text text-danger error__required-field animated fadeIn" hidden>Vui lòng nhập họ.
                                    </div>
                                <div class="help-text text-danger error__lastName_invalid-field animated fadeIn" hidden>Họ không hợp lệ.
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tài khoản</label>
                        <input type="text" name="Ten" class="form-control" id="username1">
                    </div>
                    <div class="form-group m-b-xs">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control password" id="password1">
                        <small class="help-text text-gray password-hint">Mật khẩu từ 6 đến 50 ký tự, ít nhất 1 ký tự viết hoa và 1 chữ số.
                        </small>
                        <div class="help-text text-danger error__required-field animated fadeIn" hidden>Vui lòng nhập mật khẩu.
                            </div>
                        <div class="help-text text-danger error__incorrect-password animated fadeIn" hidden>Mật khẩu không hợp lệ (6 đến 20 kí tự).
                            </div>
                        <div class="help-text text-danger error__invalid-password animated fadeIn" hidden></div>
                    </div>
                    <div class="form-group"><span
                                class="help-text text-danger error__csrf_token_invalid-field animated fadeIn" hidden>Csrf token không hợp lệ
                        </span></div>
                    <button type="submit" class="btn btn-regester btn-primary btn-register full-width btn-lg "><i class="fa fa-lg fa-pulse fa-spinner" style="display: none"></i><span>Đăng ký</span></button>
                    <div class="alert danger" style="text-align: center; color: red;"></div>
                </form>
                <p class="text-center text-light text-gray-light disclaimer animated fadeIn">
                    Nhấp chọn "Đăng ký", tôi đã đọc và đồng ý với các
                    <br/>
                    <a class="text-gray-light" href="">Quy định bảo mật</a> và <a class="text-gray-light" href="">Thỏa thuận sử dụng</a>
                </p>
                <!--/ Registration Form -->
                <hr class="hidden-xs"/>
                <!-- Step 1 Foot-->
                <div class="step-1 animated fadeIn">
                    <p class="text-center m-b-none sign-in">Bạn là thành viên Recuiting Online? <a class="clickable" onclick="event.preventDefault(); globalLogInModal.showModal();"><strong>Đăng nhập</strong></a></p>
                </div>
                <!--/ Step 1 Foot-->
            </div>
        </div>
    </div>
</div>
<!--/ Global: REGISTRATION MODAL -->
<!-- Global: SIGN IN MODAL -->
<div class="modal fade global__sign-in-modal" id="hide" data-current-url="" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" >
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center m-t-none modal-heading">Đăng Nhập</div>
                <p class="text-uppercase text-center">Sử dụng tài khoản Recuiting Online</p>
                <!-- Sign In Form -->
                <form class="awe-check" autocomplete="off" id="formJoin" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <label>Tài khoản</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group m-b-xs">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control password" id="password">
                        <div class="help-text text-danger error__required-field animated fadeIn" hidden>Vui lòng nhập mật khẩu
                            </div>
                        <div class="help-text text-danger error__incorrect-password animated fadeIn" hidden>Sai mật khẩu
                            </div>
                        <div class="help-text text-danger error__invalid-password animated fadeIn" hidden></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 text-right"><a class="inline m-t-sm forgot-password clickable" onclick="event.preventDefault(); globalForgotPasswordModal.showModal();">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit btn-primary btn-sign-in full-width btn-lg clickable" onclick="event.preventDefault(); globalLogInModal.handleLogin();">Đăng nhập</button>
                    <div class="alert danger" style="text-align: center; color: red;"></div>
                </form>
                <!--/ Sign In Form -->
                <hr class="hidden-xs"/>
                <p class="text-center m-b-none register clickable">Chưa có tài khoản? <a href="#" onclick="event.preventDefault(); globalRegistrationModal.showModal();"><strong>Đăng ký!</strong></a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
    
<!-- Footer -->
<footer>
        <div class="container">
            <div class="float-table-wrapper">
                <div class="pull-right go-top">
                    <span class="fa-stack fa-1x">
                        <a href="#top"><i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i></a>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <h5>Về Recuiting Online</h5>
                    <ul class="list-unstyled text-capitalize">
                        <li>
                            <a target="_blank" href="" title="Về Recuiting Online">Về Recuiting Online</a>
                        </li>
                        <li>
                            <a href=""  title="Liên Hệ">Liên Hệ</a>
                        </li>
                        <li>
                            <a href=""  title="Hỗ Trợ">Hỗ Trợ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="hidden-sm hidden-xs"/>
            <div class="copyright">
                <p class="text-muted text-center">Copyright © Sản xuất bởi trung tung tăng và vinh ngô
                </p>
            </div>
        </div>
    </footer>
    <div id="abc">sssss</div>
<script type="text/javascript">
	var system_version = 'zr1544699339';
		language = 1,
		base_url = '';
    	var isIndexPage = 'true';
        var isInnerShowTooltipPage = 'false';
        var showProfileModal = false;
        var redirectUserOnboard = null;
        var showLoginModal = false;
        var socialLoginError = null;
    
    	$(document).ready(function() {
		$("#frm_block_quick_search [name='keyword']").focus();
	});
</script>
<script type="text/javascript">
    	var _gaq = _gaq || [];

	function customEvent(uniqueName, action, label, value) {
		if (_gaq) {
			_gaq.push(['_trackEvent', uniqueName, action, label], value || 1); // 'Videos', 'Play', 'First Birthday'
		}
	}
</script>
<script type="text/javascript" src="js/join.js"></script>
<script type="text/javascript" src="js/ui.js"></script>
<script type="text/javascript" src="js/globalOnBoardingModals.js"></script>
</body>
</html>
