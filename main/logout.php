<?php
session_start();
unset($_SESSION["SessName"]);
header("Location: index.php");
?>