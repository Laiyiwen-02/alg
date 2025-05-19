<?php session_start(); ?>
<html>
  <head>
    <?php include "../../menu.php"; ?>
  </head>
  <body>
    <div class = "layui-panel" style = "padding: 2%; margin: 2%;">
      <p> working, wait ...</p>
      <?php
        if (isset($_POST["title"]) && isset($_POST["t"]) && isset($_POST["h"])) {
          $cnt = file("cnt.txt");
          $nm = $cnt[0] + 1;
          file_put_contents($nm . ".md", $_POST["t"]);
          file_put_contents("post.txt", $_POST["title"]."$".$nm."\n", FILE_APPEND);
          file_put_contents($nm . ".php", '<?php session_start();?><!DOCTYPE html><html><head><title>'.$_POST["title"].'</title><?php include "../../menu.php"; ?><link rel="stylesheet" href="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.css"></head><body><div class = "layui-panel" style = "padding:2%; margin:2%; color:black;"><h1>'.$_POST["title"].'</h1></div><div class = "layui-panel markdown-body" style = "padding:2%; margin:2%;">'.$_POST["h"].'</div><script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/katex.min.js"></script><script src="https://use.sevencdn.com/npm/katex@0.16.11/dist/contrib/auto-render.min.js" onload = '."'renderMathInElement(document.body, {delimiters: [{left: ".'"$$"'.", right: ".'"$$"'.", display: true}, {left: ".'"$"'.", right: ".'"$"'.", display: false} ], macros: {".'"\\\\geq"'.": ".'"\\\\geqslant"'.", ".'"\\\\leq"'.": ".'"\\\\leqslant"'." } }); '></script>".'<script src="https://giscus.app/client.js" data-repo="Laiyiwen-02/giscus" data-repo-id="R_kgDOMhxnTw" data-category="Announcements" data-category-id="DIC_kwDOMhxnT84ChhxH" data-mapping="url" data-strict="0" data-reactions-enabled="1" data-emit-metadata="0" data-input-position="bottom" data-theme="preferred_color_scheme" data-lang="zh-CN" crossorigin="anonymous" async></script>'."</body></html>");
          file_put_contents("cnt.txt", $nm);
          echo "<script>window.location.href = '"."/discuss/post/".$nm.".php';</script>";
        }
      ?>
    </div>
  </body>
</html>