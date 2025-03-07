<?php
require_once "pdo\pdo.php";
if ( isset($_POST['email']) && isset($_POST['password']) ) {
   $e = $_POST['email'];
   $p = $_POST['password'];
   $sql = "SELECT name FROM users
        WHERE email = '$e'
        AND password = '$p'";
   $stmt = $pdo->query($sql);
