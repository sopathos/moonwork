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
          echo "<li><a href='#".mysql_result($booked, $i, id)."_reserve' data-transition='slide'><h3>";
          echo "<table><tr><td>".mysql_result($booked, $i, name)."</td></tr></table>";
          echo "</h3></a></li>";
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

<!-- 배달 -->
<?
  $i=0;
  while($i < $deliverRow){
?>
<div data-role="page" id="<?=mysql_result($deliver, $i, id)?>_deliver">

  <?
  
    include("header.php");
    
    $deliverShopId = mysql_result($deliver, $i, id);
    $deliverShop = mysql_query("select * from shop where id='$deliverShopId'", $conn);
    $deliverShopData = mysql_fetch_array($deliverShop);
    
    $foodList = mysql_query("select menu.*, food.id from food, menu where menu.shop='$deliverShopData[name]' and menu.food = food.name", $conn);
    $foodListRows = mysql_num_rows($foodList);
  ?>
  
  <div data-role="content">
  <form name="orderForm" method="post" action="order.php">
  <input type="hidden" name="m_shop" value="<?=mysql_result($deliver, $i, name)?>"/>
    <ul data-role="listview">
    <li><input type="submit" value="주문하기" data-theme="a"></li>   
    <input type="hidden" name="m_deliver" value="1"/>
    <?
      $j=0;
      while($j < $foodListRows){
        echo "<li><table width='100%'><tr>";
        echo "<td width='50%'><input type='hidden' name='m_".mysql_result($foodList, $j, food.".".id)."' value='".mysql_result($foodList, $j, menu.".".food)."'/>".mysql_result($foodList, $j, menu.".".food)."</td>";
        echo "<td width='35%'><input type='hidden' name='m_".mysql_result($foodList, $j, food.".".id)."_price' value='".mysql_result($foodList, $j, menu.".".price)."'/>".mysql_result($foodList, $j, menu.".".price)."</td>";
        echo "<td width='15%'><input type='number' name='m_".mysql_result($foodList, $j, food.".".id)."_num' value='0'></td>";
        echo "</tr></table></li>";
        $j++;
      }
      $k=0;
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

<!-- 예약 -->
<?
  $i=0;
  while($i < $bookedRow){
?>
<div data-role="page" id="<?=mysql_result($booked, $i, id)?>_reserve">

  <?
  
    include("header.php");
    
    $bookedShopId = mysql_result($booked, $i, id);
    $bookedShop = mysql_query("select * from shop where id='$bookedShopId'", $conn);
    $bookedShopData = mysql_fetch_array($bookedShop);
    
    $foodList = mysql_query("select menu.*, food.id from food, menu where menu.shop='$bookedShopData[name]' and menu.food = food.name", $conn);
    $foodListRows = mysql_num_rows($foodList);
  ?>
  
  <div data-role="content">
  <form name="orderForm" method="post" action="order.php">
  <input type="hidden" name="m_shop" value="<?=mysql_result($booked, $i, name)?>"/>
    <ul data-role="listview">
    <li><input type="submit" value="주문하기" data-theme="a"></li>   
    <input type="hidden" name="m_deliver" value="0"/>
    <?
      $j=0;
      while($j < $foodListRows){
        echo "<li><table width='100%'><tr>";
        echo "<td width='50%'><input type='hidden' name='m_".mysql_result($foodList, $j, food.".".id)."' value='".mysql_result($foodList, $j, menu.".".food)."'/>".mysql_result($foodList, $j, menu.".".food)."</td>";
        echo "<td width='35%'><input type='hidden' name='m_".mysql_result($foodList, $j, food.".".id)."_price' value='".mysql_result($foodList, $j, menu.".".price)."'/>".mysql_result($foodList, $j, menu.".".price)."</td>";
        echo "<td width='15%'><input type='number' name='m_".mysql_result($foodList, $j, food.".".id)."_num' value='0'></td>";
        echo "</tr></table></li>";
        $j++;
      }
      $k=0;
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