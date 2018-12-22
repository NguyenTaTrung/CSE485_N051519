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
                            <img class="" src="images/img_tdo.png" alt="" title="" height="60px">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="hidden-xs">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="">Tất Cả Việc Làm</a>
                            </li>
                            <li>
                                <a href="">Công Ty</a>
                            </li>
                            <li>
                                <a target="_blank" href="">Tư Vấn</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="clickable" rel="nofollow" onclick="globalLogInModal.showModal();">Đăng Nhập</a>
                            </li>
                            <li>
                                <a class="clickable" rel="nofollow" onclick="globalRegistrationModal.showModal();">Đăng Ký</a>
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
                                <a class="clickable" rel="nofollow" onclick="globalLogInModal.showModal();">
                                    <span>Đăng Nhập</span>
                                </a>
                            </li>
                            <li>
                                <a class="clickable" rel="nofollow" onclick="globalRegistrationModal.showModal();">
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
                        <form class="form-inline form-adjacent form-checkbox-advanced" name="search" onSubmit="return submitBlockSearchForm()" id="frm_block_quick_search"
                              method="get">
                            <div class="search-group">
                                <div class="form-group col-sm-4 keyword-search no-padding">
                                    <i hidden class="fa fa-long-arrow-left clickable keyword-search__close"></i>
                                    <i class="fa fa-close clear-keyword clickable absolute"></i>
                                    <div class="border-text-box">
                                        <input type="text" name="keyword" id="keywordMainSearch" value=""
                                               class="form-control job-typeahead col-xs-8 col-sm-12 col-md-8" placeholder="Việc làm, công ty">
                                    </div>
                                </div>
                                <div class="form-group col-sm-3 category-search no-padding">
                                    <div class="border-text-box">
                                        <select data-search-input-placeholder="Tìm kiếm ngành nghề" data-placeholder="All categories" class="select-category"
                                                id="cateListMainSearch" name="industry[]">
<option value="-1">Tất cả ngành nghề</option>
<option value='83'>An to&agrave;n lao động</option>
<option value='78'>B&aacute;c sĩ</option>
<option value='33'>B&aacute;n h&agrave;ng</option>
<option value='34'>B&aacute;n h&agrave;ng kỹ thuật</option>
<option value='32'>B&aacute;n lẻ/B&aacute;n sỉ</option>
<option value='24'>Bảo hiểm</option>
<option value='84'>Bảo tr&igrave;/Sửa chữa</option>
<option value='30'>Bất động sản</option>
<option value='47'>Bi&ecirc;n phi&ecirc;n dịch</option>
<option value='17'>Cấp quản l&yacute; điều h&agrave;nh</option>
<option value='56'>Chứng kho&aacute;n</option>
<option value='65'>Cơ kh&iacute;</option>
<option value='66'>C&ocirc;ng nghệ cao</option>
<option value='28'>Dầu kh&iacute;</option>
<option value='52'>Dệt may/Da gi&agrave;y</option>
<option value='11'>Dịch vụ kh&aacute;ch h&agrave;ng</option>
<option value='6'>Dược Phẩm/C&ocirc;ng nghệ sinh học</option>
<option value='80'>Dược sĩ</option>
<option value='12'>Gi&aacute;o dục/Đ&agrave;o tạo</option>
<option value='62'>H&agrave;ng cao cấp</option>
<option value='75'>H&agrave;ng gia dụng</option>
<option value='82'>H&agrave;ng hải</option>
<option value='37'>H&agrave;ng kh&ocirc;ng/Du lịch</option>
<option value='74'>H&agrave;ng ti&ecirc;u d&ugrave;ng</option>
<option value='2'>H&agrave;nh ch&aacute;nh/Thư k&yacute;</option>
<option value='43'>H&oacute;a học/H&oacute;a sinh</option>
<option value='69'>Hoạch định/Dự &aacute;n</option>
<option value='72'>In ấn/ Xuất bản</option>
<option value='57'>Internet/Online Media</option>
<option value='35'>IT - Phần mềm</option>
<option value='55'>IT-Phần cứng/Mạng</option>
<option value='1'>Kế to&aacute;n</option>
<option value='53'>Kho vận</option>
<option value='58'>Kiểm to&aacute;n</option>
<option value='5'>Kiến tr&uacute;c/Thiết kế nội thất </option>
<option value='27'>Marketing</option>
<option value='15'>Mới tốt nghiệp</option>
<option value='16'>M&ocirc;i trường/Xử l&yacute; chất thải</option>
<option value='10'>Mỹ Thuật/Nghệ Thuật/Thiết Kế</option>
<option value='42'>Ng&acirc;n h&agrave;ng</option>
<option value='18'>Người nước ngo&agrave;i/Việt Kiều</option>
<option value='73'>Nh&agrave; h&agrave;ng/Kh&aacute;ch sạn</option>
<option value='23'>Nh&acirc;n sự</option>
<option value='4'>N&ocirc;ng nghiệp/L&acirc;m nghiệp</option>
<option value='71'>Overseas Jobs</option>
<option value='25'>Ph&aacute;p l&yacute;</option>
<option value='21'>Phi ch&iacute;nh phủ/Phi lợi nhuận</option>
<option value='70'>QA/QC</option>
<option value='3'>Quảng c&aacute;o/Khuyến m&atilde;i/Đối ngoại</option>
<option value='68'>Sản phẩm c&ocirc;ng nghiệp</option>
<option value='26'>Sản Xuất</option>
<option value='59'>T&agrave;i ch&iacute;nh/Đầu tư</option>
<option value='63'>Thời trang</option>
<option value='51'>Thời vụ/Hợp đồng ngắn hạn</option>
<option value='49'>Thu Mua/Vật Tư/Cung Vận</option>
<option value='54'>Thực phẩm &amp; Đồ uống</option>
<option value='81'>Tr&igrave;nh dược vi&ecirc;n</option>
<option value='48'>Truyền h&igrave;nh/Truyền th&ocirc;ng/B&aacute;o ch&iacute;</option>
<option value='8'>Tư vấn</option>
<option value='67'>Tự động h&oacute;a/&Ocirc; t&ocirc;</option>
<option value='36'>Vận chuyển/Giao nhận</option>
<option value='41'>Viễn Th&ocirc;ng</option>
<option value='7'>X&acirc;y dựng</option>
<option value='19'>Xuất nhập khẩu</option>
<option value='79'>Y sĩ/Hộ l&yacute;</option>
<option value='22'>Y tế/Chăm s&oacute;c sức khỏe</option>
<option value='77'>Địa chất/Kho&aacute;ng sản</option>
<option value='76'>Điện lạnh/Nhiệt lạnh</option>
<option value='64'>Điện/Điện tử</option>
<option value='39'>Kh&aacute;c</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group location-search col-sm-3 no-padding">
                                    <div class="border-text-box">
                                        <select class="select-location" data-search-input-placeholder="Tìm kiếm địa điểm" id="locationMainSearch"
                                                name="location[]"
                                                data-placeholder="Select location">
                                            <option value="-1">Tất cả địa điểm</option>
                                            <option value='29'>Hồ Ch&iacute; Minh</option>
<option value='24'>H&agrave; Nội</option>
<option value='71'>ĐBSCL</option>
<option value='2'>An Giang</option>
<option value='3'>B&agrave; Rịa - Vũng T&agrave;u</option>
<option value='4'>Bắc Kạn</option>
<option value='5'>Bắc Giang</option>
<option value='6'>Bạc Li&ecirc;u</option>
<option value='7'>Bắc Ninh</option>
<option value='8'>Bến Tre</option>
<option value='9'>Bi&ecirc;n H&ograve;a</option>
<option value='10'>B&igrave;nh Định</option>
<option value='11'>B&igrave;nh Dương</option>
<option value='12'>B&igrave;nh Phước</option>
<option value='13'>B&igrave;nh Thuận</option>
<option value='14'>C&agrave; Mau</option>
<option value='15'>Cần Thơ</option>
<option value='16'>Cao Bằng</option>
<option value='17'>Đ&agrave; Nẵng</option>
<option value='18'>Đắk Lắk</option>
<option value='69'>Điện Bi&ecirc;n</option>
<option value='19'>Đồng Nai</option>
<option value='20'>Đồng Th&aacute;p</option>
<option value='21'>Gia Lai</option>
<option value='22'>H&agrave; Giang</option>
<option value='23'>H&agrave; Nam</option>
<option value='25'>H&agrave; T&acirc;y</option>
<option value='26'>H&agrave; Tĩnh</option>
<option value='27'>Hải Dương</option>
<option value='28'>Hải Ph&ograve;ng</option>
<option value='30'>H&ograve;a B&igrave;nh</option>
<option value='31'>Huế</option>
<option value='32'>Hưng Y&ecirc;n</option>
<option value='33'>Kh&aacute;nh H&ograve;a</option>
<option value='34'>Kon Tum</option>
<option value='35'>Lai Ch&acirc;u</option>
<option value='36'>L&acirc;m Đồng</option>
<option value='37'>Lạng Sơn</option>
<option value='38'>L&agrave;o Cai</option>
<option value='40'>Nam Định</option>
<option value='41'>Nghệ An</option>
<option value='42'>Ninh B&igrave;nh</option>
<option value='43'>Ninh Thuận</option>
<option value='44'>Ph&uacute; Thọ</option>
<option value='45'>Ph&uacute; Y&ecirc;n</option>
<option value='46'>Quảng B&igrave;nh</option>
<option value='47'>Quảng Nam</option>
<option value='48'>Quảng Ng&atilde;i</option>
<option value='49'>Quảng Ninh</option>
<option value='50'>Quảng Trị</option>
<option value='51'>S&oacute;c Trăng</option>
<option value='52'>Sơn La</option>
<option value='53'>T&acirc;y Ninh</option>
<option value='54'>Th&aacute;i B&igrave;nh</option>
<option value='55'>Th&aacute;i Nguy&ecirc;n</option>
<option value='56'>Thanh H&oacute;a</option>
<option value='57'>Thừa Thi&ecirc;n-Huế</option>
<option value='58'>Tiền Giang</option>
<option value='59'>Tr&agrave; Vinh</option>
<option value='60'>Tuy&ecirc;n Quang</option>
<option value='61'>Ki&ecirc;n Giang</option>
<option value='62'>Vĩnh Long</option>
<option value='63'>Vĩnh Ph&uacute;c</option>
<option value='65'>Y&ecirc;n B&aacute;i</option>
<option value='66'>Kh&aacute;c</option>
<option value='70'>Quốc tế</option>
<option value='72'>Hậu Giang</option>
<option value='73'>Đắk N&ocirc;ng</option>
<option value='39'>Long An</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 text-center no-padding">
                                    <button type="submit" class="btn btn-primary btn-search-all">
                                        Tìm Việc
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/ Jobs -->
                </div>
            </div>
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
                            <a target="_blank" href="" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                                                    <div class="col-sm-4 channel">
                        <div class="bg-channel it-channel"></div>
                        <div class="overlay"></div>
                        <div class="content it-content">
                            <img src="images/channel-icon-it.png"/>
                            <div class="channel-label">Việc Làm Ngành IT</div>
                            <div class="number-jobs">1360 Công Việc</div>
                            <a target="_blank" href="" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                                                    <div class="col-sm-4 channel">
                        <div class="bg-channel intern-channel"></div>
                        <div class="overlay"></div>
                        <div class="content intern-content">
                            <img src="images/channel-icon-intern.png"/>
                            <div class="channel-label">Mới Tốt Nghiệp</div>
                            <div class="number-jobs">692 Việc Làm</div>
                            <a target="_blank" href="" class="btn btn-primary">Xem</a>
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
        <div class="text-right">
            <a href="#" class="btn-view-all">
                Xem tất cả nhà tuyển dụng →
            </a>
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
                <form class="awe-check" autocomplete="off" id="formJoin" method="POST" onsubmit="return false;">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tên</label>
                                <input name="firstName" type="text" class="form-control first-name">
                                <div class="help-text text-danger error__required-field animated fadeIn" hidden>Vui lòng nhập tên.
                                    </div>
                                <div class="help-text text-danger error__firstName_invalid-field animated fadeIn" hidden>Tên không hợp lệ.
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Họ</label>
                                <input name="lastName" type="text" class="form-control last-name">
                                <div class="help-text text-danger error__required-field animated fadeIn" hidden>Vui lòng nhập họ.
                                    </div>
                                <div class="help-text text-danger error__lastName_invalid-field animated fadeIn" hidden>Họ không hợp lệ.
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" name="taikoan" class="form-control" id="username">
                    </div>
                    <div class="form-group m-b-xs">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control password">
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
                    <button type="submit" class="btn btn-primary btn-register full-width btn-lg "><i class="fa fa-lg fa-pulse fa-spinner" style="display: none"></i><span>Đăng ký</span></button>
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
<div class="modal fade global__sign-in-modal" data-current-url="" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" >
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center m-t-none modal-heading">Đăng Nhập</div>
                <p class="text-uppercase text-center">Sử dụng tài khoản Recuiting Online</p>
<?php
	// Kết nối database, lấy dữ liệu chung
	include('includes/general.php');
?>
                <!-- Sign In Form -->
                <form class="awe-check" autocomplete="off" id="formJoin" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <label>Tên</label>
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
                    <div class="alert danger"></div>
                </form>
                <!--/ Sign In Form -->
                <hr class="hidden-xs"/>
                <p class="text-center m-b-none register clickable">Chưa có tài khoản? <a href="#" onclick="event.preventDefault(); globalRegistrationModal.showModal();"><strong>Đăng ký!</strong></a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade global__matched-jobs-modal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="customEvent('OnBoarding', 'Close', 'Step4');">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center modal-heading">Việc làm phù hợp
                    <br class="visible-xs">
                    với hồ sơ của bạn
                </div>
                <div id="recommendation-jobs-modal"></div>
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
