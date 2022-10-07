<?php
    $host = "localhost";
    $user = "mikmik";	// FTP아이디 입력
    $pw = "rlawjddms*31";		// FTP비밀번호 입력
    $dbName = "mikmik";		// 데이터베이스 이름 입력, 보통 FTP아이디랑 같음
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf8");
?>
<meta charset="utf-8">

<?php
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$regist_day = date('Y-m-d(h:i:s)',time());

	$sql = "insert into members(id, pw, name, email, regist_day) values('$id', '$pw', '$name', '$email', '$regist_day')";
	// members 테이블에 새로운 레코드 추가
	$result = $dbConnect->query($sql);
	// 데이터베이스 실행

	echo "<script>alert('회원가입이 완료되었습니다');  location.href = 'index.php'; </script>";	
?>

