<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'qordjs700';
		$pw = '7718';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_id = $_POST['id'];
	    $member_pswd1 = $_POST['pswd1'];
		$member_name = $_POST['name'];
		$member_yy = $_POST['yy'];
		$member_mm = $_POST['mm'];
		$member_dd = $_POST['dd'];
		$member_gender = $_POST['gender'];
		$member_email = $_POST['email'];
		$member_phoneNo = $_POST['phoneNo'];

		$sql = "insert into logindb (
				member_id,
				member_pswd1,
				member_name,
				member_yy,
				member_mm,
				member_dd,
				member_gender,
				member_email,
				member_phoneNo
		)";
		
		$sql = $sql. "values (
				'$member_id',
				'$member_pswd1',
				'$member_name',
				'$member_yy',
				'$member_mm',
				'$member_dd',
				'$member_gender',
				'$member_email',
				'$member_phoneNo'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("회원가입이 완료되었습니다")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>



</html>