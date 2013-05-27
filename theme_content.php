<div data-role="content">
  <table align="center" width="100%">
    <tr>
      <td colspan="2">
        <ul data-role="listview" data-inset="true">
          <li data-theme="a"><table width="100%"><tr><td align="center" width="30%">음식 이름</td><td align="center" width="40%">파는 곳</td><td align="center" width="30%">가격</td></table></li>
          <?
            $i = 0;
            while($i < $foodListRow){
              echo "<li><table width='100%'><tr>";
              echo "<td width='30%' align='center'>".mysql_result($foodList, $i, food.".".name)."</td>";
              echo "<td align='center' width='40%'>".mysql_result($foodList, $i, menu.".".shop_name)."</td>";
              echo "<td align='center' width='30%'>".mysql_result($foodList, $i, menu.".".price)."</td>";
              echo "</tr></table></li>";
              $i++;
            }
            mysql_free_result($foodList);
          ?>
        </ul>
      </td>
    </tr>
  </table>
</div>