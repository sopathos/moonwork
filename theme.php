<!-- 테마 검색 -->
<div data-role="page" id="theme">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 테마 DB -->
  <?
    $themeList = mysql_query("select * from theme order by name asc", $conn);
    $themeListRows = mysql_num_rows($themeList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="100%">음식 종류별 분류</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $themeListRows){
          echo "<li><a href='#".mysql_result($themeList, $i, id)."'  data-transition='slide'><h3>";
          echo "<table width='100%'><tr><td width='50%'>".mysql_result($themeList, $i, name)."</td></tr></table>";
          echo "</h3></a></li>";
          $i++;
        }
        mysql_free_result($themeList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 분식 -->
<div data-role="page" id="snack">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $sql = "SELECT distinct food.name, menu.shop_name, menu.price FROM theme,genre,food,menu where theme.name = genre.theme and food.genre = genre.name and genre.theme='분식' and menu.food_name = food.name order by food.name asc, menu.price asc";
    $foodList = mysql_query($sql, $conn);
    $foodListRow = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <? include("theme_content.php") ?>
    
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 양식 -->
<div data-role="page" id="american">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $sql = "SELECT distinct food.name, menu.shop_name, menu.price FROM theme,genre,food,menu where theme.name = genre.theme and food.genre = genre.name and genre.theme='양식' and menu.food_name = food.name order by food.name asc, menu.price asc";
    $foodList = mysql_query($sql, $conn);
    $foodListRow = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <? include("theme_content.php") ?>
    
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 중식 -->
<div data-role="page" id="chinese">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $sql = "SELECT distinct food.name, menu.shop_name, menu.price FROM theme,genre,food,menu where theme.name = genre.theme and food.genre = genre.name and genre.theme='중식' and menu.food_name = food.name order by food.name asc, menu.price asc";
    $foodList = mysql_query($sql, $conn);
    $foodListRow = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <? include("theme_content.php") ?>
    
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 한식 -->
<div data-role="page" id="korean">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $sql = "SELECT distinct food.name, menu.shop_name, menu.price FROM theme,genre,food,menu where theme.name = genre.theme and food.genre = genre.name and genre.theme='한식' and menu.food_name = food.name order by food.name asc, menu.price asc";
    $foodList = mysql_query($sql, $conn);
    $foodListRow = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <? include("theme_content.php") ?>
    
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>