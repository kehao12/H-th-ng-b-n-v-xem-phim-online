<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phim</title>
	<base href="<?php echo asset('') ?>">

	<link rel="stylesheet" type="text/css" href="css/chitietphim.css">
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
			<span class="day">{{$phim->thoiLuong}} phút</span>
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

					@foreach($lichchieuphim1 as $lc)
					
					<button class="date_list" onclick="chonlich(event, '{{$lc->ngayChieu}}')">{{$lc->ngayChieu}}</button>

					@endforeach

				</div>
				<div class="tab_rap">
					@foreach($lichchieuphim1 as $lc)
					
					<div id="{{$lc->ngayChieu}}" class="rap1" style="display: none;">
						@foreach($rap as $r)
						<div class="rap">

							<p class="name">{{$r->tenRap}}</p>
							<p class="adrest">{{$r->diaChi}}</p>
							<?php $i=0?>
							@foreach($phongchieu as $pc)
							@foreach($phansuatchieu as $psc)
							@foreach($suatchieu as $sc)
							@foreach($lichchieuphim as $lc1)
							@if($r->id==$pc->idRap && $pc->id==$psc->idPC && $sc->id==$psc->idSC && $lc1->ngayChieu==$lc->ngayChieu && $lc1->idSC==$psc->idSC)
							<?php $i++ ?>
							<a href="" style="color: white;"><p class="time">{{$sc->gioChieu}}</p></a>
							@endif
							@endforeach
							@endforeach
							@endforeach
							@endforeach
							<?php if($i==0){?>
							<p class="adrest">Không có suất chiếu của phim này</p>

							<?php }?>
						</div>

						@endforeach
					</div>
					@endforeach
					
					
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
							<p class="detailInfo">{{$theloai->tenTL}}</p>
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
<script>
	function chonlich(evt,Name) {
    // Declare all variables
    var i, rap1, date_list;

    // Get all elements with class="tabcontent" and hide them
    rap1 = document.getElementsByClassName("rap1");
    for (i = 0; i < rap1.length; i++) {
    	rap1[i].style.display = "none";
    }


    // Get all elements with class="date_list" and remove the class "active"
    date_list = document.getElementsByClassName("date_list");
    for (i = 0; i < date_list.length; i++) {
    	date_list[i].className = date_list[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>