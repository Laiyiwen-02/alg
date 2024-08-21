<?php
session_start();
if (isset($_POST['code'])) {
  if ($_POST['code'] == $_SESSION['code']) {
    $data = file("../user/user.txt"); $flag = 0;
    for ($i = 0; $i < count($data); $i++) {
      $now = explode(" ", $data[$i]);
      $user = rtrim($now[0]); $pwd = rtrim($now[1]); $mail = rtrim($now[2]);
      if ($user == $_POST['user'] || $mail == $_POST['mail']) {
        echo "该账号已经存在"; $flag = 1;
      }
    }
    if ($flag == 0) {
      echo "ok.";
      file_put_contents("../user/user.txt", $_POST['user']." ".password_hash($_POST['pwd'], PASSWORD_DEFAULT)." ".$_POST['mail']."\n", FILE_APPEND);
    }
  } else {
    echo "验证码错误";
  }
}
?>