<!-- recruit_form.php 모집게시판 글쓰기 양식 -->
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="../views/css/board.css">
<link rel="stylesheet" type="text/css" href="../views/mystyle.css"/>
<link rel="icon" href="../views/favicon.ico" type="image/x-icon" sizes="16x16">
<link href="../views/indripress/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../views/css/common.css"/>
<style>
	.container {padding: 20px 0;}
a {color: #05B3F2;} 
</style>

<script>
  function check_input() {
      if (!document.board_form.title.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.title.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
	  if (!document.board_form.category.value)
      {
          alert("분야를 선택하세요!");    
          document.board_form.category.focus();
          return;
      }
	  if (!document.board_form.startdate.value)
      {
          alert("시작 기간을 선택하세요!");    
          document.board_form.startdate.focus();
          return;
      }
	  if (!document.board_form.enddate.value)
      {
          alert("마감 기간을 선택하세요!");    
          document.board_form.enddate.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body>
<header>
    <?php include "../header.php";?>
</header>	 
<section>

<div class="wrapper row3">
	<main class="hoc container clear"> 
    	<div class="content"> 
   		<div id="board_box">
	    <h3 id="board_title">
	    		글 쓰기
		</h3>
	    <form  name="board_form" method="post" action="recruit_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="title" type="text"></span>
	    		</li>	   
                <li>
	    			<span class="col1">분야 : </span>
					<span class="col2"><select name ="category" >
                        <option value="" selected>선택하세요!</option>
                        <option value="봉사" >봉사</option>
                        <option value="과제" >과제</option>
                        <option value="팀플" >프로젝트</option>
                        <option value="공부" >스터디</option>
                        <option value="동활" >동아리</option>
                        <option value="기타" >기타</option>
                    </select></span>
	    		</li>
                <li>
	    			<span class="col1">모집 기간 : </span>
	    			<span class="col2"><input name="startdate" type="date" width="50"> ~ <input name="enddate" type="date" width="50"></span>
	    		</li>
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="file"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" class="btn" onclick="check_input()">완료</button></li>
				<li><button type="button" class="btn" onclick="location.href='recruit.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
</div>
</div><!-- board_box -->
</section> 

</body>
</html>
