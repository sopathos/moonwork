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
    <ul data-role="listview">
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
              for($iter; $iter<round($shopData[score]); $iter++){
                echo "★";
              }
              for($iter ; $iter<5 ; $iter++){
                echo "☆";
              }
              echo "(".round($shopData[score],1)."/5)"; ?><br><a href="#scoreboard_<?=$shopData[id]?>" style="color:black;">평가하기</a>
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

<?
  $k=0;
  while($k< $shopListRows){
?>
<!-- 스코어보드 -->
<div data-role="page" id="scoreboard_<?=mysql_result($shopList, $k, id)?>">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <?
    $board = mysql_query("select * from scoreboard where shop='".mysql_result($shopList, $k, name)."' order by no desc", $conn);
    if($board > 0)
      $boardRow = mysql_num_rows($board);
  ?>
  <!-- 내용 -->
  <div data-role="content">
    <table width="100%">
    <?
      $i = 0;
      if($boardRow == 0){
        echo "<tr><td width='100%' align='center'>게시물이 없습니다.</td></tr>";
    ?>
    
      <tr><td width='100%'><input type='button' value='평가하기' data-theme='a' onclick="location.href='#write'"/></td></tr>
    <?
      }else{
    ?>
      <tr><td width='100%' colspan="3"><input type='button' value='평가하기' data-theme='a' onclick="location.href='#write'"/></td></tr>
    <?
     }
      while($i < $boardRow){
    ?>
      <tr>
        <td width="15%"><b><?=mysql_result($board, $i, name)?></b></td>
        <td width="35%" align="right">
        <?
              $iter=0;
              for($iter; $iter<mysql_result($board, $i, score); $iter++){
                echo "★";
              }
              for($iter ; $iter<5 ; $iter++){
                echo "☆";
              }
        ?>
        <?=mysql_result($board, $i, score)?>점</td>
        <td align="right" width="50%"><?=mysql_result($board, $i, date)?></td>
      </tr>
      <tr>
        <td colspan="3" style="border-bottom-width:1pt; border-bottom-color:black; border-bottom-style:solid;"><?=mysql_result($board, $i, content)?><br>&nbsp;</td>
      </tr>
    <?
      $i++;
      }
    ?>
    </table>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>
<?
  $k++;
  }
?>

<!-- 글쓰기 -->
<div data-role="page" id="write">
  <!-- 헤더 -->
  <?
    include("header.php");
  ?>
  
  <div data-role="content">
    <form name="writeForm" method="post" action="writeProc.php">
    <table width="100%">
      <tr><td width="20%">이름</td><td width="80%"><input type="hidden" name="m_name" value="<?=$_SESSION[user_name]?>"/><?=$_SESSION[user_name]?></td></tr>
      <tr><td>평가 가게</td><td>
      <select name="m_shop">
        <?
          $n=0;
          while($n < $shopListRows){
            echo "<option name='m_shop' value='".mysql_result($shopList, $n, name)."'>".mysql_result($shopList, $n, name)."</option>";
            $n++;
          }
        ?>
      </select></td></tr>
      <tr><td>점수</td><td>
      <select name="m_score">
        <?
          $n=0;
          while($n < 6){
            echo "<option name='m_score' value='$n'>";
            $iter=0;
            for($iter; $iter<$n; $iter++){
              echo "★";
            }
            for($iter ; $iter<5 ; $iter++){
              echo "☆";
            }
            echo "</option>";
            $n++;
          }
        ?>
      </select></td></tr>
      <tr><td>내용</td><td><textarea name="m_content"></textarea></td></tr>
      <tr><td colspan="2"><input type="button" value="작성완료" data-theme="a" onclick="writeCheck()"></td></tr>
    </table>
    </form>
  </div>
  
  <!-- 푸터 -->
  <?
    include("footer.php");
  ?>
</div>