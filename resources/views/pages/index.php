<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InfinityCinema</title>
	<base href="<?php echo asset('') ?>">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<!-- menu -->
		<div class="allMenu">
			<div class="menu">
				<div class="container">
					<div class="tong">
						<div class="logo"><a href=""><img src="images/logo12.png"></a></div>
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
						<div class="logIn">
							<a href="">Đăng Nhập</a>
						</div>
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
							<div class="day">
								<ul>
									<li>Thứ 7 <span>06</span></li>
									<li>Thứ 7 <span>06</span></li>
									<li>Thứ 7 <span>06</span></li>
									<li>Thứ 7 <span>06</span></li>
									<li>Thứ 7 <span>06</span></li>
									<li>Thứ 7 <span>06</span></li>
									<li>Thứ 7 <span>06</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="suatChieu">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="tenRap">
								<ul>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>
									<li><h3>RAP SO 1</h3></li>

								</ul>
							</div>
						</div>
						<div class="col-md-8">
							<div class="blockLichMovie">
								<div class="lichMovies">
									<ul>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
								<div class="lichMovies">
									<ul>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
								<div class="lichMovies">
									<ul>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="infoLichMovie">
												<img src="images/cover_mb.jpg" class="img-fluid" style="height: 60px !important;float: left;">
												<h5>Ten phim <span>120 phut</span></h5>
											</div>
											<div class="dateTimeMovie">
												<ul>
													<li>
														<a >11:45</a>
													</li>
													<li>
														<a >16:00</a>
													</li>
													<li>
														<a >18:00</a>
													</li>
													<li>
														<a >20:00</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="numberGhe">
			<h3>Màn Hình</h3>
			<div class="manHinh"></div>
			<div class="listGhe">
				<div class="dayA">
					<div class="container">
						<h4>A</h4>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
					</div>					
				</div>	
				<div class="dayB">
					<div class="container">
						<h4>B</h4>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
					</div>					
				</div>	
				<div class="dayC">
					<div class="container">
						<h4>C</h4>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
					</div>					
				</div>	
				<div class="dayD">
					<div class="container">
						<h4>D</h4>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
					</div>					
				</div>	
				<div class="dayE">
					<div class="container">
						<h4>E</h4>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
						<span class="seat"></span>
					</div>					
				</div>	
			</div>
			<div class="infoSeat">
				<ul>
					<li>
						<span id="gheTrong"></span>
						<h5>Ghế trống</h5>
					</li>
					<li>
						<span id="pickSeat"></span>
						<h5>Ghế đang chọn</h5>
					</li>
					<li>
						<span id="blockSeat"><img class="img-fluid" src="images/cancel.png"></span>
						<h5>Ghế đã được đặt</h5>
					</li>
				</ul>
			</div>	
			<div class="nutDatve">
				<a href="">ĐẶT VÉ NGAY</a>
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
</body>
</html>
