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
    
    $m_name = $_POST['m_name'];
    $m_shop = $_POST['m_shop'];
    $m_score = $_POST['m_score'];
    $m_content = $_POST['m_content'];
    $m_date = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO scoreboard(name,shop,content,date,score) values('$m_name','$m_shop','$m_content','$m_date','$m_score')";
    mysql_query($sql, $conn);
    
    $score = mysql_query("update shop set score=(SELECT avg(score) FROM scoreboard where shop='$m_shop') where name='$m_shop'", $conn);
  ?>
  </head>
  <body>
  <script>
    alert("입력 완료!");
    location.href="index.php";
  </script>
  </body>
</html>