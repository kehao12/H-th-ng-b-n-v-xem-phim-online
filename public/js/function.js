/* move slide Image*/
var value=0,count=0,kiemTraSearch=0;
var x,urlImg;


$(function(){
	$('.nutRight').click(function(){
		var getBanner=document.getElementById("banner");
		var getSlide = document.getElementsByClassName("slideChild");
		/* banner */
		if(count!=3){
			count++;
			urlImg="url(resources/images/home_bg"+count+".jpg) center center / cover no-repeat";
			$('#banner').css('background',urlImg);
			console.log(count);
		}
		else if(count == 3){
			count=0;
			urlImg="url(resources/images/home_bg.jpg) center center / cover no-repeat";
			$('#banner').css('background',urlImg);
			console.log(count);
		}
		/*end banner*/
		/*slide*/
		if(value != -900){
			value += -300;
			x= "translateX("+value+"px) scale(0.9)";
			$('.slideChild').css('transform',x);
		}
		else{
			value=0;
			x="translateX("+value+"px) scale(0.9)";
			$('.slideChild').css('transform',x);

		}
		/*end slide*/
	});

	/* menu scroll*/
	$(window).scroll(function(event) {
		var vitri=$("html").scrollTop();
		console.log(vitri);
		if(vitri > 90){
			$('.allMenu').addClass('allMenuZoom');
			$('.menu').addClass('menuZoom');
			$('.searchBar').addClass('searchZoom');
		}
		else if(vitri < 100){
			$('.allMenu').removeClass('allMenuZoom');
			$('.menu').removeClass('menuZoom');
			$('.searchBar').removeClass('searchZoom');
		}
	});
	/* end menu scroll */

	/* hover slide*/
	$('.slideChild').hover(function(){
		x= "translateX("+value+"px) scale(1)";
		$(this).css('transform',x);
	},function(){
		x= "translateX("+value+"px) scale(0.9)";
		$(this).css('transform',x);
	});
	/* end hover*/

	$('.nutLeft').click(function(){
		if(count!=0){
			count--;
			if(count ==0){urlImg="url(resources/images/home_bg.jpg) center center / cover no-repeat";}
			else{urlImg="url(resources/images/home_bg"+count+".jpg) center center / cover no-repeat";}	
			$('#banner').css('background',urlImg);
			console.log(count);
		}
		else if(count == 0){
			count=3;
			urlImg="url(resources/images/home_bg3.jpg) center center / cover no-repeat";
			$('#banner').css('background',urlImg);
			console.log(count);
		}
		if(value != 0){
			value += 300;
			x= "translateX("+value+"px) scale(0.9)";
			$('.slideChild').css('transform',x);
		}
		else{
			value=-900;
			x="translateX("+value+"px) scale(0.9)";
			$('.slideChild').css('transform',x);
		}
	})

	/* end move slide Image*/
	/* show search bar*/

	$('.searchIcon').click(function(){
		var temp=1;
		if(kiemTraSearch == 0){
			$('.searchBar').removeClass("hideSearchBar");
			$('.searchBar').addClass("showSearchBar");
			kiemTraSearch=temp;
		}
		else{
			$('.searchBar').removeClass("showSearchBar");
			$('.searchBar').addClass("hideSearchBar");
			temp -=1;
			kiemTraSearch =temp;
		}
	});

	/* end search bar*/
	/* content movie*/

	$('.catetory ul li a').click(function(){
		$('.catetory ul li a').removeClass('vien');
		$(this).addClass('vien');
		var movieIndex=$('.catetory ul li a').index(this);
		$('.cateMove').removeClass('movieActive');
		$('.cateMove').removeClass('movieLeft');
		$('.cateMove').removeClass('movieRight');
		if(movieIndex == 0){
			$('.cateMove:nth-child('+(movieIndex+1)+')').addClass('movieActive');
			$('.cateMove:nth-child('+(3)+')').addClass('movieLeft');
			$('.cateMove:nth-child('+(movieIndex+1)+')').addClass('movieRight');
		}
		$('.cateMove:nth-child('+(movieIndex+1)+')').addClass('movieActive');
		$('.cateMove:nth-child('+(movieIndex)+')').addClass('movieLeft');
		$('.cateMove:nth-child('+(movieIndex+1)+')').addClass('movieRight');

	});

	/* end content movie*/
	/* lich chieu*/

	$('.day ul li').click(function(){
		$('.day ul li').css('color','#928e8e');
		$(this).css('color','#fff');
		var indexDay=$('.day ul li').index(this);
		$('.blockLichMovie .lichMovies').removeClass('showInfoMovie');
		$('.blockLichMovie .lichMovies:nth-child('+(indexDay+1)+')').addClass('showInfoMovie');
		console.log(indexDay);
	});


	$('.tenRap ul li').click(function(){
		$('.tenRap ul li').css('color','#928e8e');
		$(this).css('color','#fff');

	});
	/* end lich chieu*/
	/* scroll */
	$('.subMenu ul li:nth-child(1)').click(function () {
		$('body,html').animate({scrollTop:0}, 900);
	});
	$('.subMenu ul li:nth-child(2)').click(function () {
		$('body,html').animate({scrollTop:1500}, 900);
	});
	$('.subMenu ul li:nth-child(3)').click(function () {
		$('body,html').animate({scrollTop:700}, 900);
	});

	/* end scroll*/
	/* show so ghe*/
	$('.dateTimeMovie ul li a').click(function() {
		/* Act on the event */
		$('.numberGhe').removeClass('hideNumberGhe');
		$('.numberGhe').addClass('showNumberGhe');
	});
	$('.numberGhe').before().click(function() {
		/* Act on the event */
		console.log("sds");
		$('.numberGhe').removeClass('showNumberGhe');
		$('.numberGhe').addClass('hideNumberGhe');
	});
	/* end  show so ghe*/


	/* dat ve*/

	$('.nutDatVe').click(function(){
		$('.header1 ul li').removeClass('choseShow');
		$('.header1 ul li:nth-child(1)').addClass('choseShow');
		$('.partChildDV').removeClass('diSangPhai');
		$('.partChildDV').addClass('diSangTrai');
		$('.chonGhe').removeClass('hideDatGhePartDV');
		$('.chonGhe').addClass('showChonGhePartDV');
	});
	$('.header1 ul li h5:nth-child(1)').click(function(){
		$('.partChildDV').removeClass('diSangTrai');
		$('.partChildDV').addClass('diSangPhai');
		$('.chonGhe').removeClass('showChonGhePartDV');
		$('.chonGhe').addClass('hideDatGhePartDV');
	})
	/* end dat ve*/

	/* admin*/

		$('.menu_tab .tablinks').click(function() {
		/* Act on the event */
		console.log('dsd');
		$('.tablinks').removeClass('active');
		$(this).addClass('active');
		var getIndexButtonTab =$('.tablinks').index(this);
		$('.contentMovies1').css('display', 'none');
		$('.contentMovies1:nth-child('+(getIndexButtonTab+1)+')').css('display','block');
	});
	/* end movie tab !!!*/
	/* end function*/
});

	/* move tab !!!!*/

/*Choice Day*/
$(function(){
	var day = document.getElementsByClassName('date_list');

	for (var i = 0; i < day.length; i++) {
		day[i].addEventListener("click", function(){
			for (var i = 0; i < day.length; i++) {
				day[i].classList.remove("active");
			}
			this.className += " active";
		});
	}
	});
/*End CHoice Day*/
/*Choice Time*/
$(function(){
	var time = document.getElementsByClassName('time');

	for (var i = 0; i < time.length; i++) {
		time[i].addEventListener("click", function(){
			for (var i = 0; i < time.length; i++) {
				time[i].classList.remove("active");
			}
			this.className += " active";
		});
	}

});
/*End Choice Time*/
	$(function chonlich(evt, cityName) {
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
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
});