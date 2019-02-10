<?php 
    // include 'includes/newclass.inc.php';
    // include 'includes/users.inc.php';
    // $object = new Users($first, $last, $hairColor, $eyeColor);
    // $object = new NewClass;
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
<!-- <?php 
    

    // echo $object->error."<br>";
    // echo $object->__toString();
    // echo NewClass::$static;
    // $object->first = "Matt";
    // $object->last = "Durham";
    // $object->hairColor = "brown";
    // $object->eyeColor = "brown";
    // echo $object->printUser();

    // $object->setUser("Holly", "Robertson", "brown", "green");
    // echo $object->printUser();
    // echo $object->first." ".$object->last." has ".$object->hairColor." hair and ".
    // $object->eyeColor." eyes.";
?>  -->
</body>
</html>