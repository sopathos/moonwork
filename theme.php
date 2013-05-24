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
    <h1>테마 검색</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="100%">종류</td></tr></table></h3></li>
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
