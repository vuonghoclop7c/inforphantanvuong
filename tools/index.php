<?php
ob_start();
session_start();
$hour = date("G");
$duykhang = true;
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>TuongTac.Biz | Tools Facebook Cực Chất Ahihi</title>
    <meta name="theme-color" content="red" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TuongTac.Biz , SonSexy.oOo">
    <meta name="author" content="SonSexy">
    <meta name="copyright" content="SonSexy">
    <meta property="og:title" content="TuongTac.Biz - VIP Auto Facebook System" />
    <meta property="og:url" content="Http://TuongTac.Biz" />
    <meta property="og:type" content="Website,Tools,Facebook" />
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126242279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126242279-1');
</script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="trang-chu.html"> <img alt="cái này gọi nà cái logo ík" src="img/logo20.png" class="hidden-xs"/>
                <span>TuongTac.Biz</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo "IP hiện tại của bạn: " . $ip; ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="https://fb.com/sonsexyz">Trang cá nhân Admin</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Thay Đổi Giao Diện</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="http://sonsexy.ooo/dich-vu" target="_blank"><i class="glyphicon glyphicon-globe"></i> Dịch Vụ Facebook</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Liên Kết <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="//fb.com/sonsexyz">Facebook Nguyễn Thanh Sơn</a></li>

                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Tìm kiếm" class="search-query form-control col-md-10" name="error"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>

    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <?php if ($duykhang == true) { ?>
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="trang-chu.html"><i class="glyphicon glyphicon-home"></i><span> Trang Chủ</span></a>
                        </li>
                        <li class="nav-header">Token Tools</li>
                        <li><a class="ajax-link" href="check-token.html"><i class="glyphicon glyphicon-eye-open"></i><span> Check Live Token</span></a>
                        </li>
                        <li><a class="ajax-link" href="check-sub-token.html"><i class="glyphicon glyphicon-edit"></i><span> Check Sub Token</span></a></li>
                        <li><a class="ajax-link" href="destroy-token.html"><i class="glyphicon glyphicon-list-alt"></i><span> Destroy Token</span></a>
                        </li>
                        <li><a class="ajax-link" href="loc-trung-token.html"><i class="glyphicon glyphicon-font"></i><span> Lọc Trùng Token</span></a>
                        </li>
                        <li><a class="ajax-link" href="loc-token-tu-list.html"><i class="glyphicon glyphicon-picture"></i><span> Lọc Token Từ List</span></a>
                        </li>
                        <li><a class="ajax-link" href="loc-quoc-gia.html"><i class="glyphicon glyphicon-hand-down"></i><span> Lọc Quốc Gia VN</span></a>
                        </li>
                        <li><a class="ajax-link" href="loc-token-ao.html"><i class="glyphicon glyphicon-transfer"></i><span> Lọc Token Ảo</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-hand-right"></i><span> Get Token</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="get-token.html">Get Token Full Quyền</a></li>
                                <li><a href="get-token-tu-clone.html">Get Token Clone Sll</a></li>
                                <li><a href="get-token-fanpage.html">Get Token Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-header hidden-md">Facebook Tools</li>
                        <li><a class="ajax-link" href="dem-tin-nhan.html"><i class="glyphicon glyphicon-align-justify"></i><span> Đếm Tin Nhắn</span></a>
                        </li>
                        <li><a class="ajax-link" href="check-live-uid.html"><i class="glyphicon glyphicon-magnet"></i><span> Check Live UID</span></a>
                        </li>
                        <li><a class="ajax-link" href="chuyen-token-qua-cookie.html"><i class="glyphicon glyphicon-resize-small"></i><span> Chuyển Token Qua Cookie</span></a>
                        </li>
                        <li><a href="check-live-clone.html"><i class="glyphicon glyphicon-globe"></i><span> Check Live Clone</span></a>
                        </li>
                        <li class="nav-header hidden-md">Buzz Tools</li>
                        <li><a class="ajax-link" href="buzz-rate.html"><i class="glyphicon glyphicon-star"></i><span> Buzz Đánh Giá</span></a>
                        </li>
                        <li><a href="buzz-comment.html"><i class="glyphicon glyphicon-comment"></i><span> Buzz Bình Luận</span></a>
                        </li>
                        <li><a href="buzz-request.html"><i class="glyphicon glyphicon-lock"></i><span> Buzz Kết Bạn</span></a>
                        </li>
                        <li><a href="buzz-reaction.html"><i class="glyphicon glyphicon-fire"></i><span> Buzz Cảm Xúc</span></a>
                        </li>
                    </ul>
                    <?php } ?>

                </div>
            </div>
        </div>
            <section class="content">
            <div class="container-fluid">
                <!-- content here -->
                <?php
                if ($duykhang == true) {
                    if (isset($_GET['DK'])) {
                        $DK = $_GET['DK'];
                        switch ($DK) {

                // Token Tools
                case 'Check_Live':
                    include 'token/check.php';
                    break;
                case 'Destroy_Token':
                    include 'token/destroy.php';
                    break;
                case 'Check_Info':
                    include 'token/check_info.php';
                    break;
                case 'Check_Sub':
                    include 'token/check_sub.php';
                    break;
                case 'Loc_Trung':
                    include 'token/loc_trung.php';
                    break;
                case 'Loc_List':
                    include 'token/loc_list.php';
                    break;
                case 'Loc_Quoc_Gia':
                    include 'token/loc_quoc_gia.php';
                    break;
                case 'Check_Live_Speed':
                    include 'token/loc-token.php';
                    break;
                case 'Loc_Token_Ao':
                    include 'token/loc_ao.php';
                    break;
                case 'Get_Token_Clone':
                    include 'token/get_clone/getclone.php';
                    break;
                case 'Get_Token_Page':
                    include 'token/get_page/duykhang.php';
                    break;
                case 'Get_Token':
                    include 'token/get_token/get-token.php';
                    break;
                
                // Facebook Tools
                case 'Loc_Ban_Be':
                    include 'tools/loc_ban_be.php';
                    break;
                case 'Dem_Tin_Nhan':
                    include 'tools/inbox/getib.php';
                    break;
                case 'Check_Live_UID':
                    include 'tools/check_uid.php';
                    break;
                case 'Convert_Token':
                    include 'tools/token-cookie.php';
                    break;
                case 'Check_Clone':
                    include 'tools/check_clone.php';
                    break;

                // Buzz Tools
                case 'Buzz_Binh_Luan':
                    include 'tools/buzz/buzzcmt.php';
                    break;
                case 'Buzz_Danh_Gia':
                    include 'tools/buzz/buzzrate.php';
                    break;
                case 'Buzz_Request':
                    include 'tools/buzz/buzzfriend.php';
                    break;
                case 'Buzz_Reaction':
                    include 'tools/buzz/buzzlike.php';
                    break;
                            
                    default:
                    header('Location: trang-chu.html');
                    break;
                        }
                    } else {
                        include 'dash.php';
                    }
                }
                ?>
            </div>
        </section>
    
    <hr>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://TuongTac.Biz" target="_blank">TuongTac.Biz</a> 2018-2019</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="//fb.com/sonsexyz">Sơn Sexy</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/ext.js"></script>
<!-- ctrl key -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
</body>
</html>
