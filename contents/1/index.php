<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include "../../menu.php"; ?>
  </head>

  <body>
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
            <div class="layui-tab-item layui-show">
              <div class = "layui-row layui-col-space15">
                <div class = "layui-col-md8">
                  <div class = "layui-panel markdown-body" style = "padding:2%;">
                    <?php include "info.php"; ?>
                  </div>
                </div>
                <div class = "layui-col-md4" style="color:black;">
                  <div class="layui-panel" style = "padding:2%;color:black;">
                    <h1>比赛信息</h1>
                    <table class="layui-table" lay-skin="nob">
                      <tbody>
                        <tr>
                          <td> 举办方 </td>
                          <td> <a href = "">  CLOI团队 </a> </td>
                        </tr>
                        <tr>
                          <td> 开始时间 </td>
                          <td> 2024-09-08 16:00 </td>
                        </tr>
                        <tr>
                          <td> 结束时间 </td>
                          <td> 2024-09-08 17:30 </td>
                        </tr>
                        <tr>
                          <td>比赛规则</td>
                          <td>IOI</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="layui-tab-item">内容-2</div>
            <div class="layui-tab-item">内容-3</div>
            <div class="layui-tab-item">内容-4</div>
            <div class="layui-tab-item">内容-5</div>
          </div>
      </div>
    </div>
    <?php include "../../footer.php"; ?>
  </body>
</html>