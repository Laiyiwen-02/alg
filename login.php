<?php
  include "menu.php";
  if(isset($_SESSION['user'])){
    echo "<script> window.history.back(); </script>";
  }
?>
<div class = "layui-panel" style = "width:50%;height:50%;top:20%;left:25%;">
  <div class = "layui-card">
    <div class = "layui-card-header">
      <img class = "layui-nav-img" src = "https://cdn.luogu.com.cn/upload/usericon/833737.png">
      CLOJ
    </div>
    <div class = "layui-card-body">
      <form class = "layui-form" method="post">
        <input type = "text" name = "user" placeholder = "用户名" class = "layui-input" required>
        <br>
        <input class="layui-input" name="pwd" placeholder="密码" type="password" required>
        <br>
        <input class="layui-input" name="mail" placeholder="邮箱" type="e" required>
        <br>
        <button type = "submit" class = "layui-btn layui-btn-fluid">提交</button>
        <p>还没有账号？<a href = "/register/" style = "color:#16aaaa;text-decoration:underline!important;">注册</a> 一个！</p>
      </form>
    </div>
  </div>
</div>
<script src = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/layui.js"></script>
<script>
  layui.use(function () {
    var layer = layui.layer;
    <?php
      $flag = 0;
      if (isset($_POST['user']) && isset($_POST['pwd'])) {
        unset($_SESSION['user']); unset($_SESSION['pwd']); unset($_SESSION['mail']);
        $data = file("user/user.txt");
        $_POST['user'] = rtrim($_POST['user']);
        $_POST['pwd'] = rtrim($_POST['pwd']);
        for ($i = 0; $i < count($data); $i++) {
          $now = explode(" ", $data[$i]);
          $user = $now[0]; $pwd = $now[1]; $mail = $now[2];
          $user = rtrim($user);
          $pwd = rtrim($pwd);
          $mail = rtrim($mail);
          if ($_POST['user'] == $user && password_verify($_POST['pwd'], $pwd) && $_POST['mail'] == $mail) {
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pwd'] = $_POST['pwd'];
            $_SESSION['mail'] = $_POST['mail'];
            echo "layer.msg('登录成功', {icon : 1, time : 1500, offset : 't'});history.back();";
            $flag = 1; break;
          }
        }
        if ($flag == 0) {
          echo "layer.msg('用户名或密码错误', {icon : 2, time : 1500, offset : 't'});";
        }
      }
    ?>
  });
</script>