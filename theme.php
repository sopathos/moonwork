<!-- 테마 검색 -->
<div data-role="page" id="theme">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 테마 DB -->
  <?
    $genreList = mysql_query("select * from genre order by name asc", $conn);
    $genreListRows = mysql_num_rows($genreList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <ul data-role="listview">
      <li data-theme="a"><table width="100%"><tr><td width="100%">음식 종류별 분류</td></tr></table></li>
      <?
        $i = 0;
        while($i < $genreListRows){
          echo "<li><a href='#".mysql_result($genreList, $i, id)."'  data-transition='slide'><h3>";
          echo "<table width='100%'><tr><td width='50%'>".mysql_result($genreList, $i, name)."</td></tr></table>";
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
  while($i < $genreListRows){
?>
<div data-role="page" id="<?=mysql_result($genreList, $i, id)?>">
  <!-- 헤더 -->
  <?
    include("header.php");
    $genreId = mysql_result($genreList, $i, id);
    $genreData = mysql_query("select menu.* from menu, genre, food where genre.id='$genreId' and genre.name = food.genre and food.name = menu.food order by food.type asc, menu.food asc", $conn);
    $genreDataRows = mysql_num_rows($genreData);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="30%" align="center">음식</td><td width="40%"align="center">판매가게</td><td width="30%"align="center">가격</td></tr></table></h3></li>
      <?
        $j = 0;
        while($j < $genreDataRows){
          echo "<li><h3><table width='100%'><tr>";
          echo "<td width='30%' align='center'>".mysql_result($genreData, $j, menu.".".food)."</td>";
          echo "<td width='40%' align='center'>".mysql_result($genreData, $j, menu.".".shop)."</td>";
          echo "<td width='30%' align='center'>".mysql_result($genreData, $j, menu.".".price)."</td>";
          echo "</tr></table></h3></a></li>";
          $j++;
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
  $i++;
  }
?>
