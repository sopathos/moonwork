<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meata name="apple-mobile-web-app-capable" content="yes"/>
    
    <title>한성대 맛집을 찾아서</title>
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css"/>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
    
    <script language="javascript" src="MyFunction.js"></script>
    <link rel="stylesheet" type="text/css" href="MyStyle.css"/>
        
  <?
    include("lib.php");
  ?>
  </head>
  
  <body>
  <div data-role="page" id="login">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <h1>로그인</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <form name="loginForm" method="post" action="login_chk.php">
          <table border="0" style="width:100%">
            <tr>
              <td>ID</td><td><input type="text" name="m_id"></input></td>
            </tr>
            <tr>
              <td>PW</td><td><input type="password" name="m_pw"></input></td>
            </tr>
            <tr>
              <td colspan="2"><input type="button" value="로그인" style="width:100%" data-theme="b" onclick="login_chk();"></td>
            </tr>
          </table>
        </form>
        <table border="0" width="100%">
          <tr>
            <td>회원이 아니신가요?</td>
            <td width="50%"><a href="register.php" rel="external">회원가입</a></td>
          </tr>
          <tr>
            <td>아이디를 잊으셨나요?</td>
            <td width="50%"><a href="#">아이디 찾기</a></td>
          <tr>
            <td>비밀번호를 잊으셨나요?</td>
            <td width="50%"><a href="#">비밀번호 찾기</a></td>
        </table>
      </div>
    </div>
    
  </body>
 </html>