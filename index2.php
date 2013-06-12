<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    
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
  <!-- 메인 -->
    <div data-role="page" id="register">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="index.php" data-icon="home">홈</a>
        <h1>회원가입</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <form method="post" action="registerProc.php">
          <table border="0" width="100%">
            <tr>
              <td><b>아이디</b></td><td><input type="text" id="m_id" name="m_id"></td><td><input type="button" value="중복체크"></td>
            </tr>
            <tr>
              <td><b>비밀번호</b></td>
              <td colspan="2"><input type="password" id="m_pw" name="m_pw"></td>
            </tr>
            <tr>
              <td><b>비밀번호 확인</b></td>
              <td colspan="2"><input type="password" id="m_pw2" name="m_pw2"></td>
            </tr>
            <tr>
              <td><b>이름</b></td>
              <td colspan="2"><input type="text" id="m_name" name="m_name"></td>
            </tr>
            <tr>
              <td><b>이메일</b></td>
              <td colspan="2"><input type="email" id="m_email" name="m_email"></td>
            </tr>
            <tr>
              <td>전화번호</td>
              <td colspan="2"><input type="text" id="m_phone" name="m_phone"></td>
            </tr>
            <tr>
              <td>전공</td>
              <td colspan="2"><input type="text" id="m_major" name="m_major"></td>
            </tr>
            <tr>
              <td colspan="3">
              <input type="submit" id="sign_in" value="회원가입" data-theme="b" onclick="signIn();"></td>
          </table>
        </form>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="index.php#shop" data-icon="search">식당 검색</a></li>
            <li><a href="index.php#food" data-icon="search">음식 검색</a></li>
            <li><a href="index.php#quick" data-icon="star">빠른 주문</a></li>
            <li><a href="index.php#login" data-icon="check" data-rel="dialog">로그인</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>