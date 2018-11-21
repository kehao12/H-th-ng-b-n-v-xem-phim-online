var app=angular.module('myHome', ['ngRoute','ngMaterial']).constant('API', 'http://localhost:8080/PROJECT/Cinema/public/')

app.config(function ($routeProvider,$locationProvider) {
	var urlLocal="http://localhost:8080/PROJECT/Cinema/resources/views/layouts/pages/";
	$routeProvider.
	when('/',{
		templateUrl:urlLocal+'home.php',
	})
	.when('/lichChieu', {
		templateUrl: urlLocal+'home_lichChieu/lichChieu.html',
		controller: 'showInfoLich'
	})
	.otherwise({ redirectTo: '/' })
	
})
app.config(['$mdThemingProvider', function ($mdThemingProvider) {
	'use strict';

	$mdThemingProvider.theme('default')
	.primaryPalette('blue');
}])
/* app.factory('idRapTake', function () {
 	var data={};
 
 	return {
 		getData:function(){

 		}
 	};
 })*/
 app.controller('showInfoLich', function ($scope,$http,API,$timeout) {
 	$http.get(API+'listRap').success(function(response){
 		$scope.rapPhim=response;
    		//console.log($scope.rapPhim);
    	});
 	var myDate=new Date();

 	$scope.crDate=moment(myDate).format("YYYY-MM-DD");
 	$scope.getIdRap=function(rap,curre){
 		if(curre.length ==0){curre.push(rap.id);}
 		else{curre.splice(0, 1); curre.push(rap.id);  }
 		//console.log(curre);
 		
 		$scope.idRapTake=rap.id;
 		rap.mauAct="white";
		//console.log($scope.idRapTake);
		var currentDate=new Date();
		var dateCrr=moment(currentDate).format("YYYY-MM-DD");
		var temp="'"+dateCrr+"'"
		var data =$.param({
			ngayHT:dateCrr,
			idRapP:$scope.idRapTake
		});
		var config={
			headers:{
				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}

		$http.post(API+'getLicHchieu',data,config)
		.then(function(res){
			$scope.ifLC=res.data;
			console.log($scope.ifLC);
		},function(er){
			console.log(er.data);

		})
	};
	$scope.ktLoad=false;
	$scope.showGhePC=function(val){
		val.hien=!val.hien;
		$scope.ktLoad=!$scope.ktLoad;
		$scope.giC=val.gioChieu;
		$scope.clShowPC=({clPC:"showNumberGhe", clBG:"backGrLichActive"});
		$http.post(API+'getSoPhong/'+val.idPC)
		.then(function(res){

			$scope.soGhe=res.data;
			console.log(res.data);
			var sumSlGhe=$scope.soGhe[0].slA+$scope.soGhe[0].slB+$scope.soGhe[0].slC+$scope.soGhe[0].slD+$scope.soGhe[0].slE;
			var currentDate=new Date();
			var dateCrr=moment(currentDate).format("YYYY-MM-DD");
			var dataGetVe=$.param({
				idSC:val.idSC,
				ngay:dateCrr
			});
			var config={
				headers:{
					'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
				}
			};
			$http.post(API+'getVe',dataGetVe,config)
			.then(function(re){
				$scope.ve=re.data;
				$timeout(function() { 
					$scope.ktLoad=!$scope.ktLoad;
					$scope.lichC=!$scope.lichC;	
				},1500);
				if($scope.ve.length != 0){
					var dataBk=$.param({
						idPhim:val.idPhim, idSC:val.idSC
					})
					console.log(dataBk);
					var config={
						headers:{
							'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
						}
					};
					$http.post(API+'getDataBk',dataBk,config).then(function(re){
						var bk=re.data;
						var gheBK=[];
						for (var i = 0;i<bk.length; i++) {
							var indexSeat=JSON.parse(bk[i].soGhe);
							for(var x in indexSeat){
								gheBK.push(indexSeat[x]);
							}
							
						}
						console.log(bk);
						console.log(gheBK);
						$scope.checkBk=function(sl,char){
							var temp;
							if(gheBK.length == 0){
								temp=0;
							}
							else{
								for(var i=0;i<gheBK.length;i++){
									var tmp=""+char+sl+"";
									if(gheBK[i].localeCompare(tmp) == 0){

										temp= 1;
										break;
									}
									else
										temp= 0;
								}
							}
							
							return temp;

						}

					},function(er){
						console.log(er.data);
					});
					var slV=$scope.ve[0].soLuongVe;
					var count=sumSlGhe-slV;
					console.log(val.id);
					var giaTdE=$scope.soGhe[0].slE-count;
					console.log(giaTdE);
					if(giaTdE > 0){
						$scope.soGhe[0].slE=giaTdE;
						$scope.slEpick=count;
					}
					else{
						var giaTdD=$scope.soGhe[0].slD-Math.abs(giaTdE);
						if(giaTdD > 0){
							$scope.slEpick=$scope.soGhe[0].slE;
							$scope.soGhe[0].slE=0;
							$scope.soGhe[0].slD=giaTdD;
							$scope.slDpick=Math.abs(giaTdE);
						}
						else{
							var giaTdC=$scope.soGhe[0].slC-Math.abs(giaTdD);
							if(giaTdC > 0){
								$scope.slEpick=$scope.soGhe[0].slE;
								$scope.soGhe[0].slE=0;
								$scope.slDpick=$scope.soGhe[0].slD;
								$scope.soGhe[0].slD=0;
								$scope.soGhe[0].slC=giaTdC;
								$scope.slCpick=Math.abs(giaTdD);

							}
							else{
								var giaTdB=$scope.soGhe[0].slB-Math.abs(giaTdC);
								if(giaTdB > 0){
									$scope.slEpick=$scope.soGhe[0].slE;
									$scope.soGhe[0].slE=0;
									$scope.slDpick=$scope.soGhe[0].slD;
									$scope.soGhe[0].slD=0;
									$scope.slCpick=$scope.soGhe[0].slC;
									$scope.soGhe[0].slC=0;
									$scope.soGhe[0].slB=giaTdB;
									$scope.slBpick=Math.abs(giaTdC);
								}
								else{
									var giaTdA=$scope.soGhe[0].slA-Math.abs(giaTdB);
									$scope.slEpick=$scope.soGhe[0].slE;
									$scope.soGhe[0].slE=0;
									$scope.slDpick=$scope.soGhe[0].slD;
									$scope.soGhe[0].slD=0;
									$scope.slCpick=$scope.soGhe[0].slC;
									$scope.soGhe[0].slC=0;
									$scope.slBpick=$scope.soGhe[0].slB;
									$scope.soGhe[0].slB=0;
									$scope.soGhe[0].slA=giaTdA;
									$scope.slApick=Math.abs(giaTdB);	
								}
							}
						}
					}
				}
				else{
					$scope.slApick=0;
					$scope.slBpick=0;
					$scope.slCpick=0;
					$scope.slDpick=0;
					$scope.slEpick=0;
					$scope.checkBk=function(sl,char){
						return 0;
					}

				}

			},function(er){
				console.log(er);
			});

		},function(er){
			console.log(er.data);
		});



	};
	$scope.arrMv=[];
	$scope.rsArr=function(){
		$scope.arrMv.splice(0,$scope.arrMv.length);
		//return $scope.arrMv;
	}
	
	$scope.checkIdPhim=function(val,arrMv){
		//$scope.arrMv=$scope.rsArr($scope.arrMv);
		console.log(arrMv);
		var temp=0;
		var kt=true;
		if(arrMv.length == 0){
			arrMv.push(val.idPhim);
			temp=1;
		}
		else {
			for(var i=0;i<arrMv.length;i++){
				if(val.idPhim == arrMv[i]){
					kt=false;
					break;
				}
			}
			if(kt==true){
				arrMv.push(val.idPhim);
				temp=1;
			}
			else{

				temp=0;
			}
		}
		
		console.log(arrMv);
		return temp;
	}

	$scope.moNey=0;
	$scope.pickSeat=function(value,sl,pick){
		/*console.log($scope.ve);
		console.log($scope.ve[0].giaVe);*/
		console.log($scope.moNey);
		//var getId= document.getElementById()
		if($scope.ve.length == 0){
			$.toast({
				heading: 'Thông báo !',
				text: 'Vé phòng chiếu hiện chưa bán !',
				position: 'top-right',
				loaderBg: '#da8609',
				icon: 'warning',
				hideAfter: 3000,
				stack: 1
			});
		}
		else{
			if(pick.length ==0){
				pick[0]=value+sl;
			//$('#'+value+sl).addClass('pickSeat');
			$scope.moNey += $scope.ve[0].giaVe;
			
		}
		else if(pick.length <2){
			var kt=true;
			for (var i =0; i < pick.length; i++) {
				if((pick[i].localeCompare(value+sl)) == 0){
					pick.splice(i,1);
					console.log(" da xoa");
					//$('#'+value+sl).removeClass('pickSeat');
					$scope.moNey -= $scope.ve[0].giaVe;
					
					kt=false;
					break;
				} 
			}
			if(kt){
				pick.push(value+sl);
				//$('#'+value+sl).addClass('pickSeat');
				$scope.moNey+= $scope.ve[0].giaVe;
				

			}
		}
		else{
			for (var i =0; i < pick.length; i++) {
				if((pick[i].localeCompare(value+sl)) == 0){
					pick.splice(i,1);
					console.log(" da xoa");
					//$('#'+value+sl).removeClass('pickSeat');
					$scope.moNey -= $scope.ve[0].giaVe;

				} 
			}
			if(pick.length == 2){
				$.toast({
					heading: 'Thông báo !',
					text: 'Số lượng tối đa vé được đặt là 2',
					position: 'top-right',
					loaderBg: '#bf441d',
					icon: 'error',
					hideAfter: 3000,
					stack: 1
				});
			}

		}
	}
	
	console.log(pick);
}

$scope.range = function(max){

	var input = [];
	for (var i = 1; i <= max; i += 1){
		input.push(i);

	}
		//console.log(input);
		return input;
	};
	$scope.hideLichPC= function(val,money){
		$scope.moNey=money;
		val.hien =!val.hien;
		$scope.lichC=!$scope.lichC;
		$scope.clShowPC=({clPC:"hideNumberGhe", clBG:""});
	};
	$scope.bookTicket=function(pick,val){
		var getTenKH=document.getElementById("giaTriKH").value;
		
		var ar ={};
		for(var i=0;i<pick.length;i++){
			ar[i]=pick[i];
		}
		var temp=JSON.stringify(ar);
		var data=$.param({
			tenKH:getTenKH,
			idLich:val.id,
			idVe:$scope.ve[0].id,
			soGhe:temp

		});
		console.log($scope.ve[0].id);
		console.log(data);
		/*var vd=JSON.stringify(ar);
		console.log(JSON.stringify(ar));
		console.log(temp);
		console.log(pick);
		console.log(val);
		console.log(JSON.parse(vd));*/
		var config={
			headers:{
				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
			}
		};
		$http.post(API+'bookingVe', data, config).then(function(re){
			if(re.data== 1){
				$scope.showMess('Chúc mừng','Bạn đã đặt vé thành công','success');
				$scope.hideLichPC(val,0);
			}
		}, function(er){
			$scope.showMess('Thông báo','Bạn đã đặt vé thất bại','error');
		});
	}
	$scope.showMess=function(header,content,status){
		$.toast({
			heading: header,
			text: content,
			position: 'top-right',
			loaderBg: '#5ba035',
			icon: status,
			hideAfter: 3000,
			stack: 1
		});
	}
})