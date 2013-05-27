      <table>
        <tr>
          <th align="center" height="30"><h2><? echo mysql_result($shop, $j, name); ?></h2></th>
        </tr>
        <tr><td align="center" height="30"><? echo mysql_result($shop, $j, phone); ?></td></tr>
        <tr><td align="center" height="30">
        <?
          $iter=0;
          for($iter; $iter<round($data[score]); $iter++){
            echo "★";
          }
          for($iter ; $iter<5 ; $iter++){
            echo "☆";
          }
          echo "(".mysql_result($shop, $j, score)."/5)"; ?>
        </td></tr>
        <tr>
          <td align="center" height="30">
        <?
          if($data[deliver]==1){
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
