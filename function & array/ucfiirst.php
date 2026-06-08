<!-- printting an array using ucfirst for a student  -->
<?php
$st= array('name' =>'Rahul Kumar','Roll' => 23,'Gender' => 'male', "college" => 'bjb' );

foreach($st as $k=>$v){
    $k = ucfirst($k); // ( key ) used  to upper case the first letter
    $v =ucfirst($v);// (value )
   echo "<p>$k : $v</p>"; //''
 }
?>