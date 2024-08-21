<?php include "./menu.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href = "./layui/dist/css/layui.css">
    <link rel = "stylesheet" href = "./prism.css">
    <script src = "./prism.js"></script>
  </head>
  <body>
    <div class = "layui-panel layui-anim layui-anim-down" style = "padding:2%; margin:2%;">
      <h1>
        CLOJ 评测机设置
      </h1>
    </div>
    <div class = "layui-panel layui-anim layui-anim-down" style = "padding:2%; margin:2%;">
      <p>
        <code>g++</code> 版本：
      </p>
      <pre class = "lang-text">
        <code>
          g++ (GCC) 11.3.0
          Copyright (C) 2021 Free Software Foundation, Inc.
          This is free software; see the source for copying conditions.  There is NO
          warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
        </code>
      </pre>
      <p>
        <code>gcc</code> 版本：
      </p>
      <pre class = "lang-text">
        <code>
          gcc (GCC) 11.3.0
          Copyright (C) 2021 Free Software Foundation, Inc.
          This is free software; see the source for copying conditions.  There is NO
          warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
        </code>
      </pre>
      <p>
        <code>bash</code> 版本：
      </p>
      
      <pre class = "lang-text">
        <code>
          GNU bash, version 5.1.16(1)-release (x86_64-pc-linux-gnu)
          Copyright (C) 2020 Free Software Foundation, Inc.
          License GPLv3+: GNU GPL version 3 or later http://gnu.org/licenses/gpl.html

          This is free software; you are free to change and redistribute it.
          There is NO WARRANTY, to the extent permitted by law.
        </code>
      </pre>
      <p>
        对于评测机，我们编译的代码如下：
      </p>
      <pre class = "lang-bash">
        <code>
          rm main
          timeout 10s g++ main.cpp -o main
        </code>
      </pre>
      <p>
        估计在不久后，我们将推出开启 <code>O2</code> 的功能，请耐心等待。
      </p>
      <p>
        假设对于一个题目，目录树如下：
      </p>
      <pre class = "lang-text">
        <code>
          problem
          |-- data
              |
              |-- main1.in
              |-- main1.out
              |-- main2.in
              |-- main2.out
          |-- compile.sh
          |-- main.cpp
          |-- main.err
          |-- index.php
          |-- action.php
        </code>
      </pre>
      <p>
        那么其运行命令如下：
      </p>
      <pre class = "lang-bash">
        <code>
          timeout ./main < data/main1.in > data/main1.ans
          timeout ./main < data/main2.in > data/main2.ans
          diff data/main1.ans data/main1.out
          diff data/main2.ans data/main2.out
        </code>
      </pre>
    </div>
  </body>
</html>
<?php include "./footer.php"; ?>