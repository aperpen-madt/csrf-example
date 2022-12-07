<?php
session_start();

require "ensure_login.php";
require "database.php";
?>

<html>
    <h1>Hello <?= $_SESSION["username"] ?></h1>
    <h2>Balance: <?= get_funds($_SESSION["username"]) ?></h2>
    <a href="./tranfer_funds.php">Order a transfer</a>
</html>