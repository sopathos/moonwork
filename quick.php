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
    <ul data-role="listview">
      <li data-theme="a"><table width="100%"><tr><td>배달</td></table></li>
      <?
        $i = 0;
        while($i < $deliverRow){
          echo "<li><a href='#".mysql_result($deliver, $i, id)."_deliver' data-transition='slide'><h3>";
          echo "<table><tr><td>".mysql_result($deliver, $i, name)."</td></tr></table>";
          echo "</h3></a></li>";
          $i++;
        }
      ?>
      <li data-theme="a"><table width="100%"><tr><td>예약</td></table></li>
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
  <form name="orderForm" method="post" action="order.php">
    <ul data-role="listview">    
    <li><input type="button" value="주문하기" data-theme="a" onclick="javascript:myOrder()"/></li>
    <?
      $j=0;
      while($j < $foodListRows){
        echo "<li><table width='100%'><tr>";
        echo "<td width='50%'><input type='hidden' id='".mysql_result($foodList, $j, food)."' value='".mysql_result($foodList, $j, food)."'/>".mysql_result($foodList, $j, food)."</td>";
        echo "<td width='35%'><input type='hidden' id='".mysql_result($foodList, $j, food)."_price' value='".mysql_result($foodList, $j, food)."'/>".mysql_result($foodList, $j, price)."</td>";
        echo "<td width='15%'><input type='number' id='".mysql_result($foodList, $j, food)."_num' value='0'></td>";
        echo "</tr></table></li>";
        $j++;
      }
    ?>
    </ul>
  </form>
  </div>
  <?
    include("footer.php");
  ?>
</div>
<?
  $i++;
  }
?>