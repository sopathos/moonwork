<? session_start(); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
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
    
    $m_id = $_SESSION[user_id];
    $m_name = $_SESSION[user_name];
    $m_shop = $_POST['m_shop'];
    $m_content = $_POST['m_content'];
    $m_price = $_POST['m_price'];
    $m_address = $_POST['m_address'];
    $m_deliver = $_POST['m_deliver'];
    $today = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO receipt (customer, name, shop, content, price, address, deliver, date) VALUES ('$m_id', '$m_name', '$m_shop', '$m_content', '$m_price', '$m_address', '$m_deliver', '$today')";
    mysql_query($sql);
  ?>
  </head>
  <script>
    alert("주문이 완료되었습니다.");
    location.href="index.php";
  </script>
  <body>
  <?=$m_id?>
  <?=$m_name?>
  <?=$m_shop?>
  <?=$m_content?>
  <?=$m_price?>
  <?=$m_address?>
  </body>
</html>