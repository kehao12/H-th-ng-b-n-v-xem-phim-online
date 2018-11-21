<?php $url="http://localhost:8080/PROJECT/Cinema/public/admin#/"; 
session_start();

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Amin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/metisMenu.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/slicknav.min.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/angular-material.min.css">
	<!-- amchart css -->
	<!-- DataTables -->
	<link href="<?php echo asset('') ?>css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo asset('') ?>css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="<?php echo asset('') ?>css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo asset('') ?>css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<!-- others css -->
	<link rel="stylesheet" href="<?php echo asset('') ?>css/typography.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/default-css.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/styles.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/style_Ad1.css">
	<link rel="stylesheet" href="<?php echo asset('') ?>css/responsive.css">
	<link href="<?php echo asset('') ?>/plugins/custombox/css/custombox.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-toastr/jquery.toast.min.css"><!-- modernizr css -->
	<script src="<?php echo asset('') ?>js/modernizr-2.8.3.min.js"></script>
</head>
<body >
	
	<div class="page-container" ng-app="myApp">
		<!-- sidebar menu area start -->
		<div class="sidebar-menu">
			<div class="sidebar-header">
				<div class="logo">
					<a href="index.html"><img src="<?php echo asset('') ?>/images/logo12.png" alt="logo"></a>
				</div>
			</div>
			<div class="main-menu">
				<div class="menu-inner">
					<nav>
						<ul class="metismenu list-group" id="menu">
							<li class="active">
								<a href="#" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>								
							</li>
							<li >
								<?php if(Session::get('quyen') == 3){ ?>
									<a href="<?php echo $url; ?>nhanVien"><i class="ti-layout-sidebar-left "></i><span>QL NHÂN VIÊN
									</span></a>
									
								<?php } else{ ?>
									<a href="" aria-expanded="true" class="denied"><i class="ti-layout-sidebar-left "></i><span>QL NHÂN VIÊN
									</span></a>
								<?php } ?>
								
								
							</li>
							<li>
								<?php if(Session::get('quyen') == 1 || Session::get('quyen') == 3){ ?>
									<a href="" aria-expanded="true"><i class="ti-pie-chart"></i><span>QL THÔNG TIN RẠP</span></a>
									<ul class="collapse">
										<li><a href="http://localhost:8080/PROJECT/Cinema/public/admin#/rapAdd">THÊM MỚI</a></li>
										<li><a href="http://localhost:8080/PROJECT/Cinema/public/admin#/rapEdit">SỬA THÔNG TIN</a></li>
									</ul>
								<?php } else { ?>
									<a href="" aria-expanded="true" class="denied"><i class="ti-pie-chart"></i><span>QL THÔNG TIN RẠP</span></a>
								<?php } ?>
							</li>
							<li>
								<?php if(Session::get('quyen') == 1 || Session::get('quyen') == 3){ ?>
									<a href="#" aria-expanded="true" ><i class="ti-palette"></i><span>QL PHÒNG CHIẾU</span></a>
									<ul class="collapse">
										<li><a href="<?php echo $url; ?>pcAdd">THÊM MỚI</a></li>
										<li><a href="<?php echo $url; ?>pcEdit">SỬA THÔNG TIN</a></li>
									</ul>
								<?php } else{ ?>
									<a href="#" aria-expanded="true" class="denied"><i class="ti-palette"></i><span>QL PHÒNG CHIẾU</span></a>
								<?php } ?>
							</li>
							<li>
								<?php if(Session::get('quyen') == 1 || Session::get('quyen') == 3){ ?>
									<a href="#" aria-expanded="true" ><i class="ti-slice"></i><span>QL Phim</span></a>
									<ul class="collapse">
										<li><a href="<?php echo $url; ?>phimAdd">THÊM MỚI</a></li>
										<li><a href="<?php echo $url; ?>phimEdit">SỬA THÔNG TIN</a></li>
									</ul>
								<?php } else{ ?>
									<a href="#" aria-expanded="true" class="denied"><i class="ti-slice"></i><span>QL Phim</span></a>
								<?php } ?>
							</li>
							<li>
								<?php if(Session::get('quyen') == 2 || Session::get('quyen') == 3){ ?>
									<a href="#" aria-expanded="true" ><i class="ti-slice"></i><span>QL LỊCH CHIẾU</span></a>
									<ul class="collapse">
										<li><a href="<?php echo $url; ?>lichChieuAdd">THÊM MỚI</a></li>
										<li><a href="<?php echo $url; ?>lichChieuEdit">SỬA THÔNG TIN</a></li>
									</ul>
								<?php } else{ ?>
									<a href="#" aria-expanded="true" class="denied"><i class="ti-slice"></i><span>QL LỊCH CHIẾU</span></a>
								<?php } ?>
							</li>

							<li>
								<?php if(Session::get('quyen') == 2 || Session::get('quyen') == 3){ ?>
									<a href="<?php echo $url; ?>suatChieu" aria-expanded="true" ><i class="ti-slice"></i><span>QL SUẤT CHIẾU</span></a>
								<?php } else{ ?>
									<a href="#" aria-expanded="true" class="denied"><i class="ti-slice"></i><span>QL SUẤT CHIẾU</span></a>
								<?php } ?>	
							</li>
							<li>
								<?php if(Session::get('quyen') == 2 || Session::get('quyen') == 3){ ?>
									<a href="#" aria-expanded="true" ><i class="ti-slice"></i><span>QL VÉ</span></a>
									<ul class="collapse">
										<li><a href="<?php echo $url; ?>addVe">THÊM MỚI</a></li>
										<li><a href="<?php echo $url; ?>editVe">SỬA THÔNG TIN</a></li>
										<li><a href="<?php echo $url; ?>lichChieuEdit">DANH SÁCH VÉ ĐƯỢC MUA</a></li>
									</ul>
								<?php } else{ ?>
									<a href="#" aria-expanded="true" class="denied"><i class="ti-slice"></i><span>QL VÉ</span></a>
								<?php } ?>	
							</li>
							<li>
								<?php if(Session::get('quyen') == 1 || Session::get('quyen') == 3){ ?>
									
									<a href="<?php echo $url; ?>tl" aria-expanded="true"><i class="fa fa-table"></i>
										<span>QUẢN LÝ THỂ LOẠI</span></a>	
									<?php } else{ ?>	
										<a href="#" aria-expanded="true"><i class="fa fa-table"></i>
											<span>QUẢN LÝ THỂ LOẠI</span></a>	
										<?php } ?>		
									</li>							
									<li>
										<a href="#" aria-expanded="true"><i class="fa fa-table"></i>
											<span>DANH SÁCH KHÁCH HÀNG</span></a>		
										</li>							
										<li>
											<a href=#" aria-expanded="true"><i class="fa fa-table"></i>
												<span>Thống Kê</span></a>		
											</li>		
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!-- sidebar menu area end -->
						<!-- main content area start -->
						<div class="main-content" >
							<!-- header area start -->
							<div class="header-area">
								<div class="row align-items-center">
									<!-- nav and search button -->
									<div class="col-md-7 col-sm-4 clearfix">
										<div class="nav-btn pull-left">
											<span></span>
											<span></span>
											<span></span>
										</div>							
									</div>
									<div class="col-md-5 col-sm-4">
										<div class="user-profile pull-right">
											<img class="avatar user-thumb" src="<?php echo asset('') ?>/images/avatar-1.jpg" alt="avatar">
											<h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo Session::get('admin'); ?>
											<i class="fa fa-angle-down"></i></h4>
											<div class="dropdown-menu">
												<p class="dropdown-item">Xin chao!</p>
												<a class="dropdown-item" href="#">Tài Khoản </a>
												<a class="dropdown-item" href="logOutAd">Đăng Xuất</a>
											</div>
										</div>
									</div>

								</div>
							</div>
							<!-- header area end -->
							<!-- page title area start -->
							<div class="page-title-area">
								<div class="row align-items-center" style="    padding-top: 12px;">
									<div class="col-sm-6">
										<div class="breadcrumbs-area clearfix">
											<h4 class="page-title pull-left">Dashboard</h4>

										</div>
									</div>

								</div>
							</div>
							<!-- page title area end -->
							<div class="main-content-inner" >
								<div ng-view  style="margin-top:15px;"></div>			
							</div>
							<!-- main content area end -->
						</div>
					</div>		
					<script src="<?php echo asset('') ?>js/jquery.min.js"></script>
					<!-- bootstrap 4 js -->
					<script src="<?php echo asset('') ?>js/popper.min.js"></script>
					<script src="<?php echo asset('') ?>js/bootstrap.min.js"></script>
					<script src="<?php echo asset('') ?>js/owl.carousel.min.js"></script>
					<script src="<?php echo asset('') ?>js/metisMenu.min.js"></script>
					<script src="<?php echo asset('') ?>js/jquery.slimscroll.min.js"></script>
					<script src="<?php echo asset('') ?>js/jquery.slicknav.min.js"></script>
					<script src="<?php echo asset('') ?>js/line-chart.js"></script>



					<script src="<?php echo asset('') ?>js/function.js"></script>
					<!-- all pie chart -->
					<script src="<?php echo asset('') ?>js/pie-chart.js"></script>


					<!-- Start datatable js -->
					<script src="<?php echo asset('') ?>js/dataTables.select.min.js"></script>
					<!-- Required datatable js -->
					<script src="<?php echo asset('') ?>js/jquery.dataTables.min.js"></script>
					<script src="<?php echo asset('') ?>js/dataTables.bootstrap4.min.js"></script>
					<!-- Buttons examples -->
					<script src="<?php echo asset('') ?>js/dataTables.buttons.min.js"></script>
					<script src="<?php echo asset('') ?>js/buttons.bootstrap4.min.js"></script>
					<script src="<?php echo asset('') ?>js/jszip.min.js"></script>
					<script src="<?php echo asset('') ?>js/pdfmake.min.js"></script>
					<script src="<?php echo asset('') ?>js/vfs_fonts.js"></script>
					<script src="<?php echo asset('') ?>js/buttons.html5.min.js"></script>
					<script src="<?php echo asset('') ?>js/buttons.print.min.js"></script>
					<!-- Key Tables -->
					<script type="text/javascript" src="plugins/jquery-toastr/jquery.toast.min.js"></script>
					<script type="text/javascript" src="js/jquery.toastr.js"></script>
					<script src="<?php echo asset('') ?>js/dataTables.keyTable.min.js"></script>

					<!-- angularjs </!-->

					<script type="text/javascript" src="<?php echo asset('') ?>js/bootstrap.js"></script>  
					<script type="text/javascript" src="<?php echo asset('') ?>js/angular-1.5.min.js"></script>  
					<script type="text/javascript" src="<?php echo asset('') ?>js/angular-animate.min.js"></script>
					<script type="text/javascript" src="<?php echo asset('') ?>js/angular-aria.min.js"></script>
					<script type="text/javascript" src="<?php echo asset('') ?>js/angular-messages.min.js"></script>
					<script type="text/javascript" src="<?php echo asset('') ?>js/angular-material.min.js"></script>  
					<script type="text/javascript" src="<?php echo asset('') ?>js/angular-route.min.js"></script>  
					<script type="text/javascript" src="<?php echo asset('') ?>js/functionAngular.js"></script>  
					<script type="text/javascript" src="<?php echo asset('') ?>js/moment.min.js"></script>  
					<!-- end angularjs </!-->
					<!-- others plugins -->
					<script src="<?php echo asset('') ?>js/plugins.js"></script>
					<script src="<?php echo asset('') ?>js/scripts.js"></script>
					<script src="<?php echo asset('') ?>plugins/custombox/js/custombox.min.js"></script>
					<script src="<?php echo asset('') ?>plugins/custombox/js/legacy.min.js"></script>

					<?php 
					if(Session::has('toastAD')){ ?>
						<script type="text/javascript">
							$(window).ready(function(){
								$.toast({
									heading: 'Chúc mừng!',
									text: 'Bạn đã đăng nhập thành công',
									position: 'top-right',
									loaderBg: '#5ba035',
									icon: 'success',
									hideAfter: 3000,
									stack: 1
								});
							})
						</script>
						<?php 		Session::forget('toastAD');
					} ?>
				</body>
				</html>