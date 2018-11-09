 var app = angular.module('myApp',['ngRoute','ngMaterial']).constant('API', 'http://localhost:8080/He-thong-ban-ve-xem-phim-online/public')
 app.controller('MyController',  function($scope){

 })

 app.config(function ($routeProvider,$locationProvider) {
 	var urlLocal="http://localhost:8080/He-thong-ban-ve-xem-phim-online/resources/views/";
 	$routeProvider.
 	when('/',{
 		templateUrl:urlLocal+'admin/adIndex.php',
 	}).
 	when('/nvAdd',{
 		templateUrl:urlLocal+'admin/nhanVien/nhanVien_add.html',
 		controller:'themNhanVien'
 	})
 	.when('/nvEdit',{
 		templateUrl:urlLocal+'admin/nhanVien/nhanVien_edit.html',
 		controller:'suaNhanVien'
 	})
 	.when('/rapAdd',{
 		templateUrl:urlLocal+'admin/rapChieu/rapChieu_add.html',
 		controller:'themRapChieu'
 	})
 	.when('/rapEdit',{
 		templateUrl:urlLocal+'admin/rapChieu/rapChieu_edit.html',
 		controller:'suaRapChieu'
 	})
 	.when('/phimAdd',{
 		templateUrl:urlLocal+'admin/phim/phim_Add.html',
 		controller:'ql_Phim'
 	})
 	.when('/phimEdit', {
<<<<<<< HEAD
 		templateUrl:urlLocal+ 'admin/phim/phim_edit.html',
=======
 		templateUrl:urlLocal+ 'admin/phim/phim_Edit.html',
>>>>>>> hao1
 		controller: 'ql_Phim'
 	})
 	.when('/tl',{
 		templateUrl:urlLocal+'admin/theLoai/theLoaiView.html',
 		controller:'theloai'
 	})
<<<<<<< HEAD
 	.when('/pcAdd', {
 		templateUrl: urlLocal+'admin/phongChieu/phongChieu_add.html',
 		controller: 'qlPhongChieu'
 	})
 	.when('/pcEdit', {
 		templateUrl: urlLocal+'admin/phongChieu/phongChieu_edit.html',
 		controller: 'qlPhongChieu'
 	})
 	.when('/lichChieuAdd', {
 		templateUrl:urlLocal+'admin/lichChieu/lichChieu_add.html',
 		controller: 'qlLichChieu'
 	})
 	.when('/lichChieuEdit', {
 		templateUrl:urlLocal+'admin/lichChieu/lichChieu_edit.html',
 		controller: 'qlLichChieu'
 	})
 	.when('/suatChieu', {
 		templateUrl:urlLocal+ 'admin/suatChieu/suatChieu.html',
 		controller: 'scController'
 	})	
 	.otherwise({ redirectTo: '/' })
 });
 app.config(['$mdThemingProvider', function ($mdThemingProvider) {
 	'use strict';

 	$mdThemingProvider.theme('default')
 	.primaryPalette('blue');
 }])
=======

 	.otherwise({ redirectTo: '/' })
 });
 app.directive('fileInput', function ($parse) {
 	return {
 		link: function ($scope, $iElement, $iAttrs) {
 			$iElement.on("change",function (event) {
 				var files = event.target.files;
 				console.log(files[0].name);
 				$parse($iAttrs.fileInput).assign($iElement[0].files);
 				$scope.$apply();
 			})
 		}
 	};
 })
>>>>>>> hao1
 app.controller('themNhanVien',function ($scope,$http,$mdToast) {
 	$scope.addInfo=function(){
 		var urlCon='http://localhost:8080/He-thong-ban-ve-xem-phim-online/public/addNhanVien';
 		var data =$.param({
 			ten:$scope.nameNV,
 			gioitinh:$scope.gioiTinh,
 			quyen:$scope.phanQuyen,
 			diaChi:$scope.diaChi,
 			taiKhoan:$scope.taiKhoan,
 			pass:$scope.pass

 		});
 		console.log(data);
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(urlCon,data,config)
 		.then(function(res){
 			if(res.data =='addSucess')	{	
 				$scope.showMessg('Thêm thành công');
 			}
 		},function(er){
 			$scope.showMessg('Thêm thất bại');
 			console.log(er.data);
 			
 		})
 	}
 	/* hien thi thong bao */
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};
 })
 app.controller('suaNhanVien', function($scope,$http,API,$mdToast){
 	$http.get(API+'listNV').success(function(response){
 		$scope.nhanViens=response;
 	});
 	$scope.showEdit=function(nv){
 		nv.hienThi=!nv.hienThi;
 	}	
 	$scope.show=function(nv){
 		nv.hienThi=!nv.hienThi;
 		$http.get(API+'listNV').success(function(response){
 			$scope.nhanViens=response;
 		});

 	}	

 	$scope.editNV=function(nv){
 		
 		var data =$.param({
 			ten:nv.ten,
 			gioitinh:nv.gioitinh,
 			quyen:nv.quyen,
 			diaChi:nv.diachi,
 			taiKhoan:nv.tenTaiKhoan,
 		});
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(API+"editNV/"+nv.id,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Edit thành công');
 				nv.hienThi=!nv.hienThi;
 				
 			}
 		},function(er){
 			$scope.showMessg('Edit thất bại');
 			console.log(er.data);
 			
 		})

 	};

 	$scope.deleteNV=function(id){
 		var isXacNhan =confirm("Bạn có muốn xóa ?");
 		if(isXacNhan){
 			$http.get(API+'deleteNV/'+id)
 			.then(function(res){
 				if(res.data == 1)	{	
 					$scope.showMessg('Xóa thành công');
 					$http.get(API+'listNV').success(function(response){
 						$scope.nhanViens=response;
 					});
 				}
 			},function(er){
 				$scope.showMessg('Xóa thất bại !');
 			})
 		}
 		else
 			return false;
 	}
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};

 });
/* app.directive('tonumber',function () {
 	return {
 		require : 'ngModel',
 		link: function (scope, iElement, iAttrs,ngModel) {
 			ngModel.$parses.push(function(val){
 				return parseInt(val,10);
 			});
 			ngModel.$formatters.push(function(val){
 				return ''+val;
 			});
 		}
 	};
 });*/
 /* rap phim */
 app.controller('themRapChieu',function ($scope,$http,$mdToast) {
 	$scope.addInfoRap=function(){
 		var urlCon='http://localhost:8080/PROJECT/Cinema/public/addRapPhim';
 		var data =$.param({
 			tenRap:$scope.nameRap,
 			diaChi:$scope.diaChi
 		});
 		console.log(data);
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(urlCon,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Thêm thành công');
 			}
 		},function(er){
 			$scope.showMessg('Thêm thất bại');
 			console.log(er.data);
 			
 		})
 	}
 	/* hien thi thong bao */
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};
 });
 app.controller('suaRapChieu', function($scope,$http,API,$mdToast){
 	$http.get(API+'listRap').success(function(response){
 		$scope.rap=response;
 	});
 	$scope.showEdit=function(rapChild){
 		rapChild.hienThi=!rapChild.hienThi;
 		
 	}	
 	$scope.show=function(rapChild){
 		rapChild.hienThi=!rapChild.hienThi;
 		$http.get(API+'listRap').success(function(response){
 			$scope.rap=response;
 		});

 	}	
 	$scope.editrapChild=function(rapChild){
 		
 		var data =$.param({
 			ten:rapChild.tenRap,
 			diaChi:rapChild.diaChi
 		});
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(API+"editrapChild/"+rapChild.id,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Edit thành công');
 				rapChild.hienThi=!rapChild.hienThi;
 				
 			}
 		},function(er){
 			$scope.showMessg('Edit thất bại');
 			console.log(er.data);
 			
 		})

 	};

 	$scope.deleteRap=function(id){
 		var isXacNhan =confirm("Bạn có muốn xóa ?");
 		if(isXacNhan){
 			$http.post(API+'deleteRap/'+id)
 			.then(function(res){
 				if(res.data == 1)	{	
 					$scope.showMessg('Xóa thành công');
 					$http.get(API+'listRap').success(function(response){
 						$scope.rap=response;
 						console.log(response);
 					});
 				}
 			},function(er){
 				$scope.showMessg('Xóa thất bại !');
 			})
 		}
 		else
 			return false;
 	}
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};

 });
 /*end rap phim*/
 /* the loai phim*/
 app.controller('theloai', function($scope,$http,API,$mdToast){
 	$http.get(API+'listTL').success(function(response){
 		$scope.tL=response;
 	});
 	$scope.addTL=function(){
 		var urlCon='http://localhost:8080/PROJECT/Cinema/public/addTL';
 		var data =$.param({
 			tenTL:$scope.tenTL,
 		});
 		console.log(data);
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(urlCon,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Thêm thành công');
 				$http.get(API+'listTL').success(function(response){
 					$scope.tL=response;
 				});
 			}
 		},function(er){
 			$scope.showMessg('Thêm thất bại');
 			console.log(er.data);
 			
 		})
 	}
 	$scope.showEdit=function(val){
 		val.hienThi=!val.hienThi;
 		
 	}	
 	$scope.show=function(val){
 		val.hienThi=!val.hienThi;
 		$http.get(API+'listTL').success(function(response){
 			$scope.tL=response;
 		});

 	}	
 	$scope.ediTL=function(val){
 		
 		var data =$.param({
 			ten:val.tenTL,
 		});
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(API+"editTL/"+val.id,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
<<<<<<< HEAD
 				$scope.showMessg('Cập nhập thành công');
 				val.hienThi=!val.hienThi;
 			}
 		},function(er){
 			$scope.showMessg('Cập nhập thất bại');
=======
 				$scope.showMessg('Edit thành công');
 				val.hienThi=!val.hienThi;
 			}
 		},function(er){
 			$scope.showMessg('Edit thất bại');
>>>>>>> hao1
 			console.log(er.data);
 			
 		})

 	};

 	$scope.deleteTL=function(id){
 		var isXacNhan =confirm("Bạn có muốn xóa ?");
 		if(isXacNhan){
 			$http.post(API+'deleteTL/'+id)
 			.then(function(res){
 				if(res.data == 1)	{	
 					$scope.showMessg('Xóa thành công');
 					$http.get(API+'listTL').success(function(response){
 						$scope.tL=response;
 						console.log(response);
 					});
 				}
 			},function(er){
 				$scope.showMessg('Xóa thất bại !');
 			})
 		}
 		else
 			return false;
 	}
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};

 });

 /* edn the loai*/
 /* ql phim*/
<<<<<<< HEAD
 app.controller('ql_Phim', function($scope,$http,API,$mdToast){
 	$http.get(API+'listTL').success(function(response){
 		$scope.tL=response;
 	});
 	$http.get(API+'listMV').success(function(response){
 		$scope.mv=response;
 	});
 	
 	$scope.uploadFile = function(files) {
 		var fd = new FormData();
 		var urlCon='http://localhost:8080/PROJECT/Cinema/public/';
    //Take the first selected file
    fd.append("file", files[0]);
    console.log(fd);
    $http.post(urlCon+"upLoadImg", fd, {
    	withCredentials: true,
    	headers: {'Content-Type': undefined },
    	transformRequest: angular.identity
    }).
    then(function(res){
    	console.log(res.data);
    	$scope.fileName=res.data;
    },function(er){
    	$scope.showMessg('Chọn ảnh thất bại');
    	console.log(er);
    });

};
$scope.addPhim=function(){
	var urlCon='http://localhost:8080/PROJECT/Cinema/public/';


	$scope.dataP.dateString = moment($scope.dataP.date).format("YYYY-MM-DD");

	console.log($scope.dataP.dateString);
	if($scope.timeMovie  > 10){
		var data =$.param({
			namePhim:$scope.namePhim,
			idTL:$scope.idTL,
			noidung:$scope.nd,
			khoiChieu:$scope.dataP.dateString,
			trailer:$scope.trailer,
			thoiLuong:$scope.timeMovie,
			poster:$scope.fileName
		});
		console.log($scope.timeMovie);
		var config={
			headers:{
				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}
		$http.post(urlCon+'addPhim',data,config)
		.then(function(res){
			if(res.data == 1)	{	
				$scope.showMessg('Thêm thành công');
				$scope.namePhim="";
				$scope.idTL="";
				$scope.trailer="";
				$scope.timeMovie="";
				$scope.fileName="";
				$scope.dataP.date="";
				$scope.dataP.nd="";
			}
		},function(er){
			$scope.showMessg('Thêm thất bại');
			console.log(er.data);

		});
	}
	else{
		$scope.showMessg('Thêm thất bại');
	}
}

$scope.showEdit=function(ele){
	ele.hienThi=!ele.hienThi;

}	
$scope.show=function(ele){
	ele.hienThi=!ele.hienThi;
	/*$http.get(API+'listMV').success(function(response){
		$scope.mv=response;
	});*/

}	
$scope.editPhim=function(ele){
	if(ele.date == null){
		ele.date = new Date(ele.ngayKhoiChieu);
		console.log(ele.date);
	}
	ele.date.dateString = moment(ele.date).format("YYYY-MM-DD");

	//console.log($scope.dataP1.date);
	console.log(ele.date.dateString);
	var data =$.param({
		namePhim:ele.tenPhim,
		idTL:ele.idTL,
		noidung:ele.noiDung,
		khoiChieu:ele.date.dateString,
		trailer:ele.trailer,
		thoiLuong:ele.thoiLuong,
		poster:$scope.fileName
	});
	

	var config={
		headers:{
			'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
		}
	}
	$http.post(API+"editPhim/"+ele.id,data,config)
	.then(function(res){
		if(res.data == 1)	{	
			$scope.showMessg('Cập nhật thành công');
			ele.hienThi=!ele.hienThi;
			$http.get(API+'listMV').success(function(response){
				$scope.mv=response;
			});
		}
	},function(er){
		$scope.showMessg('Cập nhật thất bại');
		console.log(er.data);

	})

};

$scope.deletePhim=function(id){
	var isXacNhan =confirm("Bạn có muốn xóa ?");
	if(isXacNhan){
		$http.post(API+'deletePhim/'+id)
		.then(function(res){
			if(res.data == 1)	{	
				$scope.showMessg('Xóa thành công');
				$http.get(API+'listMV').success(function(response){
					$scope.mv=response;
					console.log(response);
				});
			}
		},function(er){
			$scope.showMessg('Xóa thất bại !');
		})
	}
	else
		return false;
}
var last = {
	bottom: true,
	top: false,
	left: false,
	right: true
};

$scope.toastPosition = angular.extend({},last);

$scope.getToastPosition = function() {
	sanitizePosition();

	return Object.keys($scope.toastPosition)
	.filter(function(pos) { return $scope.toastPosition[pos]; })
	.join(' ');
};

function sanitizePosition() {
	var current = $scope.toastPosition;

	if ( current.bottom && last.top ) current.top = false;
	if ( current.top && last.bottom ) current.bottom = false;
	if ( current.right && last.left ) current.left = false;
	if ( current.left && last.right ) current.right = false;

	last = angular.extend({},current);
}

$scope.showMessg = function(thongbao) {
	var pinTo = $scope.getToastPosition();

	$mdToast.show(
		$mdToast.simple()
		.textContent(thongbao)
		.position(pinTo )
		.hideDelay(3000)
		);
};

});
 /*app.directive(
        'dateInput',
        function(dateFilter) {
            return {
                require: 'ngModel',
                template: '<input type="date"></input>',
                replace: true,
                link: function(scope, elm, attrs, ngModelCtrl) {
                    ngModelCtrl.$formatters.unshift(function (modelValue) {
                        return dateFilter(modelValue, 'yyyy-MM-dd');
                    });
                    
                    ngModelCtrl.$parsers.unshift(function(viewValue) {
                        return new Date(viewValue);
                    });
                },
            };
    });
    */
    /* end ql phim*/
    /* QL PHONG CHIEU*/
    app.controller('qlPhongChieu', function($scope,$http,API,$mdToast){
    	$http.get(API+'listRap').success(function(response){
    		$scope.rp=response;
    	});
    	$http.get(API+'listPC').success(function(response){
    		$scope.phongChieu=response;
    	});
    	$scope.soLuong=[5,6,7,8,9,10];
    	$scope.addInfoPC=function(){
    		var data =$.param({
    			tenPC:$scope.namePC,
    			idRap:$scope.idRap,
    			slA:$scope.slA,
    			slB:$scope.slB,
    			slC:$scope.slC,
    			slD:$scope.slD,
    			slE:$scope.slE
    		});
    		console.log(data);
    		var config={
    			headers:{
    				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    			}
    		}
    		$http.post(API+'addPC',data,config)
    		.then(function(res){
    			if(res.data == 1)	{	
    				$scope.showMessg('Thêm thành công');
    				$scope.namePC="";
    				$scope.idRap="";
    				$scope.slA="";
    				$scope.slB="";
    				$scope.slC="";
    				$scope.slD="";
    				$scope.sl="";
    			}
    		},function(er){
    			$scope.showMessg('Thêm thất bại');
    			console.log(er.data);

    		})
    	}
    	$scope.showEdit=function(pc){
    		pc.hienThi=!pc.hienThi;

    	}	
    	$scope.show=function(pc){
    		pc.hienThi=!pc.hienThi;
    		$http.get(API+'listPC').success(function(response){
    			$scope.tL=response;
    		});

    	}	
    	$scope.ediPC=function(pc){

    		var data =$.param({
    			tenPC:pc.namePC,
    			idRap:pc.idRap,
    			slA:pc.slA,
    			slB:pc.slB,
    			slC:pc.slC,
    			slD:pc.slD,
    			slE:pc.slE
    		});
    		var config={
    			headers:{
    				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    			}
    		}
    		$http.post(API+"editPC/"+pc.id,data,config)
    		.then(function(res){
    			if(res.data == 1)	{	
    				$scope.showMessg('Cập nhập thành công');
    				pc.hienThi=!pc.hienThi;
    			}
    		},function(er){
    			$scope.showMessg('Cập nhập thất bại');
    			console.log(er.data);

    		})

    	};

    	$scope.deletePC=function(id){
    		var isXacNhan =confirm("Bạn có muốn xóa ?");
    		if(isXacNhan){
    			$http.post(API+'deletePC/'+id)
    			.then(function(res){
    				if(res.data == 1)	{	
    					$scope.showMessg('Xóa thành công');
    					$http.get(API+'listPC').success(function(response){
    						$scope.phongChieu=response;
    						console.log(response);
    					});
    				}
    			},function(er){
    				$scope.showMessg('Xóa thất bại !');
    			})
    		}
    		else
    			return false;
    	}
    	var last = {
    		bottom: true,
    		top: false,
    		left: false,
    		right: true
    	};

    	$scope.toastPosition = angular.extend({},last);

    	$scope.getToastPosition = function() {
    		sanitizePosition();

    		return Object.keys($scope.toastPosition)
    		.filter(function(pos) { return $scope.toastPosition[pos]; })
    		.join(' ');
    	};

    	function sanitizePosition() {
    		var current = $scope.toastPosition;

    		if ( current.bottom && last.top ) current.top = false;
    		if ( current.top && last.bottom ) current.bottom = false;
    		if ( current.right && last.left ) current.left = false;
    		if ( current.left && last.right ) current.right = false;

    		last = angular.extend({},current);
    	}

    	$scope.showMessg = function(thongbao) {
    		var pinTo = $scope.getToastPosition();

    		$mdToast.show(
    			$mdToast.simple()
    			.textContent(thongbao)
    			.position(pinTo )
    			.hideDelay(3000)
    			);
    	};

    });
    /* END  QL PHONG CHIEU*/
    /* QL LICH CHIEU*/
    app.controller('qlLichChieu', function($scope,$http,API,$mdToast){
    	$http.get(API+'listRap').success(function(response){
    		$scope.rp=response;
    	});
    	$http.get(API+'listTL').success(function(response){
    		$scope.theloai=response;

    	});
    	$http.get(API+'getListSC').success(function(response){
    		$scope.suatChieu=response;
    		$scope.suatChieu.gioChieu= new Date($scope.suatChieu.gioChieu);
    	});
    	$http.get(API+'getListLC').success(function(response){
    		$scope.lichChieu=response;
    		console.log($scope.lichChieu);
    		//$scope.suatChieu.gioChieu= new Date($scope.suatChieu.gioChieu);
    	});
    	$scope.showPC=function(idRap){
    		$http.post(API+'listPCbyID/'+idRap).success(function(response){
    			$scope.pcByID=response;
    		});
    	};
    	$scope.showPhim=function(idTL){
    		$http.post(API+'listPhimById/'+idTL).success(function(response){
    			$scope.movies=response;
    		});
    	};
    	$scope.addLichChieu=function(){
    		$scope.ngayC.dateString = moment($scope.ngayC.date).format("YYYY-MM-DD");
    		$scope.myDate=new Date();
    		var dateCrr=moment($scope.myDate).format("YYYY-MM-DD");
    		if($scope.ngayC.date >= $scope.myDate){
    			var data =$.param({
    				idPC:$scope.idPC,
    				ngayC:$scope.ngayC.dateString ,
    				idPhim:$scope.idPhim,
    				idSC:$scope.idSC
    			});
    			console.log(data);
    			var config={
    				headers:{
    					'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    				}
    			}
    			$http.post(API+'addLC',data,config)
    			.then(function(res){
    				if(res.data == 1)	{	
    					$scope.showMessg('Thêm thành công');
    				}
    			},function(er){
    				$scope.showMessg('Thêm thất bại');
    				console.log(er.data);

    			})
    		}
    		else{
    			$scope.showMessg('Thêm thất bại !');
    		}
    		
    	}
    	$scope.showEdit=function(lc){
    		lc.hienThi=!lc.hienThi;

    	}	
    	$scope.show=function(lc){
    		lc.hienThi=!lc.hienThi;
    		$http.get(API+'listLC').success(function(response){
    			$scope.lc=response;
    		});

    	}	
    	$scope.editLC=function(lc){
    		if(lc.date == null){
    			lc.date = new Date(lc.ngayKhoiChieu);
    			console.log(lc.date);
    		}
    		lc.date.dateString = moment(lc.date).format("YYYY-MM-DD");

    		//$scope.ngayChieuTemp.dateString=moment($scope.ngayChieuTemp.date).format("YYYY-MM-DD");
    		var data =$.param({
    			idPhim:lc.idPhim,
    			idSC:lc.idSC,
    			ngayChieu:lc.date.dateString
    		});
    		var config={
    			headers:{
    				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    			}
    		}
    		$http.post(API+"editLC/"+lc.id,data,config)
    		.then(function(res){
    			if(res.data == 1)	{	
    				$scope.showMessg('Cập nhập thành công');
    				lc.hienThi=!lc.hienThi;
    			}
    		},function(er){
    			$scope.showMessg('Cập nhập thất bại');
    			console.log(er.data);

    		})

    	};

    	$scope.deletePC=function(id){
    		var isXacNhan =confirm("Bạn có muốn xóa ?");
    		if(isXacNhan){
    			$http.post(API+'deletePC/'+id)
    			.then(function(res){
    				if(res.data == 1)	{	
    					$scope.showMessg('Xóa thành công');
    					$http.get(API+'listPC').success(function(response){
    						$scope.phongChieu=response;
    						console.log(response);
    					});
    				}
    			},function(er){
    				$scope.showMessg('Xóa thất bại !');
    			})
    		}
    		else
    			return false;
    	}
    	var last = {
    		bottom: true,
    		top: false,
    		left: false,
    		right: true
    	};

    	$scope.toastPosition = angular.extend({},last);

    	$scope.getToastPosition = function() {
    		sanitizePosition();

    		return Object.keys($scope.toastPosition)
    		.filter(function(pos) { return $scope.toastPosition[pos]; })
    		.join(' ');
    	};

    	function sanitizePosition() {
    		var current = $scope.toastPosition;

    		if ( current.bottom && last.top ) current.top = false;
    		if ( current.top && last.bottom ) current.bottom = false;
    		if ( current.right && last.left ) current.left = false;
    		if ( current.left && last.right ) current.right = false;

    		last = angular.extend({},current);
    	}

    	$scope.showMessg = function(thongbao) {
    		var pinTo = $scope.getToastPosition();

    		$mdToast.show(
    			$mdToast.simple()
    			.textContent(thongbao)
    			.position(pinTo )
    			.hideDelay(3000)
    			);
    	};

    });
 /* END QL LICH CHIEU*/
 /* QL SUAT CHIEU*/
 app.controller('scController', function($scope,$http,API,$mdToast,$filter){

 	$http.get(API+'getListSC').success(function(response){
 		$scope.sc=response;
    		/*$scope.sc.gioChieu= new Date($scope.sc.gioChieu);
    		response.gioChieu= new Date(response.gioChieu);
    		for (var i = 1; i < response.length; i++) {
    			response[i].gioChieu= new Date(response[i].gioChieu);
    			console.log(response[i].gioChieu);
    		}*/
    		$scope.sc.gioChieu= new Date($scope.sc.gioChieu);
    		console.log($scope.sc.gioChieu);
    		console.log(response);
    	});
 	$scope.gioSC = {
 		date: new Date(),
 		time: $filter('date')( new Date(), 'HH:mm')
 	};
 	$scope.gioSCEdit = {
 		date: new Date(),
 		time: $filter('date')( new Date(), 'HH:mm')
 	};
 	var kt=true;
 	$scope.addInfoSC=function(){
 		$scope.gioSC.timeString = moment( $scope.gioSC.time).format('HH:mm');
 		var tempSC =parseInt($scope.gioSC.timeString, 10); 
    		//var temp = document.getElementById("")
    		//console.log($scope.gioSC.timeString);
    		console.log($scope.gioSC.timeString);
    		console.log(tempSC);
    		if(tempSC < 9 || tempSC > 22){
    			$scope.showMessg('Thêm thất bại');
    		}
    		else{
    			$http.get(API+'getListSC').success(function(response){
    				$scope.schieu=response;
    				var kq;
    				for (var i = 0; i < $scope.schieu.length-1; i++) {
    					$scope.schieu[i].gioChieu=parseInt($scope.schieu[i].gioChieu, 10);
    					kq =Math.abs( $scope.schieu[i].gioChieu -tempSC);
    					if(kq < 3){
    						break;
    					}
    					console.log(kq);
    				}
    				console.log(kq);
    				if(kq < 3){
    					$scope.showMessg('Thêm thất bại');
    				}
    				else{
    					var data =$.param({
    						timesc:$scope.gioSC.timeString
    					});
    					console.log(data);
    					var config={
    						headers:{
    							'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    						}
    					}
    					$http.post(API+'addSC',data,config)
    					.then(function(res){
    						if(res.data == 1)	{	
    							$scope.showMessg('Thêm thành công');
    							$http.get(API+'getListSC').success(function(response){
    								$scope.sc=response;
    								$scope.sc.gioChieu= new Date($scope.sc.gioChieu);
    							});
    						}
    					},function(er){
    						$scope.showMessg('Thêm thất bại');
    						console.log(er.data);
    					})
    				}
    			});
    		}
    		


    		
    	}
    	$scope.showEdit=function(sc){
    		sc.hienThi=!sc.hienThi;

    	}	
    	$scope.show=function(sc){
    		sc.hienThi=!sc.hienThi;
    		$http.get(API+'getListSC').success(function(response){
    			$scope.sc=response;
    		});

    	}	
    	$scope.edisc=function(sc){
    		$scope.gioSCEdit.timeString = moment( $scope.gioSCEdit.time).format('HH:mm');
    		var tempEdit =parseInt($scope.gioSCEdit.timeString, 10); 
    		console.log($scope.gioSCEdit.timeString);
    		console.log(tempEdit);
    		if(tempEdit < 9 || tempEdit > 22){
    			$scope.showMessg('Thêm thất bại');
    		}
    		else {
    			$http.get(API+'getListSC').success(function(response){
    				$scope.schieuEdit=response;
    				console.log($scope.schieuEdit);
    				$scope.schieuEdit.gioChieu=parseInt($scope.schieuEdit.gioChieu, 10); 
    				var kq;
    				for (var i = 0; i < $scope.schieuEdit.length-1; i++) {
    					$scope.schieuEdit[i].gioChieu=parseInt($scope.schieuEdit[i].gioChieu, 10);
    					kq =Math.abs( $scope.schieuEdit[i].gioChieu - tempEdit);
    					if(kq < 3){
    						break;
    					}
    					console.log(kq);		
    				}
    				if(kq >=3 ){
    					var data =$.param({
    						timesc:$scope.gioSCEdit.timeString
    					});
    					var config={
    						headers:{
    							'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    						}
    					}
    					$http.post(API+"editsc/"+sc.id,data,config)
    					.then(function(res){
    						if(res.data == 1)	{	
    							$scope.showMessg('Cập nhập thành công');
    							sc.hienThi=!sc.hienThi;
    							$http.get(API+'getListSC').success(function(response){
    								$scope.sc=response;
    								$scope.sc.gioChieu= new Date($scope.sc.gioChieu);
    							});
    						}
    					},function(er){
    						$scope.showMessg('Cập nhập thất bại');
    						console.log(er.data);

    					});	
    				}
    				else{
    					$scope.showMessg('Cập nhật thất bại');
    				}
    			});
    		}
    	}

    	$scope.deleteSC=function(id){
    		var isXacNhan =confirm("Bạn có muốn xóa ?");
    		if(isXacNhan){
    			$http.post(API+'deletesc/'+id)
    			.then(function(res){
    				if(res.data == 1)	{	
    					$scope.showMessg('Xóa thành công');
    					$http.get(API+'getListSC').success(function(response){
    						$scope.sc=response;
    						$scope.sc.gioChieu= new Date($scope.sc.gioChieu);
    					});
    				}
    			},function(er){
    				$scope.showMessg('Xóa thất bại !');
    			})
    		}
    		else
    			return false;
    	}
    	var last = {
    		bottom: true,
    		top: false,
    		left: false,
    		right: true
    	};

    	$scope.toastPosition = angular.extend({},last);

    	$scope.getToastPosition = function() {
    		sanitizePosition();

    		return Object.keys($scope.toastPosition)
    		.filter(function(pos) { return $scope.toastPosition[pos]; })
    		.join(' ');
    	};

    	function sanitizePosition() {
    		var current = $scope.toastPosition;

    		if ( current.bottom && last.top ) current.top = false;
    		if ( current.top && last.bottom ) current.bottom = false;
    		if ( current.right && last.left ) current.left = false;
    		if ( current.left && last.right ) current.right = false;

    		last = angular.extend({},current);
    	}

    	$scope.showMessg = function(thongbao) {
    		var pinTo = $scope.getToastPosition();

    		$mdToast.show(
    			$mdToast.simple()
    			.textContent(thongbao)
    			.position(pinTo )
    			.hideDelay(3000)
    			);
    	};

    });
 /* END QL SUAT CHIEU*/
=======
  app.controller('ql_Phim', function($scope,$http,API,$mdToast){
 	$http.get(API+'listTL').success(function(response){
 		$scope.tL=response;
 	});
 	$http.post(urlCon+'upImg', formData,
 						transformRequest:angular.identity,
 						headers:{'Content-type':undefined,'Process-Data':false}
 					)
 				.then(function (res) {
 					if(res.data == 2)	{
 					
 				}
 				});
 	$scope.addPhim=function(){
 		var urlCon='http://localhost:8080/PROJECT/Cinema/public/';
 		var formData=new FormData();
 		angular.forEach($scope.files, function(file){
 			formData.append('file',file);
 		});
 		var data =$.param({
 			namePhim:$scope.namePhim,
 			idTL:$scope.idTL,
 			noidung:$scope.nd,
 			khoiChieu:$scope.ngayKC,
 			thoiLuong:$scope.tlPhim,
 			trailer:$scope.trailer,
 		});

 		console.log(data);
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(urlCon+'addPhim',data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Thêm thành công');
 			}
 		},function(er){
 			$scope.showMessg('Thêm thất bại');
 			console.log(er.data);
 			
 		})
 	}
 	$scope.showEdit=function(val){
 		val.hienThi=!val.hienThi;
 		
 	}	
 	$scope.show=function(val){
 		val.hienThi=!val.hienThi;
 		$http.get(API+'listTL').success(function(response){
 			$scope.tL=response;
 		});

 	}	
 	$scope.editPhim=function(val){
 		
 		var data =$.param({
 			ten:val.tenTL,
 		});
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(API+"editPhim/"+val.id,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Edit thành công');
 				val.hienThi=!val.hienThi;
 			}
 		},function(er){
 			$scope.showMessg('Edit thất bại');
 			console.log(er.data);
 			
 		})

 	};

 	$scope.deletePhim=function(id){
 		var isXacNhan =confirm("Bạn có muốn xóa ?");
 		if(isXacNhan){
 			$http.post(API+'deletePhim/'+id)
 			.then(function(res){
 				if(res.data == 1)	{	
 					$scope.showMessg('Xóa thành công');
 					$http.get(API+'listTL').success(function(response){
 						$scope.tL=response;
 						console.log(response);
 					});
 				}
 			},function(er){
 				$scope.showMessg('Xóa thất bại !');
 			})
 		}
 		else
 			return false;
 	}
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};

 });

 /* end ql phim*/
>>>>>>> hao1
