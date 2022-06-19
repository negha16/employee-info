<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["USER_NAME"]);
session_destroy();  
header("Location:index.php");
?>