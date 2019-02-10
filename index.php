<?php 

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="calc.php" method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="cal">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <button type="submit">Calculate</button>
</body>
</html>