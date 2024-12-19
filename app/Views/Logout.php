<?php
session_start();
session_destroy();
header("Location: /Calendar/index.php");
exit();
?>
