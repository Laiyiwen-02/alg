<?php
session_start();
if(isset($_SESSION['user'])&&isset($_SESSION['pwd'])){
unset($_SESSION['user']);
unset($_SESSION['pwd']);
echo "<script>alert('登出成功');window.location.href='./';</script>";
}else{
  echo "<script>alert('出错了！你还未登录！');window.location.href='/login.php';</script>";
}
?>