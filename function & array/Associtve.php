<!-- To print  associtive array in a list  <p></p> -->
<?php

$a = array('name' =>'Rahul Kumar','bool' =>true,'Roll' => 23,'Gender' => 'male', "college" => 'bjb' );

echo "<ul>";
    foreach($a as $k=>$v)
        echo "<p>$k : $v </p>";
?>