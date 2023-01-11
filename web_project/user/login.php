<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>로그인</title>
    <link rel="icon" href="../views/favicon.ico" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../views/mystyle.css"/>
    <link href="../views/indripress/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="../views/css/common.css"/>
    <style>
      * {margin: 0; padding: 0;}
      #login_box{
        width:400px;
        height:150px;
        border:solid 2px white;
        position: absolute;
        left: 50%; top: 65%;
        margin-left: -200px;
        margin-top: -100px;
        background-color: #4aa8d8;
        color: white;
      }
      .submit{
        width: 80px;
        height: 70px;
        border-radius: 5px;
        position: absolute;
        left: 50%; top: 50%;
        margin-left: 100px;
        margin-top: -58px;
        background-color: white;
        border:solid 1px gray;
        color:black;
      }
      a{
        color: white;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
  <header>
    <?php include "../header.php";?>
  </header>
    <div id="login_box">
      <form name="loginForm" action="login_search.php" method="post">
        <table width="300" height="100" border="0">
          <tr>
            <th align="right">아 이 디 :</th>
            <td><input type="text" name="userid"></td>
          </tr>
          <tr>
            <th align="right">패스워드 :</th>
            <td><input type="password" name="userpw"></td>
          </tr>
        </table>
        <input type="submit" class="submit" value="로그인">
        <p align=center>
        <a href="sign_up.php">회원가입</a>
        </p>
      </form>

    </div>
  </body>
</html>
