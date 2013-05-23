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
  </head>
  <body>
  <?php
    echo "DB테스트";
    $conn = mysql_connect('localhost','moonwork','hansung08') or die("MySQL Server Connect Error");
    mysql_select_db('moonwork',$conn) or die("DB 오픈 에러");
    mysql_query("SET NAMES UTF8");
    $result = mysql_query("select * from shop", $conn);
    echo "<table border=2 bgcolor=white>\n";
    echo "<tr>\n";
    echo "<td>식당이름<td>전화번호</td><td>평점</td>\n";
    echo "</tr>\n";
    $rows = mysql_num_rows($result);
    $i = 0;
    while( $i < $rows ){
      echo "<tr>\n";
      echo "\t<td>".mysql_result($result, $i, name)."</td>\n";
      echo "\t<td>".mysql_result($result, $i, phone)."</td>\n";
      echo "\t<td>".mysql_result($result, $i, score)."</td>\n";
      echo "</tr>\n";
      $i++;
    }
    echo "</table>\n";
    mysql_free_result($result);
    mysql_close($conn);
  ?>
</html>