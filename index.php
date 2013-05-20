﻿<!DOCTYPE HTML>
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
  </head>
  
  <body>
  <!-- 메인 -->
    <div data-role="page" id="main">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>한 맛 찾</h1>
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
    
  <!-- 식당 검색 -->
    <div data-role="page" id="shop">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>식당 검색</h1>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#shop" class="ui-btn-active" data-icon="search">식당 검색</a></li>
            <li><a href="#food" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" data-icon="star">빠른 주문</a></li>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
          </ul>
        </div>
      </div>
    </div>
     
  <!-- 음식 검색 -->
    <div data-role="page" id="food">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>음식 검색</h1>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#shop" data-icon="search">식당 검색</a></li>
            <li><a href="#food" class="ui-btn-active" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" data-icon="star">빠른 주문</a></li>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
          </ul>
        </div>
      </div>
    </div>
     
  <!-- 빠른 주문 -->
    <div data-role="page" id="quick">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>빠른 주문</h1>
        <table class="order" width="100%" border="0">
          <thead>
            <tr width="15%">
              <td>식당</td>
              <td colspan="3"><input type="search"/></td>
            </tr>
          </thead>
          
          <tbody>
            <tr class="row">
              <td width="10%">음식</td>
              <td><input type="search" results="3"></td>
              <td width="10%"><input type="number" value="0"></td>
              <td><button class="remove" data-icon="minus" data-iconpos="notext"></td>
            </tr>
            <tr>
              <td width="10%">음식</td>
              <td><input type="search" results="3"></td>
              <td width="10%"><input type="number" value="0"></td>
              <td><button class="remove" data-icon="minus" data-iconpos="notext"></td>
            </tr>
          </tbody>
          
          <tfoot>
            <tr>
              <td colspan="4"><button class="add">음식 추가</td>
            </tr>
            <tr>
              <td width="10%">주소</td>
              <td colspan="3"><input type="text" style="width:95%"></td>
            </tr>
            <tr>
              <td colspan="4"><input type="button" value="주문" data-theme="b"></td>
            </tr>
          </tfoot>
          
        </table>
        
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#shop" data-icon="search">식당 검색</a></li>
            <li><a href="#food" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" class="ui-btn-active" data-icon="star">빠른 주문</a></li>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
          </ul>
        </div>
      </div>
    </div>
    
  <!-- 로그인 -->
    <div data-role="page" id="login">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <h1>로그인</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <table border="0" style="width:100%">
          <tr>
            <td>ID</td><td><input type="text"></input></td>
          </tr>
          <tr>
            <td>PW</td><td><input type="password"></input></td>
          </tr>
          <tr>
            <td colspan="2"><input type="button" value="로그인" style="width:100%" data-theme="b"></td>
          </tr>
        </table>
        <table border="0" width="100%">
          <tr>
            <td>회원이 아니신가요?</td>
            <td width="50%"><a href="./register.php">회원가입</a></td>
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