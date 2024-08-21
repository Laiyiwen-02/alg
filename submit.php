<?php session_start(); ?>
<html>
  <head>
    <title> CLOJ - 由一个 Oier 创建的OJ </title>
    <link href = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/css/layui.css" rel = "stylesheet">
    <link rel = "stylesheet" href = "https://use.sevencdn.com/npm/github-markdown-css@5.6.1/github-markdown-light.css">
    <link rel = "stylesheet" href = "/prism.css">
  </head>
  <header>
    <div>
      <ul class = "layui-nav layui-bg-gray">
        <li class = "layui-nav-item">
          <a href = "/">
            <img src = "https://cdn.luogu.com.cn/upload/usericon/833737.png" class = "layui-nav-img" alt = "CL"> OJ
          </a>
        </li>
        <li class = "layui-nav-item">
          <a href = "/problem/">
            题库 
            <i class = "layui-icon layui-icon-list"></i>
          </a>
        </li>
        <li class = "layui-nav-item">
          <a href = "/discuss/"> 
            讨论区 
            <span class = "layui-badge-dot"></span>
          </a>
        </li>
        <li class = "layui-nav-item">
          <a href = "javascript:;">
            更多 
          </a>
          <dl class = "layui-nav-child">
            <dd>
              <a href = "/contents/">
                比赛 
              </a>
            </dd>
            <dd>
              <a href = "/api.php"> 
                评测机说明 
              </a>
            </dd>
            <dd>
              <a href = "/record.php"> 
                评测记录 
              </a>
            </dd>
          </dl>
        </li>
        <li class = "layui-nav-item">
          <a href = "/about">
            关于我们
            <i class = "layui-icon layui-icon-about"></i>
          </a>
        </li>
        <li class = "layui-layout-right layui-nav-item">
          <?php
            if (isset($_SESSION['user']) && isset($_SESSION['pwd'])) {
              echo $_SESSION['user'] . 
              "<i class = 'layui-icon layui-icon-username'></i>
              <dl class = 'layui-nav-child'>
                <dd>
                  <a href = '/admin/'>
                    管理
                  </a>
                </dd>
                <dd>
                  <a href = '/user/1'>
                    个人主页
                  </a>
                </dd>
                <hr>
                <dd>
                  <a href = '/logout.php'>
                    登出
                  </a>
                </dd>
              </dl>"
                ;
            } else {
              echo 
              '<a href = "/login.php">
                登录
                <i class = "layui-icon layui-icon-username"></i>
              </a>'
                ;
            }
          ?>
        </li>
      </ul>
    </div>
  </header>
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
          <div style = "border: 0;">
            <div class="layui-card layui-panel layui-anim layui-anim-down" style="margin:auto;">
              <div class="layui-card-header">
                <h2> Coding here... </h2>
              </div>
              <div class="layui-card-body">
                <div class="layui-form layui-row layui-col-space16">
                  <div class = "layui-col-md3">
                    <select>
                      <option>
                        <p class="layui-text">
                          C++
                        </p>
                      </option>
                    </select>
                  </div>
                </div>
                <div id = "editor" style = "width:100%; height:80%; margin:auto;"></div>
                <br>
                <div>
                  <form method = "post" action = "/problem/CL1003/action.php">
                    <textarea id="demo" name="cpp" hidden></textarea>
                    <button type="submit" class="layui-btn">
                      submit
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="layui-col-md4">
          <div class = "layui-panel layui-anim layui-anim-down">
            <ul class = "layui-menu">
              <li class = "layui-menu-body-title">
                <a href = "test.php">
                  返回题面
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/ace-builds@1.35.4/src/ace.js"></script>
    <script src="https://unpkg.com/ace-builds@1.35.4/src/ext-language_tools.js"></script>
    <script>
      var editor=ace.edit("editor");
      editor.setTheme("ace/theme/clouds");
      editor.getSession().setMode("ace/mode/c_cpp");
      editor.setOptions ({
          enableBasicAutocompletion: true,//
          enableSnippets: true,//
          enableLiveAutocompletion: true,// 补全
      });
      editor.setShowPrintMargin(false);
      editor.setFontSize(20);
      editor.getSession().on('change', function(e) {
        var v=editor.getSession().getValue();
        document.getElementById("demo").innerHTML=v;
      });
    </script>
    <script src = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/layui.js"></script>
  </body>
</html>