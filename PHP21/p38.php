<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>

<!-- HTML Form -->
<form method="get" action="">
    Enter First Number: <input type="number" name="num1" required><br><br>
    Enter Second Number:<input type="number" name="num2" required><br><br>
    <input type="submit" value="Calculate Sum">
</form>

<?php
// PHP to calculate sum
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;

    echo "<h3>Sum of $num1 and $num2 is: $sum</h3>";
}
?>
</body>
</html>