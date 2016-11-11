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
<script type="text/javascript">
  var userip;
</script>
<script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
<script type="text/javascript">
  document.write("Your IP: ", userip);
</script></center>
</div>
</html>
