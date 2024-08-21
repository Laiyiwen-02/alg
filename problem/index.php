<?php
  include "../menu.php";
?>
<body>
  <style>
    td a {
      color : #1e9fff;
      text-decoration : underline;
    }
  </style>
  <div style="padding:20px;">
    <div class="layui-panel" style = "border:0;">
      <table class="layui-table layui-panel" lay-skin="line">
        <thead>
          <tr>
            <th>
              题号
            </th>
            <th>
              题目名称
            </th>
            <th>
              难度
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="./CL1001/">
                CL1001
              </a>
            </td>
            <td>
              [CLOI Round 1 T1] graph
            </td>
            <td>
              <span class="layui-badge layui-bg-orange">
                普及-
              </span>
            </td>
          </tr>
          <tr>
            <td>
              <a href="./CL1002">
                CL1002
              </a>
            </td>
            <td>
              [CLOI Round 1 T2] sum
            </td>
            <td>
              <span class="layui-badge layui-bg-orange">
                普及-
              </span>
            </td>
          </tr>
          <tr>
            <td>
              <a href="./CL1003">
                CL1003
              </a>
            </td>
            <td>
              [CLOI Round 1 T3] road
            </td>
            <td>
              <span class="layui-badge layui-bg" style = "background-color:#ffd850;">
                普及/提高-
              </span>
            </td>
          </tr>
          <tr>
            <td>
              <a href="./CL1004">
                CL1004
              </a>
            </td>
            <td>
              [CLOI Round 1 T4] quick pow
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
  <?php
    include "../footer.php";
  ?>
</body>
<!--
color: rgb(52, 152, 219);
-->