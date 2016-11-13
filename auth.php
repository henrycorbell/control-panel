<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
session_start();
//include('login_lock_checker.php');
//include('ip.php');
//include("security.php");
?>
<?php 
//echo 'Login: ' . $_POST['uname'] . '  Password: ' . $_POST['psw'];
if($_POST['uname'] == 'admin' && md5($_POST['psw']) == '4364025a8b245b55b0c26aa6c812b558'){
  $_SESSION["signed_in"] = 'true';

  echo 'Successfuly logged in!';
  //file_put_contents('ip_log.log', getUserIP() . ' ', FILE_APPEND);
#  $redirect = 'https://' .  'chromespinners.ddns.net/control-panel/admin.php';
 # header('Location: ' . $redirect);
  #exit();
 $redirect = 'https://chromespinners.ddns.net/control-panel/admin.php';
    header('HTTP/1.1 302 Moved Temporarily');
    header('Location: ' . $redirect);
    exit();

}else{
  $_SESSION["signed_in"] = 'false';
  echo 'Not logged in!';
  //file_put_contents('ip_log.log', getUserIP() . ' ', FILE_APPEND);
  $redirect = 'https://' .  'chromespinners.ddns.net/control-panel/';
  header('Location: ' . $redirect);
  exit();
}
//print_r($_SESSION);
?>
