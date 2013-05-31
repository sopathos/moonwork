<? @session_start();  
  $conn = mysql_connect('localhost','moonwork','hansung08') or die("MySQL Server Connect Error");
  mysql_select_db('moonwork',$conn) or die("DB 오픈 에러");
  mysql_query("SET NAMES UTF8");
?>