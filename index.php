<? session_start(); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?  
      include("lib.php");
    ?>
    <meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
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
        <img width="100%" src="image/top_logo.png" align="center"/>
        <table width="100%">
          <tr><th colspan="3" align="center" style="border-bottom-width:1pt; border-bottom-color:black; border-bottom-style:solid;">
            <br><font size="5">식당 TOP3</font> (평점 순)</th></tr>
          <tr>
            <?
              $shopRank = mysql_query("select name, image from shop order by score desc", $conn);
              $r=0;
              while($r < 3){
                echo "<td width='33%' align='center'><b>No.".($r+1)."</b><img width='100%' src='image/".mysql_result($shopRank, $r, image)."'><br>".mysql_result($shopRank, $r, name);
                echo "</td>";
                $r++;
              }
            ?>
          </tr>
          <tr><th colspan="3" align="center" style="border-bottom-width:1pt; border-bottom-color:black; border-bottom-style:solid;">
            <br><font size="5">식당 TOP3</font> (배달 순)</th></tr>
          <tr>
          <tr>
            <?
              $shopRank = mysql_query("select shop.name, shop.image from receipt, shop where receipt.deliver='1' and shop.name = receipt.shop group by shop order by count(shop) desc", $conn);
              $r=0;
              while($r < 3){
                echo "<td width='33%' align='center'><b>No.".($r+1)."</b><img width='100%' src='image/".mysql_result($shopRank, $r, shop.".".image)."'><br>".mysql_result($shopRank, $r, shop.".".name);
                echo "</td>";
                $r++;
              }
            ?>
          </tr>
          <tr><th colspan="3" align="center" style="border-bottom-width:1pt; border-bottom-color:black; border-bottom-style:solid;">
            <br><font size="5">식당 TOP3</font> (예약 순)</th></tr>
          <tr>
          <tr>
            <?
              $shopRank = mysql_query("select shop.name, shop.image from receipt, shop where receipt.deliver='0' and shop.name = receipt.shop group by shop order by count(shop) desc", $conn);
              $r=0;
              while($r < 3){
                echo "<td width='33%' align='center'><b>No.".($r+1)."</b><img width='100%' src='image/".mysql_result($shopRank, $r, shop.".".image)."'><br>".mysql_result($shopRank, $r, shop.".".name);
                echo "</td>";
                $r++;
              }
            ?>
          </tr>
        </table>
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
      
      include("member.php");
      
      include("myorder.php");
      
      include("login.php");
      
      include("register.php");
      
    ?>
    
  </body>
  
</html>