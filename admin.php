<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
session_start();
if($_SESSION["signed_in"] == "true"){
?>

<?php
}else{
}
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css">
<title>Control Panel</title>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<center><h1>Welcome to Control Panel</h1>
<br>
<div id="footer">
<p><strong>Last Modified: <span id="lm"</span></strong></p>

<script type="text/javascript">
function lastMod() {
    var x = new Date(document.lastModified);
    document.getElementById("lm").innerHTML = x;
}
window.onload=lastMod();
</script>
            <p><?php
            function getUserIP(){
                if (!empty($_SERVER['HTTP_CLIENT_IP'])){
                  $ip=$_SERVER['HTTP_CLIENT_IP'];
                }
                elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                  $ip=$_SERVER['REMOTE_ADDR'];
                }
                return $ip;
            }
            echo 'Users Public IP: ' . getUserIP();
            ?></p>
</center>
</div>
</html>
