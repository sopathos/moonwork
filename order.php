<div data-role="page" id="order">
  <?
    include("header.php");
    include("lib.php");
    
    $orderShop = $_POST['m_shop'];
    $orderResult = " ";
    
    $foodList = mysql_query("select menu.*, food.id from food, menu where menu.shop='$orderShop' and menu.food = food.name", $conn);
    $foodListRows = mysql_num_rows($foodList);
    
    $i=0;
    while($i < $foodListRows){
      $orderStr = "m_".mysql_result($foodList,$i,food.".".id);
      $orderResult .= $_POST[$orderStr];
    ?>
    <?=$orderShop?><br>
    <?=$orderResult?><br>
    <?
      $i++;
    }
  ?>
  <div data-role="content">
    <?=$_POST['m_Â«»Í']?><br>
  </div>
  <?
  
    include("footer.php");
    
  ?>
  
</div>