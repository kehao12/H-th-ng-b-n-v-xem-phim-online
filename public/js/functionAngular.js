 var app = angular.module('myApp',['ngRoute','ngMaterial']).constant('API', 'http://localhost:8080/PROJECT/Cinema/public/')
 app.controller('MyController',  function($scope){



 })

 app.config(function ($routeProvider,$locationProvider) {
 	var urlLocal="http://localhost:8080/PROJECT/Cinema/resources/views/";
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
 	.otherwise({ redirectTo: '/' })
 })
 app.controller('themNhanVien',function ($scope,$http,$mdToast) {
 	$scope.addInfo=function(){
 		var urlCon='http://localhost:8080/PROJECT/Cinema/public/addNhanVien';
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