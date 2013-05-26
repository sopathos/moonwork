<!-- 빠른 주문 메인 -->
<div data-role="page" id="quick">
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
        for($i;$i<$shopRow1;$i++){
          echo "<li><h3><table><tr><td>".mysql_result($shop1, $i, name)."</td></tr></table></h3></li>";
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
<div data-role="page" id="order">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>빠른 주문</h1>
    <table class="order" width="100%" border="0">
      <thead>
        <tr width="15%">
          <td>식당</td><td colspan="3"><input type="text"/></td>
        </tr>
      </thead>
      
      <tbody>
        <tr class="row">
          <td width="10%">음식</td>
          <td><input type="search" results="3"></td>
          <td width="10%"><input type="number" value="0"></td>
          <td><button class="remove" data-icon="minus" data-iconpos="notext"></td>
        </tr>
        <tr>
          <td width="10%">음식</td>
          <td><input type="search" results="3"></td>
          <td width="10%"><input type="number" value="0"></td>
          <td><button class="remove" data-icon="minus" data-iconpos="notext"></td>
        </tr>
      </tbody>
      
      <tfoot>
        <tr>
          <td colspan="4"><button class="add">음식 추가</td>
        </tr>
        <tr>
          <td width="10%">주소</td>
          <td colspan="3"><input type="text" style="width:95%"></td>
        </tr>
        <tr>
          <td colspan="4"><input type="button" value="주문" data-theme="a"></td>
        </tr>
      </tfoot>
      
    </table>
    
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 배달 -->