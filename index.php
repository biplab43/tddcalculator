<?php
$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    require_once "Calculator.php";
    $obj = new Calculator();

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if (isset($_POST['addbutton'])) {
        $sum = $obj->add($number1,$number2);
        if(is_numeric($sum))
            $result= $number1." + ".$number2. " = ".$sum;
        else
            $result= $sum;
    }

    if (isset($_POST['substractbutton'])) {
        $substract = $obj->substract($number1,$number2);
        if(is_numeric($substract))
            $result= $number1." - ".$number2. " = ".$substract;
        else
            $result= $substract;
    }

}
?>

<html>
    <head>
        <title>Simple Calculator (Developed by TDD Approach)</title>
    </head>
    <body>
        <p id="result"><?php echo $result; ?></p>
        <form action="index.php" method="post">
            <label for="number1">First number:</label><br>
            <input type="text" id="number1" name="number1"><br>
            <label for="number2">Second number:</label><br>
            <input type="text" id="number2" name="number2"><br><br>
            <input type="submit" name="addbutton" value="add">
            <input type="submit" name="substractbutton" value="substract">
        </form>
    </body>
</html>