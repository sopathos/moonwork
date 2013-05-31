<!-- 빠른 주문 메인 -->
<div data-role="page" id="quick1">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shop1 = mysql_query("select * from shop where deliver='1' order by name asc", $conn);
    $shopRow1 = mysql_num_rows($shop1);
    
    $shop = mysql_query("select * from shop", $conn);
    $shopRow = mysql_num_rows($shop);
  ?>
  
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td>배달</td></table></h3></li>
      <?
        $i = 0;
        for($i; $i<$shopRow1; $i++){
          echo "<li><h3>";
          echo "<table><tr><td>".mysql_result($shop1, $i, name)."</td></tr></table>";
          echo "</h3></li>";
        }
      ?>
    </ul>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td>예약</td></table></h3></li>
      <?
       $i = 0;
        for($i;$i<$shopRow;$i++){
          echo "<li><h3><table><tr><td>".mysql_result($shop, $i, name)."</td></tr></table></h3></li>";
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
