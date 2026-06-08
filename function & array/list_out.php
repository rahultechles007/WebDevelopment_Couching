<!--2. Print all array in a list format in html <li></li> -->


<?php
$a = [4,5,6,7,'a','book'];
echo '<ul>';
foreach($a as $v)
    echo "<li> $v </li>";
echo '</ul>';
?>