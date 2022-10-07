// JavaScript Document


// PC 사이드 메뉴

$("#header .nav_p .btn_p a").click(function(){
	$("#sidebar_p").css("display","block");
	setTimeout(function(){
		$("#sidebar_p").css("opacity", 1);
		$('#sidebar_p .side_menu').css('right', 0);
	},10);
});

$("#sidebar_p>.side_menu>a").click(function(){
	$("#sidebar_p").css("opacity", 0);
	$('#sidebar_p .side_menu').css('right', '-500px');
	setTimeout(function(){
		$("#sidebar_p").css("display","none");
	}, 500);
});

// 브라우저 가로사이즈가 모바일 크기로 줄어들면 PC서브메뉴 숨기기
$(window).resize(function(){
	var WIDTH = $(window).width();
	if(WIDTH <= 1000){
		$("#sidebar_p").css("display","none");
		$("#sidebar_p").css("opacity", 0);
		$('#sidebar_p .side_menu').css('right', '-500px');
	}
});

// Mobile 사이드 메뉴
$('#header .btn_m a').click(function(){
	$('#sidebar_m').css('display','block');
	setTimeout(function(){
		$("#sidebar_m").css("opacity", 1);
		$('#sidebar_m .side_menu').css('left', 0);
	},10);
});

$('#sidebar_m .top_bg').click(function(){
	$("#sidebar_m").css("opacity", 0);
	$('#sidebar_m .side_menu').css('left', '-100%');
	setTimeout(function(){
		$("#sidebar_m").css("display","none");
	}, 500);
});


/*

// Mobile 사이드 메뉴
$("#header .btn_m a").click(function(){
	$("#sidebar_m").css("display","block");
});

$("#sidebar_m>.side_menu ul li").click(function(){
	$("#sidebar_m").css("display","none");
});

*/
