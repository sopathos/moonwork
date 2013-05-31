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
    
    $chk_sql = "select * from member where id = '".trim($_POST[m_id])."'";
    $chk_result = mysql_query($chk_sql);
    $chk_data = mysql_fetch_array($chk_result);
    
    if($chk_data[no]){
      if($_POST[m_pw] == $chk_data[pw]){
        $_SESSION[user_no] = $chk_data[no];
        $_SESSION[user_id] = $chk_data[id];
        $_SESSION[user_pw] = $chk_data[pw];
        $_SESSION[user_name] = $chk_data[name];
        $_SESSION[user_email] = $chk_data[email];
        $_SESSION[user_phone] = $chk_data[phone];
        $_SESSION[user_major] = $chk_data[major];
        ?>
        <script>
          alert("환영합니다!");
          location.replace("index.php");
        </script>
        <?
      }else{
      ?>
      <script>
        alert("비밀번호가 다릅니다.");
        history.back();
      </script>
      <?
      }
    }else{
    ?>
    <script>
      alert("아이디가 없습니다.");
      history.back();
    </script>
    <?
    }
  ?>
  </head>
  
  <body>
  </body>
</html>