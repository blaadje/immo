<?php
session_start();
session_destroy();
echo '<script>this.setTimeout(\'history.back()\',1000)</script>';
echo "Vous allez etre redirige.";
exit();
?>
