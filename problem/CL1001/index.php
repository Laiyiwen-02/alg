<?php session_start(); ?>
<?php
include "../../menu.php";
?>
<div class="layui-bg-gray" style="padding: 16px;">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8">
      <div class="layui-card layui-panel layui-anim layui-anim-down">
        <div class="layui-card-header">
          <h1>
            [CLOI Round 1 T1] graph
          </h1>
        </div>
        <div class="layui-card-body">
          <h2>
            <span class="layui-badge layui-bg-orange">普及-</span>
            <span class="layui-badge layui-bg-blue">图论</span>
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
      <div class="layui-panel layui-anim layui-anim-down" style = "border : 0;">
        <blockquote class="layui-elem-quote markdown-body">
          <h2> 题目背景 </h2>
          <p> 
            Lyw 和 Cyq 突发奇想准备一起造一台机器并将其命名为 CLR1，最开始的工作由 Lyw 进行，造出这一台机器后，Lyw 决定用 CLR1 机器来梳理他复杂的关系网。
          </p>
          <h2> 题目描述 </h2>
          <p>
            Lyw 班级里同学们的关系十分复杂。  
            Lyw 的班级里有 $n$ 个人，编号从 $1 \sim n$，其共有 $m$ 个关系，对于每个关系，给出三个整数 $u$，$v$，$w$，表示编号为 $u$ 的同学和编号为 $v$ 的同学之间亲密度为 $w$（单向）。  
            <br/>
            现在有 $q$ 次询问，每次询问给出一个整数 $i$ 和 $j$，表示询问编号 $i$ 的同学按亲密度从大到小排序下的第 $j$ 个同学的编号，若不存在，输出 -1。
          </p>
          <h2> 输入格式 </h2>
          <p>
            第一行输入三个整数 $n$，$m$，$q$，表示有 $n$ 个同学，$m$ 个关系，$q$ 次询问。  
            <br/>
          接下来 $m$ 行，每行给出三个整数 $u$，$v$，$w$，含意如题。  
            <br/>
          最后 $q$ 行，每行两个整数 $i$ 和 $j$，含意如题。  
          </p>
          <h2> 输出格式 </h2>
          <p>
            共 $q$ 行，第 $i$ 行表示第 $i$ 个询问的结果。  
          </p>
          <h2> 输入样例 </h2>
          <pre class="language-text">
            <code>
              47 3 2
              34 32 1314520
              32 34 114514
              5 25 1000000000
              34 1
              5 1
            </code>
          </pre>
          <h2> 输出样例 </h2>
          <pre class="language-text">
            <code>
              32
              25
            </code>
          </pre>
          <h2> 说明/提示 </h2>
          <p>
            对于全部数据，$1 \le n \le 10 ^ 4, 1 \le m \le \min(\dfrac{n \times (n - 1)}{2}, 10 ^ 5), 1 \le q \le 10 ^ 6, $ <br/>
            $ 1 \le u, v \le n, 1 \le w \le 10 ^ 9, 1 \le i \le n, 1 \le j \le 10 ^ 6 $。
          </p>
        </blockquote>
      </div>
    </div>
    <div class="layui-col-md4">
      <div class="layui-card layui-panel layui-anim layui-anim-down" style="margin:auto;">
        <div class="layui-card-header">
          <h2>Coding here...</h2>
        </div>
        <div class="layui-card-body">
          <div class="layui-form layui-row layui-col-space16">
            <div class="layui-col-md4">
              <select>
                <option>
                  <p class="layui-text">C++</p>
                </option>
              </select>
            </div>
          </div>
          <div id="editor" style="width:100%;height:80%;margin:auto;"></div><br>
          <div>
            <form method="post" action="CL1001/action.php">
              <textarea id="demo" name="cpp" hidden></textarea>
              <button type="submit" class="layui-btn">submit</button>
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