<meta charset='utf-8'>
<?php
	include ('db_connect.php');
	$send_id = $_POST['send_id'];
	$rv_id = $_POST['rv_id']; 
    $content = $_POST['content']; 
	$rep_number = $_SESSION['message_idx'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$regist_day = date("Y-m-d H:i:s");  // 현재의 '년-월-일-시-분'을 저장

	if(!$send_id) {
		echo("
			<script>
			alert('로그인 후 이용해 주세요! ');
			history.go(-1)
			</script>
			");
		exit;
	}

	$sql =mq("select * from user where nic_name='$send_id'");
	$num_record = mysqli_num_rows($sql);

	if($num_record)
	{
		mq("insert into message (send_id, rep_number, rv_id, content, regist_day) 
	values('".$send_id."', '".$rep_number."', '".$rv_id."', '".$content."', '".$regist_day."');");
	} 
	else {
		echo("
			<script>
			alert('수신 아이디가 잘못 되었습니다!');
			history.go(-1)
			</script>ㅇ
			");
		exit;
	}

	echo "
	   <script>
	    location.href = 'my_message_result.php?info=message&board=send';
	   </script>
	";
?>

  
