<meta charset="utf-8">
<?php
	session_start();
	unset($_SESSION["userid"]);

	echo "<script> alert ('로그아웃 성공'); location.href = 'index.php'; </script>";
?>
