<html>
<head>
    <title>Welcome Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post" action="">
        Name: <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']); 
        echo "<h3>Welcome, $name!</h3>";
    }
    ?>

</body>
</html>
