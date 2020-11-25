<?php
session_start();
unset($_SESSION['Uid']);
header('location:login.php');

?>