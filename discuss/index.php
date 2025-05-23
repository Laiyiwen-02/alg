<?php session_start(); ?>
<html>
  <head>
    <?php include "../menu.php"; ?>
  </head>
  <body>
    <div class = "layui-panel layui-anim layui-anim-down markdown-body" style = "padding:2%; margin:2%;"> 
      <h1> 讨论区 </h1>
    </div>
    <?php
      $posts = file("post/post.txt");
      $posts = array_reverse($posts);
      foreach ($posts as $post) {
        $post = explode("$", $post);
        echo "<fieldset class='layui-elem-field' style = 'padding:2%; margin:2%;'>";
        echo "<legend><a href = 'post/".$post[1].".php'>".$post[0]."</a></legend>";
        echo "<div class = 'layui-field-box'><p>";
        $st = file_get_contents("post/".str_replace("\n", "", $post[1]).".md");
        echo substr($st, 0, 50);
        echo "</p></div>";
        echo "</fieldset>";
      }
    ?>
    <?php include "../footer.php";?>
  </body>
</html>