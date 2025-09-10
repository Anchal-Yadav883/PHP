<html>
<head>
    <title>Check Result</title>
</head>
<body>
    <h2>Enter Your Marks</h2>

    <!-- HTML Form using GET method -->
    <form method="get" action="">
        Marks: <input type="number" name="marks" required>
        <input type="submit" value="Check Result">
    </form>

    <?php
    // PHP code to check PASS or FAIL
    if (isset($_GET['marks'])) {
        $marks = $_GET['marks'];

        if ($marks >= 40) {
            echo "<h3>Result: PASS</h3>";
        } else {
            echo "<h3>Result: FAIL</h3>";
        }
    }
    ?>
</body>
</html>
