<?php
session_start();
session_destroy();
header("Location: formlogin.php");
exit();
?>
