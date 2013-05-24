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
    
    $m_id = $_POST['m_id'];
    
    $str = "select * from member where id='$m_id'";
    $result = mysql_query($str, $conn);
    $rows = mysql_num_rows($result);
    
    if($rows){
      echo "<center>존재하는 아이디입니다.</center>";
    }else{
      echo "<center>사용 가능한 아이디입니다..</center>";
    }
  ?>
  </head>
  <body>
  </body>
</html>