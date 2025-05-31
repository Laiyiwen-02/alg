<?php
session_start();date_default_timezone_set('Asia/Shanghai');
?>
<p>
  onjudgeing...
</p>
<?php
  if(isset($_SESSION['user'])) {
    if (isset($_POST["cpp"])) {
      $points = 0;
      $flag = 0;
      $status = array();
      file_put_contents("main.cpp",$_POST["cpp"]);
      system("sh compile.sh");
      $err = file("main.err");
      for($i = 1; $i <= 20; $i++) {
        system("timeout 1.1s ./main < data/main".$i.".in > data/main".$i.".ans");
        if (file_exists("main")) {
          $a = file("data/main".$i.".ans");
          $b = file("data/main".$i.".out");
          $now = "";
          if (count($a) <= count($b)) {
            $sz = min(count($a), count($b));
            for ($j = 0; $j < $sz; $j++) {
              if (rtrim($a[$j]) != rtrim($b[$j])) {
                $now = "WA";
                break;
              }
            }
            if ($now != "WA") {
              if (count($a) < count($b)) {
                $now = "TLE";
              } else {
                $now = "AC"; $points += 5;
              }
            }
          } else {
            $now = "OLE";
          }
          array_push($status, $now);
        } else {
          array_push($status, "CE");
        }
      }
      $cnt = file("../../record-cnt.txt");
      $nm = "../../record/".($cnt[0] + 1).".php";
      file_put_contents($nm, "<?php session_start(); ?>
      <?php include '../menu.php'; ?>
      <style>fieldset a {text-decoration:underline;color:#16aaaa;}</style>
      <fieldset class = 'layui-elem-field' style = 'padding:2%;margin:2%;'>
        <legend> 基本信息 </legend>
        <blockquote class = 'layui-elem-quote'>
          <p> 评测人：<a href = '../user/1'>Laiyiwen_01</a> </p>
          <p> 评测题目：<a href = '../problem/CL1004/'>CL1004</a> </p>
          <p> 评测分数：".$points." </p>
        </blockquote>
      </fieldset>
      <div class = 'layui-panel' style = 'margin: 16px; padding: 10px;'>
      <table class = 'layui-table' lay-skin = 'nob'>
        <thead>
          <tr>
            <th> 测试点编号 </th>
            <th> 评测结果 </th>
            <th> 评测分数 </th>
          </tr>
        </thead>
        <tbody>", FILE_APPEND);
      for ($i = 1; $i <= 20; $i++) {
        file_put_contents($nm, "<tr><td>测试点 #".($i)."</td>", FILE_APPEND);
        if ($status[$i - 1] != "CE") {
          if($status[$i - 1] == "AC") {
            file_put_contents($nm, "<td><p style = 'color:#16aaaa;'>AC</p></td><td><p style = 'color:#16aaaa;'>".(100 / 20)."</p></td>", FILE_APPEND);
          } else {
            if($status[$i - 1] == "WA") {
              file_put_contents($nm, "<td><p style = 'color:#ff5722;'>WA</p></td><td><p style = 'color:#ff5722;'>0</p></td>", FILE_APPEND);
            } else {
              if($status[$i - 1] == "TLE") {
                file_put_contents($nm, "<td><p style = 'color:black;'>TLE</p></td><td><p style = 'color:black;'>0</p></td>", FILE_APPEND);
              } else {
                file_put_contents($nm, "<td><p style = 'color:black;'>OLE</p></td><td><p style = 'color:black;'>0</p></td>", FILE_APPEND);
              }
            }
          }
        } else {
          file_put_contents($nm, "<td><p style = 'color:orange;'>CE</p></td><td><p style = 'color:orange;'>0</p></td>", FILE_APPEND);
          $flag = 1;
        }
        echo "</tr>";
      }
      file_put_contents($nm, "</tbody></table></div>", FILE_APPEND);
      if ($flag) {
        file_put_contents($nm, "<div class='layui-panel' style='margin:16px;padding:16px;'><pre>", FILE_APPEND);
        foreach ($err as $value) {
          file_put_contents($nm, $value."<br>", FILE_APPEND);
        }
        file_put_contents($nm, "</pre></div>", FILE_APPEND);
      }
      file_put_contents($nm, "<script src = 'https://s4.zstatic.net/ajax/libs/layui/2.9.14/layui.js'></script>", FILE_APPEND);
      file_put_contents("../../record-cnt.txt", $cnt[0] + 1);
      // echo "<script>window.location.href = '../../record/".($cnt[0] + 1).".php';</script>";
      $record_info = array('id' => ($cnt[0] + 1), 'problem' => 'CL1004','user' => $_SESSION['user'], 'point' => $points, 'time' => date("Y-m-d H:i:s"));
      file_put_contents("../../record/info.txt", (json_encode($record_info) . "\n"), FILE_APPEND);
      echo json_encode($record_info);
    } else {
      echo "
      <script>
        alert('请不要尝试使用非法手段进行评测');
        window.location.href='../problem/';
      </script>";
    }
  } else {
    echo "
    <script>
      alert('请先登录');window.location.href='/login.php';
    </script>";
  }
  include "../../footer.php";
?>