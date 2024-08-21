<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title> CLOJ - 由一个 Oier 创建的OJ </title>
    <link href = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/css/layui.css" rel = "stylesheet">
    <link rel = "stylesheet" href = "https://use.sevencdn.com/npm/github-markdown-css@5.6.1/github-markdown-light.css">
    <link rel = "stylesheet" href = "/prism.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.11/dist/katex.min.css">
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
          <div class="layui-panel layui-anim layui-anim-down" style = "border: 0;">
            <blockquote class="layui-elem-quote markdown-body">
              <h2> 题目描述 </h2>
              <p>
                对于一个 $n$ 维的点 $a$，其坐标为 $ \{a_1, a_2, a_3, \dots, a_n \} $。现在，你有若干个 $n$ 维的点，在这些点中，有不少的点存在着连边，对于一个 $n$ 维的点 $u$ 和一个 $n$ 维的点 $v$，若这两点之间存在连边，则这一条边的边权为 $(\sum \limits _ {1 \le i, j \le n}  \max \{ u_i, v_j \} ) \times w$，其中 $w$ 已经给定。虽然点的数量的无限的，但这若干个点中，总共却只有 $m$ 条边。<br/>  
                现在，你要从一个 $n$ 维的点 $s$ 出发到达其所能够 <b>直接或间接到达</b> 的所有点的最短距离之和，形式化地，定义 $dis_i$ 表示 $s$ 到点 $i$ 的最短距离， 你需要求出 $\sum dis_i$。特别地，若两个点不联通，他们之间的距离定义为 $0$，且这两点不能够互相到达。<br/>  
                由于结果可能很大，你只需要输出这个结果模 $1000000007$ 的值。<br/>  
                <b> 保证不同的点坐标一定不相同 </b>
              </p>
              <h2> 输入格式 </h2>
              <p>
                第一行两个正整数 $n$ 和 $m$，表示维数和边数。<br/>  
                接下来 $m$ 行，每行 $2n + 1$ 个整数，前 $n$ 个整数表示点 $u$ 的坐标，接着 $n$ 个整数表示点 $v$ 的坐标，最后一个整数表示 $w$。<br/>  
                最后输入 $n$ 个整数，表示点 $s$ 的坐标。
              </p>
              <h2> 输出格式 </h2>
              <p>
                第一行输出一个整数 $ans$，表示所求的答案。 
              </p>
              <h2> 输入样例 </h2>
              <pre class="language-text">
                <code>
                  1 3
                  1 2 3
                  2 3 4
                  1 3 5
                  1
                </code>
              </pre>
              <h2> 输出样例 </h2>
              <pre class="language-text">
                <code>
                  21
                </code>
              </pre>
              <h2> 说明/提示 </h2>
              <p>
                <h3> 样例解释 #1 </h3>
                <img src = "https://s21.ax1x.com/2024/07/28/pkqHDv6.jpg"><br/>  
                此时对于点 $1$，其到其他的最短路径如下：
                <br/>
                <table>
                <thead>
                <tr>
                <th align="center">点</th>
                <th align="center">距离</th>
                </tr>
                </thead>
                <tbody><tr>
                <td align="center">$2$</td>
                <td align="center">$6$</td>
                </tr>
                <tr>
                <td align="center">$3$</td>
                <td align="center">$15$</td>
                </tr>
                </tbody></table>
                故答案就是 $21$。   
                <h3> 数据规模与约定 </h3>
              <table>
              <thead>
              <tr>
              <th align="center">$\texttt{subtask}$</th>
              <th align="center">$n$</th>
              <th align="center">$m$</th>
              <th align="center">$w$</th>
              <th align="center">$a_i$</th>
              </tr>
              </thead>
              <tbody><tr>
              <td align="center">$\texttt{subtask \#1}$</td>
              <td align="center">$= 1$</td>
              <td align="center">$\le 50000$</td>
              <td align="center">$\le 10$</td>
              <td align="center">$\le 100$</td>
              </tr>
              <tr>
              <td align="center">$\texttt{subtask \#2}$</td>
              <td align="center">$\le 4$</td>
              <td align="center">$\le 200000$</td>
              <td align="center">$\le 10$</td>
              <td align="center">$\le 100$</td>
              </tr>
              <tr>
              <td align="center">$\texttt{subtask \#3}$</td>
              <td align="center">$\le 5$</td>
              <td align="center">$\le 250000$</td>
              <td align="center">$= 0$</td>
              <td align="center">$\le 100$</td>
              </tr>
              <tr>
              <td align="center">$\texttt{subtask \#4}$</td>
              <td align="center">$\le 10$</td>
              <td align="center">$\le 5 \times 10 ^ 5$</td>
              <td align="center">$\le 10$</td>
              <td align="center">$\le 100$</td>
              </tr>
              </tbody></table>
                对于 $100\%$ 的数据，$1 \le n \le 10, 1 \le m \le 5 \times 10 ^ 5, 1 \le w \le 10, 1 \le a_i \le 100$。
              </p>
            </blockquote>
          </div>
        </div>
        <div class="layui-col-md4">
          <div class = "layui-panel layui-anim layui-anim-down">
            <ul class = "layui-menu">
              <li class = "layui-menu-body-title">
                <a href = "submit.php">
                  提交
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.11/dist/katex.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.11/dist/contrib/auto-render.min.js" onload='renderMathInElement(document.body, {
          delimiters: [
            {left: "$$", right: "$$", display: true},
            {left: "$", right: "$", display: false}
          ],
          macros: {
            "\\ge": "\\geqslant",
            "\\le": "\\leqslant",
            "\\geq": "\\geqslant",
            "\\leq": "\\leqslant"
        }
        }); '></script>
    <script src = "/prism.js"></script>
    <script src = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/layui.js"></script>
  </body>
</html>