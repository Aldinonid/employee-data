<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 360000);
setcookie('key', '', time() - 360000);

header("Location: login.php");
exit;
