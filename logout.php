<? @session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
<?
  session_unset();
  session_destroy();
  echo "
    <script>
    alert('로그아웃 되었습니다.');
    location.href='index.php';</script>
  ";
?>
</head>
</html>