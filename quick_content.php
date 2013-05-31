<tbody>
    <?
      for($i=0;i<$foodListRow;$i++){
        echo "<tr><td colspan='2'>";
        echo "<table width='100%'><tr>";
        echo "<td><input type='checkbox' name='yoon' value='".mysql_result($foodList, $i, food.".".name)."'></td>";
        echo "<td>".mysql_result($foodList, $i, menu.".".price)."</td>";
        echo "</tr></table>";
        echo "</td></tr>";
      }
    ?>
</tbody>

<tfoot>
</tfoot>