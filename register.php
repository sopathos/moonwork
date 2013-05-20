﻿<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    
    <title>한성대 맛집을 찾아서</title>
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css"/>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

    <style type="text/css">
      a:link {text-decoration:none; color:#FFFFFF;}
      a:visited {text-decoration:none; color:#FFFFFF;}
      a:active {text-decoration:none; color:#FFFFFF;}
      a:hover {text-decoration:none; color:#FFFFFF;}
      
      td {font-size:9pt;}
      
    </style>
    <script language="javascript">
      $(document).ready(function(){
        $("#sign_in").click(function(){
          if($("#m_id").val() == ""){
            alert("아이디를 입력하세요");
            $("#m_id").focus();
            return false;
          }
          if($("#m_pw").val() == ""){
            alert("비밀번호를 입력하세요");
            $("#m_pw").focus();
            return false;
          }
          if($("#m_name").val() == ""){
            alert("이름를 입력하세요");
            $("#m_name").focus();
            return false;
          }
          if($("#m_email").val() == ""){
            alert("이메일를 입력하세요");
            $("#m_email").focus();
            return false;
          }
          if($("#m_pw").val() != $("#m_pw2").val()){
            alert("비밀번호 확인하세요");
            $("#m_pw").val("");
            $("#m_pw2").val("");
            $("#m_pw").focus();
            return false;
          }
          $("#sign_in").submit();
        });
      });
    </script>
  </head>
  
  <body>
  <!-- 메인 -->
    <div data-role="page" id="main">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="index.php" data-icon="home">홈</a>
        <h1>회원가입</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <form id="registerForm" method="post" action="registerProc.php">
          <table border="0" width="100%">
            <tr>
              <td><b>아이디</b></td><td><input type="text" id="m_id"></td><td><button>중복체크</button></td>
            </tr>
            <tr>
              <td><b>비밀번호</b></td>
              <td colspan="2"><input type="password" id="m_pw"></td>
            </tr>
            <tr>
              <td><b>비밀번호 확인</b></td>
              <td colspan="2"><input type="password" id="m_pw2"></td>
            </tr>
            <tr>
              <td><b>이름</b></td>
              <td colspan="2"><input type="text" id="m_name"></td>
            </tr>
            <tr>
              <td><b>이메일</b></td>
              <td colspan="2"><input type="email" id="m_email"></td>
            </tr>
            <tr>
              <td>전화번호</td>
              <td colspan="2"><input type="text" id="m_phone"></td>
            </tr>
            <tr>
              <td>전공</td>
              <td colspan="2"><input type="text" id="m_major"></td>
            </tr>
            <tr>
              <td colspan="3">
              <input type="button" id="sign_in" value="회원가입" data-theme="b"></td>
          </table>
        </form>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#shop" data-icon="search">식당 검색</a></li>
            <li><a href="#food" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" data-icon="star">빠른 주문</a></li>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>