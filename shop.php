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
    
    $shop = mysql_query("select * from shop where id='yoon'", $conn);
    $data = mysql_fetch_array($shop);
    $j = 0;
    
    $food = mysql_query("select distinct menu.*, food.genre from menu,food where menu.shop_name='윤가네' and menu.food_name = food.name order by food.genre asc, price asc", $conn);
    $foodRow = mysql_num_rows($food);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%">
      <tr>
        <td width="50%" rowspan="3" align="center"><img border="0" width="85%" src="image/Yoongane.png"></td>
        <td width="50%" align="center"><h1><? echo mysql_result($shop, $j, name); ?></h1></td>
      </tr>
      <tr><td align="center"><? echo mysql_result($shop, $j, phone); ?></td></tr>
      <tr><td align="center">
      <?
        for($iter=0; $iter<$data[score]; $iter++){
          echo "★";
        }
        echo "(".mysql_result($shop, $j, score).")"; ?>
      </td></tr>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $i = 0;
              while($i < $foodRow){
                echo "<li><table width='100%'><tr>";
                echo "<td width='50%' align='center'>".mysql_result($food, $i, food_name)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($food, $i, price)."</td></tr></table></li>";
                $i++;
              }
              mysql_free_result($food);
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
    
  <!-- 푸터 -->
  <?
    mysql_free_result($shop);
    include("footer.php");
  ?>
</div>

<!-- 김밥천국 -->
<div data-role="page" id="gbheaven">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shop = mysql_query("select * from shop where id='gbheaven'", $conn);
    $data = mysql_fetch_array($shop);
    $j = 0;
    
    $food = mysql_query("select distinct menu.*, food.genre from menu,food where menu.shop_name='김밥천국' and menu.food_name = food.name order by food.genre asc, price asc", $conn);
    $foodRow = mysql_num_rows($food);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%">
      <tr>
        <td width="50%" rowspan="3" align="center"><img border="0" width="85%" src="image/Yoongane.png"></td>
        <td width="50%" align="center"><h1><? echo mysql_result($shop, $j, name); ?></h1></td>
      </tr>
      <tr><td align="center"><? echo mysql_result($shop, $j, phone); ?></td></tr>
      <tr><td align="center">
      <?
        for($iter=0; $iter<$data[score]; $iter++){
          echo "★";
        }
        echo "(".mysql_result($shop, $j, score).")"; ?>
      </td></tr>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $i = 0;
              while($i < $foodRow){
                echo "<li><table width='100%'><tr>";
                echo "<td width='50%' align='center'>".mysql_result($food, $i, food_name)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($food, $i, price)."</td></tr></table></li>";
                $i++;
              }
              mysql_free_result($food);
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  
  <!-- 푸터 -->
  <?
    mysql_free_result($shop);
    include("footer.php");
  ?>
</div>

<!-- 김밥 천지 -->
<div data-role="page" id="gbland">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shop = mysql_query("select * from shop where id='gbland'", $conn);
    $data = mysql_fetch_array($shop);
    $j = 0;
    
    $food = mysql_query("select distinct menu.*, food.genre from menu,food where menu.shop_name='김밥천지' and menu.food_name = food.name order by food.genre asc, price asc", $conn);
    $foodRow = mysql_num_rows($food);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%">
      <tr>
        <td width="50%" rowspan="3" align="center"><img border="0" width="85%" src="image/Yoongane.png"></td>
        <td width="50%" align="center"><h1><? echo mysql_result($shop, $j, name); ?></h1></td>
      </tr>
      <tr><td align="center"><? echo mysql_result($shop, $j, phone); ?></td></tr>
      <tr><td align="center">
      <?
        for($iter=0; $iter<$data[score]; $iter++){
          echo "★";
        }
        echo "(".mysql_result($shop, $j, score).")"; ?>
      </td></tr>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $i = 0;
              while($i < $foodRow){
                echo "<li><table width='100%'><tr>";
                echo "<td width='50%' align='center'>".mysql_result($food, $i, food_name)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($food, $i, price)."</td></tr></table></li>";
                $i++;
              }
              mysql_free_result($food);
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  
  <!-- 푸터 -->
  <?
    mysql_free_result($shop);
    include("footer.php");
  ?>
</div>

<!-- 승리장 -->
<div data-role="page" id="victory">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shop = mysql_query("select * from shop where id='victory'", $conn);
    $data = mysql_fetch_array($shop);
    $j = 0;
    
    $food = mysql_query("select distinct menu.*, food.genre from menu,food where menu.shop_name='승리장' and menu.food_name = food.name order by food.genre asc, price asc", $conn);
    $foodRow = mysql_num_rows($food);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%">
      <tr>
        <td width="50%" rowspan="3" align="center"><img border="0" width="85%" src="image/Yoongane.png"></td>
        <td width="50%" align="center"><h1><? echo mysql_result($shop, $j, name); ?></h1></td>
      </tr>
      <tr><td align="center"><? echo mysql_result($shop, $j, phone); ?></td></tr>
      <tr><td align="center">
      <?
        for($iter=0; $iter<$data[score]; $iter++){
          echo "★";
        }
        echo "(".mysql_result($shop, $j, score).")"; ?>
      </td></tr>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $i = 0;
              while($i < $foodRow){
                echo "<li><table width='100%'><tr>";
                echo "<td width='50%' align='center'>".mysql_result($food, $i, food_name)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($food, $i, price)."</td></tr></table></li>";
                $i++;
              }
              mysql_free_result($food);
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  
  <!-- 푸터 -->
  <?
    mysql_free_result($shop);
    include("footer.php");
  ?>
</div>

<!-- 한아름 -->
<div data-role="page" id="hanareum">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shop = mysql_query("select * from shop where id='hanareum'", $conn);
    $data = mysql_fetch_array($shop);
    $j = 0;
    
    $food = mysql_query("select distinct menu.*, food.genre from menu,food where menu.shop_name='한아름' and menu.food_name = food.name order by food.genre asc, price asc", $conn);
    $foodRow = mysql_num_rows($food);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%">
      <tr>
        <td width="50%" rowspan="3" align="center"><img border="0" width="85%" src="image/Yoongane.png"></td>
        <td width="50%" align="center"><h1><? echo mysql_result($shop, $j, name); ?></h1></td>
      </tr>
      <tr><td align="center"><? echo mysql_result($shop, $j, phone); ?></td></tr>
      <tr><td align="center">
      <?
        for($iter=0; $iter<$data[score]; $iter++){
          echo "★";
        }
        echo "(".mysql_result($shop, $j, score).")"; ?>
      </td></tr>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $i = 0;
              while($i < $foodRow){
                echo "<li><table width='100%'><tr>";
                echo "<td width='50%' align='center'>".mysql_result($food, $i, food_name)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($food, $i, price)."</td></tr></table></li>";
                $i++;
              }
              mysql_free_result($food);
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  
  <!-- 푸터 -->
  <?
    mysql_free_result($shop);
    include("footer.php");
  ?>
</div>

<!-- 한성분식 -->
<div data-role="page" id="hansung">
  <!-- 헤더 -->
  <?
    include("header.php");
    
    $shop = mysql_query("select * from shop where id='hansung'", $conn);
    $data = mysql_fetch_array($shop);
    $j = 0;
    
    $food = mysql_query("select distinct menu.*, food.genre from menu,food where menu.shop_name='한성분식' and menu.food_name = food.name order by food.genre asc, price asc", $conn);
    $foodRow = mysql_num_rows($food);
  ?>
  
  <!-- 내용 -->
  <div data-role="content">
    <table align="center" width="100%">
      <tr>
        <td width="50%" rowspan="3" align="center"><img border="0" width="85%" src="image/Yoongane.png"></td>
        <td width="50%" align="center"><h1><? echo mysql_result($shop, $j, name); ?></h1></td>
      </tr>
      <tr><td align="center"><? echo mysql_result($shop, $j, phone); ?></td></tr>
      <tr><td align="center">
      <?
        for($iter=0; $iter<$data[score]; $iter++){
          echo "★";
        }
        echo "(".mysql_result($shop, $j, score).")"; ?>
      </td></tr>
      <tr>
        <td colspan="2">
          <ul data-role="listview" data-inset="true">
            <li data-theme="a"><table width="100%"><tr><td align="center" width="50%">음식 이름</td><td align="center" width="50%">가격</td></table></li>
            <?
              $i = 0;
              while($i < $foodRow){
                echo "<li><table width='100%'><tr>";
                echo "<td width='50%' align='center'>".mysql_result($food, $i, food_name)."</td>";
                echo "<td align='center' width='50%'>".mysql_result($food, $i, price)."</td></tr></table></li>";
                $i++;
              }
              mysql_free_result($food);
            ?>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  
  <!-- 푸터 -->
  <?
    mysql_free_result($shop);
    include("footer.php");
  ?>
</div>
