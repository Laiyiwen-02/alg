<?php
include "../../menu.php";
?>
<div class="layui-bg-gray" style="padding: 16px;">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8">
      <div class="layui-card layui-panel layui-anim layui-anim-down">
        <div class="layui-card-header">
          <h1>
            [CLOI Round 1 T2] sum
          </h1>
        </div>
        <div class="layui-card-body">
          <h2>
            <span class="layui-badge layui-bg-orange">普及-</span>
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
                <span class="layui-badge layui-bg-orange">
                  普及-
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
            为了测试机器，Lyw 决定向 CLR1 机器问一个难题，然而由于 CLR1 机器不会欧拉数理化，所以 CLR1 机器把任务交给了你。
          </p>
          <h2> 题目描述 </h2>
          <p>
            定义一个整数 $p$ 是 <b> 坠磅德 </b> 当且仅当存在另外一个整数 $q$ 使方程 $px + qy = 1$ 有解且 $1 \le p \le q \le n$，给定 $n$，请求出所有满足条件的 $p$ 的和。由于这个数可能很大，所以你只需要输出这个数模 $m$ 的值即可。
          </p>
          <h2> 输入格式 </h2>
          <p>
            第一行输入两个整数 $n$ 和 $m$。    
          </p>
          <h2> 输出格式 </h2>
          <p>
            第一行输出一个整数 $ans$，表示所求的答案。 
          </p>
          <h2> 输入样例 </h2>
          <pre class="language-text">
            <code>
              25 41
            </code>
          </pre>
          <h2> 输出样例 </h2>
          <pre class="language-text">
            <code>
              36
            </code>
          </pre>
          <h2> 说明/提示 </h2>
          <p>
            对于 $50\%$ 的数据，$1 \le n,m \le 5 \times 10 ^ 5$。
            <br/>
            对于 $100\%$ 的数据，$1 \le n,m \le 5 \times 10 ^ 7 $。
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
            <form method = "post" action = "CL1002/action.php">
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
    var v=editor.getSession().getValue();
    document.getElementById("demo").innerHTML=v;
  });
</script>
<?php
  include "../../footer.php";
?>