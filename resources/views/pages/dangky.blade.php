<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dang-ky</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="cha">
		<img src="images/hinhnen.jpg" class="img-fluid banner" alt="">
		@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $err)
			{{$err}}<br>
			@endforeach
		</div>
		@endif
		@if(Session::has('thanhcong'))
		<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
		@endif
		<div class="container">
			<form action="dangky" method="post" class="form-dk">
				<div class="container">
					<div class="row">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="col-md-12 img-nen">
							<img src="images/logo12.png" class="img-hinh" alt="">
						</div>

						<div class="col-md-12 theInput">
							<input type="text" placeholder="Tên đăng nhập" name="username" required="" ></input>
						</div>
						<div class="col-md-12 theInput">
							<input placeholder="Mật khẩu" type="Password" name="pass" required="" >
						</div>
						<div class="col-md-12 theInput">
							<input placeholder="Nhập lại mật khẩu" type="Password" name="pass1" required=""  >
						</div>
						<div class="col-md-12 theInput">
							<input type="text" placeholder="Họ và tên" name="ten" required=""  ></input>
						</div>
						<div class="col-md-12 theInput">
							<input type="email"  placeholder="Email" name="email" required="" ></input>
						</div>
						<div class="col-md-12 theInput">
							<input type="text" placeholder="Số điện thoại" name="sdt" required=""  ></input>
						</div>
						
						<div class="col-md-12 nutSubmit">
							<input type="submit" value="Đăng ký"></div>	
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
	</html>