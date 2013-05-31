<!-- 빠른 주문 메인 -->
<div data-role="page" id="quick">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $deliver = mysql_query("select * from shop where deliver='1' order by name asc", $conn);
    $deliverRow = mysql_num_rows($deliver);
    
    $booked = mysql_query("select * from shop", $conn);
    $bookedRow = mysql_num_rows($booked);
  ?>
  
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td>배달</td></table></h3></li>
      <?
        $i = 0;
        while($i < $deliverRow){
          echo "<li><a href='#".mysql_result($deliver, $i, id)."_deliver' data-transition='slide'><h3>";
          echo "<table><tr><td>".mysql_result($deliver, $i, name)."</td></tr></table>";
          echo "</h3></a></li>";
          $i++;
        }
      ?>
    </ul>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td>예약</td></table></h3></li>
      <?
       $i = 0;
        while($i < $bookedRow){
          echo "<li><h3>";
          echo "<table><tr><td>".mysql_result($booked, $i, name)."</td></tr></table>";
          echo "</h3></li>";
          $i++;
        }
      ?>
    </ul>
  </div>  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<?
  $i=0;
  while($i < $deliverRow){
?>
<!-- 배달 -->
<div data-role="page" id="<?=mysql_result($deliver, $i, id)?>_deliver">

  <?
    include("header.php");
    
    $deliverShopId = mysql_result($deliver, $i, id);
    $deliverShop = mysql_query("select * from shop where id='$deliverShopId'", $conn);
    $deliverShopData = mysql_fetch_array($deliverShop);
    
    $foodList = mysql_query("SELECT * FROM menu WHERE menu.shop='$deliverShopData[name]'", $conn);
    $foodListRows = mysql_num_rows($foodList);
    
  ?>
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
      <?
        $j=0;
        while($j < $foodListRows){
          echo "<li><h3><table border='0' width='100%'><tr>";
          echo "<td align='center' width='50%'><input type='checkbox'>".mysql_result($foodList, $j, food)."</input></td>";
          echo "<td align='center' width='50%'>".mysql_result($foodList, $j, price)."</td>";
          echo "</tr></table></h3></li>";
          $j++;
        }
      ?>
    </ul>
  </div>
  <?
    include("footer.php");
  ?>
</div>
<?
  $i++;
  }
?>