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
<center><h1>PowerEdge SC1425 - Control Panel</h1>
<br>
<div style="text-align: center;">
  <h5>PowerEdge SC1425 - System Stats</h5>
    <div style="display: inline-block; text-align: left">
        <b>CPU:</b> <?php $load = sys_getloadavg(); echo $load[0]  ?> <b>%</b><br />
        <b>MEM USED:</b> <?php  $free = shell_exec('free'); $free = (string)trim($free); $free_arr = explode("\n", $free); $mem = explode(" ", $free_arr[1]); $mem = array_filter($mem); $mem = array_merge($mem); $memory_usage = $mem[2]/$mem[1]*100; echo $memory_usage?> <b>MB</b><br />
        <b>UPTIME:</b><?php $uptime = shell_exec("cut -d. -f1 /proc/uptime"); $days = floor($uptime/60/60/24); $hours = $uptime/60/60%24; $mins = $uptime/60%60; $secs = $uptime%60; echo "$days days $hours hours $mins minutes and $secs seconds";?><br />
    </div>
</div>

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
