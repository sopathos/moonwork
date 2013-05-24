<!-- 식당 검색 -->
<div data-role="page" id="shop">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 식당 DB -->
  <?
    $shopList = mysql_query("select * from shop", $conn);
    $shopListRows = mysql_num_rows($shopList);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>식당 검색</h1>
    <ul data-role="listview" data-inset="true">
      <li data-theme="a"><h3><table width="100%"><tr><td width="50%">식당이름</td><td width="40%">전화번호</td><td width="10%">평점</td></tr></table></h3></li>
      <?
        $i = 0;
        while($i < $shopListRows){
          echo "<li><a href='#".mysql_result($shopList, $i, id)."' data-transition='slide'><h3>";
          echo "<table width='100%'><tr><td width='50%'>".mysql_result($shopList, $i, name)."</td>";
          echo "<td width='40%'>".mysql_result($shopList, $i, phone)."</td>";
          echo "<td width='10%'>".mysql_result($shopList, $i, score)."</td></tr></table>";
          echo "</h3></a></li>";
          $i++;
        }
        mysql_free_result($shopList);
      ?>
    </ul>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>
  
<!-- 윤가네 -->
<div data-role="page" id="yoon">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>윤 가 네</h1>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 김밥천국 -->
<div data-role="page" id="gbheaven">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>김 밥 천 국</h1>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 김밥 천지 -->
<div data-role="page" id="gbland">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>김 밥 천 지</h1>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>

<!-- 승리장 -->
<div data-role="page" id="victory">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <h1>승 리 장</h1>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>
