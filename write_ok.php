<?php

  include ('db_connect.php');


  $username = $_SESSION['userid'];
  $usernic = $_SESSION['user_nic'];
  $board_id = $_GET['board_id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $date = date('Y-m-d');

  $upload_dir = 'uploads/';
  $upload_file = $upload_dir . $_FILES['SelectFile']['name'];

  $file_name = iconv("utf-8","CP949",$upload_file);
  
  print "<pre>";
  if (move_uploaded_file($_FILES['SelectFile']['tmp_name'], $file_name)) {
    print "[수신한 내용]<br><br>";
    print "PATH: " .$upload_file."<br>";
    print "제목 : ".$_POST['title']."<br>";
    print "내용 : ".$_POST['content']."<br>";
    print "파일 :".$_FILES['SelectFile']['type']."<br>";
    if($_FILES['SelectFile']['type']=="image/jpeg"||$_FILES['SelectFile']['type']=="image/gif"){
      print "<img src=$upload_file width='300'>";
    }
  }
  elseif(move_uploaded_file($_FILES['SelectFile']['tmp_name'], $file_name)!==false){
    print "파일 업로드  실패 : ";
    switch ($_FILES[SelectFile][error]) {
      case UPLOAD_ERR_INI_SIZE:
        print "php.ini 파일의 upload_max_filesize(".ini_get("upload_max_filesize").")보다 큽니다.<br>";
      break;
      case UPLOAD_ERR_FORM_SIZE:
        print "업로드 한 파일이 Form의 MAX_FILE_SIZE 값보다 큽니다.<br>";
      break;
      case UPLOAD_ERR_PARTIAL:
        print "파일의 일부분만 전송되었습니다.<br>";
      break;
      case UPLOAD_ERR_NO_FILE:
        print "파일이 전송되지 않았습니다.<br>";
      break;
      case UPLOAD_ERR_NO_TMP_DIR:
        print "임시 디렉토리가 없습니다.<br>";
      break;
    }
    print_r($_FILES);
  }
  print "</pre>";

  if($username && $title && $content){
      $sql = mq("insert into ".$board_id."(id,name,title,content,date,file) values('".$username."','".$usernic."','".$title."','".$content."','".$date."','".$_FILES['SelectFile']['name']."');");
      $sql2 = mq("select * from ".$board_id." where id='".$username."' and title='".$title."';");
      while($idx = $sql2->fetch_array()){
        $idx2 = $idx['idx'];
      }
      echo "<script>
      alert('글쓰기 완료되었습니다.');
      location.href='read.php?board_id=$board_id&idx=$idx2'</script>";
    }
    else{
      echo "<script>
      alert('글쓰기에 실패했습니다.');
      history.back();</script>";
    }
  
?>
