<?php session_start(); ?>
<title> CLOJ - 由一个 Oier 创建的OJ </title>
<link rel="stylesheet" href="https://s4.zstatic.net/ajax/libs/layui/2.9.14/css/layui.css" integrity="sha384-VTXLCpw/uZnb02aJp2OBOKiBTcjUNBR9XrBgwNPiGmS3tnREkD34n6avX1UW9L4H" crossorigin="anonymous">
<link rel = "stylesheet" href = "https://use.sevencdn.com/npm/github-markdown-css@5.6.1/github-markdown-light.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/gh/laiyiwen-02/cdn@0.0.1/prism/prism.css">
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