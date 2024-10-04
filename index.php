<?php
declare(strict_types = 1);
include 'includes/class-autoload.inc.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
<body>

    <form action="includes/calc.inc.php" method="post">
        <p>Calculator</p>
        <input type="number" name="num1" id="" placeholder="first number">
        <select name="oper" id="">
            <option value="add">addition</option>
            <option value="sub">subtraction</option>
            <option value="div">division</option>
            <option value="mul">mulitiplication</option>
        </select>
        <input type="number" name="num2" id="" placeholder="second number">
        <button type="submit" name="submit">Calculate</button>
    </form>
    
</body>
</html>