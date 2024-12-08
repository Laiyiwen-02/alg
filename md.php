<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title> CLOJ - 由一个 Oier 创建的OJ </title>
    <link href = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/css/layui.css" rel = "stylesheet">
    <link rel = "stylesheet" href = "https://use.sevencdn.com/npm/github-markdown-css@5.6.1/github-markdown-light.css">
    <link rel = "stylesheet" href = "/prism.css">
    <link rel="stylesheet" href="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.css">
    <style>
      .editor {
        resize: none;
        font-family: monospace;
        width: 100%;
        max-width: 100%;
        height: 300px;
        overflow: auto;
      }
    </style>
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
    <div class = "layui-panel layui-row" style = "padding: 2%; margin: 2%;">
      <form class = "layui-form" action = "
        <?php if(isset($_GET["link"])){ echo $_GET["link"];}?>" 
        method = "post">
        <textarea id = "h" name = "html" hidden></textarea>
        <div class = "layui-col-md6 layui-col-xs6">
          <textarea id = "content" onkeyup = "mdConverter();" class = "layui-textarea editor"></textarea>
        </div>
        <div class = "layui-col-md6 layui-col-xs6" style = "border: thin solid #fafafa; padding: 1%; height: 300px; overflow: auto;">
          <div id = "show" class = "markdown-body"></div>
        </div>
        <div class = "layui-col-md12" style = "margin-right: 2%; margin-top: 0.5%;">
          <button type = "submit" class = "layui-btn" style = "float: right;">
            submit
          </button>
        </div>
      </form>
    </div>
    <script src="https://use.sevencdn.com/npm/marked/marked.min.js"></script>
    <script>
      function mdConverter() {
        var md = document.getElementById("content").value;
        function trans(md) {
            md = md.replace(/\\/g, '\\\\');
            md = md.replace(/\\\\\&/g, '\\\&');
            return md;
        }
        md = trans(md);
        var view = marked.parse(md);
        document.getElementById("show").innerHTML = view;
        renderMathInElement(document.getElementById("show"), {
          delimiters: [
              {left: "$$", right: "$$", display: true},
              {left: "$", right: "$", display: false}
          ],
          macros: {
            "\\geq": "\\geqslant",
            "\\leq": "\\leqslant"
          }
        }); 
        Prism.highlightAll();
        document.getElementById("h").value = view;
      }
    </script>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.js"></script>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/contrib/auto-render.min.js" onload = 'renderMathInElement(document.body, {
      delimiters: [
        {left: "$$", right: "$$", display: true}, 
        {left: "$", right: "$", display: false} 
      ],
      macros: {
        "\\geq": "\\geqslant", 
        "\\leq": "\\leqslant" 
      } 
    }); '></script>
    <script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/contrib/copy-tex.js"></script>
    <script src = "/prism.js"></script>
    <script src = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/layui.js"></script>
  </body>
</html>