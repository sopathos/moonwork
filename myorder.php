<!-- 회원정보 --> 
<div data-role="page" id="myorder">
  <!-- 헤더 -->
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>주문내역</h1>
  </div>
  <?
    $m_id = $_SESSION[user_id];
    $orderList = mysql_query("SELECT * from receipt WHERE customer='$m_id'", $conn);
    $orderListRow = mysql_num_rows($orderList);
  ?>
  <!-- 내용 -->
  <div data-role="content">
    <table border="0" width="100%">
    <tr><td width="70%"><h3><b>주문 내역</b></h3></td><td width="30%"><h3><b>가격</b></h3></td>
    <?
      $i=0;
      if($orderListRow > 5){
        $orderListRow = 5;
      }
      while($i < $orderListRow){
        echo "<tr><td width='70%'>".mysql_result($orderList, $i, content)."</td>";
        echo "<td width='30%'>".mysql_result($orderList, $i, price)."</td></tr>";
        $i++;
      }
    ?>
    </table>
  </div>
</div>