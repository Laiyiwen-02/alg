<?php
include "../../menu.php";
?>
<div class="layui-card layui-bg-gray" style="margin:16px;padding:16px;">
  <div class="layui-card-header">
    <h2><b style="color:#a233c6;">Laiyiwen-01<span class="layui-badge layui-bg-purple">超级管理员</span></b></h2>
  </div>
  <div class="layui-card-body layui-row layui-col-space15" style="padding:16px;">
    <div class="layui-card layui-col-md7" style="margin:16px;padding:16px;">
      <div class="layui-card-header">
        <h2 style="color:black;">个人介绍</h2>
      </div>
      <div class="layui-card-body markdown-body" id = "h">
        # $114514$
      </div>
    </div>
    <div class="layui-panel layui-col-md4" style="margin:16px;padding:16px;">
      <h3 style="color:black;">
        <i class="layui-icon layui-icon-auz"></i>
        获奖信息
      </h3>
      <table class="layui-table" lay-skin="nob">
        <tbody>
          <tr>
            <td style="color:black;">[2023]厦门市创客大赛</td>
            <td>一等奖</td>
          </tr>
          <tr>
            <td style="color:black;">[2023]厦门市小学生信竞</td>
            <td>二等奖</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="https://use.sevencdn.com/npm/marked/marked.min.js"></script>
<script>
  document.getElementById("h").innerHTML = marked.parse((document.getElementById("h").innerText));
</script>
<?php
include "../../footer.php";
?>