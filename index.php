<!DOCTYPE HTML>
<?
  include("lib.php");
?>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    
    <title>한성대 맛집을 찾아서</title>
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css"/>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
        
    <link rel="stylesheet" type="text/css" href="MyStyle.css"/>
    <script language="javascript" src="MyFunction.js"></script>
    
  </head>
  
  <body>
    <!-- 메인 -->
    <div data-role="page" id="main">
      <!-- 헤더 -->
      <div data-role="header" data-position="fixed" data-theme="a">
        <h1>한성대 맛집을 찾아서</h1>
      </div>
      
      <!-- 내용 -->
      <div data-role="content">
        <h1>한성대 맛집을 찾아서</h1>
      </div>
      
      <!-- 푸터 -->
      <?
        include("footer.php");
      ?>
    </div>
    
    <?
      include("shop.php");
      
      include("theme.php");
      
      include("quick.php");
      
      include("order.php");
      
      include("member.php");
      
      include("login.php");
      
      include("register.php");
      
    ?>
    
  </body>
  
</html>