<?php
session_start();
session_destroy();
header("Location: /sql/login.php")
?>