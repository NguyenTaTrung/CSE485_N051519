<!DOCTYPE html>
<html lang="vi" class="vnw-home">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <title>Tuyển dụng, tìm việc làm nhanh mới nhất  | Recuiting Online</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" href="css/jobs-new.css">
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
                        <a class="navbar-brand hidden-xs" href="demo.php">
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
        </div>
        <!-- End Splitter Menu -->
    
<!--main-->
<?php
	// Kết nối database, lấy dữ liệu chung
    include('includes/general.php');

    $sql = "SELECT ct.TenCT,vl.TenVL,kv.TenKV,tt.Logo,tt.Luong,vl.TrangThai FROM khuvuc kv , congty ct, vieclam vl ,thongtin tt where tt.MaVL=vl.MaVL and vl.MaCT=ct.MaCT and ct.MaKV=kv.MaKV and vl.TrangThai='capquanly'";
    $kq=mysqli_query($cn,$sql);
    $sl=mysqli_num_rows($kq);
    
?>
<div class="page-white" style="padding-top: 25px;">
        <div class="container">
            
            <div class="row box-jobs">
                <div class="col-md-12 col-sm-12" id="box-salary-high-jobs">
                    <div class="box_general">
                        <h2 class="text_ellipsis uppercase">
                            <i class="icons8-sack-of-dollar-2 yellow-box-icon"></i>
                            <a href="javascript:void(0)" title="" style="color: #fff"> VIỆC LÀM CẤP QUẢN LÝ</a>
                        </h2>

                        
                        <div class="ctn-list-jobs">
                            <div class="item container-scroll">

                            <div class="el2">
                                    <section style="overflow: hidden">
                                        
                                        
                                        <div class="job-over-item">
                                            <div class="row job-item">
                                                <div class="col-md-7 col-sm-6 col-job-title">
                                                    <div class="row">
                                                        <div class="col-xs-3">Logo
                                                        </div>
                                                        <div class="col-xs-9">
                                                            <div class="title text_ellipsis">Việc Làm
                                                            </div>
                                                            <div class="company text_ellipsis">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-6 col-job-info text-dark-gray">
                                                    <div class="row">
                                                        <div class="salary col-xs-6">
                                                            <div class="">Lương</div>
                                                        </div>
                                                        <div title="" class="address col-xs-6">
                                                        <div class="t">Khu vực</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </div>

                               <?php while($row=mysqli_fetch_array($kq)){ ?>
                                
                                <div class="el2">
                                    <section style="overflow: hidden">
                                        
                                        
                                        <div class="job-over-item">
                                            <div class="row job-item">
                                                <div class="col-md-7 col-sm-6 col-job-title">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <a href="job.php?loc=<?php echo $row['TenVL'] ?>"
                                                                title="" target="_blank">
                                                                <img src="images/<?php echo $row['Logo'] ?>"
                                                                    
                                                                    alt=""
                                                                    title=""
                                                                    class="lazy img-responsive" style="width: 50px; height: auto;">
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-9">
                                                            <div class="title text_ellipsis">
                                                                <a href="job.php?loc=<?php echo $row['TenVL'] ?>"
                                                                    title="" target="_blank">
                                                                    <span>
                                                                        <strong data-toggle="tooltip" title=""
                                                                            data-placement="top" data-container="body"
                                                                            style="font-weight: bold;"><?php echo $row['TenVL'] ?></strong><!--nganh nghe-->
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="company text_ellipsis">
                                                                <a href="job.php?loc=<?php echo $row['TenVL'] ?>"
                                                                    target="_blank" title=""
                                                                    class="text-silver">
                                                                    <span data-toggle="tooltip" title=""
                                                                        data-placement="top" data-container="body"></span><?php echo $row['TenCT'] ?><!--cong ty-->
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-6 col-job-info text-dark-gray">
                                                    <div class="row">
                                                        <div class="salary col-xs-6">
                                                            <i class="icons8-dollar-sign text-highlight"></i><?php echo $row['Luong'] ?> Triệu<!--luong-->
                                                        </div>
                                                        <div title="" class="address col-xs-6">
                                                            <i class="icons8-map-pin text-highlight"></i><?php echo $row['TenKV'] ?><!--khu vực-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </div>
    <?php
    }
    ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


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