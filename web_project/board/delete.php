<!-- delete.php: DB에 저장된 글 삭제  -->
<?php
  include ('db_connect.php');

  if(isset($_SESSION['board_idx']))
  $board_idx = $_SESSION['board_idx'];
  else 
  $board_idx ="";
  if(isset($_SESSION['board_id']))
  $board_id = $_SESSION['board_id'];
  else $board_id = "";


  if(isset($_POST['item'])) 
  $mypage_num = $_POST['item']; 
  else $mypage_num ="";
  //마이페이지 선택된 글 삭제
  if($mypage_num){ //게시글 번호 
    for($i=0; $i<count($_POST["item"]); $i++){
      $num = $_POST["item"][$i];
      $sql = mq("delete from board where idx = '$num';");
      $sql2 = mq("delete from board_reply where con_num = '$num';");

  }       
    if($sql && $sql2){
  echo "
     <script>
         location.href = 'my_page_result.php?info=content';
     </script>
   ";
  }
  else
   echo "<script>alert('게시글 삭제에 실패했습니다.');
     history.back();</script>";
  
}
  if($board_idx && $board_id){
  
    $sql = mq("delete from ".$board_id." where idx='$board_idx';");
    $sql2 = mq("delete from ".$board_id."_reply where con_num='$board_idx';");
    if($sql&&$sql2){
    
      echo "<script>alert('게시글이 삭제되었습니다.');
      location.href='board.php?board_id=$board_id';</script>";
    }
  
    else{
       echo "<script>alert('게시글 삭제에 실패했습니다.');
      history.back();</script>";
    }
  


    }


?>