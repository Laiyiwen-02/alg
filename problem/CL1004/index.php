<?php session_start(); include "../../menu.php"; ?>
<div class="layui-bg-gray" style="padding: 16px;">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8">
      <div class="layui-card layui-panel layui-anim layui-anim-down">
        <div class="layui-card-header">
          <h1>
            [CLOI Round 1 T4] quick pow
          </h1>
        </div>
        <div class="layui-card-body">
          <h2>
            <span class="layui-badge layui-bg" style = "background-color:#ffd850;">
              普及/提高-
            </span>
            <span class="layui-badge layui-bg-blue">数学</span>
            <span class="layui-badge layui-bg-blue">数论</span>
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
          <h2> 题目背景 </h2>
          <p> 
            CLR1 机器的功能越来越丰富了！为了能够进行更加大量的运算，Cyq 在 CLR1 机器中编写了一个用于计算幂次的程序。
          </p>
          <h2> 题目描述 </h2>
          <p>
            给定 $n$，$m$，请输出 $n ^ m \bmod 998244353$ 的值。
          </p>
          <h2> 输入格式 </h2>
          <p>
            第一行输入两个整数 $n, m$。    
          </p>
          <h2> 输出格式 </h2>
          <p>
            第一行输出一个整数 $ans$，表示所求的答案。
          </p>
          <h2> 输入样例 </h2>
          <pre class="language-text">
            <code>
              11 2
            </code>
          </pre>
          <h2> 输出样例 </h2>
          <pre class="language-text">
            <code>
              121
            </code>
          </pre>
          <h2> 说明/提示 </h2>
          <p>
            对于 $5\%$ 的数据，$1\leq n,m < 10^9$。<br/>
            对于 $15\%$ 的数据，$1\leq n,m < 10^{10^3}$。<br/>
            对于 $40\%$ 的数据，$1\leq m < 10^{10^3}$。<br/>
            对于 $100\%$ 的数据，$1\leq n,m<10^{10^6}$
          </p>
        </blockquote>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card layui-panel layui-anim layui-anim-down" style="margin:auto;">
        <div class="layui-card-header">
          <h2> Coding here... </h2>
        </div>
        <div class="layui-card-body">
          <div class="layui-form layui-row layui-col-space16">
            <div class="layui-col-md4">
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
            <form method = "post" action = "CL1004/test.php">
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
    var v = editor.getSession().getValue();
    document.getElementById("demo").innerHTML=v;
  });
</script>
<?php include "../../footer.php"; ?>