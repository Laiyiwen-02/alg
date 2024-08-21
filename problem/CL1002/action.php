<?php
include "../../menu.php";
?>
<?php
  if (isset($_POST['cpp'])) {
    $flag = 0;
    file_put_contents("main.cpp",$_POST["cpp"]);
    system("sh compile.sh");
    $err = file("main.err");
    echo "
    <div class = 'layui-panel' style = 'margin: 16px; padding: 10px;'>
    <table class = 'layui-table' lay-skin = 'nob'>
      <thead>
        <tr>
          <th> 测试点编号 </th>
          <th> 评测结果 </th>
        </tr>
      </thead>
      <tbody>";
    for ($i = 1; $i <= 10; $i++) {
      exec("timeout 1s main < data/main".$i.".in > data/main".$i.".ans");
      echo "<tr><td>测试点 #".($i)."</td>";
      if (file_exists("main")) {
        $now = exec("diff -b -B data/main".$i.".ans data/main".$i.".out");
        if ($now)  {
          echo "<td><p style = 'color:#ff5722;'>WA</p></td></tr>";
        } else {
          echo "<td><p style = 'color:#16baaa;'>AC</p></td></tr>";
        }
      } else {
        echo "<td><p style = 'color:orange;'>CE</p></td></tr>";
        $flag = 1;
      }
    }
    echo "</tbody></table></div>";
    if ($flag) {
      echo "<div class='layui-panel' style='margin:16px;padding:16px;'><pre>";
      foreach ($err as $value) {
        echo $value."<br>";
      }
      echo "</pre></div>";
    }
  } else {
    echo "
    <script>
      alert('请不要尝试使用非法手段进行评测');
      window.location.href='../problem/';
    </script>";
  }
  include "../../footer.php";
?>