<?php
/**
* Copright © 2016 Henry Corbell and Tim Sayers. All Rights Reserved.
*/
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
if($_SESSION["signed_in"] == "true"){
shell_exec('sudo  utils -r > /dev/null &');
//shell_exec("sudo utils -r");
}else{
}
?>
<html>
<head>
  <title>Control Panel - SC1425</title>
</head>
<body onload="check()">
  <center>
  <div id="loadingOverlayAlt" class="whiteBg"><img src="imgs/Loading_BlueFast_16x.gif" alt="" />  Restarting Server - Please wait...</div>
  </div>
  <script>
  function check() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText == "ONLINE"){
          window.location.href = "admin.php";
        }
      }
    };
    xhttp.open("GET", "online.php", true);
    xhttp.send();
      setTimeout(check, 50);
  }
  </script>
  </center>
</body>
</html>

