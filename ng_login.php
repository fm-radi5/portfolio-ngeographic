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
	$id   = $_POST["id"];
	$pw = $_POST["pw"];

	$sql = "select * from members where id='$id'";
	$result = $dbConnect->query($sql);	// 데이터베이스 실행

	$num_match = mysqli_num_rows($result);

	if(!$num_match){ // 1이면 트루, 0이면 펄스 (반대)
	 echo("<script> alert('등록되지 않은 아이디입니다!');  history.go(-1); </script>"); 
	} else {
		$row = mysqli_fetch_array($result);
		
		if($pw != $row["pw"]){
		   echo("<script> alert('비밀번호 오류입니다');  history.go(-1); </script>"); 
		} else {
			session_start();
			$_SESSION["userid"] = $row["id"];

			echo("<script> location.href = 'index.php'; </script>
			");
		}
	}        
?>

