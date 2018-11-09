<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin khách hàng</title>
	<base href="<?php echo asset('') ?>">
	<link rel="stylesheet" type="text/css" href="css/chitietphim.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="thongtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="taikhoan">
						<h1>TÀI KHOẢN KHÁCH HÀNG</h1>
					</div>
					<div class="menu_info">
						<span>CHI TIẾT TÀI KHOẢN</span>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="tit_tk">
						<h1>THAY ĐỔI THÔNG TIN</h1>
					</div>
					

					<form action="{{route('thaythongtin')}}" method="post" accept-charset="utf-8">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<div class="nd">
										<label for="fristname">Tên</label>
										<br>
										<input type="text" name="ten">
									</div>

									<div class="nd">
										<label for="fristname">Địa Chỉ Email</label>
										<br>
										<input type="text" name="email">
									</div>
								</div>

								<div class="col-sm-6">
									
									<div class="nd">
										<label for="fristname">Điện Thoại</label>
										<br>
										<input type="text" name="sdt">
									</div>
									<div class="nut">
										<input type="submit">
									</div>
									
								</div>
							</div>
						</div>

						</form>
					
				</div>
			</div>
			
		</div>
	</div>
</body>

</html>