<?php
session_start();
session_unset($_SESSION['inputUsername']);


echo header("location: login.php");
?>