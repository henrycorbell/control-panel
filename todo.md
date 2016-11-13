www-data ALL=NOPASSWD: nginx -s reload
<?php shell_exec('sudo nginx -s reload >/dev/null &'); ?>
or
www-data ALL=NOPASSWD: /usr/bin/utils
<?php shell_exec('sudo  utils >/dev/null &'); ?>
