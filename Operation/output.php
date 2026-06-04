<?php
if(isset($_GET['sub']))
{
    extract($_GET);
    echo "<label>Num1 :</label> $num1 <br>";
    echo "<label>Num2 :</label> $num2 <br>";
    switch($solve)
    {
        case '+':$sum = $num1 + $num2;
        break;
        case '-':$sum = $num1 - $num2;
        break;
        case '*': $sum = $num1 * $num2;
        break;
        case '/':$sum = $num1 / $num2;
        break;
        default:$sum = "Invalid Operator";
    }
    echo "<br>Result : $sum";
}
?>