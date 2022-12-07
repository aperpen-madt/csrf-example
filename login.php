<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    die();
} else if ($_POST["username"]) {
    $_SESSION["username"] = $_POST["username"];

    header("Location: index.php");
    die();
}
?>

<html>

<body>
    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
        <input type="submit" />
    </form>
</body>

</html>