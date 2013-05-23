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
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
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
    
  <!-- 식당 검색 -->
    <div data-role="page" id="shop">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 식당 DB -->
      <?php
        $shopList = mysql_query("select * from shop", $conn);
        $shopListRows = mysql_num_rows($shopList);
      ?>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>식당 검색</h1>
        <ul data-role="listview" data-inset="true">
          <li data-theme="a"><h3><table width="100%"><tr><td width="50%">식당이름</td><td width="40%">전화번호</td><td width="10%">평점</td></tr></table></h3></li>
          <?
            $i = 0;
            while($i < $shopListRows){
              echo "<li><a href='#".mysql_result($shopList, $i, id)."'><h3>";
              echo "<table width='100%'><tr><td width='50%'>".mysql_result($shopList, $i, name)."</td>";
              echo "<td width='40%'>".mysql_result($shopList, $i, phone)."</td>";
              echo "<td width='10%'>".mysql_result($shopList, $i, score)."</td></tr></table>";
              echo "</h3></a></li>";
              $i++;
            }
            mysql_free_result($shopList);
          ?>
        </ul>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#" class="ui-btn-active" data-icon="search">식당 검색</a></li>
            <li><a href="#food" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" data-icon="star">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
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
     
  <!-- 음식 검색 -->
    <div data-role="page" id="food">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 음식 DB -->
      <?php
        $foodList = mysql_query("select * from food", $conn);
        $foodListRows = mysql_num_rows($foodList);
      ?>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>음식 검색</h1>
        <ul data-role="listview" data-inset="true">
          <li data-theme="a"><h3><table width="100%"><tr><td width="50%">음식이름</td><td width="50%">종류</td></tr></table></h3></li>
          <?
            $i = 0;
            while($i < $foodListRows){
              echo "<li><a href='#".mysql_result($foodList, $i, id)."'><h3>";
              echo "<table width='100%'><tr><td width='50%'>".mysql_result($foodList, $i, name)."</td>";
              echo "<td width='50%'>".mysql_result($foodList, $i, genre)."</td></tr></table>";
              echo "</h3></a></li>";
              $i++;
            }
            mysql_free_result($foodList);
          ?>
        </ul>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#shop" data-icon="search">식당 검색</a></li>
            <li><a href="#" class="ui-btn-active" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" data-icon="star">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
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
              <td>식당</td><td colspan="3"><input type="text"/></td>
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
            <li><a href="#" class="ui-btn-active" data-icon="star">빠른 주문</a></li>
            <?
              if(!$_SESSION[user_id]){
            ?>
            <li><a href="#login" data-icon="check" data-rel="dialog">로그인</a></li>
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
   
  <!-- 로그인 --> 
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
     
  <!-- 회원정보 --> 
    <div data-role="page" id="member">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="b">
        <a href="javascript:history.back()" data-icon="back">뒤로</a>
        <a href="#main" data-icon="home">홈</a>
        <h1>한 맛 찾</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <table border="0" width="100%">
          <tr>
            <td colspan="2"><input type="button" value="로그아웃" onclick="logout();"/></td>
          </tr>
          <tr>
            <td>회원번호</td>
            <td><? echo "$_SESSION[user_no]" ?></td>
          </tr>
          <tr>
            <td>ID</td>
            <td><? echo "$_SESSION[user_id]" ?></td>
          </tr>
          <tr>
            <td>이름</td>
            <td><? echo "$_SESSION[user_name]" ?></td>
          </tr>
          <tr>
            <td>이메일</td>
            <td><? echo "$_SESSION[user_email]" ?></td>
          </tr>
          <tr>
            <td>전화번호</td>
            <td><? echo "$_SESSION[user_phone]" ?></td>
          </tr>
          <tr>
            <td>전공</td>
            <td><? echo "$_SESSION[user_major]" ?></td>
          </tr>
        </table>
      </div>
      
      <!-- 푸터 -->
      <div data-role="footer" data-position="fixed" data-theme="b">        
        <div data-role="navbar">
          <ul>
            <li><a href="#shop" data-icon="search">식당 검색</a></li>
            <li><a href="#food" data-icon="search">음식 검색</a></li>
            <li><a href="#quick" data-icon="star">빠른 주문</a></li>
            <li><a href="#" class="ui-btn-active" data-icon="check">회원정보</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
  
</html>