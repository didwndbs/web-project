<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="../views/css/board.css">
<link rel="icon" href="../views/favicon.ico" type="image/x-icon" sizes="16x16">
<link href="../views/indripress/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../views/css/common.css"/>
<link rel="stylesheet" type="text/css" href="../views/mystyle.css"/>
<style>
.container {padding: 20px 0;}
a {color: #05B3F2;}
</style>

<script>
  function check_input() {
      if (!document.board_form.name.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.name.focus();
          return;
      }
      if (!document.board_form.state.value)
      {
          alert("상태를 입력하세요!");    
          document.board_form.state.focus();
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
          alert("거래 방식을 선택하세요!");    
          document.board_form.category.focus();
          return;
      }
      if (!document.board_form.price.value)
      {
          alert("가격은 숫자만 입력 가능합니다!");    
          document.board_form.price.focus();
          return;
      }
      if (!document.board_form.file.value)
      {
          alert("이미지는 필수입니다!");    
          document.board_form.file.focus();
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
	    <form  name="board_form" method="post" action="item_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="name" type="text"></span>
	    		</li>
                <li>
	    			<span class="col1">판매가격 : </span>
	    			<span class="col2"><input name="price" type="number"></span>
	    		</li> 	   
                <li id="text_area">	
	    			<span class="col1">상태 : </span>
	    			<span class="col2">
	    				<textarea name="state"></textarea>
	    			</span>
	    		</li>
	    		<li id="text_area">	
	    			<span class="col1">설명 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
                <li>
					<span class="col1">거래 방식 : </span>
					<span class="col2"><select name ="category" >
                        <option value="" selected>선택하세요!</option>
                        <option value="택배" >택배</option>
                        <option value="직접" >직거래</option>
                        <option value="기타" >기타</option>
                    </select></span>
				</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="file"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" class = "btn" onclick="check_input()">완료</button></li>
				<li><button type="button" class = "btn"  onclick="location.href='item_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
</div>
</div><!-- board_box -->
</body>
</html>
