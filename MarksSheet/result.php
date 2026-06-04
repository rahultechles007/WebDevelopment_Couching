<?php 
if(isset($_GET['sub'])){
    extract($_GET);
    echo "<label >Name :</label> $pname<br>";
    echo "<label >Name :</label> $proll <br>";
    echo "<label >Name :</label> $english <br>";
    echo "<label >Name :</label> $mil <br>";
    echo "<label >Name :</label> $math <br>";
    echo "<label >Name :</label> $sci <br>";
    $total = $english + $mil + $math + $sci;
    $percent= ($total / 400) * 100;
    
    if($percent >= 60)
    {
        $div = "First Division";
    }
    elseif($percent >= 45)
    {
        $div = "Second Division";
    }
    elseif($percent >= 33)
    {
        $div = "Third Division";
    }
    else
    {
        $div = "Fail";
    }  
  
}
echo "Total : $total <br>";
echo"Percentage : $percent <br>";
echo"Division :$div"
?>