<?php session_start(); ?>
<html>
  <?php include "./menu.php"; ?>
  <body>
    <div class = "layui-panel layui-anim layui-anim-down" style = "padding:2%; margin:2%;">
      <h1> 欢迎来到 CLOJ！</h1>
    </div>
    <div class = "layui-panel layui-anim layui-anim-down" style = "padding:2%; margin:2%;">
      <h1> changelog </h1>
      <?php
        include "page.php";
      ?>
    </div>
  </body>
</html>
<?php include "footer.php"; ?>