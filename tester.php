<link href = "//unpkg.com/element-ui@2.15.14/lib/theme-chalk/index.css" rel = "stylesheet">
<script src="//unpkg.com/vue@2/dist/vue.js"></script>
<script src="//unpkg.com/element-ui@2.15.14/lib/index.js"></script>
<div id="app" style = "margin:0;padding:0;">
<template>
  <el-menu
    mode="horizontal"
    @select="handleSelect"
    background-color="#0dbae6"
    text-color="#fff"
    active-text-color="red">
    <el-menu-item index="1">处理中心</el-menu-item>
    <el-submenu index="2">
      <template slot="title">我的工作台</template>
      <el-menu-item index="2-1">选项1</el-menu-item>
      <el-menu-item index="2-2">选项2</el-menu-item>
      <el-menu-item index="2-3">选项3</el-menu-item>
      <el-submenu index="2-4">
        <template slot="title">选项4</template>
        <el-menu-item index="2-4-1">选项1</el-menu-item>
        <el-menu-item index="2-4-2">选项2</el-menu-item>
        <el-menu-item index="2-4-3">选项3</el-menu-item>
      </el-submenu>
    </el-submenu>
    <el-menu-item index="3" disabled>消息中心</el-menu-item>
    <el-menu-item index="4"><a href="https://www.ele.me" target="_blank" style = "text-decoration: none;">订单管理</a></el-menu-item>
  </el-menu>
  <el-button :plain="true" @click="open2">成功</el-button>
  <el-button :plain="true" @click="open3">警告</el-button>
  <el-button :plain="true" @click="open1">消息</el-button>
  <el-button :plain="true" @click="open4">错误</el-button>
</template>
</div>
<script>
  var Main = {
      methods: {
        open1() {
          this.$message('这是一条消息提示');
        },
        open2() {
          this.$message({
            message: '恭喜你，这是一条成功消息',
            type: 'success'
          });
        },

        open3() {
          this.$message({
            message: '警告哦，这是一条警告消息',
            type: 'warning'
          });
        },

        open4() {
          this.$message.error('错了哦，这是一条错误消息');
        }, 

        handleSelect(key, keyPath) {
          console.log(key, keyPath);
        }
      }
  }
  var Ctor = Vue.extend(Main)
  new Ctor().$mount('#app')
</script>