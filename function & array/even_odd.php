<!-- Creating an Array of Multiple values to find even and odd Numbers -->

<?php
function check($n=array()){
    $even = $odd = array();
    foreach ($n as $v){
        if ($v%2==0)
            array_push($even, $v); //  we also can use this $even[]=$v
        else
            array_push($odd,$v);
    }
    return array($even, $odd);
}
$v =[1,2,34,5,64,7,8,4,6,3];
$L =check($v);
echo"<pre>";
print_r($L);
// var_dump($L);
print_r($v)
?>