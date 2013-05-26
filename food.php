<!-- 음식 검색 -->
<div data-role="page" id="food">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 음식 DB -->
  <?
    $foodGenreList = mysql_query("select * from genre", $conn);
    $foodGenreListRows = mysql_num_rows($foodGenreList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>음식 검색</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="100%">종류</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $foodGenreListRows){
          echo "<li><a href='food.php#".mysql_result($foodGenreList, $i, id)."'  data-transition='slide'><h3>";
          echo "<table width='100%'><tr><td width='50%'>".mysql_result($foodGenreList, $i, name)."</td></tr></table>";
          echo "</h3></a></li>";
          $i++;
        }
        mysql_free_result($foodGenreList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 김밥 -->
<div data-role="page" id="gb">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  </div>
  
  <?
    $foodList = mysql_query("select * from food where genre='김밥'", $conn);
    $foodListRows = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>김 밥</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="50%">이름</td><td width="40%">판매점</td><td width="10%">가격</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $foodListRows){
          echo "<li><h3><table width='100%'><tr><td width='50%'>".mysql_result($foodList, $i, name)."</td>";
          echo "</tr></table></h3></li>";
          $i++;
        }
        mysql_free_result($foodList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 라면 -->
<div data-role="page" id="rm">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <?
    $foodList = mysql_query("select * from food where genre='라면'", $conn);
    $foodListRows = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>라 면</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="50%">이름</td><td width="40%">판매점</td><td width="10%">가격</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $foodListRows){
          echo "<li><h3><table width='100%'><tr><td width='50%'>".mysql_result($foodList, $i, name)."</td>";
          echo "</tr></table></h3></li>";
          $i++;
        }
        mysql_free_result($foodList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 밥 -->
<div data-role="page" id="rice">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <?
    $foodList = mysql_query("select * from food where genre='밥'", $conn);
    $foodListRows = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>밥</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="50%">이름</td><td width="40%">판매점</td><td width="10%">가격</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $foodListRows){
          echo "<li><h3><table width='100%'><tr><td width='50%'>".mysql_result($foodList, $i, name)."</td>";
          echo "</tr></table></h3></li>";
          $i++;
        }
        mysql_free_result($foodList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 찌개 -->
<div data-role="page" id="jg">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <?
    $foodList = mysql_query("select * from food where genre='찌개'", $conn);
    $foodListRows = mysql_num_rows($foodList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>찌 개</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="50%">이름</td><td width="40%">판매점</td><td width="10%">가격</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $foodListRows){
          echo "<li><h3><table width='100%'><tr><td width='50%'>".mysql_result($foodList, $i, name)."</td>";
          echo "</tr></table></h3></li>";
          $i++;
        }
        mysql_free_result($foodList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>
