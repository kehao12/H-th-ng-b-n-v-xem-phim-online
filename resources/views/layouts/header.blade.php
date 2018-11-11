	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Phim</title>
		<base href="<?php echo asset('') ?>">
		<link rel="stylesheet" type="text/css" href="css/chitietphim.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/function.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
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
							<div class="dropdown">
								<button class="dropbtn">Dropdown</button>
								<div id="myDropdown" class="dropdown-content">
									<a href="#home">Home</a>
									<hr>
									<a href="#about">About</a>
									<hr>
									<a href="#contact">Contact</a>
								</div>
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
		</header>
	</body>
	</html>