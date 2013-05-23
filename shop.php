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
  
  <!-- 윤가네 -->
    <div data-role="page" id="yoon">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back" data-direction="reverse">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>윤 가 네</h1>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="index.php#shop" class="ui-btn-active" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">식당 검색</a></li>
            <li><a href="index.php#food" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">음식 검색</a></li>
            <li><a href="index.php#quick" data-icon="star" rel="external" data-transition="slide" data-direction="reverse">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="login.php" data-icon="check" data-rel="dialog">로그인</a></li>
            <?
              }else{
            ?>
            <li><a href="index.php#member" data-icon="check" rel="external">회원정보</a></li>
            <?
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    
  <!-- 김밥천국 -->
    <div data-role="page" id="gbheaven">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back" data-direction="reverse">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>김 밥 천 국</h1>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="index.php#shop" class="ui-btn-active" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">식당 검색</a></li>
            <li><a href="index.php#food" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">음식 검색</a></li>
            <li><a href="index.php#quick" data-icon="star" rel="external" data-transition="slide" data-direction="reverse">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="login.php" data-icon="check" data-rel="dialog">로그인</a></li>
            <?
              }else{
            ?>
            <li><a href="index.php#member" data-icon="check" rel="external">회원정보</a></li>
            <?
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    
  <!-- 김밥 천지 -->
    <div data-role="page" id="gbland">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back" data-direction="reverse">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>김 밥 천 지</h1>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">
        <div data-role="navbar">
          <ul>
            <li><a href="index.php#shop" class="ui-btn-active" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">식당 검색</a></li>
            <li><a href="index.php#food" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">음식 검색</a></li>
            <li><a href="index.php#quick" data-icon="star" rel="external" data-transition="slide" data-direction="reverse">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="login.php" data-icon="check" data-rel="dialog">로그인</a></li>
            <?
              }else{
            ?>
            <li><a href="#member" data-icon="check">회원정보</a></li>
            <?
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  
  <!-- 승리장 -->
    <div data-role="page" id="victory">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back" data-direction="reverse">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>승 리 장</h1>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="index.php#shop" class="ui-btn-active" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">식당 검색</a></li>
            <li><a href="index.php#food" data-icon="search" rel="external" data-transition="slide" data-direction="reverse">음식 검색</a></li>
            <li><a href="index.php#quick" data-icon="star" rel="external" data-transition="slide" data-direction="reverse">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="login.php" data-icon="check" data-rel="dialog">로그인</a></li>
            <?
              }else{
            ?>
            <li><a href="index.php#member" data-icon="check" rel="external">회원정보</a></li>
            <?
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  
  </body>
  
</html>