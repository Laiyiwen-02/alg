<?php
session_start();
?>
<form action = "check.php" method = "post">
    <input type = "name" name = "user" value = "<?php echo $_POST['user'];?>" required hidden>
      <input type = "password" name = "pwd" value = "<?php echo $_POST['pwd'];?>" required hidden>
      <input type = "email" name = "mail" value = "<?php echo $_POST['mail'];?>" required hidden>
    <input type = "text" name = "code" placeholder = "your verify code" required><br/>
    <button type = "submit"> submit </button>
</form>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer(true); $cd = rand(100000, 999999);
try {
    $mail -> CharSet = 'UTF-8';
    $mail -> SMTPDebug = 0;
    $mail -> isSMTP();
    $mail -> Host = 'smtp.163.com';
    $mail -> SMTPAuth = true; 
    $mail -> Username = '13799294872@163.com';
    $mail -> Password = 'IWDTZFCVCQLBJSQG'; 
    $mail -> SMTPSecure = 'ssl'; 
    $mail -> Port = 994; 
    $mail -> setFrom('13799294872@163.com', 'CLOJ');
    $mail -> addAddress($_POST['mail'], 'User');
    $mail -> isHTML(true);
    $mail -> Subject = '[CLOJ] 验证您的邮箱';
    $mail -> Body = "<p> 您的邮箱验证码为：".$cd."，请尽快验证 </p>";
    $mail -> AltBody = $cd;
    $mail -> send();
} catch (Exception $e) {
    // echo '邮件发送失败，请确认您的邮箱地址是否正确';
    // $e -> getMessage();
}
$_SESSION['code'] = $cd;
?>