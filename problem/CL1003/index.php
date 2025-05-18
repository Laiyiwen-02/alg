<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "../menu.php"; ?>
  </head>
  <body>
    <div class="layui-bg-gray" style="padding: 16px;">
      <div class="layui-row layui-col-space15">
        <div class="layui-col-md8">
          <div class="layui-card layui-panel layui-anim layui-anim-down">
            <div class="layui-card-header">
              <h1>
                [CLOI Round 1 T3] road
              </h1>
            </div>
            <div class="layui-card-body">
              <h2>
                <span class="layui-badge layui-bg" style = "background-color:#ffd850">
                  普及/提高-
                </span>
                <span class="layui-badge layui-bg-blue">图论</span>
                <span class="layui-badge layui-bg-blue">最短路</span>
                <span class="layui-badge layui-bg-blue">排序</span>
              </h2>
            </div>
          </div>
        </div>
        <div class="layui-col-md4">
          <div class="layui-panel layui-anim layui-anim-down">
            <table class="layui-table" lay-skin="nob">
              <tbody>
                <tr>
                  <td>
                    题目提供者
                  </td>
                  <td>
                    <a href="/user/1">
                      <b style="color:#a233c6;">
                        Laiyiwen-01
                        <span class="layui-badge layui-bg-purple">
                          超级管理员
                        </span>
                      </b>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    难度
                  </td>
                  <td>
                    <span class="layui-badge layui-bg" style = "background-color:#ffd850;">
                      普及/提高-
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="layui-col-md8">
          <div class="layui-panel layui-anim layui-anim-down" style = "border: 0;">
            <blockquote class="layui-elem-quote markdown-body">
              <?php include "../../problem/CL1003/info.html"; ?>
            </blockquote>
          </div>
        </div>
        <div class="layui-col-md4">
          <div class = "layui-panel layui-anim layui-anim-down">
            <ul class = "layui-menu">
              <li class = "layui-menu-body-title">
                <a href = "/problem/CL1003/submit.php">
                  提交
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.js"></script>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/contrib/auto-render.min.js" onload='renderMathInElement(document.body, {
          delimiters: [
            {left: "$$", right: "$$", display: true},
            {left: "$", right: "$", display: false}
          ],
          macros: {
            "\\geq": "\\geqslant",
            "\\leq": "\\leqslant"
        }
        }); '></script>
    <script src = "https://s4.zstatic.net/ajax/libs/layui/2.9.20/layui.js"></script>
  </body>
</html>