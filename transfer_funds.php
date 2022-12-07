<?php
session_start();

require "ensure_login.php";
require "database.php";

?>
<html>

<body>
    <h1>Transfer funds</h1>
    <?php
    if (isset($_POST["amount"]) && $_POST["to"] && $_POST["amount"] > 0) :
        $amount = (float) $_POST["amount"];
        $funds = get_funds($_SESSION["username"]);
        if ($funds < $amount) :
    ?>
            <div>You do not have enough funds to transfer.
                <a href="./tranfer_funds.php">Try again</a>
            </div>
        <?php else :
            $receiver_funds = get_funds($_POST["to"]);
            set_funds($_SESSION["username"], $funds - $amount);
            set_funds($_POST["to"], $receiver_funds + $amount);
        ?>
            <div>Successfully transferred <?= $amount ?> to <?= $_POST["to"] ?>
                <a href="./index.php">See balance</a>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <form method="POST" action="">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" />
            <label for="to">To</label>
            <input type="text" name="to" id="to" />
            <input type="submit" />
        </form>
    <?php endif; ?>
</body>

</html>