<?php
	session_start();
	if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>반응형 웹 포트폴리오</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<link href="css/swiper.min.css" rel="stylesheet">
	<script src="js/swiper.min.js"></script>
	<link rel="shortcut icon" href="img/favicon_thumbsup.png">
	
</head>

<body>
		
	<div id="header">
		<div class="btn_m"> <!--좌측 모바일 버튼메뉴-->
			<a href="#">
				<span></span>			
				<span></span>			
				<span></span>
			</a>
		</div>
		<h1 class="logo_p"><a href="index.php"><img src="img/01/toplogo.png" alt="로고"></a></h1>
		<h1 class="logo_m"><a href="index.php"><i style="display:none;">로고</i></a></h1>
		<div class="nav_p">
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">BRAND</a></li>
				<li><a href="#">DISENY PLUS</a></li>
				<li><a href="#">STORE</a></li>
				<li><a href="#">MAGAZINES</a></li>
				<li><a href="#">SOCIAL MEDIA</a></li>
			</ul>
			<div class="btn_p"> <!--우측 PC 버튼메뉴-->
				<a href="#">
					<span></span>			
					<span></span>			
					<span></span>
				</a>
			</div>
		</div>
	</div>
	
	<!--PC 사이드바 메뉴-->
	<div id="sidebar_p">
		<div class="side_menu">
			<a href="#"><img src="img/01/sidebar.png" alt=""></a>
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">BRAND</a></li>
				<li><a href="#">DISNEY PLUS</a></li>
				<li><a href="#">STORE</a></li>
				<li><a href="#">MAGAZINES</a></li>
				<li><a href="#">SOCIAL MEDIA</a></li>
			</ul>
		</div>
	</div>
	
	<!--MOBILE 사이드바 메뉴-->
	<div id="sidebar_m">
		<p class="top_bg"><!--위쪽배경색--></p>
		<div class="side_menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">BRAND</a></li>
				<li><a href="#">DISNEY PLUS</a></li>
				<li><a href="#">STORE</a></li>
				<li><a href="#">MAGAZINES</a></li>
				<li><a href="#">SOCIAL MEDIA</a></li>
				<?php
					if(isset($userid)){
						echo '<li><a href="logout.php">LOGOUT</a></li>';
					} else {
						echo '<li><a href="ng_login.html">LOGIN</a></li>';
					}
				?>
			</ul>
			<ul class="sns_m">
				<li><a href="#"><img src="img/01/insta.png" alt="인스타그램"></a></li>
				<li><a href="#"><img src="img/01/youtube.png" alt="유튜브"></a></li>
				<li><a href="#"><img src="img/01/facebook.png" alt="페이스북"></a></li>
			</ul>
			<ul class="sns_m_h"> <!--hover-->
				<li><a href="#"><img src="img/01/insta_h.png" alt="인스타그램"></a></li>
				<li><a href="#"><img src="img/01/youtube_h.png" alt="유튜브"></a></li>
				<li><a href="#"><img src="img/01/facebook_h.png" alt="페이스북"></a></li>
			</ul>
		</div>
	</div>
	
	<div id="main">
		<!--우측 상단 SNS 3종/로그인-->
		<div class="SNS"> 
			<div class="sns_box">
				<a href="#"><img src="img/01/insta.png" alt="인스타그램"></a>
				<a href="#"><img src="img/01/youtube.png" alt="유튜브"></a>
				<a href="#"><img src="img/01/facebook.png" alt="페이스북"></a>
			</div>
			<div class="sns_box_h">
				<a href="#"><img src="img/01/insta_h.png" alt="인스타그램"></a>
				<a href="#"><img src="img/01/youtube_h.png" alt="유튜브"></a>
				<a href="#"><img src="img/01/facebook_h.png" alt="페이스북"></a>
			</div>
			<div class="login_p">
				<?php
					if(isset($userid)){
						echo '<a href="logout.php">LOGOUT</a>';
					} else {
						echo '<a href="ng_login.html">LOGIN</a>';
					}
				?>
			</div>
		</div>
		
		<section class="SLIDE">
			<div class="swiper-container">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<a href="#">
							<img src="img/01/slide_01.png" alt="이미지1">
							<img src="img/01/slide_hover.png" alt="">
							<img src="img/01/slide_01m.png" alt="이미지1">
							<img src="img/01/slide_hover_m.png" alt="">
							<ul class="text">
								<li>
									<p>DISNEY PLUS</p>
									<h2>롱 로드 홈</h2>
									<span>이라크 반군의 기습과 구조활동</span>
								</li>
							</ul>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="#">
							<img src="img/01/slide_02.png" alt="이미지2">
							<img src="img/01/slide_hover.png" alt="">
							<img src="img/01/slide_02m.png" alt="이미지2">
							<img src="img/01/slide_hover_m.png" alt="">
							<ul class="text">
								<li>
									<p>MAGAGINE</p>
									<h2>내셔널지오그래픽 매거진</h2>
									<span>8월 호 | 스톤헨지의 비밀을 밝히다</span>
								</li>
							</ul>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="#">
							<img src="img/01/slide_03.png" alt="이미지3">
							<img src="img/01/slide_hover.png" alt="">
							<img src="img/01/slide_03m.png" alt="이미지3">
							<img src="img/01/slide_hover_m.png" alt="">
							<ul class="text">
								<li>
									<p>STORE</p>
									<h2>내셔널지오그래픽 어패럴</h2>
									<span>2022 SUMMER COLLECTION</span>
								</li>
							</ul>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="#">
							<img src="img/01/slide_04.png" alt="이미지4">
							<img src="img/01/slide_hover.png" alt="">
							<img src="img/01/slide_04m.png" alt="이미지4">
							<img src="img/01/slide_hover_m.png" alt="">
							<ul class="text">
								<li>
									<p>STORE</p>
									<h2>내셔널지오그래픽 모바일 액세서리</h2>
									<span>EXPLORE FURTHER 탐험은 가까이 있다. 일상 속 탐험을 함께 할 모바일 케이스</span>
								</li>
							</ul>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="#">
							<img src="img/01/slide_05.png" alt="이미지5">
							<img src="img/01/slide_hover.png" alt="">
							<img src="img/01/slide_05m.png" alt="모바일이미지5">
							<img src="img/01/slide_hover_m.png" alt="">
							<ul class="text">
								<li>
									<p>STORE</p>
									<h2>내셔널지오그래픽 짐벌캠</h2>
									<span>흔들림 없는 위대한 기록</span>
								</li>
							</ul>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="#">
							<img src="img/01/slide_06.png" alt="이미지6">
							<img src="img/01/slide_hover.png" alt="">
							<img src="img/01/slide_06m.png" alt="모바일이미지6">
							<img src="img/01/slide_hover_m.png" alt="">
							<ul class="text">
								<li>
									<p>TRAVELER MAGAGINE</p>
									<h2>내셔널지오그래픽 트래블러 매거진</h2>
									<span>8월호 ECO ADVENTURER | 플로빙을 통한 지속가능한 제주 여행</span>
								</li>
							</ul>
						</a>
					</li>
				</ul>
				<div class="swiper-pagination"></div>
				<div class="prev arrow"><a href="#"><img src="img/01/left.png" alt="이전"></a></div>
				<div class="next arrow"><a href="#"><img src="img/01/right.png" alt="다음"></a></div>
			</div>	
		</section>
		
		<section class="DISNEY_PLUS">
			<h2>DISNEY PLUS</h2>
			<ul>
				<li>
					<a href="#">
						<img src="img/01/disney_01.png" alt="이미지">
						<img src="img/01/disney_hover.png" alt="">
						<div class="text">
							<p>DRAMA</p>
							<h3>롱 로드 홈</h3>
							<span>이라크 반군의 기습과 구조 활동</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/01/disney_02.png" alt="이미지">
						<img src="img/01/disney_hover.png" alt="">
						<div class="text">
							<p>SOCIETY</p>
							<h3>최고의 두바이 공항</h3>
							<span>두바이 국제 공항의 바쁘게 돌아가는 순간들</span>
						</div>
					</a>
				</li>
				<li class="science">
					<a href="#">
						<img src="img/01/disney_03.png" alt="이미지">
						<img src="img/01/disney_03_hover.png" alt="">
						<div class="text">
							<p>SCIENCE</p>
							<h3>거대한 기계들</h3>
							<span>불가능을 가능케 하는 기계들의 최첨단 기술</span>
						</div>
					</a>
				</li>
			</ul>			
		</section>
		
		<section class="STORE">
			<h2>STORE</h2>
			<ul>
				<li>
					<a href="#">
						<img src="img/01/slide_03.png" alt="이미지">
						<img src="img/01/disney_hover.png" alt="">
						<div class="text">
							<p>APPAREL</p>
							<h3>내셔널지오그래픽 어패럴</h3>
							<span>2022 SUMMER COLLECTION</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/01/slide_04.png" alt="이미지">
						<img src="img/01/disney_hover.png" alt="">
						<div class="text">
							<p>MOBILE ACCESSORY</p>
							<h3>내셔널지오그래픽 모바일 액세서리</h3>
							<span>EXPLORE FURTHER 탐험은 가까이 있다. 일상 속 탐험을 함께 할 모바일 케이스</span>
						</div>
					</a>
				</li>
				<li class="gimbal">
					<a href="#">
						<img src="img/01/slide_05.png" alt="이미지">
						<img src="img/01/disney_03_hover.png" alt="">
						<div class="text">
							<p>GIMBAL CAM</p>
							<h3>내셔널지오그래픽 짐벌캠</h3>
							<span>흔들림 없는 위대한 기록</span>
						</div>
					</a>
				</li>
			</ul>
		</section>
		
		<section class="MAGAZINE">
			<h2>MAGAZINE</h2>
			<ul>
				<li>
					<a href="#">
						<img src="img/01/slide_02.png" alt="이미지">
						<img src="img/01/disney_03_hover.png" alt="">
						<div class="text">
							<p>MAGAZINE</p>
							<h3>내셔널지오그래픽 매거진</h3>
							<span>8월 호 | 스톤헨지의 비밀을 밝히다</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="img/01/slide_06.png" alt="이미지">
						<img src="img/01/disney_03_hover.png" alt="">
						<div class="text">
							<p>TRAVELER MAGAGINE</p>
							<h3>내셔널지오그래픽 트래블러 매거진</h3>
							<span>8월호 ECO ADVENTURER | 플로빙을 통한 지속가능한 제주 여행</span>
						</div>
					</a>
				</li>
			</ul>			
		</section>
	</div>
	
	<div id="footer">
		<div class="inner">
			<div class="nav_footer">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">BRAND</a></li>
					<li><a href="#">DISNEY PLUS</a></li>
					<li><a href="#">STORE</a></li>
					<li><a href="#">MAGAZINES</a></li>
					<li><a href="#">SOCIAL MEDIA</a></li>
				</ul>
			</div>
			<div class="contact">
				<h4>CONTACT US</h4>
				<ul>
					<li>
						<a href="#">
							<b>의류</b>
							<span>02.1588.2906</span>
						</a>
					</li>
					<li>
						<a href="#">
							<b>매거진</b>
							<span>02.2004.8800</span>
						</a>
					</li>
					<li>
						<a href="#">
							<b>트래블러 매거진</b>
							<span>02.763.8600</span>
						</a>
					</li>
					<li>
						<a href="#">
							<b>방송</b>
							<span>02.3490.2742</span>
						</a>
					</li>
					<li>
						<a href="#">
							<b>모바일 액세서리</b>
							<span>080.643.1234</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="aside">
				<div class="left">
					<p>© National Geographic Partners LLC. All rights reserved. NATIONAL GEOGRAPHIC and Yellow Border Design are trademarks of National Geographic Society, used under license.</p>
				</div>
				<div class="right">
					<a href="#">개인정보 취급방침 <b>[업데이트됨]</b></a>
					<a href="#">이용약관</a>
				</div>
			</div>
		</div> 
	</div>
	
    <script>
		
		//슬라이드 스와이퍼 
		var swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 5000,	// 자동으로 화면 전환 5초
                disableOnInteraction: false	// 손님이 넘길 때는 오토플레이 정지
            },
            slidesPerView: 1,	// 화면에 보여주는 이미지 개수
            loop: true,	// 무한 루프 적용
            pagination: {	// 하단에 점 표시 적용
                el: '.swiper-pagination',
                clickable: true,
			},
			navigation: {	// 좌우 화살표 적용
                nextEl: '.next',
                prevEl: '.prev',
            },
          	effect: 'slide', // slide, fade, cube, coverflow, flip
			speed: 1000 // 반응속도
        });
		
	</script>

</body>
	
</html>
