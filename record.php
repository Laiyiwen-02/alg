<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title> CLOJ - 由一个 Oier 创建的OJ </title>
    <link rel="stylesheet" href="https://s4.zstatic.net/ajax/libs/layui/2.9.14/css/layui.css" integrity="sha384-VTXLCpw/uZnb02aJp2OBOKiBTcjUNBR9XrBgwNPiGmS3tnREkD34n6avX1UW9L4H" crossorigin="anonymous">
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
    <div class = "layui-panel" style = "padding:2%; margin:2%;">
      <form class = "layui-form layui-row" method = "get" action = "">
        <div class = "layui-col-md3">
          <input type = "text" name = "user" class = "layui-input" placeholder = "按用户名搜索">
        </div>
        <div class = "layui-col-md3">
          <input type = "text" name = "problem" class = "layui-input layui-col-md3" placeholder = "按题号搜索">
        </div>
        <div class = "layui-col-md1">
          <button type = "submit" class = "layui-btn layui-btn-primary">
            搜索
            <i class = "layui-icon layui-icon-search"></i>
          </button>
        </div>
      </form>
    </div>
    <div style = "padding:2%;margin:2%;" class = "layui-panel">
      <table class="layui-table" id="record-list"></table>
    </div>
    <script src = "https://s4.zstatic.net/ajax/libs/layui/2.9.14/layui.js"></script>
    <script>
    layui.use(['table', 'layer'], function(){
      var table = layui.table;
      var layer = layui.layer;
      var inst = table.render({
        elem: '#record-list',
        cols: [[
          {field: 'id', title: 'ID', sort: true},
          {field: 'problem', title: "题目编号"},
          {field: 'user', title: '用户'},
          {field: 'point', title: '分数'},
          {field: 'time', title: '时间', sort: true}
        ]],
        data: [
          <?php
            $data = file("record/info.txt"); $json = array();
            for ($i = 0; $i < count($data); $i++) {
              $now = json_decode($data[$i]);
              $flag = 1;
              if (isset($_GET["user"]) && $_GET["user"] != "") {
                if ($now -> {'user'} != $_GET["user"]) {
                  $flag = 0;
                }
              }
              if (isset($_GET["problem"]) && $_GET["problem"] != "") {
                if ($now -> {'problem'} != $_GET["problem"]) {
                  $flag = 0;
                }
              }
              if ($flag == 1) {
                array_push($json, $data[$i]);
              }
            }
            for ($i = 0; $i < count($json); $i++) {
              if ($i != count($json) - 1) {
                echo $json[$i] . ",";
              } else {
                echo $json[$i];
              }
            }
          ?>
        ],
        skin: 'nob', // 表格风格
        height: 'full',
        // even: true,
        page: true, // 是否显示分页
        limits: [5, 10, 15],
        limit: 5
      });
      table.on('row(record-list)', function(obj){
        var dt = obj.data; // 获取当前行数据
        // 显示 - 仅用于演示
        layer.open({
          type: 2,
          title: 'record',
          shadeClose: true,
          maxmin: true, //开启最大化最小化按钮
          area: ['80%', '80%'],
          content: '/record/' + dt.id + '.php'
        });
        // 标注当前点击行的选中状态
        obj.setRowChecked({
          type: 'radio' // radio 单选模式；checkbox 复选模式
        });
      });
    });
    </script>
  </body>
</html>