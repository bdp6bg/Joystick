<?php
session_start();
$_SESSION["member"] = "no";
session_unset();
session_destroy();
header("Location: /#");
exit();
?>