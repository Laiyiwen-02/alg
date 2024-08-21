<?php
$a = file("test.out");
$b = file("test.ans");
$status = "";
if (count($a) <= count($b)) {
  $sz = min(count($a), count($b));
  for ($i = 0; $i < $sz; $i++) {
    if (rtrim($a[$i]) != rtrim($b[$i])) {
      $status = "WA";
      break;
    }
  }
  if ($status != "WA") {
    if (count($a) < count($b)) {
      $status = "TLE";
    } else {
      $status = "AC";
    }
  }
} else {
  $status = "OLE";
}
echo $status;
?>