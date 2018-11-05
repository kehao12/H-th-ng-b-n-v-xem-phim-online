<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phim</title>
	<link rel="stylesheet" type="text/css" href="css/chitietphim.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>

	<div class="main">
		<div class="background" 
		style="background: url(images/{{$phim->poster}}) center center / cover no-repeat;">
	</div>
	<div class="layer" ></div>
	<div class="detail_main mainMaxwidth">
		<div class="col-sm-4">
			<div class="poster">
				<img src="images/{{$phim->poster}}"  alt="Venom">
				<button type="button" class="trailer showHover">
					<a href="{{$phim->trailer}}">
					<img src="images/play-video.png" style="height: 81px; width: 91px;">
					</a>
				</button>
			</div>
		</div>
		<div class="col-sm-8 info">

			<span class="day">{{$phim->ngayKhoiChieu}}</span>
			<br>
			<span class="age">C18</span>
			<span class="tit">{{$phim->tenPhim}}</span>
			<br>
			<span class="times">{{$phim->thoiLuong}}</span>
			<br>
			<span class="theloai">{{$theloai->tenTL}}</span>
			<br>
			<button type="button" class="ticket">Mua vé
			</button>
		</div>
	</div>
	<div class="tab">
		<div class="tablink">
			<div class="container menu_tab">
				<button  class="tablinks active">LỊCH CHIẾU</button>
				<button class="tablinks">THÔNG TIN</button>
			</div>
		</div>
		<div class="tab_content_big">
			<div class="contentMovies1 tab_content tab_1" style="display: block;">
				<div class="tab_date">
					<div class="date_list active">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					<div class="date_list">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					<div class="date_list">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					<div class="date_list">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					<div class="date_list">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					<div class="date_list">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					<div class="date_list">

						<p class="day">Thứ 7</p>
						<p class="date">20</p>
						
					</div>
					

				</div>
				<div class="tab_rap">
					<div class="rap">
						<p class="name">Rạp số 1</p>
						<p class="adrest">Địa chỉ : xxx Kinh Dương Vương, Q.6</p>
						<p class="time">10:00</p>
						<p class="time">11:00</p>
						<p class="time">12:00</p>
						<p class="time">13:00</p>
						<p class="time">14:00</p>
					</div>
					<div class="rap">
						<p class="name">Rạp số 1</p>
						<p class="adrest">Địa chỉ : xxx Kinh Dương Vương, Q.6</p>
						<p class="time">10:00</p>
						<p class="time">11:00</p>
						<p class="time">12:00</p>
						<p class="time">13:00</p>
						<p class="time">14:00</p>
					</div>
					<div class="rap">
						<p class="name">Rạp số 1</p>
						<p class="adrest">Địa chỉ : xxx Kinh Dương Vương, Q.6</p>
						<p class="time">10:00</p>
						<p class="time">11:00</p>
						<p class="time">12:00</p>
						<p class="time">13:00</p>
						<p class="time">14:00</p>
					</div>
					
				</div>
			</div>
			<div  class="contentMovies1 noidung tab_1">
				<div class="row">
					<div class="col-md-6">
						<div class="row LeftInfo">
							<p class="nameInfo">Ngày phát hành</p>
							<p class="detailInfo">{{$phim->ngayKhoiChieu}}</p>
						</div>
						<div class="row LeftInfo">
							<p class="nameInfo">Đạo diễn</p>
							<p class="detailInfo">ABCDEF</p>
						</div>
						<div class="row LeftInfo">
							<p class="nameInfo">Diễn viên</p>
							<p class="detailInfo">Song Luân, Liên Bỉnh Phát, Hồng Đào, Quang Minh, Ngân Khánh</p>
						</div>
						<div class="row LeftInfo">
							<p class="nameInfo">Thể loại</p>
							<p class="detailInfo">{{$phim->idTL}}</p>
						</div>
					</div>
					<div class="col-md-6">
						<span class="tieude">Nội Dung</span>
						<br>
						<br>
						<p>{{$phim->noiDung}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>