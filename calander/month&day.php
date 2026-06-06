<?php
$month = array('select','jan','feb','mar','apr','may','jun','jul','aug','sept','oct','nov','dec');

if(isset($_GET['m'])){
    $m = $_GET['m'];
    
}
?>

<form action="" method="get">
    <input type="text" name="m" placeholder="Enter month number"><input type="submit"/><br><br>
    <Select name="month">
        <?php
        foreach($month as $key=>$val):
        $sel = '';
        if(isset($m)){
            if($m == $key)
                $sel = 'selected';
        }
        echo "<option $sel value='$key'>$val</option>";
        endforeach;
        ?>
    </Select>
</form>