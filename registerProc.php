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
    $m_pw = $_POST['m_pw'];
    $m_name = $_POST['m_name'];
    $m_email = $_POST['m_email'];
    $m_phone = $_POST['m_phone'];
    $m_major = $_POST['m_major'];
    
    $chk = "select * from member where id='$m_id'";
    $chk_result = mysql_query($chk);
    $chk_data = mysql_fetch_array($chk_result);
    
    if($chk_data[no]){
      echo "<script>alert('이미 가입된 아이디입니다.');";
      echo "history.back();</script>";
    }else{
      $str = "insert into member(id,pw,name,email,phone,major) values('$m_id','$m_pw','$m_name','$m_email','$m_phone','$m_major')";
      mysql_query($str) or die(mysql_error());
      mysql_close($conn);
      
      echo "<center>처리중입니다.</center>";
      echo "<script>location.href='index.php'</script>";
    }
    
  ?>
  </head>
  <body>
  </body>
</html>