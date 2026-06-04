<?php
  if(isset($_GET['sub']))
{
    extract($_GET);

      echo "<label>ProductName :</label>  $pname <br>";
      echo "<label>Price :</label>  $price <br>";
      echo "<label>ProductName :</label> $Quant <br>";

      $total = $price * $Quant;
    if ($total >5000){
        $dis =$total * 30 /100;
    }else{
        $dis = $total * 50 /100;
    }
    $netamount = $total -$dis ;
}
echo"Total Price : $total <br>";
echo"Discount : $dis <br>";
echo"NetAmount : $netamount <br>";
?>