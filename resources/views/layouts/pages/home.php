<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InfinityCinema</title>
	<base href="<?php echo(asset('')); ?>">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/angular-material.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-toastr/jquery.toast.min.css">
</head>
<body ng-app="myHome" ng-click="Hide">
	<header>
		<!-- menu -->
		<div class="allMenu">
			<div class="menu">
				<div class="container">
					<div class="tong">
						<div class="logo"><a href="home"><img src="images/logo12.png"></a></div>
						<div class="subMenu">
							<ul>
								<li><a  >Trang Chủ</a></li>
								<li><a >Lịch Chiếu</a></li>
								<li><a >Phim</a></li>
							</ul>
						</div>
						<div class="search">
							<img src="images/search.png" class="searchIcon img-fluid">
						</div>
						<?php if(Session::has('login')&& Session::get('login')==true){ ?>
							<div class="dropdown" style="margin-top: 1%;width: 16%;float: left;margin-left: 2%;">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" style="width: 100%;font-size: 14px;overflow: hidden;background-image: linear-gradient(90deg, #ff4ec9 0%, #47a0e0 100%);box-shadow: 0 0 20px 0 rgba(88, 209, 255, 0.5);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xin chào&ensp;<?php echo Session::get('khachhang'); ?>
							</button>
							<div class="dropdown-menu" style="font-size: 14px;" aria-labelledby="dropdownMenu2">
								<button class="dropdown-item" type="button"><a href="">Tài khoản</a></button>
								<button class="dropdown-item" type="button"><a href="logOut">Đăng xuất</a></button>
							</div>
						</div>

					<?php }else{ ?>
						<div class="logIn">
							<a href="logInKh">Đăng Nhập</a>
						</div>
					<?php } ?>	

				</div>
			</div>
		</div>
		<div class="searchBar">
			<form>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<input type="text" name="keyWord" placeholder="Nhap tu khoa">
							<button>Search</button>
						</div>
					</div>
				</div>

			</form>	
		</div>
	</div>
	<!-- end menu -->
	<div class="layerCha">
		<div id="banner" style="background: url(images/home_bg.jpg) center center / cover no-repeat;"></div>
		<div class="layerChild">			
		</div>
		<div class="slide">
			<h1><b>PHIM</b> ĐANG CHIẾU</h1>
			<div class="nutLeft"><span></span></div>
			<div class="nutRight"><span></span></div>	
		</div>
		<div class="slideCha">
			<div class="frame">
				<div class="slideImg">
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<div class="layerSlideChild"></div>
						<img class="play img-fluid" src="images/play-icon.png"></img>	
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<div class="layerSlideChild"></div>
						<img class="play img-fluid" src="images/play-icon.png"></img>
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<div class="layerSlideChild"></div>
						<img class="play img-fluid" src="images/play-icon.png"></img>
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<img class="play img-fluid" src="images/play-icon.png"></img>
						<div class="layerSlideChild"></div>
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<img class="play img-fluid" src="images/play-icon.png"></img>
						<div class="layerSlideChild"></div>
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<img class="play img-fluid" src="images/play-icon.png"></img>
						<div class="layerSlideChild"></div>
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
					<div class="slideChild">
						<img src="images/cover.jpg" alt="" class="img-fluid">
						<img class="play img-fluid" src="images/play-icon.png"></img>
						<div class="layerSlideChild"></div>
						<div class="ndPhim">
							<h3><a href="">Ten Phim</a></h3>
							<h4><a href="">the loai</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- <div class="trailerMovie">
			<div class="layoutBlack"></div>
			<div class="nutClose"></div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/TNJYUZdHjf8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div> -->


	</header>
	<!-- list movie</!-->
	<div class="part2">
		<div class="listMovies">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>Danh Sách Phim</h1>
						<div class="catetory">
							<ul>
								<li><a class="ad vien" >Phim Mới</a></li>
								<li><a class="ad">Top Phim Xem Nhiều</a></li>
								<li><a class="ad">Phim Sắp Chiếu</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contentPart2">
			<div class="cateMove movieActive">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>

						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>

						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<div class="nenLayout">
									<img src="images/play-icon.png" class="img-fluid">
								</div>
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cateMove">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover2.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>

						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>

						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cateMove">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover3.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>

						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>

						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
						<div class="col-sm-4 col-md-2">
							<div class="movie">
								<img src="images/cover.jpg" class="img-fluid">
								<h3><a href="">Ten phim</a></h3>
								<h4><a href="">the loai</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end list movie</!-->
	<!-- lich chieu</!-->
	<div class="lichChieu">
		<img class="img-fluid" src="images/section.jpg"></img>
		<div class="formLichChieu">
			<div class="dateTime">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="nameRap"><h2>TÊN RẠP</h2></div>
						</div>
						<div class="col-md-8">
							<div id="tenPhim">
								<h2>PHIM TRONG NGÀY</h2>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="suatChieu" ng-controller="showInfoLich">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="tenRap" ng-init="curre=[]">
								<ul >									
									<li ng-repeat="rap in rapPhim" ng-init="mauAct=rap.id" ng-click="getIdRap(rap,curre)" ng-model="rap.id" ><a href="home#/lichChieu" style="text-decoration: none; color: gray;" ng-click="rsArr()"><h3  ng-style="{color: curre[0] == mauAct ?'white':''} " >{{rap.tenRap}}</h3></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-8">
							<?php if(Session::has('login')&& Session::get('login')==true){ ?>
								<input type="hidden" name="" id="giaTriKH" value="<?php echo  Session::get('khachhang'); ?>">
								<div class="blockLichMovie" ng-view>
									
								</div>
							<?php }else{ ?>
								<div class="blockLichMovie">
									<h5 style="text-align: center; margin-top: 28%;">ĐĂNG NHẬP ĐỂ SỬ DỤNG CHỨC NĂNG</h5>
								</div>
							<?php } ?>
							
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- end lich chieu</!-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Điều khoản sử dụng</h3>
					<ul>
						<li>Điều khoản sử dụng</li>
						<li>Điều khoản chung</li>
						<li>Chính sách bảo mật</li>
						<li>Câu hỏi thường gặp</li>
					</ul>
				</div>
				<div class="col-md-6">
					<h3>CHĂM SÓC KHÁCH HÀNG</h3>
					<ul>
						<li>Hotline : xx24144</li>
						<li>Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</li>
						<li>Email hỗ trợ: sd-asd-@gmail.com</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="copyRight">
				<h5>© 2018 H.A.H Team</h5>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>  
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="js/angular-animate.min.js"></script>
	<script type="text/javascript" src="js/angular-aria.min.js"></script>
	<script type="text/javascript" src="js/angular-messages.min.js"></script>
	<script type="text/javascript" src="js/angular-material.min.js"></script>  
	<script type="text/javascript" src="js/angular-route.min.js"></script>  
	<script type="text/javascript" src="js/functionAngularjsHome.js"></script>  
	<script type="text/javascript" src="js/function.js"></script>  
	<script type="text/javascript" src="plugins/jquery-toastr/jquery.toast.min.js"></script>
	<script type="text/javascript" src="js/jquery.toastr.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script> 
	<?php 
	if(Session::has('toast')){ ?>
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
		<?php 		Session::forget('toast');
	} ?>


</body>
</html>
