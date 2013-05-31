<!-- 식당 검색 -->
<div data-role="page" id="shop">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 식당 DB -->
  <?
    $shopList = mysql_query("select * from shop order by name asc", $conn);
    $shopListRows = mysql_num_rows($shopList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td>식당 검색</td></table></h3></li>
<?
  $i = 0;
  while($i < $shopListRows){
    echo "<li><a href='#".mysql_result($shopList, $i, id)."' data-transition='slide'><h3>";
    echo "<table width='100%'><tr><td width='50%'>".mysql_result($shopList, $i, name)."</td></tr></table>";
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

<?
  $i = 0;
  while($i < $shopListRows){
?>
<!-- 샵리스트 -->
<div data-role="page" id="<?=mysql_result($shopList, $i, id)?>">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shopId = mysql_result($shopList, $i, id);
    $shop = mysql_query("select * from shop where id='$shopId'", $conn);
    $shopData = mysql_fetch_array($shop);
    
    $foodList = mysql_query("SELECT * FROM menu WHERE menu.shop='$shopData[name]'", $conn);
    $foodListRows = mysql_num_rows($foodList);
    
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" align="center"><img border="0" width="85%" src="image/<?=$shopData[image]?>"></td>
        <td width="50%" align="center">
          <table>
            <tr>
              <th align="center" height="30"><h2><?=$shopData[name]?></h2></th>
            </tr>
            <tr><td align="center" height="30"><?=$shopData[phone]?></td></tr>
            <tr><td align="center" height="30">
            <?
              $iter=0;
              for($iter; $iter<round($data[score]); $iter++){
                echo "★";
              }
              for($iter ; $iter<5 ; $iter++){
                echo "☆";
              }
              echo "(".$shopData[score]."/5)"; ?>
            </td></tr>
            <tr>
              <td align="center" height="30">
            <?
              if($shopData[deliver]==1){
                echo "배달 가능";
              }else{
                echo "배달 불가";
              }
            ?>
              </td>
            </tr>
          </table>
        </td>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $j=0;
              while($j < $foodListRows){
                echo "<li><h3><table border='0' width='100%'><tr>";
                echo "<td align='center' width='50%'>".mysql_result($foodList, $j, food)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($foodList, $j, price)."</td>";
                echo "</tr></table></h3></li>";
                $j++;
              }
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
    
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>
<?
  $i++;
  }
?>
