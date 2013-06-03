<div data-role="page" id="order">
  <?
    include("header.php");
    include("lib.php");
    
    $orderShop = $_POST['m_shop'];
    $orderResult = " ";
    $orderPrice = 0;
    
    $foodList = mysql_query("select menu.*, food.id from food, menu where menu.shop='$orderShop' and menu.food = food.name", $conn);
    $foodListRows = mysql_num_rows($foodList);
    
    $i=0;
    while($i < $foodListRows){
      $orderStr = "m_".mysql_result($foodList,$i,food.".".id);
      if($_POST[$orderStr."_num"] != 0){
        $orderResult .= $_POST[$orderStr].$_POST[$orderStr."_num"]."개<br>";
        $orderPrice += $_POST[$orderStr."_price"]*$_POST[$orderStr."_num"];
      }
      $i++;
    }
    
    if($orderPrice == 0){
      ?>
      <script>
        alert("아무것도 선택하지 않으셨네요\n최소 한개 선택해주세요");
        history.back();
      </script>
      <?
    }
  ?>
  <div data-role="content">
  <form name="orderForm2" method="post" action="orderProc.php">
    <table width="100%">
      <tr>
        <td>주문</td><td><input type="hidden" name="m_content" value="<?=$orderResult?>"><?=$orderResult?></td>
      </tr>
      <tr>
        <td>현재 가격</td><td><input type="hidden" name="m_price" value="<?=$orderPrice?>"><?=$orderPrice?></td>
      </tr>
      <tr>
        <td>주소</td><td><input type="text" name="m_address"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="button" value="주문하기" onclick="my_order()" data-theme="a"/></td>
      </tr>
    </table>
  </form>
  </div>
  <?
    include("footer.php");
  ?>
  
</div>