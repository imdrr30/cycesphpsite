<?php
session_start();
session_unset();
session_destroy();
setcookie("E", "", time()-90*24*60*60);
header('location: login.php');
?>
