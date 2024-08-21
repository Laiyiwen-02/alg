<?php
include "../../menu.php";
?>
<div class="layui-panel" style="padding:2%;margin:2%;color:black;">
  <h1>2024年CLOJ大赛——初赛</h1>
</div>
<div class="layui-tab layui-tab-brief" style = "padding:2%;margin:2%;">
  <ul class="layui-tab-title">
    <li class="layui-this">比赛介绍</li>
    <li>标签2</li>
    <li>标签3</li>
    <li>标签4</li>
    <li>标签5</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show layui-panel markdown-body" style = "padding:2%;"><?php include "info.php"; ?></div>
    <div class="layui-tab-item">内容-2</div>
    <div class="layui-tab-item">内容-3</div>
    <div class="layui-tab-item">内容-4</div>
    <div class="layui-tab-item">内容-5</div>
  </div>
</div>
<?php
include "../../footer.php";
?>